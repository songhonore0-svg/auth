<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Mon profil
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg overflow-hidden">

                <div class="flex items-center gap-5 p-6 border-b border-gray-100">
                    <div class="flex h-16 w-16 items-center justify-center rounded-full bg-indigo-600 text-2xl font-bold text-white">
                        {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-900">{{ Auth::user()->name }}</h3>
                        <p class="text-sm text-gray-500">Informations personnelles</p>
                    </div>
                </div>

                <dl class="divide-y divide-gray-100 px-6">
                    <div class="flex justify-between py-4">
                        <dt class="text-sm font-medium text-gray-500">Nom complet</dt>
                        <dd class="text-sm text-gray-900">{{ Auth::user()->name }}</dd>
                    </div>
                    <div class="flex justify-between py-4">
                        <dt class="text-sm font-medium text-gray-500">Adresse email</dt>
                        <dd class="text-sm text-gray-900">{{ Auth::user()->email }}</dd>
                    </div>
                    <div class="flex justify-between py-4">
                        <dt class="text-sm font-medium text-gray-500">Inscrit le</dt>
                        <dd class="text-sm text-gray-900">{{ Auth::user()->created_at->format('d/m/Y') }}</dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>
</x-app-layout>