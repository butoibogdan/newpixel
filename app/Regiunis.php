<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Regiunis extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'regiunis';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['TaraID', 'nume', 'descriere', 'Latitudine', 'Longitudine'];

}