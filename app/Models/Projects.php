<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    protected $table = "projects";
	protected $fillable = ["name", "employe_id"];

    public function userprojects(){
        return $this->hasMany('App\Models\userProjects', 'user_id');
    }

}
