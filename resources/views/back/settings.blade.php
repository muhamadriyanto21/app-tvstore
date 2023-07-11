@extends('layouts.back.master')

@section('content')
<div class="container">
    <div class="jumbotron ml-2 mr-3 mt-4">
        <div class="row">
            <div class="col-lg-4 col-sm-12">
                <img src="{{ asset('back/images/faces/ryan.jpeg') }}" class="img-thumbnail rounded" style="width: 300px; height: 300px;" alt="...">
            </div>
            <div class="col-7">
                <h2 class="mt-5">{{ Auth::user()->name }}</h2>
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-10">
                                <h5>Software Engineer</h5>
                            </div>
                            <div class="col-2">
                                <i class="fa-solid fa-pen-to-square" style="color: #919cb1;"></i></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row pl-3 pr-3">
        <div class="col-lg-3 col-sm-12">
            <div class="jarak ml-3">
                <h3>SETTINGS</h3>
                <h6>Account</h6>
            </div>
        </div>
        <div class="col-lg-9 col-sm-12">
            <div class="card">
                <div class="row">
                    <div class="col-10 ml-3 mr-3">
                        <h3>Account Settings</h3>
                    </div>
                    <div class="col-1">
                        <i class="fa-solid fa-pen-to-square" style="color: #919cb1;"></i>
                    </div>
                </div>

                <div class="jarak ml-3 mr-3">
                    <h5>Email : muhamad.riyanto2025@gmail.com</h5>
                    <h5>Password : 123</h5>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
