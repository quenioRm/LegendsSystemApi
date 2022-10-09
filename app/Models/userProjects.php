<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userProjects extends Model
{
    protected $table = "user_projects";
	protected $fillable = ["project_id", "user_id"];

    public function user(){
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function projects(){
        return $this->belongsTo('App\Models\Projects', 'project_id');
    }
}
