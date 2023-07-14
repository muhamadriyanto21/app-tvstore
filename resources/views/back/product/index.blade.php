@extends('layouts.back.master')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <div class="d-flex justify-content-between align-items-center">
                                List Product
                                <a class="btn btn-primary" href="{{ route('product.create') }}">Create Product</a>
                            </div>
                        </div>



                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>name</th>
                                        <th>Foto</th>
                                        <th>Price</th>
                                        <th>Category</th>
                                        <th></th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>
                                                <img src="{{ asset('fotoproduct/'.$item->foto) }}" alt="">

                                            </td>
                                            <td>{{ $item->price }}</td>
                                            <td>{{ $item->category->name }}</td>
                                            <td>
                                                <a href="{{ route('product.edit', [$item->id]) }}">Edit</a>

                                                <a href="{{ route('product.delete', [$item->id]) }}">Delete</a>
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
