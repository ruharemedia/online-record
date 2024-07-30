<?php

namespace Database\Seeders;

use App\Models\RecordEssence;
use Illuminate\Database\Seeder;

class CreateRecordEssenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RecordEssence::create([
            'name' => 'Alex Pushkin',
            'valid_from' => now()->addDays(-15),
            'valid_to' => now()->addDays(14),
            'record_date_range' => 14
        ]);

        RecordEssence::create([
            'name' => 'Alex Pushkin',
            'valid_from' => now(),
            'valid_to' => now()->addDays(14),
            'record_date_range' => 14
        ]);
        RecordEssence::create([
            'name' => 'Alex Ploshkin',
            'valid_from' => now(),
            'valid_to' => now()->addDays(1),
            'record_date_range' => 7
        ]);
        RecordEssence::create([
            'name' => 'Alex Pushkin',
            'valid_from' => now()->addDays(15),
            'record_date_range' => 14
        ]);
    }
}
