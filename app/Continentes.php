<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Continentes extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'continentes';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Denumire'];

}