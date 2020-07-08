<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Filmy
 *
 * @property int $ID
 * @property string $typ
 * @property string $nominal_asa
 * @property string $exp_date
 * @property string $seria
 * @property int $producent
 * @property string $nazwa
 * @property boolean $etykieta
 * @property tinyblob $ulotka
 * @property string $opis
 * @property string $symbol
 * @property string $link
 *
 * @property Collection|Historium[] $historia
 * @property Collection|Wywolanium[] $wywolania
 *
 * @package App\Models
 */
class Filmy extends Model
{
    protected $table = 'filmy';
    protected $primaryKey = 'ID';
    public $timestamps = false;

    protected $casts = [
        'producent' => 'int',
        'etykieta' => 'boolean',
        'ulotka' => 'tinyblob'
    ];

    protected $fillable = [
        'typ',
        'nominal_asa',
        'exp_date',
        'seria',
        'producent',
        'nazwa',
        'etykieta',
        'ulotka',
        'opis',
        'symbol',
        'link'
    ];

    public function producent()
    {
        return $this->belongsTo(Producent::class, 'producent', 'id');
    }

    public function historia()
    {
        return $this->hasMany(Historium::class, 'filmy', 'id');
    }

    public function wywolania()
    {
        return $this->hasMany(Wywolanium::class, 'filmy', 'id');
    }
}
