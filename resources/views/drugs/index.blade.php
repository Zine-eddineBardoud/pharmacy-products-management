@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')

    <div class="btn">
        <button><a href="/drugs/create/product">Add Product</a></button>
    </div>

    <div class="card">
        @forelse ($drugs as $drug)
            <div class="product-card">
                <div class="product-tumb">
                    <img src="{{ asset($drug->image) }}" alt="">
                </div>
                <div class="product-details">
                    <span class="product-catagory">Drug</span>
                    <h4><a href="./drugs/{{ $drug->id }}">{{ $drug->name }}</a></h4>
                    <p>{{ $drug->description }}</p>
                    <div class="product-bottom-details">
                        <div class="price">
                            <small>${{ $drug->unit_price }}</small>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="empty">
                <h2>No Products available</h2>
            </div>
        @endforelse
    </div>

@endsection