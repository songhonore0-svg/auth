@extends('layouts.app')
@section('title', 'Connexion')

@section('content')
<h2>Connexion</h2>
<p class="subtitle">Heureux de vous revoir !</p>

<form method="POST" action="{{ route('login') }}">
    @csrf

    <div class="form-group">
        <label for="email">Email</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" class="@error('email') is-invalid @enderror" required autofocus>
        @error('email') <span class="error">{{ $message }}</span> @enderror
    </div>

    <div class="form-group">
        <label for="password">Mot de passe</label>
        <input id="password" type="password" name="password" required>
    </div>

    <button type="submit" class="btn-primary">Se connecter</button>
</form>

<p class="form-footer">Pas de compte ? <a href="{{ route('register') }}">S'inscrire</a></p>
@endsection