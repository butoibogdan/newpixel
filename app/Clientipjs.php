<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientipjs extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'fact__clientipjs';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nume', 'cif', 'cui', 'adresa', 'iban', 'banca', 'email', 'telefon', 'reprezentant', 'observatii'];

}