@extends('layouts.back.master')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Create Product</h4>

                        <form action="{{ route('promo.update', [$promo->id]) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input class="form-control" type="text" name="name" id="name" value="{{ $promo->name }}">
                            </div>
                            <div class="form-group">
                                <label for="name">Discount</label>
                                <input class="form-control" type="text" name="discount" id="name" value="{{ $promo->name }}">
                            </div>
                            <div class="form-group">
                                <label for="name">Description</label>
                                <textarea class="form-control" name="description" id="" cols="30" rows="10" name="description">{{ $promo->description }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="start_date">Start Date:</label>
                                <input class="form-control" type="date" name="start_date" id="start_date" value="{{ $promo->start_date }}">
                            </div>
                            <div class="form-group">
                                <label for="end_date">End Date:</label>
                                <input class="form-control" type="date" name="end_date" id="end_date" value="{{ $promo->end_date }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Create Promo</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
