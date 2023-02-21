@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/add.css') }}">
@endsection

@section('content')
    <div class="container">
        <h1 class="head">Edit a Drug</h1>

        <form action="" method="POST">
            @method('PUT')
            @csrf
            <div class="row">

                <label for="name" class="input-name">Drug Name</label>
                <input type="text" id="name" class="form-control" name="name"
                    placeholder="Enter Drug Name" value="{{ $drugs->name }}" required>

                <label for="description" class="input-name">Description</label>
                <textarea id="description" class="form-control" name="description" placeholder="Enter Drug Description"
                        required >{{ $drugs->description }}</textarea>

                <label for="unit_price" class="input-name">Price</label>
                <input type="number" id="unit_price" class="form-control" name="unit_price" placeholder="Enter Drug Price"
                        required value={{ $drugs->unit_price }}>

                <label for="quantity" class="input-name">Quantity</label>
                <input type="number" id="quantity" class="form-control" name="quantity" placeholder="Enter Drug Quantity"
                        required value={{ $drugs->quantity }}>

                <label for="image" class="input-name">Image</label>
                <input id="image" class="form-control" name="image" placeholder="Enter Drug Quantity"
                        required value={{ $drugs->image }}>

                <button class="btn">Edit</button>
        </form>
    </div>
@endsection