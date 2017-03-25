<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent;

class ServiceCategory extends Model
{
	/**
	 * The Table Associated with the model
	 *
	 * @var string
	 */
	protected $table = 'service_categories';

	/**
	 * Relation to Service Types
	 * @var string
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function serviceType()
	{

			return $this->hasMany('App\ServiceType');
	}

}


