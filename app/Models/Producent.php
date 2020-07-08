<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Producent
 *
 * @property int $ID
 * @property string $nazwa
 * @property string $opis
 * @property string $link
 * @property boolean $etykieta
 *
 * @property Collection|Aparaty[] $aparaties
 * @property Collection|Chemikalium[] $chemikalia
 * @property Collection|Filmy[] $filmies
 * @property Collection|Obiektywy[] $obiektywies
 *
 * @package App\Models
 */
class Producent extends Model
{
    protected $table = 'producent';
    protected $primaryKey = 'ID';
    public $timestamps = false;

    protected $casts = [
        'etykieta' => 'boolean'
    ];

    protected $fillable = [
        'nazwa',
        'opis',
        'link',
        'etykieta'
    ];

    public function aparaties()
    {
        return $this->hasMany(Aparaty::class, 'producent', 'id');
    }

    public function chemikalia()
    {
        return $this->hasMany(Chemikalium::class, 'producent', 'id');
    }

    public function filmies()
    {
        return $this->hasMany(Filmy::class, 'producent', 'id');
    }

    public function obiektywies()
    {
        return $this->hasMany(Obiektywy::class, 'producent', 'id');
    }
}
