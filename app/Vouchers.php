<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Vouchers extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'fact__vouchers';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idfactura', 'numar', 'data', 'adulti', 'copii', 'datanasteriicopii', 'alteservicii'];

}