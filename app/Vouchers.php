<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Sofa\Eloquence\Eloquence;

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


    use Eloquence;
    
    protected $searchable = ['numar','data'];
    protected $searchableColumns = ['numar'=>10];
    
   
        
    
}