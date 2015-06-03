<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class LocalitatiImg extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'mp_localitati_img';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['LocalitateID','status','url'];
    
    public static function DeleteImg($id){
        
        $urlpoza = self::where('LocalitateID', $id)->get();
        
        foreach ($urlpoza as $url) {
            \File::delete($url->url);
        }

        self::where('LocalitateID', $id)->delete();
        return TRUE;
    }
    

}