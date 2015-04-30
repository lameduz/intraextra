<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model {

	public function organisation()
    {
        return $this->belongsTo('App\Organisation');
    }

}
