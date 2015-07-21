<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Numeredocumentes extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'fact__numerefacturis';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['seriedocument', 'tipdocument', 'numar_min', 'numar_max', 'status'];

}
