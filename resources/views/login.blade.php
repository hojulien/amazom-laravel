@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <h1>Login</h1>

    <form action="{{ route('auth.login') }}" method="POST">
        <!-- permet d'insérer dans un form un champ caché _token
        laravel compare le _token et accepte la soumission du formulaire si le _token matche
        à mettre sur TOUS les formulaires -->
        @csrf

        <input type="email" name="email" id="email" placeholder="email">
        <input type="password" name="password" id="password" placeholder="password">

        <button type="submit">Se connecter</button>
    </form>

@endsection