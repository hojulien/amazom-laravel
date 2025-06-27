@extends('layouts.app')

@section('title', 'Cart')

@section('content')
    @php $total = 0; @endphp
    <section>
        <h1 class="title">Cart</h1>
        @if(empty($cart))
            <span>Cart is currently empty.</span>
        @else
            <div class="cart-table">
                <table>
                    <thead>
                        <tr>
                            <th colspan="2">Product</th>
                            <th>Quantity</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($cart as $item)
                        @php
                            // calculate price (for display) and add it to total price
                            $price = $item['price'] * $item['quantity'];
                            $total += $price;
                        @endphp
                        <tr>
                            <td>
                                <div class="product-img">
                                    <img width="200" src="{{ asset('images/products/' . $item['image']) }}" alt="{{ $item['name'] }}">
                                </div>
                            </td>
                            <td>{{ $item['name'] }}</td>
                            <td>{{ $item['quantity'] }}</td>
                            <td>{{ number_format($price, 2) }}</td>
                        </tr>
                    @endforeach
                        <td colspan="4"><span class="total">Total: {{ $total }} €</span></td>
                    </tbody>
                </table>

                <a href="{{ route('cart.clear') }}" class="a-button button-400 no-link" onclick="alert('Are you sure you want to clear your cart?')">Clear cart</a>
            </div>
        @endif
    </section>

@endsection