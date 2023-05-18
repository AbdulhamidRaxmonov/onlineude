<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddCourseApiPostController extends Controller
{
     public function index(Request $request){
         $data = array($request->query);
         dd($data);

     }
}
