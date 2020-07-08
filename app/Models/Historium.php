<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Historium
 *
 * @property int $ID_historia
 * @property Carbon $data
 * @property int $zdarzenie
 * @property int $aparat
 * @property int $obiektyw
 * @property int $chemikalia
 * @property int $filmy
 * @property int $ID
 *
 * @property Aparaty $aparaty
 * @property Chemikalium $chemikalium
 * @property Obiektywy $obiektywy
 *
 * @package App\Models
 */
class Historium extends Model
{
    protected $table = 'historia';
    protected $primaryKey = 'ID_historia';
    public $timestamps = false;

    protected $casts = [
        'zdarzenie' => 'int',
        'aparat' => 'int',
        'obiektyw' => 'int',
        'chemikalia' => 'int',
        'filmy' => 'int',
        'ID' => 'int'
    ];

    protected $dates = [
        'data'
    ];

    protected $fillable = [
        'data',
        'zdarzenie',
        'aparat',
        'obiektyw',
        'chemikalia',
        'filmy',
        'ID'
    ];

    public function aparaty()
    {
        return $this->belongsTo(Aparaty::class, 'ID', 'id');
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
        return $this->belongsTo(Obiektywy::class, 'obiektyw', 'id');
    }

    public function zdarzenie()
    {
        return $this->belongsTo(Zdarzenie::class, 'zdarzenie', 'id');
    }
}
