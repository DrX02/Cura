<header class="flex flex-wrap sm:justify-start sm:flex-nowrap z-50 w-full bg-white border-b border-gray-200 text-sm py-3 sm:py-0 ">
  <nav class="relative max-w-[85rem] w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8" aria-label="Global">
    <div class="flex items-center justify-between">
      <a class="flex-none text-xl font-semibold" href="/" aria-label="Brand">
        <x-application-logo />
      </a>
      <div class="sm:hidden">
        <button type="button" class="hs-collapse-toggle size-9 flex justify-center items-center text-sm font-semibold rounded-lg border border-gray-200 text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none " data-hs-collapse="#navbar-collapse-with-animation" aria-controls="navbar-collapse-with-animation" aria-label="Toggle navigation">
          <svg class="hs-collapse-open:hidden size-4" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
          </svg>
          <svg class="hs-collapse-open:block flex-shrink-0 hidden size-4" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
          </svg>
        </button>
      </div>
    </div>


    <div id="navbar-collapse-with-animation" class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow sm:block">
      <div class="flex flex-col sm:flex-row sm:items-center sm:justify-end sm:ps-7">
        <a class="py-3 ps-px sm:px-3 font-medium text-gray-500  hover:text-blue-600" href="/">Accueil</a>
        <a class="py-3 ps-px sm:px-3 font-medium text-gray-500  hover:text-blue-600" href="/#specialities">Services</a>
        <a class="py-3 ps-px sm:px-3 font-medium text-gray-500  hover:text-blue-600" href="/about">À propos</a>
        <a class="py-3 ps-px sm:px-3 font-medium text-gray-500  hover:text-blue-600" href="/contact">Contact</a>



        @if (auth()->user() )
        @if (auth()->user()->role == 0)
        <a class="flex items-center gap-x-2 font-medium text-gray-500 hover:text-blue-600 sm:border-s sm:border-gray-300 py-2 sm:py-0 sm:ms-4 sm:my-6 sm:ps-6 " href="/#doctors">Médecins</a>
        <a
          href="{{ url('/dashboard') }}"
          class="flex items-center gap-x-2 font-medium text-gray-500 hover:text-blue-600 sm:border-s sm:border-gray-300 py-2 sm:py-0 sm:ms-4 sm:my-6 sm:ps-6 ">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z" />
            <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z" />
          </svg>
          Dashboard
        </a>



        @elseif (auth()->user()->role == 1)
        <a class="flex items-center gap-x-2 font-medium text-gray-500 hover:text-blue-600 sm:border-s sm:border-gray-300 py-2 sm:py-0 sm:ms-4 sm:my-6 sm:ps-6 "
          href="/pricing">
          Tarification
        </a>
        <a
          href="{{ url('/doctor/dashboard') }}"
          class="flex items-center gap-x-2 font-medium text-gray-500 hover:text-blue-600 sm:border-s sm:border-gray-300 py-2 sm:py-0 sm:ms-4 sm:my-6 sm:ps-6 ">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z" />
            <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z" />
          </svg>
          Dashboard Médecin
        </a>
        @elseif (auth()->user()->role == 2)
        <a
          href="{{ url('/admin/dashboard') }}"
          class="flex items-center gap-x-2 font-medium text-gray-500 hover:text-blue-600 sm:border-s sm:border-gray-300 py-2 sm:py-0 sm:ms-4 sm:my-6 sm:ps-6 ">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z" />
            <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z" />
          </svg>
          Dashboard Admin
        </a>

        @endif

        @else
        <a class="flex items-center gap-x-2 px-4 font-medium text-gray-500 hover:text-blue-600 sm:border-s sm:border-gray-300 py-2 sm:py-0 sm:ms-4 sm:my-6 sm:ps-6 " href="/register">
          <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
          </svg>
          S'inscrire
        </a>
        <a class="flex items-center gap-x-2 font-medium text-gray-500 hover:text-blue-600 sm:border-s sm:border-gray-300 py-2 sm:py-0 sm:ms-4 sm:my-6 sm:ps-6 " href="/login">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z" />
            <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z" />
          </svg>
          Se connecter
        </a>
        @endif
      </div>
    </div>
  </nav>
  <a href="#" target="_top" title="go up" class="bg-white fixed animate-pulse bottom-6 md:bottom-8 right-6 md:right-8 z-20 ring-4 ring-blue-600 rounded-[50%] h-14 w-14 flex items-center justify-center text-4xl hover:bg-blue-200 hover:text-white hover:animate-pulse">
    <!-- class="bg-white fixed animate-pulse bottom-6 md:bottom-8 left-6 md:left-8 z-20 ring-4 ring-blue-600 text-[#50C878] rounded-[50%] h-14 w-14 flex items-center justify-center text-4xl hover:bg-blue-600 hover:text-white hover:animate-pulse"> -->
    <button title="menu" id="" class="focus:outline-none">
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd" d="M18.566 22.5696C18.2536 22.8821 17.747 22.8821 17.4346 22.5696L11.9965 17.1315L6.56195 22.5661C6.24953 22.8785 5.743 22.8785 5.43058 22.5661C5.11816 22.2537 5.11816 21.7471 5.43058 21.4347L11.4308 15.4345C11.5809 15.2845 11.7843 15.2002 11.9965 15.2002C12.2087 15.2002 12.4122 15.2845 12.5622 15.4345L18.566 21.4383C18.8784 21.7507 18.8784 22.2572 18.566 22.5696Z" fill="#222" class="my-path"></path>
        <path fill-rule="evenodd" clip-rule="evenodd" d="M18.566 15.5701C18.2536 15.8825 17.747 15.8825 17.4346 15.5701L11.9965 10.132L6.56195 15.5666C6.24953 15.879 5.743 15.879 5.43058 15.5666C5.11816 15.2542 5.11816 14.7476 5.43058 14.4352L11.4308 8.43497C11.5809 8.28494 11.7843 8.20066 11.9965 8.20066C12.2087 8.20066 12.4122 8.28494 12.5622 8.43497L18.566 14.4388C18.8784 14.7512 18.8784 15.2577 18.566 15.5701Z" fill="#222" class="my-path"></path>
        <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd" d="M18.566 8.57013C18.2536 8.88255 17.747 8.88255 17.4346 8.57013L11.9965 3.13203L6.56195 8.56659C6.24953 8.87901 5.743 8.87901 5.43058 8.56659C5.11816 8.25417 5.11816 7.74764 5.43058 7.43522L11.4308 1.43497C11.5809 1.28494 11.7843 1.20066 11.9965 1.20066C12.2087 1.20066 12.4122 1.28494 12.5622 1.43497L18.566 7.43876C18.8784 7.75118 18.8784 8.25771 18.566 8.57013Z" fill="#222" class="my-path"></path>
      </svg>
    </button>
  </a>
</header>