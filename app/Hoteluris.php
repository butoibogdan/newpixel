<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Hoteluris extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'hoteluris';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['TaraID', 'RegiuneID', 'LocalitateID', 'nume', 'tip', 'stele', 'facilitati', 'detalii_complete', 'Latitudine', 'Longitutide'];

}