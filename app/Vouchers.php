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
    
    public function profile()
   {
      return $this->belongsTo(Profile::class); // also Profile belongsTo Address
   }

   public function posts()
   {
      return $this->hasMany(Post::class); // also Post belongsToMany Categories
   }
        
    
}