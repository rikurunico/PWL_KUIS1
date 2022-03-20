<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
    public function index()
    {   
        $team = Team::paginate(2);
        return view('contents.team', [
            'title' => 'Team',
            'team' => $team
        ]);
    }
}
