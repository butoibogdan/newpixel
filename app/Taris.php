<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Taris extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'taris';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['ContinentID', 'nume', 'descriere', 'poza', 'Latitudine', 'Longitudine'];

}