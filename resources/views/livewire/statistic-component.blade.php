<!-- Card Section -->
<div class="max-w-[85rem] px-4 py-5 sm:px-6 lg:px-8 lg:py-7 mx-auto">
  <!-- Grid -->
  <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
    @if (auth()->user() && auth()->user()->role == 2)
         <!-- Card -->
         <a href="">
          <div class="flex flex-col gap-y-3 lg:gap-y-5 p-4 md:p-5 bg-white border shadow-sm hover:shadow-md rounded-xl ">
            <div class="inline-flex justify-center items-center">
              <span class="size-2 inline-block bg-orange-500 rounded-full me-2"></span>
              <span class="text-xs font-semibold uppercase text-gray-600 ">Utilisateurs</span>
            </div>

            <div class="text-center">
              <h3 class="text-3xl sm:text-4xl lg:text-5xl font-semibold text-gray-800 ">
                {{$users_count}}
              </h3>
            </div>

            <dl class="flex justify-center items-center divide-x divide-gray-200">
              <dt class="pe-3 text-center">
                <span class="text-sm font-semibold text-gray-800 ">{{$last_month_users_count}}</span>
                <span class="block text-sm text-gray-500 ">Mois passée</span>
              </dt>
              <dd class="text-start ps-3">
                <span class="text-sm font-semibold text-gray-800 ">{{$last_week_users_count}}</span>
                <span class="block text-sm text-gray-500 ">Semaine écoulée</span>
              </dd>
            </dl>
          </div>
        </a>
        <!-- End Card -->

    <!-- Card -->
    <a href="/admin/doctors">
    <div class="flex flex-col gap-y-3 lg:gap-y-5 p-4 md:p-5 bg-white border shadow-sm hover:shadow-md rounded-xl  ">
      <div class="inline-flex justify-center items-center">
        <span class="size-2 inline-block bg-green-500 rounded-full me-2"></span>
        <span class="text-xs font-semibold uppercase text-gray-600 ">Médecins</span>
      </div>

      <div class="text-center">
        <h3 class="text-3xl sm:text-4xl lg:text-5xl font-semibold text-gray-800 ">
          {{$doctors_count}}
        </h3>
      </div>

      <dl class="flex justify-center items-center divide-x divide-gray-200">
        <dt class="pe-3 text-center">
          <span class="text-sm font-semibold text-gray-800 ">{{$last_month_doctor_count}}</span>
          <span class="block text-sm text-gray-500 ">Mois passée</span>
        </dt>
        <dd class="text-start ps-3">
          <span class="text-sm font-semibold text-gray-800 ">{{$last_week_doctor_count}}</span>
          <span class="block text-sm text-gray-500 ">Semaine écoulée</span>
        </dd>
      </dl>
    </div>
    </a>
    <!-- End Card -->

    <!-- Card -->
    <a href="">
    <div class="flex flex-col gap-y-3 lg:gap-y-5 p-4 md:p-5 bg-white border shadow-sm hover:shadow-md rounded-xl  ">
      <div class="inline-flex justify-center items-center">
        <span class="size-2 inline-block bg-yellow-500 rounded-full me-2"></span>
        <span class="text-xs font-semibold uppercase text-gray-600 ">Patients</span>
      </div>

      <div class="text-center">
        <h3 class="text-3xl sm:text-4xl lg:text-5xl font-semibold text-gray-800 ">
          {{$patients_count}}
        </h3>
      </div>

      <dl class="flex justify-center items-center divide-x divide-gray-200">
        <dt class="pe-3 text-center">
          <span class="text-sm font-semibold text-gray-800 ">{{$last_month_patient_count}}</span>
          <span class="block text-sm text-gray-500 ">Mois passée</span>
        </dt>
        <dd class="text-start ps-3">
          <span class="text-sm font-semibold text-gray-800 ">{{$last_week_patient_count}}</span>
          <span class="block text-sm text-gray-500 ">Semaine écoulée</span>
        </dd>
      </dl>
    </div>
    </a>
    <!-- End Card -->

    <!-- Card -->
    <a href="/admin/appointments">
    <div class="flex flex-col gap-y-3 lg:gap-y-5 p-4 md:p-5 bg-white hover:shadow-md border shadow-sm rounded-xl  ">
      <div class="inline-flex justify-center items-center">
        <span class="size-2 inline-block bg-blue-500 rounded-full me-2"></span>
        <span class="text-xs font-semibold uppercase text-gray-600 ">Rendez-vous</span>
      </div>

      <div class="text-center">
        <h3 class="text-3xl sm:text-4xl lg:text-5xl font-semibold text-gray-800 ">
          {{$appointments_count}}
        </h3>
      </div>

      <dl class="flex justify-center items-center divide-x divide-gray-200">
        <dt class="pe-3 text-center">
          <span class="text-sm font-semibold text-gray-800 ">{{$last_month_appointments_count}}</span>
          <span class="block text-sm text-gray-500 ">Mois passée</span>
        </dt>
        <dd class="text-start ps-3">
          <span class="text-sm font-semibold text-gray-800 ">{{$last_week_appointments_count}}</span>
          <span class="block text-sm text-gray-500 ">Semaine écoulée</span>
        </dd>
      </dl>
    </div>
    </a>
    <!-- End Card -->

    <!-- Card -->
    <a href="/admin/specialities">
    <div class="flex flex-col gap-y-3 lg:gap-y-5 p-4 md:p-5 bg-white border shadow-sm hover:shadow-md rounded-xl  ">
      <div class="inline-flex justify-center items-center">
        <span class="size-2 inline-block bg-violet-500 rounded-full me-2"></span>
        <span class="text-xs font-semibold uppercase text-gray-600 ">Spécialités</span>
      </div>

      <div class="text-center">
        <h3 class="text-3xl sm:text-4xl lg:text-5xl font-semibold text-gray-800 ">
          {{$specialities_count}}
        </h3>
      </div>
      <dl class="flex justify-center items-center divide-x divide-gray-200">
              <dt class="pe-3 text-center">
                <span class="text-sm font-semibold text-gray-800 ">0</span>
                <span class="block text-sm text-gray-500 ">Mois passée</span>
              </dt>
              <dd class="text-start ps-3">
                <span class="text-sm font-semibold text-gray-800 ">0</span>
                <span class="block text-sm text-gray-500 ">Semaine écoulée</span>
              </dd>
            </dl>
    </div>
    </a>
    <!-- End Card -->
    @endif

    @if (auth()->user() && auth()->user()->role == 1)
         <!-- Card -->
         <a href="/doctor/appointments">
            <div class="flex flex-col gap-y-3 lg:gap-y-5 p-4 md:p-5 bg-white border shadow-sm hover:shadow-md rounded-xl  ">
              <div class="inline-flex justify-center items-center">
                <span class="size-2 inline-block bg-blue-500 rounded-full me-2"></span>
                <span class="text-xs font-semibold uppercase text-gray-600 ">Tous les RDV</span>
              </div>

              <div class="text-center">
                <h3 class="text-3xl sm:text-4xl lg:text-5xl font-semibold text-gray-800 ">
                  {{$doctor_appointments_count}}
                </h3>
              </div>

              <dl class="flex justify-center items-center divide-x divide-gray-200">
                <dt class="pe-3 text-center">
                  <span class="text-sm font-semibold text-gray-800 ">{{$last_month_appointments_count}}</span>
                  <span class="block text-sm text-gray-500 ">Mois passée</span>
                </dt>
                <dd class="text-start ps-3">
                  <span class="text-sm font-semibold text-gray-800 ">{{$last_week_appointments_count}}</span>
                  <span class="block text-sm text-gray-500 ">Semaine écoulée</span>
                </dd>
              </dl>
            </div>
         </a>
    <!-- End Card -->

    <!-- Card -->
    <a href="/doctor/appointments">
    <div class="flex flex-col gap-y-3 lg:gap-y-5 p-4 md:p-5 bg-white border shadow-sm hover:shadow-md rounded-xl  ">
      <div class="inline-flex justify-center items-center">
        <span class="size-2 inline-block bg-yellow-500 rounded-full me-2"></span>
        <span class="text-xs font-semibold uppercase text-gray-600 ">RDV en attentes</span>
      </div>

      <div class="text-center">
        <h3 class="text-3xl sm:text-4xl lg:text-5xl font-semibold text-gray-800 ">
          {{$upcoming_appointments_count}}
        </h3>
      </div>
      <dl class="flex justify-center items-center divide-x divide-gray-200">
              <dt class="pe-3 text-center">
                <span class="text-sm font-semibold text-gray-800 ">0</span>
                <span class="block text-sm text-gray-500 ">Mois passée</span>
              </dt>
              <dd class="text-start ps-3">
                <span class="text-sm font-semibold text-gray-800 ">0</span>
                <span class="block text-sm text-gray-500 ">Semaine écoulée</span>
              </dd>
            </dl>
      
    </div>
    </a>
    <!-- End Card -->

    <!-- Card -->
    <a href="/doctor/appointments">
    <div class="flex flex-col gap-y-3 lg:gap-y-5 p-4 md:p-5 bg-white border shadow-sm hover:shadow-md rounded-xl  ">
      <div class="inline-flex justify-center items-center">
        <span class="size-2 inline-block bg-green-500 rounded-full me-2"></span>
        <span class="text-xs font-semibold uppercase text-gray-600 ">RDV effectués</span>
      </div>

      <div class="text-center">
        <h3 class="text-3xl sm:text-4xl lg:text-5xl font-semibold text-gray-800 ">
          {{$complete_appointments_count}}
        </h3>
      </div>
      <dl class="flex justify-center items-center divide-x divide-gray-200">
          <dt class="pe-3 text-center">
            <span class="text-sm font-semibold text-gray-800 ">0</span>
            <span class="block text-sm text-gray-500 ">Mois passée</span>
          </dt>
          <dd class="text-start ps-3">
            <span class="text-sm font-semibold text-gray-800 ">0</span>
            <span class="block text-sm text-gray-500 ">Semaine écoulée</span>
          </dd>
        </dl>
    </div>
    </a>
    <!-- End Card -->

    
    @endif
   
  </div>
  <!-- End Grid -->
</div>
<!-- End Card Section -->