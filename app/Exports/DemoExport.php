<?php

namespace App\Exports;

use App\Models\Demo;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DemoExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Demo::all();
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            'ID',
            'FirstName',
            'LastName',
            'ExecutionTime',
            'Created_at',
            'Updated_at'
        ];
    }
}
