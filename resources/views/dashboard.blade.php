<x-app-layout>
    <x-slot name="header">
        <h1 class="text-2xl font-bold">Bienvenue, {{ auth()->user()->name }}!</h1>

        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Votre espace Patient') }}
        </h2>
    </x-slot>
    <div class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <livewire:featured-doctors :speciality_id="0" />
                <livewire:specialist-cards />
                <livewire:recent-appointments />
            </div>
        </div>
    </div>
</x-app-layout>