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
    
    public static function DeleteImg($id){
        
        $urlpoza = self::where('TaraID', $id)->get();
        
        foreach ($urlpoza as $url) {
            \File::delete($url->url);
        }

        self::where('TaraID', $id)->delete();
        return TRUE;
    }
    

}