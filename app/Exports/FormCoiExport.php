<?php

namespace App\Exports;

use App\Models\FormCoi;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class FormCoiExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return FormCoi::all()->map(function ($item) {
            return [
                'Name' => $item->name,
                'Institution' => $item->institution,
                'Email' => $item->email,
                'Presentation Titles' => json_decode($item->presentation_titles, true) ? implode(', ', json_decode($item->presentation_titles, true)) : '', // Konversi array JSON ke string
                'No Conflict' => $item->no_conflict ? 'Yes' : 'No',
                'Has Conflict' => $item->has_conflict ? 'Yes' : 'No',
                'Conflict Description' => $item->conflict_description,
                'Consultant' => $item->have_consultant,
                'Research Grant' => $item->have_research_grant,
                'Speaker Honorarium' => $item->have_speaker_honorarium,
                'Ownership' => $item->have_ownership,
                'Created At' => $item->created_at->format('Y-m-d H:i:s'), // Tambahkan timestamp jika diperlukan
            ];
        });
    }

    public function headings(): array
    {
        return [
            'Name',
            'Institution',
            'Email',
            'Presentation Titles',
            'No Conflict',
            'Has Conflict',
            'Conflict Description',
            'Consultant',
            'Research Grant',
            'Speaker Honorarium',
            'Ownership',
            'Created At',
        ];
    }
}
