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
            <div class="row">
                <div class="col-6 col-md-2 col-lg-2">
                    <a href="#home-section" class="logo m-0 float-start">PTL System<span
                            class="text-primary">.</span></a>
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
                    <p><strong class="text-black">Pick to light</strong> est une technologie d'exécution des
                        commandes qui utilise des affichages alphanumériques et des boutons aux emplacements de stockage
                        pour guider la « cueillette » manuelle et l'enregistrement des articles à expédier.</p>
                </div>
                <div class="col-lg-5 ms-auto">
                    <div class="row">
                        <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="100">
                            <a href="#" class="thumb mb-3">
                                <img src="images/lightningpick_pick-to-light_piece_picking.jpg" alt="Image" style="opacity: 0.5">
                            </a>
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
                    <p class="mb-4"><strong class="text-black">Mettre</strong> du texte ...</p>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="step active " data-aos="fade-up" data-aos-delay="100">
                        <span class="number">01</span>
                        <h3>Cas usage 1</h3>
                        <p class="mb-3">Texte explicatif.</p>
                    </div>
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
                    <p class="mb-4"><strong class="text-black">Solution CLÉ en main</strong> bla bla bla
                        ...</p>
                    <p><a href="#contact-section" class="btn btn-primary me-4">NOUS JOINDRE</a></p>
                </div>
            </div>
            <div class="row justify-content-center g-5">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-5">
                    <div class="service " data-aos="fade-up" data-aos-delay="100">
                        <a href="#" class="glightbox d-block mb-4 thumb">
                            <!-- <img src="./" alt="Image" class="img-fluid"> -->
                        </a>
                        <div class="">
                            <h3 class="mb-3"><a href="#">Intégration Matériel</a>
                            </h3>
                            <p>Paragraphe de texte.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-5">
                    <div class="service " data-aos="fade-up" data-aos-delay="200">
                        <a class="glightbox d-block mb-4 thumb">
                            <img src="images/integration logiciel.jpg" alt="Image" class="img-fluid">
                        </a>
                        <div>
                            <h3 class="mb-3"><a href="#">Développement logiciel</a></h3>
                            <p>Paragraphe de texte.</p>
                        </div>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-12 " data-aos="fade-up" data-aos-delay="0">
                        <h2 class="heading mb-2 fw-bold">Fonctionnement</h2>
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
                    <p class="mb-4 desc"><strong class="text-black">Court</strong> texte résumant les
                        bénéfices.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 " data-aos="fade-up"
                    data-aos-delay="100">
                    <div class="client active">
                        <img src="images/percent productivity.png" alt="Image">
                        <h3>Augmentation Productivité</h3>
                        <p>Texte explicant bénéfice.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 " data-aos="fade-up"
                    data-aos-delay="200">
                    <div class="client">
                        <!-- <img src="./" alt="Image"> -->
                        <h3>Bénéfices</h3>
                        <p>Texte explicant bénéfice.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section section-6 section bg-light" id="about-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="0">
                    <div class="heading-wrap">
                        <h2 class="heading">Équipe</h2>
                    </div>
                </div>
                <div class="col-lg-5 ml-auto " data-aos="fade-up" data-aos-delay="100">
                    <p class="mb-4 desc"><strong class="text-black">L'équipe est composé de ...</strong> bla
                        bla bla right</p>
                </div>
            </div>
            <div class="row g-5 justify-content-center">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 " data-aos="fade-up"
                    data-aos-delay="0">
                    <div class="team">
                        <a href="#about-section" class="thumb mb-3"><img src="images/keven-devant-color.png"
                                alt="Image" class="img-fluid"></a>
                        <h3><a href="#">Kéven Bernier Côté</a></h3>
                        <span class="mb-4 text-black-50 d-block">Partenaire, spécialiste logistique</span>
                        <p class="mb-4">Court texte expliquant notre rôle dans la compagnie.</p>
                        <ul class="list-unstyled social">
                            <li><a href="#"><span class="icon-linkedin"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 " data-aos="fade-up"
                    data-aos-delay="200">
                    <div class="team">
                        <a href="#about-section" class="thumb mb-3"><img src="images/olivier-devant-noir.jpg"
                                alt="Image" class="img-fluid"></a>
                        <h3><a href="#">Olivier Rheault Gagnon</a></h3>
                        <span class="mb-4 text-black-50 d-block">Partenaire, spécialiste logiciel</span>
                        <p class="mb-4">Court texte expliquant notre rôle dans la compagnie.</p>
                        <ul class="list-unstyled social">
                            <li><a href="#"><span class="icon-linkedin"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('contact_section')

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
