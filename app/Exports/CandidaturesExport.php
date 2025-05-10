<?php
namespace App\Exports;

use App\Models\Candidature;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CandidaturesExport implements FromCollection, WithHeadings
{
    protected $ids;

    public function __construct($ids)
    {
        $this->ids = $ids;
    }

    public function collection()
    {
        return Candidature::whereIn('id', $this->ids)
            ->get(['id', 'nom', 'email', 'telephone', 'post', 'domaine', 'type', 'cv', 'diplome', 'created_at']);
    }

    public function headings(): array
    {
        return ['ID', 'Nom', 'Email', 'Téléphone', 'Poste', 'Domaine', 'Type', 'CV', 'Diplome', 'Date de création'];
    }
}