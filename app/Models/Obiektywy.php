<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Obiektywy
 *
 * @property int $ID
 * @property string $nazwa
 * @property string $jasnosc
 * @property int $ogniskowa
 * @property int $srednica
 * @property Carbon $data_zakupu
 * @property string $zrodlo_zakupu
 * @property int $producent
 * @property string $montowanie
 * @property int $column_10
 *
 * @property Collection|Historium[] $historia
 * @property Collection|Wywolanium[] $wywolania
 *
 * @package App\Models
 */
class Obiektywy extends Model
{
    protected $table = 'obiektywy';
    protected $primaryKey = 'ID';
    public $timestamps = false;

    protected $casts = [
        'ogniskowa' => 'int',
        'srednica' => 'int',
        'producent' => 'int',
        'column_10' => 'int'
    ];

    protected $dates = [
        'data_zakupu'
    ];

    protected $fillable = [
        'nazwa',
        'jasnosc',
        'ogniskowa',
        'srednica',
        'data_zakupu',
        'zrodlo_zakupu',
        'producent',
        'montowanie',
        'column_10'
    ];

    public function producent()
    {
        return $this->belongsTo(Producent::class, 'producent', 'id');
    }

    public function historia()
    {
        return $this->hasMany(Historium::class, 'obiektyw', 'id');
    }

    public function wywolania()
    {
        return $this->hasMany(Wywolanium::class, 'obiektywy', 'id');
    }
}
