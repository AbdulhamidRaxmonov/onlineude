<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AddCourseController extends Controller
{
    public function index(Request $request){
         $data = [
            'cimg' => $request->simg,
            'cname' => $request->cname,
            'sname' => $request->sname,
            'price' => $request->price,

         ];

        $date = DB::table('addcouse')->insert($data);
         if($date)
         {
            return view('dashboard');
         }
         
    }
}
