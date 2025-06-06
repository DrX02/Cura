<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component
{
    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}; ?>

<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}" wire:navigate>
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">

                    @if (auth()->user() && auth()->user()->role == 2)

                    <x-nav-link :href="'/'" :active="request()->routeIs('welcome')" wire:navigate>
                        {{ __('Accueil') }}
                    </x-nav-link>
                    <x-nav-link :href="route('admin-dashboard')" :active="request()->routeIs('admin-dashboard')" wire:navigate>
                        {{ __('Dashboard') }}
                    </x-nav-link>
                    <x-nav-link :href="route('admin-doctors')" :active="request()->routeIs('admin-doctors')" wire:navigate>
                        {{ __('Docteurs') }}
                    </x-nav-link>
                    <x-nav-link :href="route('admin-specialities')" :active="request()->routeIs('admin-specialities')" wire:navigate>
                        {{ __('Spécialités') }}
                    </x-nav-link>
                    <x-nav-link :href="route('admin-appointments')" :active="request()->routeIs('admin-appointments')" wire:navigate>
                        {{ __('Tous les RVD') }}
                    </x-nav-link>
                    <a class="flex items-center gap-x-2 font-medium text-gray-500 hover:text-blue-600 sm:border-s sm:border-gray-300 py-2 sm:py-0 sm:ms-4 sm:my-6 sm:ps-6 dark:border-neutral-700 dark:text-neutral-400 dark:hover:text-blue-500"
                        href="/pricing">
                        Tarification
                    </a>
                    @endif
                    @if (auth()->user() && auth()->user()->role == 0)
                    <x-nav-link :href="'/'" :active="request()->routeIs('welcome')" wire:navigate>
                        {{ __('Accueil') }}
                    </x-nav-link>
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                        {{ __('Dashboard') }}
                    </x-nav-link>
                    <x-nav-link :href="route('my-appointments')" :active="request()->routeIs('my-appointments')" wire:navigate>
                        {{ __('Mes Rendez-vous') }}
                    </x-nav-link>
                    <x-nav-link :href="route('articles')" :active="request()->routeIs('articles')" wire:navigate>
                        {{ __('Blogs') }}
                    </x-nav-link>
                    @endif
                    @if (auth()->user() && auth()->user()->role == 1)

                    <x-nav-link :href="'/'" :active="request()->routeIs('welcome')" wire:navigate>
                        {{ __('Accueil') }}
                    </x-nav-link>
                    <x-nav-link :href="route('doctor-dashboard')" :active="request()->routeIs('doctor-dashboard')" wire:navigate>
                        {{ __('Dashboard') }}
                    </x-nav-link>
                    <x-nav-link :href="route('my-schedules')" :active="request()->routeIs('my-schedules')" wire:navigate>
                        {{ __('Horaires') }}
                    </x-nav-link>
                    <x-nav-link :href="route('doctor-appointments')" :active="request()->routeIs('doctor-appointments')" wire:navigate>
                        {{ __('Mes Rendez-vous') }}
                    </x-nav-link>
                    <a class="flex items-center gap-x-2 font-medium text-gray-500 hover:text-blue-600 sm:border-s sm:border-gray-300 py-2 sm:py-0 sm:ms-4 sm:my-6 sm:ps-6 dark:border-neutral-700 dark:text-neutral-400 dark:hover:text-blue-500"
                        href="/pricing">
                        Tarification
                    </a>
                    @endif
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div x-data="{{ json_encode(['name' => auth()->user()->name]) }}" x-text="name" x-on:profile-updated.window="name = $event.detail.name"></div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile')" wire:navigate>
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <button wire:click="logout" class="w-full text-start">
                            <x-dropdown-link>
                                {{ __('Se déconnecter') }}
                            </x-dropdown-link>
                        </button>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden z-10">
        <div class="pt-2 pb-3 space-y-1">
            <!-- <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                {{ __('Dashboard') }}
            </x-responsive-nav-link> -->


            @if (auth()->user() && auth()->user()->role == 2)
            <x-responsive-nav-link :href="'/'" :active="request()->routeIs('welcome')" wire:navigate>
                {{ __('Accueil') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('admin-dashboard')" :active="request()->routeIs('admin-dashboard')" wire:navigate>
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('admin-doctors')" :active="request()->routeIs('admin-doctors')" wire:navigate>
                {{ __('Docteurs') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('admin-specialities')" :active="request()->routeIs('admin-specialities')" wire:navigate>
                {{ __('Spécialités') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('admin-appointments')" :active="request()->routeIs('admin-appointments')" wire:navigate>
                {{ __('Tous les RVD') }}
            </x-responsive-nav-link>
            <a class="pl-4 flex items-center gap-x-2 font-medium text-gray-500 hover:text-blue-600 sm:border-s sm:border-gray-300 py-2 sm:py-0 sm:ms-4 sm:my-6 sm:ps-6 dark:border-neutral-700 dark:text-neutral-400 dark:hover:text-blue-500"
                href="/pricing">
                Tarification
            </a>
            @endif
            @if (auth()->user() && auth()->user()->role == 0)

            <x-responsive-nav-link :href="'/'" :active="request()->routeIs('welcome')" wire:navigate>
                {{ __('Accueil') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('my-appointments')" :active="request()->routeIs('my-appointments')" wire:navigate>
                {{ __('Mes Rendez-vous') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('articles')" :active="request()->routeIs('articles')" wire:navigate>
                {{ __('Blogs') }}
            </x-responsive-nav-link>
            @endif
            @if (auth()->user() && auth()->user()->role == 1)

            <x-responsive-nav-link :href="'/'" :active="request()->routeIs('welcome')" wire:navigate>
                {{ __('Accueil') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('doctor-dashboard')" :active="request()->routeIs('doctor-dashboard')" wire:navigate>
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('my-schedules')" :active="request()->routeIs('my-schedules')" wire:navigate>
                {{ __('Horaires') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('doctor-appointments')" :active="request()->routeIs('doctor-appointments')" wire:navigate>
                {{ __('Mes Rendez-vous') }}
            </x-responsive-nav-link>
            <a class="pl-4 flex items-center gap-x-2 font-medium text-gray-500 hover:text-blue-600 sm:border-s sm:border-gray-300 py-2 sm:py-0 sm:ms-4 sm:my-6 sm:ps-6 dark:border-neutral-700 dark:text-neutral-400 dark:hover:text-blue-500"
                href="/pricing">
                Tarification
            </a>
            @endif


        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800" x-data="{{ json_encode(['name' => auth()->user()->name]) }}" x-text="name" x-on:profile-updated.window="name = $event.detail.name"></div>
                <div class="font-medium text-sm text-gray-500">{{ auth()->user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile')" wire:navigate>
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <button wire:click="logout" class="w-full text-start">
                    <x-responsive-nav-link>
                        {{ __('Se déconnecter') }}
                    </x-responsive-nav-link>
                </button>
            </div>
        </div>
    </div>
</nav>