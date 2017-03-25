<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceType extends Model
{

	/**
	 *  The table associated with the model.
	 *
	 * @var string
	 */
	protected $table ="service_types";

	/**
	 * Relation to Service Categories
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function serviceCategory()
	{
		return $this->belongsTo('App\ServiceCategory', 'category_id');
	}
}
