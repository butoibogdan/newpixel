<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Ofertestatices extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'ofertestatices';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['HotelID', 'DetaliiScurte', 'DetaliiComplete', 'ServiciiIncluse', 'ExtraServicii', 'DocOferta', 'DataExpirare'];

}