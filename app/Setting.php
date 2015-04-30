<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model {

	public function organisation()
    {
        return $this->belongsTo('App\Organisation');
    }
}
