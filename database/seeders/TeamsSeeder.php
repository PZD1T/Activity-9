<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Teams;
use App\Models\Cities;
class TeamsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = Cities::all(); // Obtiene todas las ciudades
        
        Teams::factory(32)->create()->each(function ($team) use ($cities) {
            $city = $cities->random(); 
            $team->city_id = $city->id; 
            $team->save(); 
        });
    }
}
