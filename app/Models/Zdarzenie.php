<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Zdarzenie
 *
 * @property int $ID
 * @property string $nazwa
 * @property string $opis
 * @property int $historia
 *
 *
 * @package App\Models
 */
class Zdarzenie extends Model
{
    protected $table = 'zdarzenie';
    protected $primaryKey = 'ID';
    public $timestamps = false;

    protected $casts = [
        'historia' => 'int'
    ];

    protected $fillable = [
        'nazwa',
        'opis',
        'historia'
    ];

    public function historia()
    {
        return $this->hasMany(Historium::class, 'zdarzenie', 'id');
    }
}
