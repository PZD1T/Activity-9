<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teams;
use App\Models\Cities;
use App\Models\Divisions;

class TeamsController extends Controller
{
    public function index()
    {

        $teams = Teams::all();
      
        $availableDivisions = Divisions::all();
    
        foreach ($teams as $team) {

            $randomDivision = $availableDivisions->random();
    
            $team->conference_id = $randomDivision->id;
            $team->division_id = $randomDivision->id;
    
            $team->save();
        }
    
        $teams = Teams::select('teams.id', 'teams.name', 'cities.name as city_name', 'divisions_conference.Conference as conference_title', 'divisions_division.Division as division_name')
        ->join('cities', 'teams.city_id', '=', 'cities.id')
        ->join('divisions as divisions_division', 'teams.division_id', '=', 'divisions_division.id')
        ->join('divisions as divisions_conference', 'teams.conference_id', '=', 'divisions_conference.id')
        ->get();
    
    
        return view('teams.index', compact('teams'));
    }
}
