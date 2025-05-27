<!-- Table Section -->
<div class="max-w-[85rem] px-4 py-5 sm:px-6 lg:px-8 lg:py-7 mx-auto">
  <div wire:loading class="flex items-center justify-center px-4 py-3">
    <div class="animate-spin inline-block size-6 border-[3px] border-current border-t-transparent text-blue-600 rounded-full " role="status" aria-label="loading">
      <span class="sr-only">Chargement...</span>
    </div>
    Traitement..
  </div>
  <!-- Card -->
  <div class="flex flex-col">
    <div class="-m-1.5 overflow-x-auto">
      <div class="p-1.5 min-w-full inline-block align-middle">
        <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden  ">
          <!-- Header -->
          <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 ">
            <!-- Input -->
            <div class="sm:col-span-1">
              <label for="hs-as-table-product-review-search" class="sr-only">Recherche</label>
              <div class="relative">
                <input type="text" wire:model.live.debounce.300ms="search" id="hs-as-table-product-review-search" name="search" class="py-2 px-3 ps-11 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none    " placeholder="Search">
                <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4">
                  <svg class="flex-shrink-0 size-4 text-gray-400 " xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="11" cy="11" r="8" />
                    <path d="m21 21-4.3-4.3" />
                  </svg>
                </div>
              </div>
            </div>
            <!-- End Input -->


          </div>
          <!-- End Header -->

          <!-- Table -->
          <table class="min-w-full divide-y divide-gray-200 ">
            <thead class="bg-gray-50 ">

              <tr>
                @if (auth()->user() && auth()->user()->role == 0)

                @else
                <th scope="col" class="px-6 py-3 text-start">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 ">
                      Nom du patient
                    </span>
                  </div>
                </th>
                @endif


                @if (auth()->user() && auth()->user()->role == 1)

                @else
                <th scope="col" class="px-6 py-3 text-start">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 ">
                      Médecin
                    </span>
                  </div>
                </th>
                @endif

                <th scope="col" class="px-6 py-3 text-start">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 ">
                      Type de rendez-vous
                    </span>
                  </div>
                </th>

                <th scope="col" class="px-6 py-3 text-start">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 ">
                      Date de rendez-vous
                    </span>
                  </div>
                </th>

                <th scope="col" class="px-6 py-3 text-start">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 ">
                      Heure de rendez-vous
                    </span>
                  </div>
                </th>

                <th scope="col" class="px-6 py-3 text-start">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 ">
                      Statut
                    </span>
                  </div>
                </th>
                <th scope="col" class="px-6 py-3 text-start">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 ">
                      Actions
                    </span>
                  </div>
                </th>
              </tr>
            </thead>

            <tbody class="divide-y divide-gray-200 ">
              @if (count($all_appointments) > 0)
              @foreach ($all_appointments as $appointment)
              <tr class="bg-white hover:bg-gray-50  ">
                @if (auth()->user() && auth()->user()->role == 0)

                @else
                <td class="size-px whitespace-nowrap align-top">
                  <a class="block p-6" href="#">
                    <div class="flex items-center gap-x-4">
                      <livewire:profile-image :user_id="$appointment->patient->id" />
                      <div>
                        <span class="block text-sm font-semibold text-gray-800 ">{{ $appointment->patient->name}}</span>
                      </div>
                    </div>
                  </a>
                </td>
                @endif
                @if (auth()->user() && auth()->user()->role == 1)
                @else
                <td class="size-px whitespace-nowrap align-top">
                  <a class="block p-6" href="#">
                    <div class="flex items-center gap-x-3">
                      <livewire:profile-image :user_id="$appointment->doctor->doctorUser->id" />
                      <div class="grow">
                        <span class="block text-sm font-semibold text-gray-800 ">{{$appointment->doctor->doctorUser->name}}</span>
                        <span class="block text-sm text-gray-500 ">{{$appointment->doctor->doctorUser->email}}</span>
                      </div>
                    </div>
                  </a>
                </td>
                @endif
                <td class="h-px w-32 min-w-32 align-center">
                  <span class="block text-sm font-semibold text-gray-800 ">{{ $appointment->appointment_type == 0 ? 'sur place' : 'consultation en direct'}}</span>
                </td>
                <td class="h-px w-32 min-w-32 align-center">
                  <span class="block text-sm font-semibold text-gray-800 ">{{ date('d M Y',strtotime($appointment->appointment_date))}}</span>
                </td>
                <td class="size-px whitespace-nowrap align-center">
                  <a class="block p-6" href="#">
                    <span class="text-sm text-gray-600 ">{{ date('H:i A',strtotime($appointment->appointment_time))}}</span>
                  </a>
                </td>
                <td class="size-px whitespace-nowrap align-top">
                  <div class="block py-6" href="#">
                    @if($appointment->is_complete == 1)
                    <span class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full  ">
                      <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                      </svg>
                      Terminé
                    </span>
                    @else
                    <span class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-yellow-100 text-yellow-800 rounded-full ">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                      </svg>
                      En attente
                    </span>
                    @endif
                  </div>
                </td>
                <td class="size-px whitespace-nowrap align-top">
                  <div class="flex py-6 items-center">
                    <button class="bg-green-500 rounded mx-3 text-white p-1 ml-3" wire:click="start({{$appointment->id}})" wire:confirm="Voulez-vous vraiment participer à cet appel vidéo?">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m15.75 10.5 4.72-4.72a.75.75 0 0 1 1.28.53v11.38a.75.75 0 0 1-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 0 0 2.25-2.25v-9a2.25 2.25 0 0 0-2.25-2.25h-9A2.25 2.25 0 0 0 2.25 7.5v9a2.25 2.25 0 0 0 2.25 2.25Z" />
                      </svg>

                    </button>
                    @if (auth()->user()->role == 0)
                    <a href="/patient/reschedule/{{$appointment->id}}" class="bg-blue-500 rounded text-white p-1">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                      </svg>
                    </a>
                    @elseif(auth()->user()->role == 1)
                    <a href="/doctor/reschedule/{{$appointment->id}}" class="bg-blue-500 rounded text-white p-1">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                      </svg>
                    </a>
                    @else
                    <a href="/admin/reschedule/{{$appointment->id}}" class="bg-blue-500 rounded text-white p-1">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                      </svg>
                    </a>
                    @endif

                    <button class="bg-red-500 rounded text-white p-1 ml-3" wire:click="cancel({{$appointment->id}})" wire:confirm="Voulez-vous vraiment annuler le rendez-vous ?">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                      </svg>
                    </button>

                  </div>
                </td>
              </tr>
              @endforeach
              @else
              <tr>
                <td colspan="5" class="p-4" >Aucune donnée trouvée!</td>
              </tr>
              @endif

            </tbody>
          </table>
          <!-- End Table -->

          <!-- Footer -->
          <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200 ">
            <div class="max-w-sm space-y-3">
              <select wire:model.live='perPage' class="py-2 px-3 pe-9 block border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500   ">
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
              </select>
            </div>


            {{ $all_appointments->links()}}

            <!-- End Footer -->
          </div>
        </div>
      </div>
    </div>
    <!-- End Card -->
  </div>