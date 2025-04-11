<?php
namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserControllerTest extends TestCase
{
    use RefreshDatabase;

    protected $user;

    protected function setUp(): void
    {
        parent::setUp();

        // Create an authenticated user
        $this->user = User::factory()->create();
    }

    // Test that authenticated users can see the users list
    public function test_index_displays_users()
    {
        $response = $this->actingAs($this->user)->get(route('admin.users.index'));

        $response->assertStatus(200);
        $response->assertViewIs('admin.users');
        $response->assertViewHas('users');
    }

    // Test that the create form is accessible
    public function test_create_displays_form()
    {
        $response = $this->actingAs($this->user)->get(route('admin.users.create'));

        $response->assertStatus(200);
        $response->assertViewIs('admin.users.create');
    }

    // Test storing a new user// Test de la création d'un utilisateur
    public function test_store_creates_user()
    {
        $data = [
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'password' => 'password123',
            'password_confirmation' => 'password123',
            'role' => 'user',
        ];

        $response = $this->actingAs($this->user)->post(route('admin.users.store'), $data);

        $response->assertRedirect(route('admin.users.index'));
        $response->assertSessionHas('success', 'Utilisateur créé avec succès !');
        $this->assertDatabaseHas('users', [
            'email' => 'john.doe@example.com',
            'role' => 'user',
        ]);
    }
    // Test updating an existing user
    public function test_update_modifies_user()
    {
        $user = User::factory()->create();

        $data = [
            'name' => 'Updated Name',
            'email' => 'updated.email@example.com',
            'password' => 'newpassword123',
            'password_confirmation' => 'newpassword123',
            'role' => 'admin',
        ];

        $response = $this->actingAs($this->user)->put(route('admin.users.update', $user->id), $data);

        $response->assertRedirect(route('admin.users.index'));
        $response->assertSessionHas('success', 'Utilisateur mis à jour avec succès !');
        $this->assertDatabaseHas('users', ['email' => 'updated.email@example.com']);
    }

    // Test deleting a user
    public function test_destroy_deletes_user()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($this->user)->delete(route('admin.users.destroy', $user->id));

        $response->assertRedirect(route('admin.users.index'));
        $response->assertSessionHas('success', 'Utilisateur supprimé avec succès !');
        $this->assertDatabaseMissing('users', ['id' => $user->id]);
    }

    // Test unauthenticated users cannot access user routes
    public function test_unauthenticated_user_cannot_access_users()
    {
        $response = $this->get(route('admin.users.index'));

        $response->assertRedirect('/login');
    }
}
