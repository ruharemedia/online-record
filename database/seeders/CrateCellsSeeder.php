<?php

namespace Database\Seeders;

use App\Models\RecordCells;
use Illuminate\Database\Seeder;

class CrateCellsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $interval = 30;
        $cells = [
            [
                "started_at" => '08:00',
                "end_at" => '08:30'
            ],
            [
                "started_at" => '08:30',
                "end_at" => '09:00'
            ],
            [
                "started_at" => '09:00',
                "end_at" => '09:30'
            ],
            [
                "started_at" => '09:30',
                "end_at" => '10:00'
            ],
            [
                "started_at" => '10:00',
                "end_at" => '10:30'
            ],
            [
                "started_at" => '10:30',
                "end_at" => '11:00'
            ],
        ];
        foreach ($cells as $cell){
            RecordCells::create($cell);
        }
    }
}
