@extends('layouts.app')

@section('title', 'Profil')

@section('content')
    <div class="avatar">{{ strtoupper(substr(Auth::user()->name, 0, 1)) }}</div>
    <h2>Mon profil</h2>
    <p class="subtitle">Vos informations personnelles</p>

    <ul class="info-list">
        <li><span class="label">Nom</span><span>{{ Auth::user()->name }}</span></li>
        <li><span class="label">Email</span><span>{{ Auth::user()->email }}</span></li>
        <li><span class="label">Inscrit le</span><span>{{ Auth::user()->created_at->format('d/m/Y') }}</span></li>
    </ul>
@endsection