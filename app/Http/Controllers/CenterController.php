<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Center;

class CenterController extends Controller
{
    //
    public function index (){
        return Center::all();
    }

    public function show (Request $center){
        return Center::find($center);
    }

}
