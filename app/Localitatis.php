<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Localitatis extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'localitatis';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['TaraID', 'RegiuneID', 'nume', 'tip', 'descriere', 'Latitudine', 'Longitudine'];

}