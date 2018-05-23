<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
 use App\Models\AppRawMaterial;

class weight_log extends Model
{
    //
	protected $table 				= "weight_log";
	protected $primaryKey 	= "app_raw_material_id";
	protected $guarded 			= array('app_raw_material_id');
	public $timestamps 			= false;

}
