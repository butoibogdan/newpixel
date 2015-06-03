<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class HoteluriImg extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'mp_hoteluri_img';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['HotelID','status','url'];
    
    public static function DeleteImg($id){
        
        $urlpoza = self::where('HotelID', $id)->get();
        
        foreach ($urlpoza as $url) {
            \File::delete($url->url);
        }

        self::where('HotelID', $id)->delete();
        return TRUE;
    }
    

}