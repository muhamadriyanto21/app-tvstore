@extends('layouts.back.master')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Create Product</h4>

                        <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input class="form-control" type="text" name="name" id="name">
                            </div>
                            <div class="form-group">
                                <label for="category_id">Category</label>
                                <select class="form-control" name="category_id" id="category_id">
                                    <option value="">Select Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="promo_id">Promo</label>
                                <select class="form-control select_2" name="promo_id[]" multiple id="promo_id">
                                    <option value="">Select Promo</option>
                                    @foreach ($promos as $promo)
                                        <option value="{{ $promo->id }}">{{ $promo->name }}</option>
                                    @endforeach
                                </select>

                            </div>
                            <div class="form-group">
                                <label for="name">Price</label>
                                <input class="form-control" type="text" name="price" id="name">
                            </div>
                            <div class="form-group">
                                <label for="name">Upload Foto</label>
                                <input class="form-control" type="file" name="foto" id="foto">
                            </div>
                            <div class="form-group">
                                <label for="name">Description</label>
                                <textarea class="form-control" name="description" id="" cols="30" rows="10" name="description"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
@section('content-js')
    <script>
        $('.select_2').select2()
    </script>
@endsection
