<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>CURA</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <!-- @vite(['resources/css/app.css', 'resources/js/app.js']) -->
    <link rel="stylesheet" href="{{ asset('build/assets/app.css') }}">
    <script src="{{ asset('build/assets/app.js') }}" defer></script>

    <style>
        html {
            scroll-behavior: smooth;
        }

        /* Pour masquer les éléments avec l'attribut x-cloak */
        [x-cloak] {
            display: none !important;
        }

        /* Personnalisation de la barre de défilement */
        .scroll-thin::-webkit-scrollbar {
            width: 6px;
        }

        .scroll-thin::-webkit-scrollbar-track {
            background: transparent;
        }

        .scroll-thin::-webkit-scrollbar-thumb {
            background-color: #94a3b8;
            /* Slate-400 par exemple */
            border-radius: 8px;
            border: 2px solid transparent;
            background-clip: content-box;
        }

        /* Pour Firefox */
        .scroll-thin {
            scrollbar-width: thin;
            scrollbar-color: #94a3b8 transparent;
        }
    </style>

</head>

<body class="antialiased font-sans scroll-thin">
    <!-- ========== HEADER ========== -->
    <div class="">
        <livewire:top-bar-navigation />
    </div>

    <!-- ========== END HEADER ========== -->

    <!-- ========== MAIN CONTENT ========== -->
    <main id="content">
        <div class="py-10 bg-white">
            <div class=" mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <livewire:hero-section />

                </div>
            </div>
        </div>
        <div id="doctors" class="py-5 bg-gray-50">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <livewire:featured-doctors :speciality_id="0" />
                </div>
            </div>
        </div>
        <div id="specialities" class="py-5 bg-gray-50">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <livewire:specialist-cards />
                </div>
            </div>
        </div>
        <div id="blogs" class="py-5 bg-gray-50">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <livewire:featured-articles />
                </div>
            </div>
        </div>
    </main>
    <livewire:home-content />
    <!-- ========== END MAIN CONTENT ========== -->
    <!-- ========== FOOTER ========== -->
    <livewire:footer-navigation />
    <!-- ========== END FOOTER ========== -->

</body>

</html>