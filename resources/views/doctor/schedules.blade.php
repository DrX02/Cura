<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mes Horaires') }}
        </h2>
    </x-slot>
    <livewire:schedules-component/>

</x-app-layout>