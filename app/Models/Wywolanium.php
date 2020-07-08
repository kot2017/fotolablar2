<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Wywolanium
 *
 * @property int $ID
 * @property Carbon $data
 * @property int $ASA
 * @property string $rozcienczenie
 * @property string $czas_wolania
 * @property string $uwagi
 * @property int $filmy
 * @property int $chemikalia
 * @property string $katalog
 * @property string $rezultat
 * @property string $numer_negatywu
 * @property int $obiektywy
 * @property int $aparaty
 *
 * @property Chemikalium $chemikalium
 * @property Collection|Wyniki[] $wynikis
 *
 * @package App\Models
 */
class Wywolanium extends Model
{
    protected $table = 'wywolania';
    protected $primaryKey = 'ID';
    public $timestamps = false;

    protected $casts = [
        'ASA' => 'int',
        'filmy' => 'int',
        'chemikalia' => 'int',
        'obiektywy' => 'int',
        'aparaty' => 'int'
    ];

    protected $dates = [
        'data'
    ];

    protected $fillable = [
        'data',
        'ASA',
        'rozcienczenie',
        'czas_wolania',
        'uwagi',
        'filmy',
        'chemikalia',
        'katalog',
        'rezultat',
        'numer_negatywu',
        'obiektywy',
        'aparaty'
    ];

    public function aparaty()
    {
        return $this->belongsTo(Aparaty::class, 'aparaty', 'id');
    }

    public function chemikalium()
    {
        return $this->belongsTo(Chemikalium::class, 'chemikalia', 'id');
    }

    public function filmy()
    {
        return $this->belongsTo(Filmy::class, 'filmy', 'id');
    }

    public function obiektywy()
    {
        return $this->belongsTo(Obiektywy::class, 'obiektywy', 'id');
    }

    public function wynikis()
    {
        return $this->hasMany(Wyniki::class, 'wywolanie', 'id');
    }
}
