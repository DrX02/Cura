<x-app-layout>
      <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Page de réservation') }}
        </h2>
    </x-slot>
    <livewire:booking-component :doctor="$doctor"/>
</x-app-layout>