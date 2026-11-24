<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Tableau de bord
            </h2>
            <span class="text-sm text-gray-500">
                {{ now()->translatedFormat('l d F Y') }}
            </span>
        </div>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">

            {{-- Bandeau de bienvenue --}}
            <div class="rounded-2xl bg-gradient-to-r from-slate-900 to-teal-700 p-8 shadow-lg">
                <div class="flex items-center gap-5">
                    <div class="flex h-16 w-16 items-center justify-center rounded-full bg-white/20 text-2xl font-bold text-white ring-4 ring-white/30">
                        {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-white">
                            Bonjour, {{ Auth::user()->name }}
                        </h3>
                        <p class="mt-1 text-teal-100">
                            Voici un aperçu de votre compte.
                        </p>
                    </div>
                </div>
            </div>

            {{-- Cartes --}}
            <div class="grid gap-6 sm:grid-cols-3">
                <div class="rounded-xl bg-white p-6 shadow-sm ring-1 ring-gray-100 border-t-4 border-teal-600">
                    <p class="text-xs font-semibold uppercase tracking-wide text-gray-500">Statut du compte</p>
                    <p class="mt-3 text-xl font-bold text-gray-900">Actif</p>
                    <p class="mt-1 text-sm text-gray-500">Session sécurisée</p>
                </div>

                <div class="rounded-xl bg-white p-6 shadow-sm ring-1 ring-gray-100 border-t-4 border-teal-600">
                    <p class="text-xs font-semibold uppercase tracking-wide text-gray-500">Membre depuis</p>
                    <p class="mt-3 text-xl font-bold text-gray-900">{{ Auth::user()->created_at->format('d/m/Y') }}</p>
                    <p class="mt-1 text-sm text-gray-500">{{ Auth::user()->created_at->diffForHumans() }}</p>
                </div>

                <div class="rounded-xl bg-white p-6 shadow-sm ring-1 ring-gray-100 border-t-4 border-teal-600">
                    <p class="text-xs font-semibold uppercase tracking-wide text-gray-500">Adresse email</p>
                    <p class="mt-3 text-base font-bold text-gray-900 break-words">{{ Auth::user()->email }}</p>
                    <p class="mt-1 text-sm text-gray-500">Identifiant de connexion</p>
                </div>
            </div>

            {{-- Bloc d'information --}}
            <div class="rounded-xl bg-white p-6 shadow-sm ring-1 ring-gray-100">
                <h4 class="text-lg font-semibold text-gray-900">Espace protégé</h4>
                <p class="mt-1 text-sm text-gray-500">
                    Cette page n'est accessible qu'aux utilisateurs authentifiés.
                </p>
                <a href="{{ route('profile') }}"
                   class="mt-4 inline-block rounded-lg bg-teal-700 px-5 py-2 text-sm font-semibold text-white transition hover:bg-teal-800">
                    Voir mon profil
                </a>
            </div>
        </div>
    </div>
</x-app-layout>