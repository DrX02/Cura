<div>
    <!-- Card Blog -->
    <div class="max-w-[85rem] md:mx-auto px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-10 bg-white border my-2 shadow-md">
        <!-- Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12">
            <div class="text-center">
                <livewire:profile-image :user_id="$doctor_details->doctorUser->id" />
                <div class="mt-2 sm:mt-4">
                    <h3 class="text-sm font-medium text-gray-800 sm:text-base lg:text-lg ">
                        {{$doctor_details->doctorUser->name}}
                    </h3>
                    <p class="text-xs text-gray-600 sm:text-sm lg:text-base ">
                        {{$doctor_details->speciality->speciality_name}} / {{$doctor_details->hospital_name}}
                    </p>
                </div>
            </div>
            <!-- End Col -->
            <div class="text-center">

                <h3 class="text-gray-500">Détails du rendez-vous</h3>
                <ul class="space-y-3 text-sm">
                    <li class="flex space-x-3">
                        <svg class="flex-shrink-0 size-4 mt-0.5 text-blue-600 " xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                        <span class="text-gray-800 text-2xl ">
                            {{$appointment_details->appointment_date .', '. date('H:i A',strtotime($appointment_details->appointment_time))}}
                        </span>
                    </li>
                </ul>
                <h3>Select an Available Date</h3>
                <input type="text" id="datepicker" autocomplete="off" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none bg-gray-100 " placeholder="Select Available date">
                @if($selectedDate)
                <div>
                    <h4>Selected Date: {{ $selectedDate }}</h4>
                </div>
                @endif
                <div>
                    <h2 class="text-xl font-bold mb-2">Créneaux horaires disponibles</h2>
                    <div class="flex flex-wrap">
                        @foreach ($timeSlots as $slot)
                        <button class="m-2 p-2 bg-blue-500 text-white rounded hover:bg-blue-700"
                            type="button"
                            wire:click="updateAppointment('{{$slot}}')"
                            wire:confirm="Vous voulez vraiment mettre à jour le rendez-vous de  {{$appointment_details->appointment_date .', '. date('H:i A',strtotime($appointment_details->appointment_time))}} à {{ $selectedDate }}, {{ $slot }} ?">
                            {{ date('H:i',strtotime($slot)) }} </button>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- End Col -->
        </div>
        <!-- End Grid -->
    </div>
    <!-- End Card Blog -->
    <script src="pikaday.js"></script>
    <script>
        // Inject available dates from Livewire
        var availableDates = @json($availableDates);

        var picker = new Pikaday({
            field: document.getElementById('datepicker'),
            format: 'YYYY-MM-DD',
            onSelect: function(date) {
                var selectedDate = picker.toString();
                @this.call('selectDate', selectedDate);
            },
            disableDayFn: function(date) {
                // Disable all dates not in the availableDates array
                var formattedDate = moment(date).format('YYYY-MM-DD');
                return !availableDates.includes(formattedDate);
            }
        });
    </script>

</div>