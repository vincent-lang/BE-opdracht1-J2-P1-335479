<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Voertuig;

class VoertuigController extends Controller
{
    public function index()
    {
        $voertuigs = Voertuig::all();
        return view('voertuig.index', ['voertuigs' => $voertuigs]);
    }
}
