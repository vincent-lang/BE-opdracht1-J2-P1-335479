<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Instructeur;
use App\Models\Voertuig;
use App\Models\VoertuigInstructeur;
use Illuminate\Support\Facades\DB;

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
        $data = Instructeur::join('Voertuig_Instructeurs', 'instructeurs.Id', '=', 'Voertuig_Instructeurs.InstructeurId')
            ->join('voertuigs', 'Voertuig_Instructeurs.VoertuigId', '=', 'voertuigs.Id')
            ->join('Type_voertuigs', 'voertuigs.TypeVoertuigId', '=', 'Type_voertuigs.Id')
            ->where('instructeurs.Id', '=', $id)
            ->orderBy('Type_voertuigs.Rijbewijscategorie', 'asc')
            ->get();
        return view('instructeur.list', ['instructeurs' => $instructeur], compact('data'));
    }

    public function addPage(Instructeur $instructeur)
    {
        $id = $instructeur->Id;
        $voertuigData = DB::table('Voertuigs')
            ->select('Voertuig_instructeurs.*', 'Voertuigs.Id', 'Voertuigs.Type', 'Voertuigs.Kenteken', 'Voertuigs.Bouwjaar', 'Voertuigs.Brandstof', 'Type_voertuigs.Rijbewijscategorie', 'Type_voertuigs.TypeVoertuig')
            ->leftJoin('Voertuig_Instructeurs', 'Voertuigs.Id', '=', 'voertuig_instructeurs.VoertuigId')
            ->join('Type_voertuigs', 'Voertuigs.TypeVoertuigId', '=', 'Type_voertuigs.Id')
            ->whereNull('voertuig_instructeurs.VoertuigId')
            ->get();
        return view('instructeur.addPage', ['instructeurs' => $instructeur], compact('voertuigData'));
    }

    public function add(Instructeur $instructeur, $voertuigRow)
    {
        $instructeurId = $instructeur->Id;
        $voertuigId = $voertuigRow;
        $DatumToekenning = date('y-m-d');
        $DatumAangemaakt = date('y-m-d h:i:s');
        $DatumGewijzigd = date('y-m-d h:i:s');
        $data = VoertuigInstructeur::insert(array(
            'VoertuigId' => $voertuigId,
            'InstructeurId' => $instructeurId,
            'DatumToekenning' => $DatumToekenning,
            'DatumAangemaakt' => $DatumAangemaakt,
            'DatumGewijzigd' => $DatumGewijzigd
        ));
        return redirect(route('instructeur.list', [$instructeurId]));
    }
}
