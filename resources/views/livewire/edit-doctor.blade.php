<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <form wire:submit="update" class="p-5">
                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Nm et Prénoms')" />
                    <x-text-input wire:model="name" id="name" class="block mt-1 w-full" type="text" name="name" autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input wire:model="email" id="email" class="block mt-1 w-full" type="email" name="email" autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <!-- Bio -->
                <div>
                    <x-input-label for="bio" :value="__('Bio/About')" />
                    <x-text-input wire:model="bio" id="bio" class="block mt-1 w-full" type="text" name="bio" autofocus autocomplete="bio" />
                    <x-input-error :messages="$errors->get('bio')" class="mt-2" />
                </div>

                <!-- Hospital Name -->
                <div>
                    <x-input-label for="name" :value="__('Hospital')" />
                    <x-text-input wire:model="hospital_name" id="hospital_name" class="block mt-1 w-full" type="text" name="hospital_name" autofocus autocomplete="hospital_name" />
                    <x-input-error :messages="$errors->get('hospital_name')" class="mt-2" />
                </div>

                <!-- Speciality -->
                <div>
                    <x-input-label for="name" :value="__('Spécialités')" />
                    <select wire:model="speciality_id" class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none ">
                        <option selected="">Choisissez la spécialité</option>
                        @foreach ($specialities as $item)
                        <option value="{{$item->id}}" {{$speciality_id == $item->id ? 'selected' : ''}}>{{$item->speciality_name}}</option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('speciality_id')" class="mt-2" />
                </div>
                {{-- experience --}}
                <div>
                    <x-input-label for="experience" :value="__('Experience')" />
                    <x-text-input wire:model="experience" id="experience" class="block mt-1 w-full" type="number" name="experience" autofocus autocomplete="experience" />
                    <x-input-error :messages="$errors->get('experience')" class="mt-2" />
                </div>
                <!-- Price -->
                <div>
                    <x-input-label for="price" :value="__('Prix')" />
                    <x-text-input wire:model="price" id="price" class="block mt-1 w-full" type="number" name="price" autofocus autocomplete="price" />
                    <x-input-error :messages="$errors->get('price')" class="mt-2" />

                <!-- Whatsapp -->
                <div>
                    <x-input-label for="whatsapp" :value="__('Whatsapp')" />
                    <x-text-input wire:model="whatsapp" id="whatsapp" class="block mt-1 w-full" type="text" name="whatsapp" autofocus autocomplete="whatsapp" />
                    <x-input-error :messages="$errors->get('whatsapp')" class="mt-2" />
                </div>
                <!-- Facebook -->

                <div>
                    <x-input-label for="facebook" :value="__('Facebook')" />
                    <x-text-input wire:model="facebook" id="facebook" class="block mt-1 w-full" type="text" name="facebook" autofocus autocomplete="facebook" />
                    <x-input-error :messages="$errors->get('facebook')" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-red-600 text-white hover:bg-red-700 disabled:opacity-50 disabled:pointer-events-none" href="/admin/doctors">
                        Annuler
                    </a>

                    <x-primary-button class="ms-4">
                        {{ __('Mise à jour') }}
                    </x-primary-button>
                    <div wire:loading>
                        <div class="animate-spin inline-block size-6 border-[3px] border-current border-t-transparent text-blue-600 rounded-full " role="status" aria-label="loading">
                            <span class="sr-only">Chargement...</span>
                        </div>
                        Traitement..
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>