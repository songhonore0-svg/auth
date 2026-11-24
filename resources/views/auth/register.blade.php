@extends('layouts.app')
@section('title', 'Inscription')

@section('content')
<h2>Créer un compte</h2>
<p class="subtitle">Remplissez le formulaire pour vous inscrire.</p>

<form method="POST" action="{{ route('register') }}">
    @csrf

    <div class="form-group">
        <label for="name">Nom</label>
        <input id="name" type="text" name="name" value="{{ old('name') }}" class="@error('name') is-invalid @enderror" required>
        @error('name') <span class="error">{{ $message }}</span> @enderror
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" class="@error('email') is-invalid @enderror" required>
        @error('email') <span class="error">{{ $message }}</span> @enderror
    </div>

    <div class="form-group">
        <label for="password">Mot de passe</label>
        <input id="password" type="password" name="password" class="@error('password') is-invalid @enderror" required>
        @error('password') <span class="error">{{ $message }}</span> @enderror
    </div>

    <div class="form-group">
        <label for="password_confirmation">Confirmation du mot de passe</label>
        <input id="password_confirmation" type="password" name="password_confirmation" required>
    </div>

    <button type="submit" class="btn-primary">S'inscrire</button>
</form>

<p class="form-footer">Déjà un compte ? <a href="{{ route('login') }}">Se connecter</a></p>
@endsection