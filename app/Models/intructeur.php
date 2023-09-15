<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class intructeur extends Model
{
    use HasFactory;

    protected $fillable = [
        'Id',
        'Voornaam',
        'Tussenvoegsel',
        'Achternaam',
        'Mobiel',
        'DatumInDienst',
        'AantalSterren',
        'IsActief',
        'OpMerkingen',
        'DatumAanGemaakt',
        'DatumGewijzigd'
    ];
}
