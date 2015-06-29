<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientis extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'fact__clientis';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['tipclient', 'nume', 'cui', 'cif', 'banca', 'iban', 'adresa', 'reprezentant', 'cnp', 'judet', 'oras', 'serieci', 'numarci', 'email', 'telefon', 'observatii'];

}