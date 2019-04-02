<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Hero;

class ApiController extends Controller{

    public function heroes(){
        $heroes = Hero::get();
        return response()->json($heroes);
    }

}