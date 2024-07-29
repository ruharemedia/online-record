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
            'valid_from' => now(),
        ]);
        RecordEssence::create([
            'name' => 'Alex Ploshkin',
            'valid_from' => now(),
            'valid_to' => now()->addDays(1)
        ]);
    }
}
