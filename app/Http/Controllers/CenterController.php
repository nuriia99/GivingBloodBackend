<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Center;

class CenterController extends Controller
{
    //
    public function index(int $centerId){

        //dd(Center::all());
        $User = Center::find($centerId);
        dd($User->Name);

        return view('welcome');
    }
}
