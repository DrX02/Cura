<!-- Table Section -->
<div class="max-w-[85rem] px-4 py-5 sm:px-6 lg:px-8 lg:py-7 mx-auto">
  <div class="my-2">
      <h5 class="text-gray-500 ">Derniers rendez-vous</h5>
  </div>
  <!-- Card -->
  <div class="flex flex-col">
    <div class="-m-1.5 overflow-x-auto">
      <div class="p-1.5 min-w-full inline-block align-middle">
        <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden ">
          <!-- Table -->
          <table class="min-w-full divide-y divide-gray-200 ">
            <thead class="bg-gray-50 ">
              
              <tr>
                @if (auth()->user() && auth()->user()->role == 0)
                
                @else
                    <th scope="col" class="px-6 py-3 text-start">
                    <div class="flex items-center gap-x-2">
                      <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 ">
                          Patient Name
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
              </tr>
            </thead>

            <tbody class="divide-y divide-gray-200 ">
               @if (count($recent_appointments) > 0)
                  @foreach ($recent_appointments as $appointment)
                    <tr class="bg-white hover:bg-gray-50 ">
                        @if (auth()->user() && auth()->user()->role == 0)
                      @else
                        <td class="size-px whitespace-nowrap align-top">
                          <a class="block p-6" href="#">
                            <div class="flex items-center gap-x-4">
                              <livewire:profile-image :user_id="$appointment->patient->id"/>
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
                              <livewire:profile-image :user_id="$appointment->doctor->doctorUser->id"/>
                                <div class="grow">
                                  <span class="block text-sm font-semibold text-gray-800 ">{{$appointment->doctor->doctorUser->name}}</span>
                                  <span class="block text-sm text-gray-500 ">{{$appointment->doctor->doctorUser->email}}</span>
                                </div>
                              </div>
                            </a>
                          </td>
                         @endif
                        
                        <td class="h-px w-32 min-w-32 align-center">
                            <span class="block text-sm font-semibold text-gray-800 ">{{ date('d M Y',strtotime($appointment->appointment_date))}}</span>
                        </td>
                        <td class="size-px whitespace-nowrap align-center">
                          <div class="block p-6" href="#">
                            <span class="text-sm text-gray-600 ">{{ date('H:i A',strtotime($appointment->appointment_time))}}</span>
                          </div>
                        </td>
                        <td class="size-px whitespace-nowrap align-top">
                          <div class="block p-6" href="#">
                            @if($appointment->is_complete == 1)
                            <span class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full ">
                              <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                              </svg>
                              Validé
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
                      </tr>
                  @endforeach
              @else
                  <tr>
                    <td colspan="5" class="p-4">Aucune donnée trouvée!</td>
                  </tr>
              @endif
             
            </tbody>
          </table>
          <!-- End Table -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Card -->
</div>
<!-- End Table Section -->