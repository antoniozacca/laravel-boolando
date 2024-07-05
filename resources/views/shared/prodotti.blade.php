@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach ($prodotti as $item)
        <div class="col-md-4 mt-5">
            <div class="card mb-4">
                <div class="img-container">
                    <img src="{{ Vite::asset('resources/img/') . $item['frontImage'] }}" class="card-img-top front-img" alt="Product Image">
                    <img src="{{ Vite::asset('resources/img/') . $item['backImage'] }}" class="card-img-top back-img" alt="Product Image">
                </div>
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

<style scoped>
    .img-container {
        position: relative;
    }
    .front-img, .back-img {
        width: 100%;
        transition: opacity 0.5s ease;
    }
    .back-img {
        position: absolute;
        top: 0;
        left: 0;
        opacity: 0;
    }
    .img-container:hover .front-img {
        opacity: 0;
    }
    .img-container:hover .back-img {
        opacity: 1;
    }
</style>