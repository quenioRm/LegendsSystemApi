<?php

namespace App\Http\Controllers;

use App\Models\Activities\ActivitieGroups;
use Illuminate\Http\Request;

class ActivitieGroupController extends Controller
{
    public function __construct() {
        $this->middleware('auth:api');
    }
    
    public function GetAll()
    {
        return response()->json(ActivitieGroups::GetAll());
    }
}
