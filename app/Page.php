<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Page extends Model
{
	use SoftDeletes;

	protected $dates = [
		'created_at',
		'updated_at',
		'deleted_at',
	];

	protected $fillable = [
		'parent',
		'slug',
		'name',
		'meta_title',
		'meta_tag',
		'meta_descriptions',
		'short_description',
		'details',
		'banner',
		'banner_alt',
		'banner_title',
		'created_at',
		'updated_at',
		'deleted_at'
	];
}
