<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Documente extends Model {

	protected $table = 'of_documente';
        
        protected $fillable = ['idOferta','url'];

}
