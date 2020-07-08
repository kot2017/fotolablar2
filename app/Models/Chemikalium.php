<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Chemikalium
 *
 * @property int $ID
 * @property string $nazwa
 * @property Carbon $data_produkcji
 * @property string $exp_date
 * @property string $sklad
 * @property string $uwagi
 * @property int $producent
 * @property tinyblob $ulotka
 * @property tinyblob $etykieta
 * @property string $opis
 * @property string $link
 *
 * @property Collection|Historium[] $historia
 * @property Collection|Wywolanium[] $wywolania
 *
 * @package App\Models
 */
class Chemikalium extends Model
{
    protected $table = 'chemikalia';
    protected $primaryKey = 'ID';
    public $timestamps = false;

    protected $casts = [
        'producent' => 'int',
        'ulotka' => 'tinyblob',
        'etykieta' => 'tinyblob'
    ];

    protected $dates = [
        'data_produkcji'
    ];

    protected $fillable = [
        'nazwa',
        'data_produkcji',
        'exp_date',
        'sklad',
        'uwagi',
        'producent',
        'ulotka',
        'etykieta',
        'opis',
        'link'
    ];

    public function producent()
    {
        return $this->belongsTo(Producent::class, 'producent', 'id');
    }

    public function historia()
    {
        return $this->hasMany(Historium::class, 'chemikalia', 'id');
    }

    public function wywolania()
    {
        return $this->hasMany(Wywolanium::class, 'chemikalia', 'id');
    }
}
