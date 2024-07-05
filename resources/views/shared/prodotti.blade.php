@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach ($prodotti as $item)
        <div class="col-md-4 mt-5">
            <div class="card mb-4">
                <img src="{{ Vite::asset('resources/img/') . $item['frontImage'] }}" class="card-img-top" alt="Product Image">
                <div class="card-body">
                    <h5 class="card-title">{{ $item['brand'] }}</h5>
                    <h2>{{ $item['name'] }}</h2>
                    <p class="card-text">{{ $item['price'] }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection