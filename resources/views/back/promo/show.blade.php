<!-- resources/views/promos/show.blade.php -->
@extends('layouts.back.master')
@section('content')
    <div class="mt-5 mb-5">
        <h1>Promo Details</h1>

        <p><strong>Name :</strong> {{ $promo->name }}</p>
        <p><strong>Description :</strong> {{ $promo->description }}</p>
        <p><strong>Start Date :</strong> {{ $promo->start_date }}</p>
        <p><strong>End Date :</strong> {{ $promo->end_date }}</p>
    </div>
@endsection
