<?php

namespace App\Exports;

use App\Models\Candidature;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Illuminate\Support\Collection;

class CandidaturesExport implements FromCollection, WithHeadings, WithStyles
{
    public function collection()
    {
        // On récupère les données avec remplacement des postes vides
        $candidatures = Candidature::select('nom', 'email', 'telephone', 'post', 'created_at')->get();

        // Remplacer poste null par "Non spécifié"
        return $candidatures->map(function ($candidature) {
            return [
                'nom' => $candidature->nom,
                'email' => $candidature->email,
                'telephone' => $candidature->telephone,
                'post' => $candidature->poste ?? 'Non spécifié',
                'created_at' => $candidature->created_at->format('d-m-Y'), // joli format date
            ];
        });
    }

    public function headings(): array
    {
        return [
            'Nom',
            'Email',
            'Téléphone',
            'Poste',
            'Date de Candidature',
        ];
    }

    public function styles(Worksheet $sheet)
    {
        // Style du header
        $sheet->getStyle('A1:E1')->applyFromArray([
            'font' => [
                'bold' => true,
                'size' => 12,
                'color' => ['rgb' => 'FFFFFF'],
            ],
            'fill' => [
                'fillType' => 'solid',
                'startColor' => ['rgb' => '4CAF50'],
            ],
            'alignment' => [
                'horizontal' => 'center',
                'vertical' => 'center',
            ],
        ]);

        // Auto-size des colonnes
        foreach (range('A', 'E') as $col) {
            $sheet->getColumnDimension($col)->setAutoSize(true);
        }

        // Bordures pour tout le tableau
        $highestRow = $sheet->getHighestRow();
        $sheet->getStyle('A1:E' . $highestRow)->applyFromArray([
            'borders' => [
                'allBorders' => [
                    'borderStyle' => 'thin',
                    'color' => ['rgb' => '000000'],
                ],
            ],
        ]);

        return [];
    }
}
