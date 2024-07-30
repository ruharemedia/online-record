<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreateRelationRecordEssenceRecordCellsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('record_cells_record_essence')->insert([
            'record_essence_id' => 1,
            'record_cells_id' => 1
        ]);
    }
}
