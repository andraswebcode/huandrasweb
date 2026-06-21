<!DOCTYPE html>
<html lang="hu">
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WRK3BCMM');</script>
    <!-- End Google Tag Manager -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Tövisháti András – Laravel & Vue.js és WordPress fejlesztő. Bekapcsolódom a csapatodba, önállóan dolgozom, csak annyit fizetsz amennyit kaptál.">
    <title>Tövisháti András – webfejlesztő</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Serif:ital@0;1&family=DM+Sans:opsz,wght@9..40,300;9..40,400;9..40,500&display=swap" rel="stylesheet">
	@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WRK3BCMM"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<nav>
    <a href="{{ url('/') }}" class="nav-logo">Tövisháti András</a>
    <ul class="nav-links" id="navLinks">
        <li><a href="{{ url('/#about') }}">Rólam</a></li>
        <li><a href="{{ url('/#services') }}">Mivel segíthetek</a></li>
        <li><a href="{{ url('/#hobby_projects') }}">Projektek</a></li>
        <li><a href="{{ url('/#testimonials') }}">Vélemények</a></li>
        <li><a href="{{ url('/#xprojekt') }}">XProjekt</a></li>
        <li><a href="{{ url('/#contact') }}" class="nav-cta">Írj nekem</a></li>
    </ul>
    <button class="nav-hamburger" id="navHamburger" aria-label="Menü megnyitása" aria-expanded="false">
        <span></span>
        <span></span>
        <span></span>
    </button>
</nav>
