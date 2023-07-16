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
                                Pekerjaan : <h5 id="job-title">Software Engineer</h5>
                            </div>
                            <div class="col-2">
                                <i id="pen-icon" class="fa-solid fa-pen-to-square" style="color: #919cb1; cursor: pointer;"></i></h3>
                            </div>

                            <div class="col-12" id="input-container" style="display: none;">
                                <div class="row">
                                    <div class="col-sm-9 col-md-9 col-lg-9 mb-2 mb-sm-0">
                                        <input type="text" class="form-control" id="job-title-input" placeholder="Masukkan pekerjaan">
                                    </div>
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                        <button id="save-button" class="btn btn-success"><i class="fa-solid fa-pencil"></i></button>
                                        
                                    </div>

                                </div>
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
                    <h5>Email : erakomputer@gmail.com</h5>
                    <h5>Password : ujicoba</h5>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
