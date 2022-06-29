<?php

namespace Database\Seeders;

use App\Models\StoredProcedure;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RunStoredProcedureSeeder extends Seeder
{ 
    public function run()
    {
        StoredProcedure::factory()->count(1000)->create();
    }
}
