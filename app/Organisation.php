<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Organisation extends Model {

		protected $fillable = 
		['org_name',
		'org_type',
		'org_siren',
		'org_ape_naf',
		'name',
		'firstname',
		'email',
		'telephone',
		'mobile',
		'adress_1',
		'adress_2',
		'zipcode',
		'city',
		'country',
		'bic',
		'iban',
        'function'];

	public function sites()
	{
		return $this->hasMany('App\Site');
	}

    public function contacts()
    {
        return $this->belongsToMany('App\Contact');
    }

    public function files()
    {
        return $this->hasMany('App\File');
    }

    public function settings()
    {
        return $this->hasMany('App\Setting');
    }
}
