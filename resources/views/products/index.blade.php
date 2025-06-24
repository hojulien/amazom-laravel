@extends('layouts.app')

@section('title', 'List of products')

@section('content')

    <form action="{{ route('products.index') }}" method="GET">
        <select class="filter" name="categories" onchange="this.form.submit()">
            <option value="">Tous les produits</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ request('categories') == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
    </form>

    <hr>

    @php
        $selectedCategory = null;
        if(request('categories')) {
            $selectedCategory = $categories->firstWhere('id', request('categories'));
        }
    @endphp

    @if($selectedCategory)
        <h1 class="title">Products for {{ $selectedCategory->name }}:</h1>
    @else
        <h1 class="title">List of products</h1>
    @endif

    @if($products->isEmpty())
        <div class="error">No products available.</div>
    @else
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
                    <a href="{{ route('products.show', [$product->slug, $product->id]) }}" class="a-button no-link">View Details</a>
                    <button class="button-cart">Add to Cart</button>
                </div>
            @endforeach
        </div>
    @endif
@endsection