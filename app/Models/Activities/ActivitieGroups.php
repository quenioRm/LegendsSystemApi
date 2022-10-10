<?php

namespace App\Models\Activities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivitieGroups extends Model
{
    protected $table = "activitie_groups";
	protected $fillable = ["name", "project_id"];

    public function projects(){
        return $this->belongsTo('App\Models\Projects', 'project_id');
    }

    public static function GetAll()
    {
        return self::get();
    }
}
