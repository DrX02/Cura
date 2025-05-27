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
    @vite(['resources/css/app.css', 'resources/js/app.js'])

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
    <livewire:top-bar-navigation />
    <!-- ========== END HEADER ========== -->

    <!-- ========== MAIN CONTENT ========== -->
    <main id="content">

        <!-- HERO SECTION -->
        <section class="relative h-96">
            <div class="hero-overlay"></div>
            <img src="{{ asset('habo.jpg') }}" alt="Notre équipe" class="w-full h-full object-cover">
            <div class="absolute inset-0 flex items-center justify-start z-10">
                <div class="text-start text-white px-4 md:px-60">
                    <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold mb-4">About us</h1>
                </div>
            </div>
        </section>

        <section class="py-24">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="grid lg:grid-cols-2 grid-cols-1 gap-8">
                    <!-- Image & Titre -->
                    <div class="lg:mb-0 mb-10 relative">
                        <img src="{{ asset('about.jpg') }}" alt="About Cura" class="hidden md:block w-full h-full object-cover lg:rounded-l-2xl rounded-2xl" />
                        <img src="{{ asset('about1.jpg') }}" alt="About Cura" class="md:hidden w-full h-full object-cover lg:rounded-l-2xl rounded-2xl" />
                        <h1 class="font-manrope text-white text-4xl font-bold absolute top-10 left-10">À propos de Cura</h1>
                        <div class="absolute bottom-0 w-full p-5 lg:p-11">
                            <div class="bg-white rounded-lg p-6">
                                <p class="text-gray-700 text-lg leading-7">
                                    Notre mission est de rendre la santé accessible à tous, partout et à tout moment.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Contenu texte -->
                    <div class="bg-gray-50 p-5 lg:p-11 lg:rounded-r-2xl rounded-2xl">
                        <h2 class="text-indigo-600 font-manrope text-4xl font-semibold leading-10 mb-6">Qui sommes-nous ?</h2>
                        <p class="text-gray-600 text-lg leading-7 mb-6">
                            Cura est une plateforme de télémédecine innovante dédiée à la mise en relation rapide entre patients et professionnels de santé. Grâce à notre interface intuitive et sécurisée, vous pouvez consulter des médecins qualifiés sans vous déplacer.
                        </p>
                        <h3 class="text-indigo-500 text-2xl font-semibold mb-4">Nos valeurs</h3>
                        <ul class="list-disc list-inside text-gray-600 text-lg space-y-2 mb-6">
                            <li><strong>Accessibilité :</strong> des soins disponibles 24h/24, 7j/7</li>
                            <li><strong>Confiance :</strong> des professionnels vérifiés et qualifiés</li>
                            <li><strong>Innovation :</strong> une technologie au service de la santé</li>
                        </ul>
                        <h3 class="text-indigo-500 text-2xl font-semibold mb-4">Notre vision</h3>
                        <p class="text-gray-600 text-lg leading-7">
                            Nous croyons en un monde où chaque individu, où qu'il se trouve, peut accéder à une consultation médicale fiable et humaine, en quelques clics.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-24 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid lg:grid-cols-2 grid-cols-1 gap-12 items-center">

                    <!-- Texte -->
                    <div>
                        <h2 class="text-indigo-600 font-semibold text-sm uppercase mb-4">Comprendre la télémédecine</h2>
                        <h1 class="text-4xl font-bold text-gray-900 mb-6 leading-tight">Qu’est-ce que la télémédecine ?</h1>
                        <p class="text-gray-600 text-lg mb-4">
                            La télémédecine est une pratique médicale à distance qui permet à un professionnel de santé de réaliser une consultation, un suivi ou un diagnostic via des outils numériques, comme la vidéo, la messagerie sécurisée ou les applications web.
                        </p>
                        <p class="text-gray-600 text-lg mb-4">
                            Elle ne remplace pas la médecine traditionnelle, mais la complète en facilitant l’accès aux soins, notamment dans les zones éloignées ou pour les personnes à mobilité réduite.
                        </p>
                        <ul class="mt-6 space-y-3">
                            <li class="flex items-start">
                                <span class=" w-5 h-5 bg-indigo-600 text-white text-xs font-bold rounded-full flex items-center justify-center mr-3">✓</span>
                                <p class="text-gray-700 text-sm md:text-base">Consultation à distance avec un médecin généraliste ou spécialiste</p>
                            </li>
                            <li class="flex items-start">
                                <span class=" w-5 h-5 bg-indigo-600 text-white text-xs font-bold rounded-full flex items-center justify-center mr-3">✓</span>
                                <p class="text-gray-700 text-sm md:text-base">Suivi médical régulier (patients chroniques, diabète, etc.)</p>
                            </li>
                            <li class="flex items-start">
                                <span class=" w-5 h-5 bg-indigo-600 text-white text-xs font-bold rounded-full flex items-center justify-center mr-3">✓</span>
                                <p class="text-gray-700 text-sm md:text-base">Renouvellement d’ordonnance</p>
                            </li>
                            <li class="flex items-start">
                                <span class=" w-5 h-5 bg-indigo-600 text-white text-xs font-bold rounded-full flex items-center justify-center mr-3">✓</span>
                                <p class="text-gray-700 text-sm md:text-base">Télésurveillance et prévention des rechutes</p>
                            </li>
                            <li class="flex items-start">
                                <span class=" w-5 h-5 bg-indigo-600 text-white text-xs font-bold rounded-full flex items-center justify-center mr-3">✓</span>
                                <p class="text-gray-700 text-sm md:text-base">Accès rapide à un avis médical spécialisé</p>
                            </li>
                        </ul>
                    </div>

                    <!-- Image illustrative -->
                    <div>
                        <img src="{{ asset('telmed.jpg') }}" alt="Illustration télémédecine" class="rounded-xl w-full shadow-lg object-cover" loading="lazy">
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 px-4 md:px-12 lg:px-24 bg-white">
            <h2 class="text-center text-4xl font-bold text-blue-900 mb-12 uppercase tracking-wide">Nous pensons à vous!</h2>

            <div class="grid md:grid-cols-2 gap-8">
                <!-- Card 1 -->
                <div class="border rounded-lg p-6">
                    <h3 class="text-lg font-bold text-blue-900 mb-2">Les Atouts Exclusifs de CURA</h3>
                    <p class="text-gray-700 mb-4">
                        CURA allie innovation et simplicité pour réinventer vos consultations. Avec des professionnels certifiés, un suivi en temps réel et une plateforme sécurisée, CURA s’impose comme votre partenaire santé de confiance.
                    </p>
                    <div class="flex items-center space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 0 0-2.456 2.456ZM16.894 20.567 16.5 21.75l-.394-1.183a2.25 2.25 0 0 0-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 0 0 1.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 0 0 1.423 1.423l1.183.394-1.183.394a2.25 2.25 0 0 0-1.423 1.423Z" />
                        </svg>
                        <span class="text-blue-600 font-semibold">CURA</span>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="border rounded-lg p-6">
                    <h3 class="text-lg font-bold text-blue-900 mb-2">Ce Qui Rend CURA Unique</h3>
                    <p class="text-gray-700 mb-4">
                        Chez CURA, chaque fonctionnalité est pensée pour vous : consultations vidéo instantanées, chat médical disponible 24h/24, et dossiers cryptés. CURA ne simplifie pas seulement l’accès aux soins, il le transforme.
                    </p>
                    <div class="flex items-center space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 0 0-2.456 2.456ZM16.894 20.567 16.5 21.75l-.394-1.183a2.25 2.25 0 0 0-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 0 0 1.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 0 0 1.423 1.423l1.183.394-1.183.394a2.25 2.25 0 0 0-1.423 1.423Z" />
                        </svg>
                        <span class="text-blue-600 font-semibold">CURA</span>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="border rounded-lg p-6">
                    <h3 class="text-lg font-bold text-blue-900 mb-2">Comment CURA Révolutionne Votre Accès aux Soins</h3>
                    <p class="text-gray-700 mb-4">
                        Grâce à CURA, oubliez les contraintes traditionnelles. Consultations en un clic, suivi médical continu, et sécurité maximale : CURA redéfinit les standards de la télémédecine pour vous offrir des soins sans limites.
                    </p>
                    <div class="flex items-center space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 0 0-2.456 2.456ZM16.894 20.567 16.5 21.75l-.394-1.183a2.25 2.25 0 0 0-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 0 0 1.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 0 0 1.423 1.423l1.183.394-1.183.394a2.25 2.25 0 0 0-1.423 1.423Z" />
                        </svg>
                        <span class="text-blue-600 font-semibold">CURA</span>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="border rounded-lg p-6">
                    <h3 class="text-lg font-bold text-blue-900 mb-2">CURA : Votre Santé, Priorité Absolue</h3>
                    <p class="text-gray-700 mb-4">
                        Avec CURA, bénéficiez d’un accès direct à des experts, d’un suivi adapté et d’une plateforme intuitive. CURA ne se contente pas de répondre à vos attentes : il les dépasse.
                    </p>
                    <div class="flex items-center space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 0 0-2.456 2.456ZM16.894 20.567 16.5 21.75l-.394-1.183a2.25 2.25 0 0 0-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 0 0 1.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 0 0 1.423 1.423l1.183.394-1.183.394a2.25 2.25 0 0 0-1.423 1.423Z" />
                        </svg>
                        <span class="text-blue-600 font-semibold">CURA</span>
                    </div>
                </div>
            </div>
        </section>




        {{-- Call To Action --}}
        <div class="text-center mt-16">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Prêt à consulter un médecin en ligne ?</h2>
            <a href="{{ route('register') }}" class="inline-block px-6 py-3 bg-blue-600 text-white font-semibold rounded-md shadow hover:bg-blue-700 transition duration-300">
                Créer un compte
            </a>
        </div>
        </div>
        </section>
    </main>


    <livewire:home-content />
    <!-- ========== END MAIN CONTENT ========== -->
    <!-- ========== FOOTER ========== -->
    <livewire:footer-navigation />
    <!-- ========== END FOOTER ========== -->
</body>

</html>