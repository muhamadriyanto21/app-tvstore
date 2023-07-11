@extends('layouts.back.master')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <div class="d-flex justify-content-between align-items-center">
                                List Promo
                                <a class="btn btn-primary" href="{{ route('promo.create') }}">Create Promo</a>
                            </div>
                        </div>



                        <div class="table-resposive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($promos as $promo)
                                        <tr>
                                            <td>{{ $promo->id }}</td>
                                            <td>{{ $promo->name }}</td>
                                            <td>{{ $promo->start_date }}</td>
                                            <td>{{ $promo->end_date }}</td>
                                            <td>
                                                <a href="{{ route('promo.show', [$promo->id]) }}">Show</a>

                                                <a href="{{ route('promo.edit', [$promo->id]) }}">Edit</a>

                                                <a href="{{ route('promo.delete', [$promo->id]) }}">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
