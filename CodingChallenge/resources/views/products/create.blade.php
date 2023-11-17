<!-- resources/views/products/create.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="name">Name:</label>
            <input type="text" name="name" required>

            <label for="description">Description:</label>
            <textarea name="description" required></textarea>

            <label for="price">Price:</label>
            <input type="number" name="price" step="0.01" required>

            <label for="image">Image (optional):</label>
            <input type="file" name="image">

            <button type="submit">Create Product</button>
        </form>
    </div>
@endsection
