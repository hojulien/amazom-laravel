@extends('layouts.app')

@section('title', 'List of products')

@section('content')
    <h1 class="title">List of products</h1>

    <div class="products">
        @foreach ($products as $product)
            <div class="product">
                <h2>[{{ $product->category->name }}]</h2>
                <hr>
                <h2>{{ $product->name }}</h2>
                <div class="product-img">
                    <img src="{{ asset('images/products/' . $product->image) }}" alt="{{ $product->name }}">
                </div>
                <p>{{ $product->description }}</p>
                <p class="price">{{ $product->price }} €</p>
                <a href="{{ route('products.show', ['slug' => $product->slug, 'id' => $product->id]) }}" class="details no-link">View Details</a>
                <button>Add to Cart</button>
            </div>
        @endforeach
    </div>
@endsection