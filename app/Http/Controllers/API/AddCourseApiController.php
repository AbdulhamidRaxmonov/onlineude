<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AddCourseApiController extends Controller
{
    public function index(){
        $data = DB::table('addcouse')->get();
        dd($data);
    }
}
