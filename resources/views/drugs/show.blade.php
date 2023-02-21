@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/show.css') }}">
@endsection

@section('content')
    <div class="card">
        <div class="product-card">
            <div class="product-tumb">
                <img src="https://i.imgur.com/xdbHo4E.png" alt="">
            </div>
            <div class="product-details">
                <h2>{{ ($drugs->name) }}</h2>
                <p>{{ $drugs->description }}</p>
                <div class="product-bottom-details">
                    <div class="price">
                        <p>${{ $drugs->unit_price }}</p>
                    </div>
                    <div class="product-links">
                        <a href="/drugs/{{ $drugs->id }}/edit" class="edit">Edit</a>
                        <form method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="delete">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection