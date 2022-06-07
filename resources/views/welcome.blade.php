<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>PTL Website</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/app.css">

    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>

</head>

<body data-bs-spy="scroll" data-bs-target="#site-navbar-target" data-bs-offset="100" data-aos-easing="slide"
    data-aos-duration="800" data-aos-delay="0">
    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body">
            <ul class="site-nav-wrap">
                <li><a href="#home-section" class="nav-link active">Accueil</a></li>
                <li><a href="#cas-usage-section" class="nav-link">Cas d'usage</a></li>
                <li><a href="#solution-section" class="nav-link">Solutions</a></li>
                <li><a href="#benefice-section" class="nav-link">Bénéfices</a></li>
                <li><a href="#about-section" class="nav-link">L'équipe</a></li>
            </ul>
            <ul class="site-nav-wrap">
                <li>
                    <!-- <a href="#contact-section" class="nav-link">Nous joindre -->
                    <div class="col-lg-5 ml-auto aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                        <a href="#contact-section" class="btn btn-primary me-4">Nous Joindre</a>
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
                            <!-- <a href="#contact-section" class="nav-link">Nous joindre -->
                            <div class="col-lg-10 ml-auto aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
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
                    <h1 class="heading aos-init aos-animate" data-aos="fade-up">Nous installons des systèmes Pick To
                        Light</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="section pt-0 section-1">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-4 ml-auto aos-init aos-animate" data-aos="fade-up">
                    <p><strong class="text-black">Pick to light</strong> est une technologie d'exécution des
                        commandes qui utilise des affichages alphanumériques et des boutons aux emplacements de stockage
                        pour guider la « cueillette » manuelle et l'enregistrement des articles à expédier.</p>
                </div>
                <div class="col-lg-5 ms-auto">
                    <div class="row">
                        <div class="col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                            <a href="#" class="thumb mb-3">

                                <img src="images/lightningpick_pick-to-light_piece_picking.jpg" alt="Image"
                                    data-pagespeed-url-hash="1811422933" style="opacity: 0.5"
                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
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
                <div class="col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="0">
                    <div class="heading-wrap">
                        <h2 class="heading ">Cas D'usage</h2>
                    </div>
                </div>
                <div class="col-lg-5 ml-auto aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                    <p class="mb-4"><strong class="text-black">Mettre</strong> du texte ...</p>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="step active aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
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
                <div class="col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="0">
                    <div class="heading-wrap">
                        <h2 class="heading">Solutions</h2>
                    </div>
                </div>
                <div class="col-lg-5 ml-auto aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                    <p class="mb-4"><strong class="text-black">Solution CLÉ en main</strong> bla bla bla
                        ...</p>
                    <p><a href="#contact-section" class="btn btn-primary me-4">NOUS JOINDRE</a></p>
                </div>
            </div>
            <div class="row justify-content-center g-5">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-5">
                    <div class="service aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                        <a href="#" class="glightbox d-block mb-4 thumb">
                            <!-- <script data-pagespeed-no-defer="">
                                //<![CDATA[
                                (function() {
                                    for (var g = "function" == typeof Object.defineProperties ? Object.defineProperty : function(b, c, a) {
                                                if (a.get || a.set) throw new TypeError("ES3 does not support getters and setters.");
                                                b != Array.prototype && b != Object.prototype && (b[c] = a.value)
                                            }, h = "undefined" != typeof window && window === this ? this : "undefined" != typeof global &&
                                            null != global ? global : this, k = ["String", "prototype", "repeat"], l = 0; l < k.length -
                                        1; l++) {
                                        var m = k[l];
                                        m in h || (h[m] = {});
                                        h = h[m]
                                    }
                                    var n = k[k.length - 1],
                                        p = h[n],
                                        q = p ? p : function(b) {
                                            var c;
                                            if (null == this) throw new TypeError(
                                                "The 'this' value for String.prototype.repeat must not be null or undefined");
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
                                        for (var e; a.length && (e = a.shift());) a.length || void 0 === c ? d[e] ? d = d[e] : d = d[e] = {} :
                                            d[e] = c
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
                                            height: window.innerHeight || document.documentElement.clientHeight || document.body
                                                .clientHeight,
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
                                                a = d.top + ("pageYOffset" in window ? window.pageYOffset : (document.documentElement || f
                                                    .parentNode || f).scrollTop);
                                                d = d.left + ("pageXOffset" in window ? window.pageXOffset : (document.documentElement || f
                                                    .parentNode || f).scrollLeft);
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
                                        for (var c = ["IMG", "INPUT"], a = [], d = 0; d < c.length; ++d) a = a.concat(v(document
                                            .getElementsByTagName(c[d])));
                                        if (a.length && a[0].getBoundingClientRect) {
                                            for (d = 0; c = a[d]; ++d) z(b, c);
                                            a = "oh=" + b.l;
                                            b.f && (a += "&n=" + b.f);
                                            if (c = !!b.a.length)
                                                for (a += "&ci=" + encodeURIComponent(b.a[0]), d = 1; d < b.a.length; ++d) {
                                                    var e = "," + encodeURIComponent(b.a[d]);
                                                    131072 >= a.length + e.length && (a += e)
                                                }
                                            b.i && (e = "&rd=" + encodeURIComponent(JSON.stringify(B())), 131072 >= a.length + e.length && (a +=
                                                e), c = !0);
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
                                                f && (f.open("POST", d + (-1 == d.indexOf("?") ? "?" : "&") + "url=" + encodeURIComponent(b)), f
                                                    .setRequestHeader("Content-Type", "application/x-www-form-urlencoded"), f.send(a))
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
                                            e && (!(e in b) && 0 < a.width && 0 < a.height && 0 < a.naturalWidth && 0 < a.naturalHeight || e in
                                                b && a.width >= b[e].o && a.height >= b[e].m) && (b[e] = {
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
                            </script> -->
                            <!-- <img src="./Pageone — Free Bootstrap 5 Website Template by Colorlib_files/ximg_1.jpg.pagespeed.ic.4tvbU5MAj5.webp" alt="Image" class="img-fluid" data-pagespeed-url-hash="3056568080" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"> -->
                        </a>
                        <div class="">
                            <h3 class="mb-3"><a href="#">Intégration Matériel</a>
                            </h3>
                            <p>Paragraphe de texte.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-5">
                    <div class="service aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                        <a href="https://preview.colorlib.com/theme/pageone/images/img_2.jpg"
                            class="glightbox d-block mb-4 thumb">
                            <!--<img src="./Pageone — Free Bootstrap 5 Website Template by Colorlib_files/ximg_2.jpg.pagespeed.ic.yMZ53wnSqg.webp" alt="Image" class="img-fluid" data-pagespeed-url-hash="3351068001" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">-->
                        </a>
                        <div class="">
                            <h3 class="mb-3"><a href="#">Développement logiciel</a>
                            </h3>
                            <p>Paragraphe de texte.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section section-4" id="benefice-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="0">
                    <div class="heading-wrap">
                        <h2 class="heading text-white">Bénéfices</h2>
                    </div>
                </div>
                <div class="col-lg-5 ml-auto aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                    <p class="mb-4 desc"><strong class="text-black">Court</strong> texte résumant les
                        bénéfices.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                    <div class="client active">
                        <!-- <img src="./Pageone — Free Bootstrap 5 Website Template by Colorlib_files/xlogo-goldline.png.pagespeed.ic.40nSQphVgJ.webp" alt="Image" data-pagespeed-url-hash="1811422933" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"> -->
                        <h3>Bénéfices</h3>
                        <p>Texte explicant bénéfice.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                    <div class="client">
                        <!-- <img src="./Pageone — Free Bootstrap 5 Website Template by Colorlib_files/xlogo-foxhub.png.pagespeed.ic.m_RIIjdghM.webp" alt="Image" data-pagespeed-url-hash="3324223159" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"> -->
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
                <div class="col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="0">
                    <div class="heading-wrap">
                        <h2 class="heading">Équipe</h2>
                    </div>
                </div>
                <div class="col-lg-5 ml-auto aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                    <p class="mb-4 desc"><strong class="text-black">L'équipe est composé de ...</strong> bla
                        bla bla right</p>
                </div>
            </div>
            <div class="row g-5 justify-content-center">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 aos-init aos-animate" data-aos="fade-up"
                    data-aos-delay="0">
                    <div class="team">
                        <a href="#about-section" class="thumb mb-3"><img src="images/keven-devant-color.png"
                                alt="Image" class="img-fluid" data-pagespeed-url-hash="2854580370"
                                onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                        <h3><a href="#">Kéven Bernier Côté</a></h3>
                        <span class="mb-4 text-black-50 d-block">Partenaire, spécialiste logistique</span>
                        <p class="mb-4">Court texte expliquant notre rôle dans la compagnie.</p>
                        <ul class="list-unstyled social">
                            <li><a href="#"><span class="icon-linkedin"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 aos-init aos-animate" data-aos="fade-up"
                    data-aos-delay="200">
                    <div class="team">
                        <a href="#about-section" class="thumb mb-3"><img src="images/olivier-devant-noir.jpg"
                                alt="Image" class="img-fluid" data-pagespeed-url-hash="3149080291"
                                onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
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

    <div id="overlayer" style="opacity: -0.1; display: none;"></div>
    <div class="loader" style="opacity: -0.1; display: none;">
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

    <script defer="" src="scripts/v652eace1692a40cfa3763df669d7439c1639079717194.js"
        integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw=="
        data-cf-beacon="{&quot;rayId&quot;:&quot;7122c5b55cce4bd0&quot;,&quot;token&quot;:&quot;cd0b4b3a733644fc843ef0b185f98241&quot;,&quot;version&quot;:&quot;2021.12.0&quot;,&quot;si&quot;:100}"
        crossorigin="anonymous"></script>

</body>

</html>
