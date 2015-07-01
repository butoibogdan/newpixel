<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Facturis extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'fact__facturis';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idclient', 'tipfactura', 'seriefactura', 'numarfactura', 'datafactura', 'valoarefactura_ftva', 'valoare_tva', 'incasare'];

}