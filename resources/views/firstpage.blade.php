@extends('layouts.master')

@section('content')
        <div class="divbody">
                <div class="nav1">

                </div>
                <div class="sidebar1">
 
                </div>
                <div class="main1">
                    @foreach($data as $info)
                        <div class="card ms-2" style="width: 12rem; height: 45vh;">
                        <img src="{{$info->cimg}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$info->cname}}</h5>
                            <p class="card-text">{{$info->sname}}</p>
                            <p class="card-text">{{$info->price}}</p>
                        
                        </div>
                        </div>
                    @endforeach
                </div>
        </div>           
        
@endsection