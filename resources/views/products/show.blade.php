@extends('layouts.app')

@section('title', 'Product details')

@section('content')
    <h1 class="title">Product details</h1>

    <div class="product-container">
        <div class="product-show-img">
            <img src="{{ asset('images/products/' . $product->image) }}" alt="{{ $product->name }}">
        </div>
        <div class="product-details">
            <div class="product-category"><h2>{{ $product->category->name }}</h2></div>
            <hr>
            <div class="product-name"><h2>{{ $product->name }}</h2></div>
            <div class="product-description"><p>{{ $product->description }}</p></div>
            <div class="product-price"><p class="price">{{ $product->price }} €</p></div>
            <button class="button-cart">Add to Cart</button>
        </div>
    </div>

    <a href="{{ route('products.index') }}" class="a-button button-return no-link">Return to product list</a>
@endsection