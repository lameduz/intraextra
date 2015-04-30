<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Site extends Model {

	protected $fillable = ['adress_1','adress_2','zipcode','siref','city','country'];

	public function organisation()
	{
		return $this->belongsTo('App\Organisation');
	}

    public function contacts()
    {
        return $this->belongsToMany('App\Contact');
    }

}
