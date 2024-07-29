<?php

namespace Database\Seeders;

use App\Models\RecordCells;
use App\Services\CellIntervalService;
use Illuminate\Database\Seeder;

class CrateCellsSeeder extends Seeder
{
    /**
     * Seeder create default cells
     */
    public function run(): void
    {
        $cells = CellIntervalService::createCells(30, '09:00', "19:00");

        foreach ($cells as $item){
            RecordCells::create(['started_at' => $item[0], 'end_at' => $item[1]]);
        }
    }
}
