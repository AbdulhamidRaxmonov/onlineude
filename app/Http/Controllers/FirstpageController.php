<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class FirstpageController extends Controller
{
    public function index(){
        $data = DB::table('addcouse')->get();

        return view('firstpage', compact('data'));
    }
}
