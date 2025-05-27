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
    <livewire:top-bar-navigation />
    <!-- ========== END HEADER ========== -->

    <!-- ========== MAIN CONTENT ========== -->

    <!-- ========== PAGE PRICING MÉDECINS ========== -->
    <main id="content" class="bg-gray-50 pb-20">

        <!-- ========== HERO PRICING ========== -->
        <section class="bg-gradient-to-r from-indigo-600 to-violet-600 text-white py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h1 class="text-4xl md:text-5xl font-extrabold mb-4">Des abonnements conçus pour les médecins</h1>
                <p class="text-lg md:text-xl mb-6">Rejoignez une plateforme de télémédecine moderne, fiable et sécurisée. Testez gratuitement avant de vous abonner.</p>
                <img src="{{ asset('doc.jpg') }}" alt="Notre équipe" class="object-cover w-4/5 md:w-1/2 h-1/2 mx-auto rounded-lg shadow-lg mb-6">
                <p class="my-3 text-lg">Commencez dès aujourd'hui avec un essai gratuit de 15 jours !</p>
                <a href="#pricing" class="inline-block bg-white text-indigo-600 font-semibold px-6 py-3 rounded-lg shadow hover:bg-gray-100 transition">Voir les offres</a>
            </div>
        </section>

        <div id="pricing" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Header -->
            <div class="text-center my-16">
                <h1 class="text-4xl font-extrabold text-gray-900 mb-4">Nos Offres pour Médecins</h1>
                <p class="text-lg text-gray-600">Choisissez l'abonnement qui vous convient et profitez de tous les avantages de notre plateforme de télémédecine.</p>
            </div>

            <!-- Tarifs -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <!-- Essai Gratuit -->
                <div class="bg-white border border-gray-200 rounded-xl shadow-sm p-6 text-center hover:shadow-md transition">
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Essai Gratuit</h3>
                    <p class="text-4xl font-bold text-indigo-600 mb-2">0€</p>
                    <p class="text-gray-500 mb-6">15 jours d’accès complet</p>
                    <ul class="text-gray-600 mb-6 space-y-2 text-left">
                        <li>✔ Accès complet à toutes les fonctionnalités</li>
                        <li>✔ Support technique standard</li>
                        <li>✔ Sans engagement</li>
                    </ul>
                    <a href="http://Wa.me/22994327708" class="inline-block w-full bg-indigo-600 text-white py-2 rounded-lg font-medium hover:bg-indigo-700 transition">Commencer l’essai</a>
                </div>

                <!-- Mensuel -->
                <div class="bg-white border-2 border-indigo-600 rounded-xl shadow-lg p-6 text-center transform scale-105">
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Abonnement Mensuel</h3>
                    <p class="text-4xl font-bold text-indigo-600 mb-2">7 500 XOF<span class="text-lg text-gray-500">/mois</span></p>
                    <p class="text-gray-500 mb-6">Idéal pour démarrer progressivement</p>
                    <ul class="text-gray-600 mb-6 space-y-2 text-left">
                        <li>✔ Accès illimité à la plateforme</li>
                        <li>✔ Support prioritaire</li>
                        <li>✔ Mises à jour régulières</li>
                    </ul>
                    <a href="http://Wa.me/22994327708" class="inline-block w-full bg-indigo-600 text-white py-2 rounded-lg font-medium hover:bg-indigo-700 transition">Souscrire</a>
                </div>

                <!-- Annuel -->
                <div class="bg-white border border-gray-200 rounded-xl shadow-sm p-6 text-center hover:shadow-md transition">
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Abonnement Annuel</h3>
                    <p class="text-4xl font-bold text-green-600 mb-2">75 000 XOF<span class="text-lg text-gray-500">/an</span></p>
                    <p class="text-gray-500 mb-6">2 mois offerts par rapport au mensuel</p>
                    <ul class="text-gray-600 mb-6 space-y-2 text-left">
                        <li>✔ Tous les avantages du plan mensuel</li>
                        <li>✔ Accès prioritaire aux nouvelles fonctionnalités</li>
                        <li>✔ Rapport d’activité mensuel personnalisé</li>
                    </ul>
                    <a href="http://Wa.me/22994327708" class="inline-block w-full bg-green-600 text-white py-2 rounded-lg font-medium hover:bg-green-700 transition">Souscrire</a>
                </div>
            </div>

            <!-- Fonctionnalités -->
            <div class="mt-16 text-center">
                <!-- Offre Promotionnelle -->
                <div class=" max-w-md mx-auto border-2 border-yellow-400 rounded-lg shadow-lg hover:shadow-xl transition text-center p-6 bg-yellow-50 relative">
                    <div class="absolute top-0 right-0 bg-yellow-400 text-white text-xs font-bold px-2 py-1 rounded-bl">Promo</div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Offre de Lancement</h3>
                    <p class="text-3xl font-bold text-yellow-600 mb-4">6 000 XOF</p>
                    <p class="text-sm text-gray-500 mb-4">par mois pendant 3 mois</p>
                    <ul class="text-gray-700 mb-6 space-y-2">
                        <li>Accès complet à la plateforme</li>
                        <li>Support prioritaire</li>
                        <li>Mises à jour incluses</li>
                        <li>Tarif valable 3 mois</li>
                    </ul>
                    <a href="http://Wa.me/22994327708" class="bg-yellow-500 text-white px-5 py-2 rounded hover:bg-yellow-600 transition">Souscrire maintenant</a>
                </div>

                <h2 class="text-3xl font-bold text-gray-900 pt-6 my-6">Pourquoi choisir notre solution ?</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-12">

                    <div class="flex flex-col items-center">
                        <div class="bg-indigo-100 p-4 rounded-full mb-4">
                            <!-- <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path d="M3 7h18M3 12h18M3 17h18" />
                            </svg> -->
                            <svg width="40px" height="40px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.4" d="M11.9992 5.69971C8.79597 5.69971 6.19922 8.29646 6.19922 11.4997C6.19922 13.4007 7.11459 15.0881 8.5252 16.1446C8.77708 16.3332 8.94424 16.4586 9.06217 16.5554C9.13428 16.6146 9.16625 16.6461 9.17623 16.6559L9.17767 16.6573L9.17901 16.6595L9.18374 16.6719C9.18529 16.6804 9.18956 16.7071 9.19285 16.7631C9.1989 16.8663 9.19922 17.0054 9.19922 17.2371L9.19922 17.2722C9.19918 17.5991 9.19915 17.9027 9.22522 18.1548C9.25365 18.4297 9.3198 18.7321 9.51257 19.0145C9.63907 19.1998 9.79909 19.3599 9.98439 19.4864C10.2668 19.6791 10.5692 19.7453 10.8441 19.7737C11.0963 19.7998 11.3999 19.7997 11.7267 19.7997H12.2718C12.5986 19.7997 12.9022 19.7998 13.1543 19.7737C13.4292 19.7453 13.7317 19.6791 14.014 19.4864C14.1994 19.3599 14.3594 19.1998 14.4859 19.0145C14.6786 18.7321 14.7448 18.4297 14.7732 18.1548C14.7993 17.9027 14.7993 17.5991 14.7992 17.2723L14.7992 17.2371C14.7992 17.0054 14.7995 16.8663 14.8056 16.7631C14.8089 16.7071 14.8131 16.6804 14.8147 16.6719L14.8194 16.6595L14.8208 16.6573L14.8222 16.6559C14.8322 16.6461 14.8642 16.6146 14.9363 16.5554C15.0542 16.4586 15.2214 16.3332 15.4732 16.1446C16.8838 15.0881 17.7992 13.4007 17.7992 11.4997C17.7992 8.29646 15.2025 5.69971 11.9992 5.69971Z" fill="#8b3aff" class="my-path"></path>
                                <path d="M12.7992 2.49971C12.7992 2.05788 12.441 1.69971 11.9992 1.69971C11.5574 1.69971 11.1992 2.05788 11.1992 2.49971V3.49971C11.1992 3.94153 11.5574 4.29971 11.9992 4.29971C12.441 4.29971 12.7992 3.94153 12.7992 3.49971V2.49971Z" fill="#8b3aff" class="my-path"></path>
                                <path d="M9.99922 20.6997C9.55739 20.6997 9.19922 21.0579 9.19922 21.4997C9.19922 21.9415 9.55739 22.2997 9.99922 22.2997H13.9992C14.441 22.2997 14.7992 21.9415 14.7992 21.4997C14.7992 21.0579 14.441 20.6997 13.9992 20.6997H9.99922Z" fill="#8b3aff" class="my-path"></path>
                                <path d="M19.1992 10.4997C19.1992 10.0579 19.5574 9.69971 19.9992 9.69971H20.9992C21.441 9.69971 21.7992 10.0579 21.7992 10.4997C21.7992 10.9415 21.441 11.2997 20.9992 11.2997H19.9992C19.5574 11.2997 19.1992 10.9415 19.1992 10.4997Z" fill="#8b3aff" class="my-path"></path>
                                <path d="M2.99922 9.69971C2.55739 9.69971 2.19922 10.0579 2.19922 10.4997C2.19922 10.9415 2.55739 11.2997 2.99922 11.2997H3.99922C4.44105 11.2997 4.79922 10.9415 4.79922 10.4997C4.79922 10.0579 4.44105 9.69971 3.99922 9.69971H2.99922Z" fill="#8b3aff" class="my-path"></path>
                                <path d="M19.565 4.93402C19.8774 5.24644 19.8774 5.75297 19.565 6.06539L18.8579 6.7725C18.5455 7.08492 18.0389 7.08492 17.7265 6.7725C17.4141 6.46008 17.4141 5.95355 17.7265 5.64113L18.4336 4.93402C18.746 4.6216 19.2526 4.6216 19.565 4.93402Z" fill="#8b3aff" class="my-path"></path>
                                <path d="M5.5649 4.93402C5.25248 4.6216 4.74595 4.6216 4.43353 4.93402C4.12111 5.24644 4.12111 5.75297 4.43353 6.06539L5.14064 6.7725C5.45306 7.08492 5.95959 7.08492 6.27201 6.7725C6.58443 6.46008 6.58443 5.95355 6.27201 5.64113L5.5649 4.93402Z" fill="#8b3aff" class="my-path"></path>
                            </svg>
                        </div>
                        <h4 class="text-lg font-semibold mb-2">Plateforme intuitive</h4>
                        <p class="text-gray-600 text-sm">Pensée pour les médecins, rapide à prendre en main, sans formation complexe.</p>
                    </div>

                    <div class="flex flex-col items-center">
                        <div class="bg-green-100 p-4 rounded-full mb-4">
                            <!-- <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path d="M5 13l4 4L19 7" />
                            </svg> -->
                            <svg width="40px" height="40px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.4" d="M12.0005 2.74146C11.1771 2.74146 10.4207 2.96158 9.58303 3.34105C8.76955 3.70955 7.82604 4.2543 6.63637 4.94116L5.77443 5.4388C5.31353 5.70488 4.91843 5.93297 4.60865 6.155C4.27744 6.39238 3.99212 6.65764 3.78138 7.02265C3.57064 7.38766 3.48358 7.76739 3.4436 8.17291C3.40622 8.55221 3.40623 9.00839 3.40625 9.54057V13.9953C3.40623 14.5275 3.40622 14.9837 3.4436 15.363C3.48358 15.7685 3.57064 16.1482 3.78138 16.5133C3.99212 16.8783 4.27744 17.1435 4.60865 17.3809C4.91844 17.6029 5.31352 17.831 5.77443 18.0971L9.63232 20.3245C10.0932 20.5906 10.4883 20.8187 10.8354 20.9759C11.2066 21.1441 11.579 21.2585 12.0005 21.2585C12.422 21.2585 12.7943 21.1441 13.1655 20.9759C13.5127 20.8187 13.9078 20.5906 14.3686 20.3245L18.2265 18.0971C18.6874 17.831 19.0825 17.6029 19.3923 17.3809C19.7235 17.1435 20.0088 16.8783 20.2196 16.5133C20.4303 16.1482 20.5174 15.7685 20.5574 15.363C20.5947 14.9837 20.5947 14.5275 20.5947 13.9953V9.54062C20.5947 9.00842 20.5947 8.55222 20.5574 8.17291C20.5174 7.76739 20.4303 7.38766 20.2196 7.02265C20.0088 6.65764 19.7235 6.39238 19.3923 6.155C19.0825 5.93297 18.6874 5.70489 18.2265 5.43881L17.3646 4.94117C16.1749 4.2543 15.2314 3.70956 14.4179 3.34105C13.5802 2.96158 12.8239 2.74146 12.0005 2.74146Z" fill="#019803" class="my-path"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12.7992 12.4523C13.9558 12.1081 14.7992 11.0367 14.7992 9.76826C14.7992 8.22186 13.5456 6.96826 11.9992 6.96826C10.4528 6.96826 9.19922 8.22186 9.19922 9.76826C9.19922 11.0367 10.0426 12.1081 11.1992 12.4523L11.1992 15.7683C11.1992 16.2101 11.5574 16.5683 11.9992 16.5683C12.441 16.5683 12.7992 16.2101 12.7992 15.7683L12.7992 12.4523ZM10.7992 9.76826C10.7992 9.10552 11.3365 8.56826 11.9992 8.56826C12.662 8.56826 13.1992 9.10552 13.1992 9.76826C13.1992 10.431 12.662 10.9683 11.9992 10.9683C11.3365 10.9683 10.7992 10.431 10.7992 9.76826Z" fill="#019803" class="my-path"></path>
                            </svg>
                        </div>
                        <h4 class="text-lg font-semibold mb-2">Données protégées</h4>
                        <p class="text-gray-600 text-sm">Respect des normes RGPD et stockage sécurisé de toutes les données médicales.</p>
                    </div>

                    <div class="flex flex-col items-center">
                        <div class="bg-yellow-100 p-4 rounded-full mb-4">
                            <!-- <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path d="M18.364 5.636L12 12M5.636 18.364L12 12" />
                            </svg> -->
                            <svg width="40px" height="40px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.4" d="M13.0596 2.19971H10.9399C9.10503 2.19969 7.64658 2.19968 6.50402 2.35329C5.32606 2.51166 4.3648 2.84639 3.6056 3.6056C2.84639 4.3648 2.51166 5.32606 2.35329 6.50402C2.19968 7.64658 2.19969 9.10503 2.19971 10.9399V13.0596C2.19969 14.8944 2.19968 16.3528 2.35329 17.4954C2.51166 18.6734 2.84639 19.6346 3.6056 20.3938C4.3648 21.153 5.32606 21.4878 6.50402 21.6461C7.64658 21.7997 9.10502 21.7997 10.9398 21.7997H13.0596C14.8944 21.7997 16.3528 21.7997 17.4954 21.6461C18.6734 21.4878 19.6346 21.153 20.3938 20.3938C21.153 19.6346 21.4878 18.6734 21.6461 17.4954C21.7997 16.3528 21.7997 14.8944 21.7997 13.0596V10.9398C21.7997 9.10502 21.7997 7.64658 21.6461 6.50402C21.4878 5.32606 21.153 4.3648 20.3938 3.6056C19.6346 2.84639 18.6734 2.51166 17.4954 2.35329C16.3528 2.19968 14.8944 2.19969 13.0596 2.19971Z" fill="#e3a702" class="my-path"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M17.2363 8.83295C17.5487 9.14537 17.5487 9.6519 17.2363 9.96432L12.927 14.2736C12.9159 14.2847 12.9049 14.2957 12.8939 14.3067C12.5892 14.6115 12.3065 14.8943 12.0448 15.094C11.7552 15.3149 11.3995 15.5079 10.9471 15.5079C10.4947 15.5079 10.139 15.3149 9.8494 15.094C9.58771 14.8943 9.305 14.6115 9.00032 14.3067C8.98931 14.2957 8.97827 14.2847 8.9672 14.2736L7.43451 12.7409C7.12209 12.4285 7.12209 11.922 7.43451 11.6096C7.74693 11.2971 8.25346 11.2971 8.56588 11.6096L10.0986 13.1423C10.4479 13.4916 10.6542 13.6955 10.8199 13.8219C10.8864 13.8727 10.9266 13.8951 10.9471 13.9045C10.9676 13.8951 11.0078 13.8727 11.0743 13.8219C11.24 13.6955 11.4463 13.4916 11.7956 13.1423L16.1049 8.83295C16.4174 8.52053 16.9239 8.52053 17.2363 8.83295ZM10.9299 13.9105C10.9299 13.9105 10.9326 13.9092 10.9373 13.9086C10.9321 13.9105 10.9299 13.9105 10.9299 13.9105ZM10.9569 13.9086C10.9616 13.9092 10.9643 13.9105 10.9643 13.9105C10.9643 13.9105 10.9621 13.9105 10.9569 13.9086Z" fill="#e3a702" class="my-path"></path>
                            </svg>
                        </div>
                        <h4 class="text-lg font-semibold mb-2">Support réactif</h4>
                        <p class="text-gray-600 text-sm">Une équipe à votre écoute 7j/7 pour vous assister à chaque étape.</p>
                    </div>

                </div>
            </div>

        </div>

        <!-- ========== MOYENS DE PAIEMENT ========== -->
        <section class="mt-24" id="paiement">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900">Moyens de Paiement Disponibles</h2>
                <p class="text-gray-600 mt-2">Choisissez le moyen qui vous convient parmi nos solutions locales fiables et rapides.</p>
            </div>

            <div class="flex flex-col md:flex-row justify-center items-center gap-8">
                <!-- MTN Mobile Money -->
                <div class="flex items-center gap-3">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/af/MTN_Logo.svg/300px-MTN_Logo.svg.png" alt="MTN" class="w-28 h-28">
                    <span class="text-gray-700 font-medium text-lg">MTN Mobile Money</span>
                </div>

                <!-- Moov Money -->
                <div class="flex items-center gap-3">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/a/a8/Moov_Money_Flooz.png?20220425115751" alt="Moov" class="w-28 h-28">
                    <span class="text-gray-700 font-medium text-lg">Moov Money</span>
                </div>

                <!-- Celtis Cash -->
                <div class="flex items-center gap-3">
                    <img src="https://pbs.twimg.com/profile_images/1583478753627365376/-Su4Yn3M_400x400.jpg" alt="Celtis Cash" class="w-28 h-28 rounded-lg"> <!-- Remplace ce lien par ton vrai logo -->
                    <span class="text-gray-700 font-medium text-lg">Celtis Cash</span>
                </div>
            </div>

            <!-- CTA -->
            <div class="text-center mt-10">
                <a href="#pricing" class="inline-block bg-indigo-600 text-white px-6 py-3 rounded-lg text-lg font-semibold hover:bg-indigo-700 transition">
                    Souscrire à une offre
                </a>
            </div>
        </section>
        <!-- ========== END MOYENS DE PAIEMENT ========== -->
    </main>


    <!-- ========== END MAIN CONTENT ========== -->
    <!-- ========== FOOTER ========== -->
    <livewire:footer-navigation />
    <!-- ========== END FOOTER ========== -->
</body>

</html>