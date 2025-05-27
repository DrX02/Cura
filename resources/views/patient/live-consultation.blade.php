<x-app-layout>
  <x-slot name="header">
    <div class="flex space-x-2">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Consultation en direct') }}


    </h2>
    <div class="relative inline-block group">
        <span class="text-yellow-500 cursor-pointer text-xl">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11.9502 15.9414L11.9502 9.94141" stroke="#090701" stroke-width="1.6" stroke-linecap="round" class="my-path"></path>
            <path d="M11.9502 7L12.0002 7" stroke="#090701" stroke-width="1.6" stroke-linecap="round" class="my-path"></path>
            <path opacity="0.4" d="M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="#090701" stroke-width="1.6" class="my-path"></path>
          </svg>
        </span>
        <div class="absolute top-full left-1/2 transform -translate-x-1/2 mb-2 w-64 bg-gray-900 text-white text-sm text-center px-4 py-2 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity z-50">
          Si l'interface de visioconférence ne s'affiche pas, veuillez actualiser la page.
          Veuillez également vous assurer que votre navigateur autorise l'accès à la caméra et au microphone.
        </div>
      </div>
      </div>
  </x-slot>
  <livewire:live-consultation>
</x-app-layout>