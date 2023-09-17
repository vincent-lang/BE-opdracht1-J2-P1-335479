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
        $Instructeurs = Instructeur::orderBy('AantalSterren', 'desc')->get();
        return view('instructeur.index', ['instructeurs' => $Instructeurs]);
    }

    public function list(Instructeur $instructeur)
    {
        $id = $instructeur->Id;
        $data = Instructeur::join('VoertuigInstructeurs', 'instructeurs.Id', '=', 'VoertuigInstructeurs.InstructeurId')->join('voertuigs', 'VoertuigInstructeurs.VoertuigId', '=', 'voertuigs.Id')->join('Type_voertuigs', 'voertuigs.TypeVoertuigId', '=', 'Type_voertuigs.Id')->where('instructeurs.Id', '=', $id)->orderBy('Type_voertuigs.Rijbewijscategorie', 'asc')->get();
        return view('instructeur.list', ['instructeurs' => $instructeur], compact('data'));
    }

    public function addPage(Instructeur $instructeur)
    {
        $id = $instructeur->Id;
        $data = Voertuig::leftjoin('VoertuigInstructeurs', 'voertuigs.Id', '=', 'VoertuigInstructeurs.VoertuigId')->join('Type_voertuigs', 'voertuigs.TypeVoertuigId', '=', 'Type_voertuigs.Id')->whereNull('VoertuigInstructeurs.voertuigId')->get();
        return view('instructeur.addPage', ['instructeurs' => $instructeur], compact('data'));
    }

    public function add(Instructeur $instructeur)
    {
    }
}
