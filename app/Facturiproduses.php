<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Facturiproduses extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'fact__facturiproduses';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idfactura', 'denumireprodus', 'cantitateprodus', 'valoareprodus', 'cotatva'];

}