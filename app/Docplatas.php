<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Docplatas extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'fact__docplata';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['iddoc', 'tipdoc', 'idfacturi', 'idclient', 'serie', 'numar', 'data', 'valoare', 'observatii'];

}