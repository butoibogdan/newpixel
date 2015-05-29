<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class TariImg extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'mp_tari_img';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['TaraID','status','url'];

}