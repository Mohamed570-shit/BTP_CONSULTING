<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\OffreEmploi;
use App\Models\User;

class JobControllerTest extends TestCase
{
    use RefreshDatabase;

    protected $user;

    protected function setUp(): void
    {
        parent::setUp();
        $this->user = User::factory()->create();
    }
    public function test_index_displays_offres()
    {
        $offres = OffreEmploi::factory()->count(3)->create();

        $response = $this->actingAs($this->user)->get(route('admin.jobs.index'));

        $response->assertStatus(200);
        $response->assertViewIs('admin.jobs.index');
        $response->assertViewHas('offres', function ($viewOffres) use ($offres) {
            return $viewOffres->count() === 3;
        });
    }

    public function test_create_displays_form()
    {
        $response = $this->actingAs($this->user)->get(route('admin.jobs.create'));

        $response->assertStatus(200);
        $response->assertViewIs('admin.jobs.create');
    }

    public function test_store_creates_offre_successfully()
    {
        $data = [
            'titre' => 'Développeur Laravel',
            'description' => 'Poste pour un dev expérimenté.',
            'date_expiration' => now()->addDays(10)->toDateString(),
        ];

        $response = $this->actingAs($this->user)->post(route('admin.jobs.store'), $data);

        $response->assertRedirect(route('admin.jobs.index'));
        $response->assertSessionHas('success', 'Offre d\'emploi créée avec succès !');
        $this->assertDatabaseHas('offre_emplois', ['titre' => 'Développeur Laravel']);
    }

    public function test_store_fails_with_invalid_data()
    {
        $data = [
            'titre' => '', // Champ requis
            'description' => 'Test',
        ];

        $response = $this->actingAs($this->user)->post(route('admin.jobs.store'), $data);

        $response->assertSessionHasErrors('titre');
    }

    public function test_edit_displays_form()
    {
        $offre = OffreEmploi::factory()->create();

        $response = $this->actingAs($this->user)->get(route('admin.jobs.edit', $offre->id));

        $response->assertStatus(200);
        $response->assertViewIs('admin.jobs.edit');
        $response->assertViewHas('offre', $offre);
    }

    public function test_update_modifies_offre_successfully()
    {
        $offre = OffreEmploi::factory()->create();
        $data = [
            'titre' => 'Nouveau Titre',
            'description' => 'Nouvelle description',
            'date_expiration' => now()->addDays(5)->toDateString(),
        ];

        $response = $this->actingAs($this->user)->put(route('admin.jobs.update', $offre->id), $data);

        $response->assertRedirect(route('admin.jobs.index'));
        $response->assertSessionHas('success', 'Offre d\'emploi mise à jour avec succès !');
        $this->assertDatabaseHas('offre_emplois', ['id' => $offre->id, 'titre' => 'Nouveau Titre']);
    }

    public function test_destroy_deletes_offre()
    {
        $offre = OffreEmploi::factory()->create();

        $response = $this->actingAs($this->user)->delete(route('admin.jobs.destroy', $offre->id));

        $response->assertRedirect(route('admin.jobs.index'));
        $response->assertSessionHas('success', 'Offre d\'emploi supprimée avec succès !');
        $this->assertDatabaseMissing('offre_emplois', ['id' => $offre->id]);
    }

    public function test_unauthenticated_user_cannot_access_offres()
    {
        $response = $this->get(route('admin.jobs.index'));

        $response->assertRedirect('/login');
    }
}
