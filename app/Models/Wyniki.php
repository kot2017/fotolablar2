<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Wyniki
 *
 * @property int $ID
 * @property string $plik
 * @property string $opis
 * @property int $wywolanie
 *
 * @property Wywolanium $wywolanium
 *
 * @package App\Models
 */
class Wyniki extends Model
{
    protected $table = 'wyniki';
    protected $primaryKey = 'ID';
    public $timestamps = false;

    protected $casts = [
        'wywolanie' => 'int'
    ];

    protected $fillable = [
        'plik',
        'opis',
        'wywolanie'
    ];

    public function wywolanium()
    {
        return $this->belongsTo(Wywolanium::class, 'wywolanie', 'id');
    }
}
