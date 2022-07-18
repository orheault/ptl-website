<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>PTL System</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/app.css">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-0F6CZC1E3G"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-0F6CZC1E3G');
    </script>
</head>

<body data-bs-spy="scroll" data-bs-target="#site-navbar-target" data-bs-offset="100">
    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>
    <nav class="site-nav js-site-navbar site-navbar-target" id="site-navbar-target">
        <div class="container site-navigation">
            <div class="row align-items-center">
                <div class="col-6 col-md-2 col-lg-2">
                    <a href="#home-section"><img src="images/logo-original.png" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-md-8 d-none d-md-block col-lg-8 text-center">
                    <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu p-0 m-0 ">
                        <li><a href="#home-section" class="nav-link active">Accueil</a></li>
                        <li><a href="#cas-usage-section" class="nav-link">Cas d'usage</a></li>
                        <li><a href="#solution-section" class="nav-link">Solutions</a></li>
                        <li><a href="#benefice-section" class="nav-link">Bénéfices</a></li>
                        <li><a href="#about-section" class="nav-link">L'équipe</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-2 col-lg-2">
                    <ul class="js-clone-nav d-none d-lg-inline-block text-end float-end site-menu p-0 m-0 ">
                        <li>
                            <div class="col-lg-10 ml-auto " data-aos="fade-up" data-aos-delay="100">
                                <a href="#contact-section" class="btn btn-primary me-4">Nous Joindre</a>
                            </div>
                        </li>
                    </ul>
                    <a href="#"
                        class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none"
                        data-toggle="collapse" data-target="#main-navbar">
                        <span></span>
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <div class="hero" id="home-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mx-auto">
                    <h1 class="heading" data-aos="fade-up">Nous installons des systèmes Pick To Light</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="section pt-0 section-1">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-4 ml-auto " data-aos="fade-up">
                    <p>
                        PTL Sytem <strong class="text-black"> intègre</strong> une technologie d'exécution des
                        commandes, <strong class="text-black">clé en main</strong> pour guider vos employés dans la
                        cueillette, la mise en place, le tri et l'assemblage manuels.
                    </p>
                </div>
                <div class="col-lg-5 ms-auto">
                    <div class="row">
                        <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="100">
                            <img src="images/lightningpick_pick-to-light_piece_picking.jpg" alt="Image"
                                style="opacity: 0.5; width:350px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section bg-light" id="cas-usage-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="0">
                    <div class="heading-wrap">
                        <h2 class="heading ">Cas D'usage</h2>
                    </div>
                </div>
                <div class="col-lg-5 ml-auto " data-aos="fade-up" data-aos-delay="100">
                    <p class="mb-4">Ce système se retrouve dans des processus variés</p>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="step active " data-aos="fade-up" data-aos-delay="100">
                        <img src="images/kitting cut.png" class="cas-usage-image img-fluid d-block mb-4 thumb" alt="Image"
                            style="opacity: 0.5; width: 334px;
                            height: 223px;">
                        <span class="number">01</span>
                        <h3>kitting</h3>

                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="step " data-aos="fade-up" data-aos-delay="100">
                        <img src="images/preparation commande-cut.jpg" class="cas-usage-image img-fluid d-block mb-4 thumb"
                            alt="Image" style="opacity: 0.5;width: 334px;
                            height: 223px;">
                        <span class="number">02</span>
                        <h3>la préparation de commandes</h3>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="step " data-aos="fade-up" data-aos-delay="100">
                        <img src="images/Assemblage de produit.jpg"
                            class="cas-usage-image img-fluid d-block mb-4 thumb" alt="Image" style="opacity: 0.5;width: 334px;
                            height: 223px;">
                        <span class="number">03</span>
                        <h3>l’assemblage de produits </h3>
                    </div>
                </div>

                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="0">
                    <h3>Exemple d'industrie</h3>
                    <ul>
                        <li>Meuble</li>
                        <li>Pharmaceutique</li>
                        <li>Alimentaire</li>
                        <li>Commerce en ligne</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <div class="section section-3" id="solution-section">
        <div class="container">
            <div class="row mb-5 ">
                <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="0">
                    <div class="heading-wrap">
                        <h2 class="heading">Solutions</h2>
                    </div>
                </div>
                <div class="col-lg-5 ml-auto " data-aos="fade-up" data-aos-delay="100">
                    <p class="mb-4"><strong class="text-black">Solution CLÉ en main.</strong> Intégration d'un
                        système de traitement de commande améliorant la cuillette de la quincaillerie. Cette intégration
                        est adapté selon votre logiciel de gestion.</p>
                    <p><a href="#contact-section" class="btn btn-primary me-4">NOUS JOINDRE</a></p>
                </div>
            </div>
            <div class="row justify-content-center g-5">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-5">
                    <div class="service " data-aos="fade-up" data-aos-delay="100">
                            <img src="images/analyse des besoins 2.jpg" alt="Image" class="img-fluid d-block mb-4 thumb image-solution">
                        <div class="">
                            <h3 class="mb-3"><span class="title-item">Analyse des besoins</span>
                            </h3>
                            <p>À prioris, une analyse des besoins est effectué, comprenant:
                            <ul>
                                <li>Étude préliminaire de rentabilitée </li>
                                <li>Analyse des processus internes</li>
                                <li>Définition des besoins matériel et logiciel</li>
                            </ul>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-5">
                    <div class="service " data-aos="fade-up" data-aos-delay="200">
                        <a class="d-block mb-4 thumb">
                            <img src="images/intégration matériel - cut.jpg" alt="Image" class="img-fluid image-solution">
                        </a>
                        <div>
                            <h3 class="mb-3"><span class="title-item">Intégration Matériel</span></h3>
                            <p>Nous installons tous le matériel nécessaire au système Pick to Light</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-5">
                    <div class="service " data-aos="fade-up" data-aos-delay="200">
                        <a class="d-block mb-4 thumb">
                            <img src="images/integration logiciel4.jpg" alt="Image" class="img-fluid image-solution">
                        </a>
                        <div>
                            <h3 class="mb-3"><span class="title-item">Intégration logiciel</span></h3>
                            <p>Nous développons une intégration à votre logiciel de gestion</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-5">
                    <div class="service " data-aos="fade-up" data-aos-delay="200">
                        <a class="d-block mb-4 thumb">
                            <img src="images/Formation 2.jpg" alt="Image" class="img-fluid image-solution">
                        </a>
                        <div>
                            <h3 class="mb-3"><span class="title-item">Formation</span></h3>
                            <p>Une formation est donnée afin de maîtriser le système</p>
                        </div>
                    </div>
                </div>

                <div class="row mb-5" style="padding-top: 30px;">
                    <div class="col-12" data-aos="fade-up" data-aos-delay="100">
                        <h3 class="heading mb-2 fw-bold">Fonctionnement</h3>
                        Voici le fonctionnement de façon général:
                        <ul>
                            <li>L'opérateur scanne le code-barres de la commande </li>
                            <li>L'affichage des modules PTL sous chaque pièces de quincailleries nécessaires s'allument
                            </li>
                            <li>Chaque module PTL indique la quantité de pièces à récupérer</li>
                            <li>L'opérateur prend chacune des pièces de quincallerie et confirme la cueillette en
                                appuyant sur le bouton désigné</li>
                            <li>Le système Pick to Light continue son fonctionnement jusqu'à la fin de la prise de
                                commande</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section section-4" id="benefice-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="0">
                    <div class="heading-wrap">
                        <h2 class="heading text-white">Bénéfices</h2>
                    </div>
                </div>
                <div class="col-lg-5 ml-auto " data-aos="fade-up" data-aos-delay="100">
                    <p class="mb-4 desc"> Retour sur investissement en moins d'un an</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 " data-aos="fade-up" data-aos-delay="100">
                    <div class="benefice-kpi-box" style="    min-height: 100px;">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 " data-aos="fade-up" data-aos-delay="100">
                    <div class="client active">
                        <h3>Efficacité accrue</h3>
                        <ul>
                            <li>Augmente d'au moins 150% le temps de ramassage de la quincaillerie</li>
                            <li>Réduient les coûts de main d'oeuvre</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 " data-aos="fade-up" data-aos-delay="150">
                    <div class="client">
                        <h3>Diminution des erreurs</h3>
                        <ul>
                            <li>Augmente significativement la précision de la cueillette</li>
                            <li>Réduction des plaintes clients</li>
                            <li>Diminution des coûts de retour</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 " data-aos="fade-up" data-aos-delay="200">
                    <div class="client">
                        <h3>Facilité d'utilisation</h3>
                        <ul>
                            <li>Formation du système en moins de 45 minutes</li>
                            <li>Système main libre</li>
                            <li>Système sans papier</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 " data-aos="fade-up" data-aos-delay="250">
                    <div class="client">
                        <h3>Palier au manque de main d'oeuvre</h3>
                        <ul>
                            <li>Problème actuel au Québec</li>
                            <li>Réduction de la main d'oeuvre qualifié</li>
                            <li>Faible formation nécessaire</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('contact_section')

    @include('team_section')

    <div class="site-footer">
        <div class="inner dark">
            <div class="container">
                <div class="row text-center text-md-start">
                    <div class="col-md-6 mb-3 mb-md-0">
                        <p>Copyright ©
                            <script>
                                document.write(new Date().getFullYear());
                            </script> Tout droit réservé
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border" role="status">
            <span class="visually-hidden">Chargement...</span>
        </div>
    </div>
    <script src="scripts/bootstrap.bundle.min.js"></script>
    <script src="scripts/tiny-slider.js"></script>
    <script src="scripts/aos.js+navbar.js+page-scroll.js+counter.js+glightbox.min.js+custom.js.pagespeed.jc.x5Q8-4F1U3.js">
    </script>

    <script>
        eval(mod_pagespeed_$T15uOl4gQ);
    </script>
    <script>
        eval(mod_pagespeed_TqKI1qGJDk);
    </script>
    <script>
        eval(mod_pagespeed_xcIKdQVSb3);
    </script>
    <script>
        eval(mod_pagespeed_YzMWgdcg_B);
    </script>
    <script>
        eval(mod_pagespeed_khti_hK$sd);
    </script>
    <script>
        eval(mod_pagespeed_iktGhcoLEk);
    </script>
</body>

</html>
