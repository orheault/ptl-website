<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PTL Website</title>

    <!-- Fonts -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> -->

    <!-- Styles -->
    <link rel="stylesheet" href="/app.css">
<!-- 
	<script defer="" referrerpolicy="origin"
		src="s.js"></script>
	<script
		nonce="e6e4a7c7-e11f-4e30-ba7d-feb9dc2cf415">(function (w, d) { !function (a, e, t, r) { a.zarazData = a.zarazData || {}, a.zarazData.executed = [], a.zaraz = { deferred: [] }, a.zaraz.q = [], a.zaraz._f = function (e) { return function () { var t = Array.prototype.slice.call(arguments); a.zaraz.q.push({ m: e, a: t }) } }; for (const e of ["track", "set", "ecommerce", "debug"]) a.zaraz[e] = a.zaraz._f(e); a.addEventListener("DOMContentLoaded", (() => { var t = e.getElementsByTagName(r)[0], z = e.createElement(r), n = e.getElementsByTagName("title")[0]; for (n && (a.zarazData.t = e.getElementsByTagName("title")[0].text), a.zarazData.x = Math.random(), a.zarazData.w = a.screen.width, a.zarazData.h = a.screen.height, a.zarazData.j = a.innerHeight, a.zarazData.e = a.innerWidth, a.zarazData.l = a.location.href, a.zarazData.r = e.referrer, a.zarazData.k = a.screen.colorDepth, a.zarazData.n = e.characterSet, a.zarazData.o = (new Date).getTimezoneOffset(), a.zarazData.q = []; a.zaraz.q.length;) { const e = a.zaraz.q.shift(); a.zarazData.q.push(e) } z.defer = !0; for (const e of [localStorage, sessionStorage]) Object.keys(e).filter((a => a.startsWith("_zaraz_"))).forEach((t => { try { a.zarazData["z_" + t.slice(7)] = JSON.parse(e.getItem(t)) } catch { a.zarazData["z_" + t.slice(7)] = e.getItem(t) } })); z.referrerPolicy = "origin", z.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(a.zarazData))), t.parentNode.insertBefore(z, t) })) }(w, d, 0, "script"); })(window, document);</script> -->


</head>
<!-- <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">
                        <g clip-path="url(#clip0)" fill="#EF3B2D">
                            <path d="M248.032 44.676h-16.466v100.23h47.394v-14.748h-30.928V44.676zM337.091 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.431 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162-.001 2.863-.479 5.584-1.432 8.161zM463.954 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.432 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162 0 2.863-.479 5.584-1.432 8.161zM650.772 44.676h-15.606v100.23h15.606V44.676zM365.013 144.906h15.607V93.538h26.776V78.182h-42.383v66.724zM542.133 78.182l-19.616 51.096-19.616-51.096h-15.808l25.617 66.724h19.614l25.617-66.724h-15.808zM591.98 76.466c-19.112 0-34.239 15.706-34.239 35.079 0 21.416 14.641 35.079 36.239 35.079 12.088 0 19.806-4.622 29.234-14.688l-10.544-8.158c-.006.008-7.958 10.449-19.832 10.449-13.802 0-19.612-11.127-19.612-16.884h51.777c2.72-22.043-11.772-40.877-33.023-40.877zm-18.713 29.28c.12-1.284 1.917-16.884 18.589-16.884 16.671 0 18.697 15.598 18.813 16.884h-37.402zM184.068 43.892c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002-35.648-20.524a2.971 2.971 0 00-2.964 0l-35.647 20.522-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v38.979l-29.706 17.103V24.493a3 3 0 00-.103-.776c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002L40.098 1.396a2.971 2.971 0 00-2.964 0L1.487 21.919l-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v122.09c0 1.063.568 2.044 1.489 2.575l71.293 41.045c.156.089.324.143.49.202.078.028.15.074.23.095a2.98 2.98 0 001.524 0c.069-.018.132-.059.2-.083.176-.061.354-.119.519-.214l71.293-41.045a2.971 2.971 0 001.489-2.575v-38.979l34.158-19.666a2.971 2.971 0 001.489-2.575V44.666a3.075 3.075 0 00-.106-.774zM74.255 143.167l-29.648-16.779 31.136-17.926.001-.001 34.164-19.669 29.674 17.084-21.772 12.428-43.555 24.863zm68.329-76.259v33.841l-12.475-7.182-17.231-9.92V49.806l12.475 7.182 17.231 9.92zm2.97-39.335l29.693 17.095-29.693 17.095-29.693-17.095 29.693-17.095zM54.06 114.089l-12.475 7.182V46.733l17.231-9.92 12.475-7.182v74.537l-17.231 9.921zM38.614 7.398l29.693 17.095-29.693 17.095L8.921 24.493 38.614 7.398zM5.938 29.632l12.475 7.182 17.231 9.92v79.676l.001.005-.001.006c0 .114.032.221.045.333.017.146.021.294.059.434l.002.007c.032.117.094.222.14.334.051.124.088.255.156.371a.036.036 0 00.004.009c.061.105.149.191.222.288.081.105.149.22.244.314l.008.01c.084.083.19.142.284.215.106.083.202.178.32.247l.013.005.011.008 34.139 19.321v34.175L5.939 144.867V29.632h-.001zm136.646 115.235l-65.352 37.625V148.31l48.399-27.628 16.953-9.677v33.862zm35.646-61.22l-29.706 17.102V66.908l17.231-9.92 12.475-7.182v33.841z"/>
                        </g>
                    </svg>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">Documentation</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="underline text-gray-900 dark:text-white">Laracasts</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel-news.com/" class="underline text-gray-900 dark:text-white">Laravel News</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline">Forge</a>, <a href="https://vapor.laravel.com" class="underline">Vapor</a>, <a href="https://nova.laravel.com" class="underline">Nova</a>, and <a href="https://envoyer.io" class="underline">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline">Telescope</a>, and more.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>

                            <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                                Shop
                            </a>

                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>

                            <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body> -->

<body data-bs-spy="scroll" data-bs-target="#site-navbar-target" data-bs-offset="100" data-aos-easing="slide" data-aos-duration="800" data-aos-delay="0">
    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body">
            <ul class="site-nav-wrap">
                <li><a href="#home-section" class="nav-link active">Accueil</a>
                </li>
                <li><a href="#benefice-section" class="nav-link">Bénéfices</a>
                </li>
                <li><a href="#cas-usage-section" class="nav-link">Cas d'usage</a>
                </li>
                <li><a href="#clients-section" class="nav-link">Solutions</a>
                </li>
                <li><a href="#about-section" class="nav-link">L'équipe</a></li>
            </ul>
            <ul class="site-nav-wrap">
                <li>
                    <!-- <a href="#contact-section" class="nav-link">Nous joindre -->
                    <div class="col-lg-5 ml-auto aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                        <a href="https://preview.colorlib.com/theme/pageone/#contact-section" class="btn btn-primary me-4">Get In Touch</a>
                    </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <nav class="site-nav js-site-navbar site-navbar-target" id="site-navbar-target">
        <div class="container site-navigation">
            <div class="row">
                <div class="col-6 col-md-2 col-lg-2">
                    <a href="https://preview.colorlib.com/theme/pageone/index.html" class="logo m-0 float-start">PTL System<span class="text-primary">.</span></a>
                </div>
                <div class="col-md-8 d-none d-md-block col-lg-8 text-center">
                    <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu p-0 m-0 ">
                        <li><a href="#home-section" class="nav-link active">Accueil</a></li>
                        <li><a href="#benefice-section" class="nav-link">Bénéfices</a>
                        </li>
                        <li><a href="#cas-usage-section" class="nav-link">Cas d'usage</a></li>
                        <li><a href="#clients-section" class="nav-link">Solutions</a></li>
                        <li><a href="#about-section" class="nav-link">L'équipe</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-2 col-lg-2">
                    <ul class="js-clone-nav d-none d-lg-inline-block text-end float-end site-menu p-0 m-0 ">
                        <li>
                            <!-- <a href="#contact-section" class="nav-link">Nous joindre -->
                            <div class="col-lg-10 ml-auto aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                                <a href="#contact-section" class="btn btn-primary me-4">Nous Joindre</a>
                            </div>
                        </li>
                    </ul>
                    <a href="https://preview.colorlib.com/theme/pageone/#" class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none" data-toggle="collapse" data-target="#main-navbar">
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
                    <h1 class="heading aos-init aos-animate" data-aos="fade-up">Nous installons des systèmes Pick To Light</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="section pt-0 section-1">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-4 ml-auto aos-init aos-animate" data-aos="fade-up">
					<p><strong class="text-black">Pick to light</strong> est une technologie d'exécution des commandes qui utilise des affichages alphanumériques et des boutons aux emplacements de stockage pour guider la « cueillette » manuelle et l'enregistrement des articles à expédier.</p>
				</div>
				<div class="col-lg-5 ms-auto">
					<div class="row">
						<div class="col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                        <a href="https://preview.colorlib.com/theme/pageone/#" class="thumb mb-3">

                        <img src="images/lightningpick_pick-to-light_piece_picking.jpg"
							alt="Image" data-pagespeed-url-hash="1811422933"
                            style="opacity: 0.5"
							onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                            </a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <div class="section bg-light" id="benefice-section">
        <div class="container">
            <div class="row mb-5 ">
                <div class="col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="0">
                    <div class="heading-wrap">
                        <h2 class="heading">Bénéfices</h2>
                    </div>
                </div>
                <div class="col-lg-5 ml-auto aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                    <p class="mb-4"><strong class="text-black">Separated they live in Bookmarksgrove</strong> right at
                        the coast of the Semantics, a large language ocean. Far far away, behind the word mountains, far
                        from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p><a href="https://preview.colorlib.com/theme/pageone/#contact-section" class="btn btn-primary me-4">Get In Touch</a></p>
                </div>
            </div>
            <div class="row justify-content-center g-5">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-5">
                    <div class="service aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                        <a href="https://preview.colorlib.com/theme/pageone/images/img_1.jpg" class="glightbox d-block mb-4 thumb">
                            <script data-pagespeed-no-defer="">
                                //<![CDATA[
                                (function() {
                                    for (var g = "function" == typeof Object.defineProperties ? Object.defineProperty : function(b, c, a) {
                                            if (a.get || a.set) throw new TypeError("ES3 does not support getters and setters.");
                                            b != Array.prototype && b != Object.prototype && (b[c] = a.value)
                                        }, h = "undefined" != typeof window && window === this ? this : "undefined" != typeof global && null != global ? global : this, k = ["String", "prototype", "repeat"], l = 0; l < k.length - 1; l++) {
                                        var m = k[l];
                                        m in h || (h[m] = {});
                                        h = h[m]
                                    }
                                    var n = k[k.length - 1],
                                        p = h[n],
                                        q = p ? p : function(b) {
                                            var c;
                                            if (null == this) throw new TypeError("The 'this' value for String.prototype.repeat must not be null or undefined");
                                            c = this + "";
                                            if (0 > b || 1342177279 < b) throw new RangeError("Invalid count value");
                                            b |= 0;
                                            for (var a = ""; b;)
                                                if (b & 1 && (a += c), b >>>= 1) c += c;
                                            return a
                                        };
                                    q != p && null != q && g(h, n, {
                                        configurable: !0,
                                        writable: !0,
                                        value: q
                                    });
                                    var t = this;

                                    function u(b, c) {
                                        var a = b.split("."),
                                            d = t;
                                        a[0] in d || !d.execScript || d.execScript("var " + a[0]);
                                        for (var e; a.length && (e = a.shift());) a.length || void 0 === c ? d[e] ? d = d[e] : d = d[e] = {} : d[e] = c
                                    };

                                    function v(b) {
                                        var c = b.length;
                                        if (0 < c) {
                                            for (var a = Array(c), d = 0; d < c; d++) a[d] = b[d];
                                            return a
                                        }
                                        return []
                                    };

                                    function w(b) {
                                        var c = window;
                                        if (c.addEventListener) c.addEventListener("load", b, !1);
                                        else if (c.attachEvent) c.attachEvent("onload", b);
                                        else {
                                            var a = c.onload;
                                            c.onload = function() {
                                                b.call(this);
                                                a && a.call(this)
                                            }
                                        }
                                    };
                                    var x;

                                    function y(b, c, a, d, e) {
                                        this.h = b;
                                        this.j = c;
                                        this.l = a;
                                        this.f = e;
                                        this.g = {
                                            height: window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight,
                                            width: window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth
                                        };
                                        this.i = d;
                                        this.b = {};
                                        this.a = [];
                                        this.c = {}
                                    }

                                    function z(b, c) {
                                        var a, d, e = c.getAttribute("data-pagespeed-url-hash");
                                        if (a = e && !(e in b.c))
                                            if (0 >= c.offsetWidth && 0 >= c.offsetHeight) a = !1;
                                            else {
                                                d = c.getBoundingClientRect();
                                                var f = document.body;
                                                a = d.top + ("pageYOffset" in window ? window.pageYOffset : (document.documentElement || f.parentNode || f).scrollTop);
                                                d = d.left + ("pageXOffset" in window ? window.pageXOffset : (document.documentElement || f.parentNode || f).scrollLeft);
                                                f = a.toString() + "," + d;
                                                b.b.hasOwnProperty(f) ? a = !1 : (b.b[f] = !0, a = a <= b.g.height && d <= b.g.width)
                                            } a && (b.a.push(e),
                                            b.c[e] = !0)
                                    }
                                    y.prototype.checkImageForCriticality = function(b) {
                                        b.getBoundingClientRect && z(this, b)
                                    };
                                    u("pagespeed.CriticalImages.checkImageForCriticality", function(b) {
                                        x.checkImageForCriticality(b)
                                    });
                                    u("pagespeed.CriticalImages.checkCriticalImages", function() {
                                        A(x)
                                    });

                                    function A(b) {
                                        b.b = {};
                                        for (var c = ["IMG", "INPUT"], a = [], d = 0; d < c.length; ++d) a = a.concat(v(document.getElementsByTagName(c[d])));
                                        if (a.length && a[0].getBoundingClientRect) {
                                            for (d = 0; c = a[d]; ++d) z(b, c);
                                            a = "oh=" + b.l;
                                            b.f && (a += "&n=" + b.f);
                                            if (c = !!b.a.length)
                                                for (a += "&ci=" + encodeURIComponent(b.a[0]), d = 1; d < b.a.length; ++d) {
                                                    var e = "," + encodeURIComponent(b.a[d]);
                                                    131072 >= a.length + e.length && (a += e)
                                                }
                                            b.i && (e = "&rd=" + encodeURIComponent(JSON.stringify(B())), 131072 >= a.length + e.length && (a += e), c = !0);
                                            C = a;
                                            if (c) {
                                                d = b.h;
                                                b = b.j;
                                                var f;
                                                if (window.XMLHttpRequest) f =
                                                    new XMLHttpRequest;
                                                else if (window.ActiveXObject) try {
                                                    f = new ActiveXObject("Msxml2.XMLHTTP")
                                                } catch (r) {
                                                    try {
                                                        f = new ActiveXObject("Microsoft.XMLHTTP")
                                                    } catch (D) {}
                                                }
                                                f && (f.open("POST", d + (-1 == d.indexOf("?") ? "?" : "&") + "url=" + encodeURIComponent(b)), f.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"), f.send(a))
                                            }
                                        }
                                    }

                                    function B() {
                                        var b = {},
                                            c;
                                        c = document.getElementsByTagName("IMG");
                                        if (!c.length) return {};
                                        var a = c[0];
                                        if (!("naturalWidth" in a && "naturalHeight" in a)) return {};
                                        for (var d = 0; a = c[d]; ++d) {
                                            var e = a.getAttribute("data-pagespeed-url-hash");
                                            e && (!(e in b) && 0 < a.width && 0 < a.height && 0 < a.naturalWidth && 0 < a.naturalHeight || e in b && a.width >= b[e].o && a.height >= b[e].m) && (b[e] = {
                                                rw: a.width,
                                                rh: a.height,
                                                ow: a.naturalWidth,
                                                oh: a.naturalHeight
                                            })
                                        }
                                        return b
                                    }
                                    var C = "";
                                    u("pagespeed.CriticalImages.getBeaconData", function() {
                                        return C
                                    });
                                    u("pagespeed.CriticalImages.Run", function(b, c, a, d, e, f) {
                                        var r = new y(b, c, a, e, f);
                                        x = r;
                                        d && w(function() {
                                            window.setTimeout(function() {
                                                A(r)
                                            }, 0)
                                        })
                                    });
                                })();

                                pagespeed.CriticalImages.Run('/mod_pagespeed_beacon', '', '-ilGEe-FWC', true, false, 'b6_1UhH2ezM');
                                //]]>
                                // 
                            </script>
                            <!-- <img src="./Pageone — Free Bootstrap 5 Website Template by Colorlib_files/ximg_1.jpg.pagespeed.ic.4tvbU5MAj5.webp" alt="Image" class="img-fluid" data-pagespeed-url-hash="3056568080" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"> -->
                        </a>
                        <div class="">
                            <h3 class="mb-3"><a href="https://preview.colorlib.com/theme/pageone/#">Graphic Design</a>
                            </h3>
                            <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large
                                language ocean. Far far away, behind the word mountains, far from the countries Vokalia
                                and Consonantia, there live the blind texts.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-5">
                    <div class="service aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                        <!-- <a href="https://preview.colorlib.com/theme/pageone/images/img_2.jpg" class="glightbox d-block mb-4 thumb"><img src="./Pageone — Free Bootstrap 5 Website Template by Colorlib_files/ximg_2.jpg.pagespeed.ic.yMZ53wnSqg.webp" alt="Image" class="img-fluid" data-pagespeed-url-hash="3351068001" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a> -->
                        <div class="">
                            <h3 class="mb-3"><a href="https://preview.colorlib.com/theme/pageone/#">Web Development</a>
                            </h3>
                            <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large
                                language ocean. Far far away, behind the word mountains, far from the countries Vokalia
                                and Consonantia, there live the blind texts.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-5">
                    <div class="service aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                        <!-- <a href="https://preview.colorlib.com/theme/pageone/images/img_3.jpg" class="glightbox d-block mb-4 thumb"><img src="./Pageone — Free Bootstrap 5 Website Template by Colorlib_files/ximg_3.jpg.pagespeed.ic.5-py9_Gm9i.webp" alt="Image" class="img-fluid" data-pagespeed-url-hash="3645567922" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a> -->
                        <div class="">
                            <h3 class="mb-3"><a href="https://preview.colorlib.com/theme/pageone/#">Branding</a></h3>
                            <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large
                                language ocean. Far far away, behind the word mountains, far from the countries Vokalia
                                and Consonantia, there live the blind texts.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-5">
                    <div class="service aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                        <!-- <a href="https://preview.colorlib.com/theme/pageone/images/img_4.jpg" class="glightbox d-block mb-4 thumb"><img src="./Pageone — Free Bootstrap 5 Website Template by Colorlib_files/ximg_4.jpg.pagespeed.ic.xitJiC5SVk.webp" alt="Image" class="img-fluid" data-pagespeed-url-hash="3940067843" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a> -->
                        <div class="">
                            <h3 class="mb-3"><a href="https://preview.colorlib.com/theme/pageone/#">Iconography</a></h3>
                            <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large
                                language ocean. Far far away, behind the word mountains, far from the countries Vokalia
                                and Consonantia, there live the blind texts.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section section-3" id="cas-usage-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="0">
                    <div class="heading-wrap">
                        <h2 class="heading ">Cas D'usage</h2>
                    </div>
                </div>
                <div class="col-lg-5 ml-auto aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                    <p class="mb-4"><strong class="text-black">Separated they live in Bookmarksgrove</strong> right at
                        the coast of the Semantics, a large language ocean. Far far away, behind the word mountains, far
                        from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p><a href="https://preview.colorlib.com/theme/pageone/#" class="btn btn-primary me-4">Learn
                            More</a> <a href="https://preview.colorlib.com/theme/pageone/#" class="link-muted">Scroll
                            down</a></p>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="step active aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                        <span class="number">01</span>
                        <h3>Information Gathering</h3>
                        <p class="mb-3">Far far away, behind the word mountains, far from the countries Vokalia and
                            Consonantia, there live the blind texts.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="step aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                        <span class="number">02</span>
                        <h3>Planning</h3>
                        <p class="mb-3">Far far away, behind the word mountains, far from the countries Vokalia and
                            Consonantia, there live the blind texts.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="step aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                        <span class="number">03</span>
                        <h3>Design</h3>
                        <p class="mb-3">Far far away, behind the word mountains, far from the countries Vokalia and
                            Consonantia, there live the blind texts.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="step aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                        <span class="number">04</span>
                        <h3>Development</h3>
                        <p class="mb-3">Far far away, behind the word mountains, far from the countries Vokalia and
                            Consonantia, there live the blind texts.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="step aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                        <span class="number">05</span>
                        <h3>Testing and Delivery</h3>
                        <p class="mb-3">Far far away, behind the word mountains, far from the countries Vokalia and
                            Consonantia, there live the blind texts.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="step aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                        <span class="number">06</span>
                        <h3>Maintenance</h3>
                        <p class="mb-3">Far far away, behind the word mountains, far from the countries Vokalia and
                            Consonantia, there live the blind texts.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section section-4" id="clients-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="0">
                    <div class="heading-wrap">
                        <h2 class="heading text-white">Solutions</h2>
                    </div>
                </div>
                <div class="col-lg-5 ml-auto aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                    <p class="mb-4 desc"><strong class="text-black">Separated they live in Bookmarksgrove</strong> right
                        at the coast of the Semantics, a large language ocean. Far far away, behind the word mountains,
                        far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                    <div class="client active">
                        <!-- <img src="./Pageone — Free Bootstrap 5 Website Template by Colorlib_files/xlogo-goldline.png.pagespeed.ic.40nSQphVgJ.webp" alt="Image" data-pagespeed-url-hash="1811422933" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"> -->
                        <h3>Goldline</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                    <div class="client">
                        <!-- <img src="./Pageone — Free Bootstrap 5 Website Template by Colorlib_files/xlogo-foxhub.png.pagespeed.ic.m_RIIjdghM.webp" alt="Image" data-pagespeed-url-hash="3324223159" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"> -->
                        <h3>Foxhub</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                    <div class="client">
                        <!-- <img src="./Pageone — Free Bootstrap 5 Website Template by Colorlib_files/xlogo-ideaa.png.pagespeed.ic.dcrk4QzNLC.webp" alt="Image" data-pagespeed-url-hash="4071894031" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"> -->
                        <h3>Ideaa</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                    <div class="client">
                        <!-- <img src="./Pageone — Free Bootstrap 5 Website Template by Colorlib_files/xlogo-nirastate.png.pagespeed.ic.PYMusK9IB_.webp" alt="Image" data-pagespeed-url-hash="1448915608" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"> -->
                        <h3>Nirastate</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                    <div class="client">
                        <!-- <img src="./Pageone — Free Bootstrap 5 Website Template by Colorlib_files/xlogo-treva.png.pagespeed.ic.djPyQqXp3h.webp" alt="Image" data-pagespeed-url-hash="803003139" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"> -->
                        <h3>Treva</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                    <div class="client">
                        <!-- <img src="./Pageone — Free Bootstrap 5 Website Template by Colorlib_files/xlogo-goldline.png.pagespeed.ic.40nSQphVgJ.webp" alt="Image" data-pagespeed-url-hash="1811422933" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"> -->
                        <h3>Goldline</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section section-6" id="about-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="0">
                    <div class="heading-wrap">
                        <h2 class="heading">Équipe</h2>
                    </div>
                </div>
                <div class="col-lg-5 ml-auto aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                    <p class="mb-4 desc"><strong class="text-black">L'équipe est composé de ...</strong> bla bla bla right
                        at the coast of the Semantics, a large language ocean. Far far away, behind the word mountains,
                        far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
            </div>
            <div class="row g-5 justify-content-center">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 aos-init aos-animate" data-aos="fade-up" data-aos-delay="0">
                    <div class="team">
                        <a href="https://preview.colorlib.com/theme/pageone/#" class="thumb mb-3"><img src="images/keven-devant-color.jpg" alt="Image" class="img-fluid" data-pagespeed-url-hash="2854580370" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                        <h3><a href="https://preview.colorlib.com/theme/pageone/#">Kéven Bernier Côté</a></h3>
                        <span class="mb-4 text-black-50 d-block">Partenaire</span>
                        <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and
                            Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the
                            coast of the Semantics, a large language ocean.</p>
                        <ul class="list-unstyled social">
                            <li><a href="https://preview.colorlib.com/theme/pageone/#"><span class="icon-linkedin"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                    <div class="team">
                        <a href="https://preview.colorlib.com/theme/pageone/#" class="thumb mb-3"><img src="images/olivier-devant-noir.jpg" alt="Image" class="img-fluid" data-pagespeed-url-hash="3149080291" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                        <h3><a href="https://preview.colorlib.com/theme/pageone/#">Olivier Rheault Gagnon</a></h3>
                        <span class="mb-4 text-black-50 d-block">Partenaire</span>
                        <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and
                            Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the
                            coast of the Semantics, a large language ocean.</p>
                        <ul class="list-unstyled social">
                            <li><a href="https://preview.colorlib.com/theme/pageone/#"><span class="icon-linkedin"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-5" id="contact-section">
        <div class="row mb-5">
            <div class="col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="0">
                <div class="heading-wrap">
                    <h2 class="heading">Nous Joindre</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-5 mb-lg-0 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                <form class="contact-form">
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label class="text-black" for="fname">First name</label>
                                <input type="text" class="form-control" id="fname">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label class="text-black" for="lname">Last name</label>
                                <input type="text" class="form-control" id="lname">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="text-black" for="email">Email address</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <div class="mb-3">
                        <label class="text-black" for="message">Message</label>
                        <textarea name="" class="form-control" id="message" cols="30" rows="5"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
            <div class="col-lg-5 ml-auto aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                <div class="quick-contact-item d-flex align-items-center mb-4">
                    <span class="icon-home"></span>
                    <address class="text">
                        155 Market St #101, Paterson, NJ 07505, United States
                    </address>
                </div>
                <div class="quick-contact-item d-flex align-items-center mb-4">
                    <span class="icon-phone"></span>
                    <address class="text">
                        +1 202 2020 200
                    </address>
                </div>
                <div class="quick-contact-item d-flex align-items-center mb-4">
                    <span class="icon-envelope"></span>
                    <address class="text">
                        @info@mydomain.com
                    </address>
                </div>
            </div>
        </div>
    </div>
    <div class="site-footer">
        <div class="inner first">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="widget">
                            <h3 class="heading">About</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts.</p>
                        </div>
                        <div class="widget">
                            <ul class="list-unstyled social">
                                <li><a href="https://preview.colorlib.com/theme/pageone/#"><span class="icon-twitter"></span></a></li>
                                <li><a href="https://preview.colorlib.com/theme/pageone/#"><span class="icon-instagram"></span></a></li>
                                <li><a href="https://preview.colorlib.com/theme/pageone/#"><span class="icon-facebook"></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2 pl-lg-5">
                        <div class="widget">
                            <h3 class="heading">Pages</h3>
                            <ul class="links list-unstyled">
                                <li><a href="https://preview.colorlib.com/theme/pageone/#">Blog</a></li>
                                <li><a href="https://preview.colorlib.com/theme/pageone/#">About</a></li>
                                <li><a href="https://preview.colorlib.com/theme/pageone/#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2">
                        <div class="widget">
                            <h3 class="heading">Resources</h3>
                            <ul class="links list-unstyled">
                                <li><a href="https://preview.colorlib.com/theme/pageone/#">Blog</a></li>
                                <li><a href="https://preview.colorlib.com/theme/pageone/#">About</a></li>
                                <li><a href="https://preview.colorlib.com/theme/pageone/#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="widget">
                            <h3 class="heading">Contact</h3>
                            <ul class="list-unstyled quick-info links">
                                <li class="email"><a href="https://preview.colorlib.com/theme/pageone/#">info@untree.co</a></li>
                                <li class="phone"><a href="https://preview.colorlib.com/theme/pageone/#">+1 222 212
                                        3819</a></li>
                                <li class="address"><a href="https://preview.colorlib.com/theme/pageone/#">43 Raymouth
                                        Rd. Baltemoer, London 3910</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="inner dark">
            <div class="container">
                <div class="row text-center text-md-start">
                    <div class="col-md-6 mb-3 mb-md-0">
                        <p>Copyright ©
                            <script>
                                document.write(new Date().getFullYear());
                            </script>2022 All rights reserved | This
                            template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com/" target="_blank" rel="nofollow noopener">Colorlib</a>
                        </p>
                    </div>
                    <div class="col-md-6 text-md-end">
                        <a href="#" class="mx-2">Terms</a>
                        <a href="#" class="mx-2">Privacy</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="overlayer" style="opacity: -0.1; display: none;"></div>
    <div class="loader" style="opacity: -0.1; display: none;">
        <div class="spinner-border" role="status">
            <span class="visually-hidden">Chargement...</span>
        </div>
    </div>
    <script src="scripts/bootstrap.bundle.min.js"></script>
    <script src="scripts/tiny-slider.js"></script>
    <script src="scripts/aos.js+navbar.js+page-scroll.js+counter.js+glightbox.min.js+custom.js.pagespeed.jc.x5Q8-4F1U3.js"></script>
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

    <script defer="" src="scripts/v652eace1692a40cfa3763df669d7439c1639079717194.js" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon="{&quot;rayId&quot;:&quot;7122c5b55cce4bd0&quot;,&quot;token&quot;:&quot;cd0b4b3a733644fc843ef0b185f98241&quot;,&quot;version&quot;:&quot;2021.12.0&quot;,&quot;si&quot;:100}" crossorigin="anonymous"></script>

</body>

</html>