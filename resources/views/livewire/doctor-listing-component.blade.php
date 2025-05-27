<!-- Table Section -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
  @if (session()->has('message'))
  <div class="mt-2 bg-teal-500 text-sm text-white rounded-lg p-4" role="alert">
    <span class="font-bold">Succès</span> {{session('message')}}.
  </div>
  @endif
  <div wire:loading>
    <div class="animate-spin inline-block size-6 border-[3px] border-current border-t-transparent text-blue-600 rounded-full" role="status" aria-label="loading">
      <span class="sr-only">Chargement...</span>
    </div>
    Traitement..
  </div>
  <!-- Card -->
  <div class="flex flex-col">
    <div class="-m-1.5 overflow-x-auto">
      <div class="p-1.5 min-w-full inline-block align-middle">
        <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden ">
          <!-- Header -->
          <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 ">
            <div>
              <h2 class="text-xl font-semibold text-gray-800 ">
                Médecins
              </h2>
              <p class="text-sm text-gray-600 ">
                Nos médecins agréés.
              </p>
            </div>

            <div>
              <div class="inline-flex gap-x-2">
                <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" href="/admin/create/doctor">
                  <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14" />
                    <path d="M12 5v14" />
                  </svg>
                  Créer
                </a>
              </div>
            </div>
          </div>
          <!-- End Header -->

          <!-- Table -->
          <table class="min-w-full divide-y divide-gray-200 ">
            <thead class="bg-gray-50 divide-y divide-gray-200 ">
              <tr>
                <th scope="col" class="px-6 py-3 text-start border-s border-gray-200 ">
                  <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 ">
                    S/N
                  </span>
                </th>
                <th scope="col" class="px-6 py-3 text-start border-s border-gray-200 ">
                  <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 ">
                    Nom du médecin
                  </span>
                </th>
                <th scope="col" class="px-6 py-3 text-start border-s border-gray-200 ">
                  <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 ">
                    Email
                  </span>
                </th>
                <th scope="col" class="px-6 py-3 text-start border-s border-gray-200 ">
                  <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 ">
                    Bio
                  </span>
                </th>
                <th scope="col" class="px-6 py-3 text-start border-s border-gray-200 ">
                  <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 ">
                    Nom de la spécialité
                  </span>
                </th>
                <th scope="col" class="px-6 py-3 text-start border-s border-gray-200 ">
                  <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 ">
                    Nom de l'hôpital
                  </span>
                </th>
                <th scope="col" class="px-6 py-3 text-start border-s border-gray-200 ">
                  <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 ">
                    Experience
                  </span>
                </th>
                <th scope="col" class="px-6 py-3 text-start border-s border-gray-200 ">
                  <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 ">
                    Prix
                  </span>
                </th>
                <th scope="col" class="px-6 py-3 text-start border-s border-gray-200 ">
                  <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 ">
                    Approuvé(e)
                  </span>
                </th>

                <th scope="col" colspan="2" class="px-6 py-3 text-start border-s border-gray-200 ">
                  <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 ">
                    Actions
                  </span>
                </th>

              </tr>
            </thead>

            <tbody class="divide-y divide-gray-200 ">
              @if (count($doctors) > 0)
              @foreach ($doctors as $item)
              <tr>
                <td class="h-px w-auto whitespace-nowrap">
                  <div class="px-6 py-2">
                    <span class="text-sm text-gray-800 ">{{$loop->iteration}}</span>
                  </div>
                </td>
                <td class="h-px w-auto whitespace-nowrap">
                  <div class="px-6 py-2">
                    <span class="text-sm text-gray-800 ">{{$item->doctorUser->name}}</span>
                  </div>
                </td>
                <td class="h-px w-auto whitespace-nowrap">
                  <div class="px-6 py-2">
                    <span class="text-sm text-gray-800 ">{{$item->doctorUser->email}}</span>
                  </div>
                </td>
                <td class="h-px w-auto whitespace-nowrap">
                  <div class="px-6 py-2">
                    <span class="text-sm text-gray-800 ">{{ str($item->bio)->words(5)}}</span>
                  </div>
                </td>
                <td class="h-px w-auto whitespace-nowrap">
                  <div class="px-6 py-2">
                    <span class="text-sm text-gray-800 ">{{$item->speciality->speciality_name}}</span>
                  </div>
                </td>
                <td class="h-px w-auto whitespace-nowrap">
                  <div class="px-6 py-2">
                    <span class="text-sm text-gray-800 ">{{$item->hospital_name}}</span>
                  </div>
                </td>
                <td class="h-px w-auto whitespace-nowrap">
                  <div class="px-6 py-2">
                    <span class="text-sm text-gray-800 ">{{$item->experience}}</span>
                  </div>
                </td>
                <td class="h-px w-auto whitespace-nowrap">
                  <div class="px-6 py-2">
                    <span class="text-sm text-gray-800 ">{{$item->price}} fcfa</span>
                  </div>
                <td class="h-px w-auto whitespace-nowrap">
                  <div class="px-6 py-2">
                    <input type="checkbox"
                      @if ($item->is_featured == 1)
                    checked
                    @endif
                    wire:click="featured({{$item->id}})" id="hs-basic-usage" class="relative w-[3.25rem] h-7 p-px bg-gray-100 border-transparent text-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:ring-blue-600 disabled:opacity-50 disabled:pointer-events-none checked:bg-none checked:text-blue-600 checked:border-blue-600 focus:checked:border-blue-600 
                    before:inline-block before:size-6 before:bg-white checked:before:bg-blue-200 before:translate-x-0 checked:before:translate-x-full before:rounded-full before:shadow before:transform before:ring-0 before:transition before:ease-in-out before:duration-200 ">
                    <label for="hs-basic-usage" class="sr-only">switch</label>
                  </div>
                </td>

                <td class="h-px w-auto whitespace-nowrap">
                  <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" href="/edit/doctor/{{$item->id}}">
                    Modifier
                  </a>
                </td>
                <td class="h-px w-auto whitespace-nowrap">
                  <button wire:confirm.prevent="Etes vous sûr?" wire:click="delete({{$item->id}})" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-red-600 text-white hover:bg-red-700 disabled:opacity-50 disabled:pointer-events-none">
                    Supprimer
                  </button>
                </td>
              </tr>
              @endforeach
              @else
              <tr>
                <td colspan="4" class="p-4">Aucune donnée trouvée!</td>
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