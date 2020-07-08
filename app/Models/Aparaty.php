<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Aparaty
 *
 * @property int $ID
 * @property string $nazwa
 * @property string $model
 * @property int $producent
 * @property string $opis
 * @property string $numer_seryjny
 * @property string $numer_inwentarzowy
 *
 * @property Collection|Historium[] $historia
 * @property Collection|Wywolanium[] $wywolania
 *
 * @package App\Models
 */
class Aparaty extends Model
{
    protected $table = 'aparaty';
    protected $primaryKey = 'ID';
    public $timestamps = false;

    protected $casts = [
        'producent' => 'int'
    ];

    protected $fillable = [
        'nazwa',
        'model',
        'producent',
        'opis',
        'numer_seryjny',
        'numer_inwentarzowy'
    ];

    public function producent()
    {
        return $this->belongsTo(Producent::class, 'producent', 'id');
    }

    public function historia()
    {
        return $this->hasMany(Historium::class, 'ID', 'id');
    }

    public function wywolania()
    {
        return $this->hasMany(Wywolanium::class, 'aparaty', 'id');
    }
}
