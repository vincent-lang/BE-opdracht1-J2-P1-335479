<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Instructeur;
use App\Models\Voertuig;

class InstructeurController extends Controller
{
    public function index()
    {
        $instructeurs = Instructeur::orderBy('AantalSterren', 'desc')->get();
        return view('instructeur.index', ['instructeurs' => $instructeurs]);
    }

    public function list(Instructeur $instructeur)
    {
        return view('instructeur.list', ['instructeurs' => $instructeur]);
    }
}
