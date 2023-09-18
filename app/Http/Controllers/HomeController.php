<?php

namespace App\Http\Controllers;

use App\Models\Activitie;
use App\Models\Team;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $teams = Team::all();
        $activities = Activitie::all();
        return view('welcome', compact('teams', 'activities'));
    }
}
