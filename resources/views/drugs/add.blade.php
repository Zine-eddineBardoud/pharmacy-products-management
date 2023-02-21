@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/add.css') }}">
@endsection

@section('content')
    <div class="container">
        <h1 class="head">Create a New Drug</h1>

        <form action="" method="POST">
            @csrf
            <div class="row">

                <label for="name" class="input-name">Drug Name</label>
                <input type="text" id="name" class="form-control" name="name"
                    placeholder="Enter Drug Name" required>

                <label for="desc" class="input-name">Description</label>
                <textarea id="desc" class="form-control" name="desc" placeholder="Enter Drug Description"
                        required></textarea>

                <label for="price" class="input-name">Price</label>
                <input type="number" id="price" class="form-control" name="price" placeholder="Enter Drug Price"
                        required >

                <label for="qnt" class="input-name">Quantity</label>
                <input type="number" id="qnt" class="form-control" name="qnt" placeholder="Enter Drug Quantity"
                        required >

                <label for="image" class="input-name">Image</label>
                <input type="file" id="image" class="form-control" name="image"
                        required >

                <button class="btn">Create</button>
        </form>
    </div>
@endsection