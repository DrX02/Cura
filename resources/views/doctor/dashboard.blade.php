<x-app-layout>
    
    <x-slot name="header">
        <h1 class="text-2xl font-bold">Bienvenue, {{ auth()->user()->name }}!</h1>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Médecin') }}
        </h2>
    </x-slot>
    <livewire:statistic-component/>
    <livewire:recent-appointments/>
</x-app-layout>