<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="[NEV] – Senior PHP/Laravel fejlesztő. Beépülök a csapatodba, gyorsan produktív vagyok, és nem kell betanítani.">
    <title>[NEV] – Laravel & Vue.js Fejlesztő</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Serif:ital@0;1&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">

    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        :root {
            --bg:        #0a0a0b;
            --bg-card:   #111113;
            --bg-subtle: #161618;
            --border:    rgba(255,255,255,0.08);
            --border-md: rgba(255,255,255,0.13);
            --text:      #f0ede8;
            --text-mute: #7a7774;
            --text-dim:  #4a4845;
            --accent:    #c8a96e;
            --accent-lo: rgba(200,169,110,0.12);
            --accent-hi: #e2c896;
            --serif:     'Instrument Serif', Georgia, serif;
            --sans:      'DM Sans', system-ui, sans-serif;
            --radius:    12px;
            --radius-lg: 20px;
        }

        html { scroll-behavior: smooth; }

        body {
            background: var(--bg);
            color: var(--text);
            font-family: var(--sans);
            font-size: 16px;
            line-height: 1.6;
            -webkit-font-smoothing: antialiased;
        }

        /* ── NAV ── */
        nav {
            position: fixed; top: 0; left: 0; right: 0; z-index: 100;
            display: flex; align-items: center; justify-content: space-between;
            padding: 1.25rem 2.5rem;
            background: rgba(10,10,11,0.85);
            backdrop-filter: blur(18px);
            border-bottom: 1px solid var(--border);
        }
        .nav-logo {
            font-family: var(--serif);
            font-size: 1.2rem;
            color: var(--text);
            text-decoration: none;
            letter-spacing: 0.02em;
        }
        .nav-links { display: flex; gap: 2rem; list-style: none; }
        .nav-links a {
            color: var(--text-mute);
            text-decoration: none;
            font-size: 0.875rem;
            font-weight: 400;
            letter-spacing: 0.02em;
            transition: color 0.2s;
        }
        .nav-links a:hover { color: var(--text); }
        .nav-cta {
            background: var(--accent-lo);
            border: 1px solid rgba(200,169,110,0.3);
            color: var(--accent) !important;
            padding: 0.5rem 1.25rem;
            border-radius: 6px;
            transition: background 0.2s, border-color 0.2s !important;
        }
        .nav-cta:hover {
            background: rgba(200,169,110,0.2) !important;
            border-color: rgba(200,169,110,0.5) !important;
            color: var(--accent-hi) !important;
        }

        /* ── LAYOUT ── */
        .container { max-width: 1060px; margin: 0 auto; padding: 0 2rem; }
        section { padding: 6rem 0; }

        /* ── HERO ── */
        #hero {
            min-height: 100vh;
            display: flex; align-items: center;
            padding-top: 5rem;
            position: relative;
            overflow: hidden;
        }
        .hero-bg {
            position: absolute; inset: 0;
            background:
                radial-gradient(ellipse 60% 50% at 70% 40%, rgba(200,169,110,0.05) 0%, transparent 70%),
                radial-gradient(ellipse 40% 60% at 20% 80%, rgba(200,169,110,0.03) 0%, transparent 60%);
            pointer-events: none;
        }
        .hero-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 5rem;
            align-items: center;
        }
        .hero-eyebrow {
            display: inline-flex; align-items: center; gap: 0.5rem;
            font-size: 0.75rem; font-weight: 500;
            text-transform: uppercase; letter-spacing: 0.12em;
            color: var(--accent);
            margin-bottom: 1.5rem;
        }
        .hero-eyebrow::before {
            content: '';
            display: block; width: 24px; height: 1px;
            background: var(--accent);
        }
        h1 {
            font-family: var(--serif);
            font-size: clamp(2.8rem, 5vw, 4.2rem);
            font-weight: 400;
            line-height: 1.1;
            letter-spacing: -0.02em;
            margin-bottom: 1.5rem;
        }
        h1 em {
            font-style: italic;
            color: var(--accent);
        }
        .hero-sub {
            font-size: 1.05rem;
            color: var(--text-mute);
            line-height: 1.7;
            margin-bottom: 2.5rem;
            max-width: 440px;
        }
        .btn-group { display: flex; gap: 1rem; flex-wrap: wrap; }
        .btn-primary {
            display: inline-flex; align-items: center; gap: 0.5rem;
            background: var(--accent);
            color: #1a1508;
            font-family: var(--sans);
            font-size: 0.9rem; font-weight: 500;
            padding: 0.85rem 1.75rem;
            border-radius: var(--radius);
            text-decoration: none;
            transition: background 0.2s, transform 0.15s;
        }
        .btn-primary:hover { background: var(--accent-hi); transform: translateY(-1px); }
        .btn-secondary {
            display: inline-flex; align-items: center; gap: 0.5rem;
            background: transparent;
            color: var(--text-mute);
            font-family: var(--sans);
            font-size: 0.9rem; font-weight: 400;
            padding: 0.85rem 1.75rem;
            border-radius: var(--radius);
            border: 1px solid var(--border-md);
            text-decoration: none;
            transition: color 0.2s, border-color 0.2s;
        }
        .btn-secondary:hover { color: var(--text); border-color: rgba(255,255,255,0.25); }

        /* Hero right – stats */
        .hero-stats {
            display: grid; grid-template-columns: 1fr 1fr; gap: 1px;
            border: 1px solid var(--border);
            border-radius: var(--radius-lg);
            overflow: hidden;
        }
        .stat-box {
            background: var(--bg-card);
            padding: 2rem 1.75rem;
            border-right: 1px solid var(--border);
            border-bottom: 1px solid var(--border);
        }
        .stat-box:nth-child(2n) { border-right: none; }
        .stat-box:nth-last-child(-n+2) { border-bottom: none; }
        .stat-num {
            font-family: var(--serif);
            font-size: 2.8rem;
            font-weight: 400;
            line-height: 1;
            color: var(--accent);
            margin-bottom: 0.4rem;
        }
        .stat-label {
            font-size: 0.8rem;
            font-weight: 400;
            color: var(--text-mute);
            line-height: 1.4;
        }

        /* ── SECTION HEADER ── */
        .section-header { margin-bottom: 3.5rem; }
        .section-eyebrow {
            font-size: 0.7rem; font-weight: 500;
            text-transform: uppercase; letter-spacing: 0.14em;
            color: var(--accent);
            margin-bottom: 0.75rem;
        }
        h2 {
            font-family: var(--serif);
            font-size: clamp(2rem, 3.5vw, 2.8rem);
            font-weight: 400;
            line-height: 1.15;
            letter-spacing: -0.02em;
        }
        h2 em { font-style: italic; color: var(--accent); }
        .section-lead {
            margin-top: 1rem;
            font-size: 1rem;
            color: var(--text-mute);
            max-width: 520px;
            line-height: 1.7;
        }

        /* ── ABOUT ── */
        #about { border-top: 1px solid var(--border); }
        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1.2fr;
            gap: 5rem;
            align-items: start;
        }
        .about-left { position: sticky; top: 7rem; }
        .about-body p {
            color: var(--text-mute);
            margin-bottom: 1.25rem;
            line-height: 1.8;
        }
        .about-body p strong { color: var(--text); font-weight: 500; }
        .tech-list {
            display: flex; flex-wrap: wrap; gap: 0.5rem;
            margin-top: 2rem;
        }
        .tech-tag {
            font-size: 0.78rem;
            padding: 0.35rem 0.85rem;
            border: 1px solid var(--border);
            border-radius: 100px;
            color: var(--text-mute);
            transition: border-color 0.2s, color 0.2s;
        }
        .tech-tag:hover { border-color: var(--accent); color: var(--accent); }
        .tech-tag.accent {
            border-color: rgba(200,169,110,0.4);
            color: var(--accent);
            background: var(--accent-lo);
        }

        /* ── SERVICES ── */
        #services { border-top: 1px solid var(--border); }
        .services-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1px;
            border: 1px solid var(--border);
            border-radius: var(--radius-lg);
            overflow: hidden;
            margin-top: 3rem;
        }
        .service-card {
            background: var(--bg-card);
            padding: 2.25rem 2rem;
            border-right: 1px solid var(--border);
            transition: background 0.25s;
            position: relative;
        }
        .service-card:last-child { border-right: none; }
        .service-card:hover { background: var(--bg-subtle); }
        .service-icon {
            width: 44px; height: 44px;
            border: 1px solid var(--border);
            border-radius: 10px;
            display: flex; align-items: center; justify-content: center;
            margin-bottom: 1.5rem;
            color: var(--accent);
            font-size: 1.2rem;
        }
        .service-card h3 {
            font-family: var(--serif);
            font-size: 1.3rem;
            font-weight: 400;
            margin-bottom: 0.75rem;
        }
        .service-card p {
            font-size: 0.875rem;
            color: var(--text-mute);
            line-height: 1.7;
        }
        .service-list {
            margin-top: 1.25rem;
            list-style: none;
        }
        .service-list li {
            font-size: 0.8rem;
            color: var(--text-dim);
            padding: 0.3rem 0;
            border-top: 1px solid var(--border);
            display: flex; align-items: center; gap: 0.5rem;
        }
        .service-list li::before {
            content: '';
            width: 4px; height: 4px;
            border-radius: 50%;
            background: var(--accent);
            flex-shrink: 0;
        }

        /* ── PROCESS ── */
        #process { border-top: 1px solid var(--border); }
        .process-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 2rem;
            margin-top: 3rem;
        }
        .process-step { position: relative; }
        .process-step::after {
            content: '';
            position: absolute;
            top: 1.1rem; left: calc(100% + 0.25rem); right: -1.75rem;
            height: 1px;
            background: var(--border);
        }
        .process-step:last-child::after { display: none; }
        .step-num {
            font-family: var(--serif);
            font-size: 0.9rem;
            color: var(--accent);
            margin-bottom: 1rem;
        }
        .process-step h3 {
            font-size: 0.95rem; font-weight: 500;
            margin-bottom: 0.5rem;
        }
        .process-step p {
            font-size: 0.82rem;
            color: var(--text-mute);
            line-height: 1.6;
        }

        /* ── REFERENCES ── */
        #references { border-top: 1px solid var(--border); }
        .ref-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.5rem;
            margin-top: 3rem;
        }
        .ref-card {
            background: var(--bg-card);
            border: 1px solid var(--border);
            border-radius: var(--radius-lg);
            padding: 2rem;
            transition: border-color 0.25s;
        }
        .ref-card:hover { border-color: var(--border-md); }
        .ref-quote {
            font-family: var(--serif);
            font-size: 1.05rem;
            font-style: italic;
            line-height: 1.6;
            color: var(--text);
            margin-bottom: 1.5rem;
        }
        .ref-author {
            display: flex; align-items: center; gap: 0.75rem;
        }
        .ref-avatar {
            width: 36px; height: 36px;
            border-radius: 50%;
            background: var(--accent-lo);
            border: 1px solid rgba(200,169,110,0.2);
            display: flex; align-items: center; justify-content: center;
            font-size: 0.75rem; font-weight: 500;
            color: var(--accent);
        }
        .ref-name { font-size: 0.875rem; font-weight: 500; }
        .ref-role { font-size: 0.78rem; color: var(--text-mute); }
        .ref-tag {
            margin-left: auto;
            font-size: 0.7rem;
            padding: 0.25rem 0.7rem;
            border: 1px solid var(--border);
            border-radius: 100px;
            color: var(--text-dim);
        }

        /* ── CONTACT ── */
        #contact { border-top: 1px solid var(--border); }
        .contact-inner {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 5rem;
            align-items: start;
        }
        .contact-form { display: flex; flex-direction: column; gap: 1rem; }
        .form-group { display: flex; flex-direction: column; gap: 0.4rem; }
        label {
            font-size: 0.78rem; font-weight: 500;
            color: var(--text-mute);
            text-transform: uppercase; letter-spacing: 0.08em;
        }
        input[type="text"], input[type="email"], textarea {
            background: var(--bg-card);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            padding: 0.85rem 1rem;
            color: var(--text);
            font-family: var(--sans);
            font-size: 0.9rem;
            width: 100%;
            transition: border-color 0.2s;
            outline: none;
        }
        input:focus, textarea:focus { border-color: rgba(200,169,110,0.5); }
        input::placeholder, textarea::placeholder { color: var(--text-dim); }
        textarea { resize: vertical; min-height: 130px; }
        .contact-right { padding-top: 0.5rem; }
        .contact-right p {
            color: var(--text-mute);
            font-size: 0.95rem;
            line-height: 1.75;
            margin-bottom: 2rem;
        }
        .contact-links { display: flex; flex-direction: column; gap: 0.75rem; }
        .contact-link {
            display: flex; align-items: center; gap: 0.75rem;
            text-decoration: none;
            color: var(--text-mute);
            font-size: 0.875rem;
            transition: color 0.2s;
            padding: 0.75rem 1rem;
            border: 1px solid var(--border);
            border-radius: var(--radius);
            background: var(--bg-card);
        }
        .contact-link:hover { color: var(--text); border-color: var(--border-md); }
        .contact-link svg { width: 18px; height: 18px; flex-shrink: 0; color: var(--accent); }

        /* ── FOOTER ── */
        footer {
            border-top: 1px solid var(--border);
            padding: 2rem 0;
            text-align: center;
            font-size: 0.8rem;
            color: var(--text-dim);
        }

        /* ── DIVIDER LINE ── */
        .accent-line {
            width: 40px; height: 1px;
            background: var(--accent);
            margin: 1.5rem 0;
        }

        /* ── RESPONSIVE ── */
        @media (max-width: 900px) {
            nav { padding: 1rem 1.5rem; }
            .nav-links { display: none; }
            .hero-grid, .about-grid, .contact-inner { grid-template-columns: 1fr; gap: 3rem; }
            .about-left { position: static; }
            .services-grid { grid-template-columns: 1fr; }
            .service-card { border-right: none; border-bottom: 1px solid var(--border); }
            .service-card:last-child { border-bottom: none; }
            .process-grid { grid-template-columns: 1fr 1fr; }
            .process-step::after { display: none; }
            .ref-grid { grid-template-columns: 1fr; }
            section { padding: 4rem 0; }
        }

        @media (max-width: 520px) {
            .process-grid { grid-template-columns: 1fr; }
            .hero-stats { grid-template-columns: 1fr 1fr; }
        }
    </style>
</head>
<body>

{{-- ── NAVIGATION ── --}}
<nav>
    <a href="#hero" class="nav-logo">[NEV]</a>
    <ul class="nav-links">
        <li><a href="#about">Rólam</a></li>
        <li><a href="#services">Mivel segíthetek</a></li>
        <li><a href="#references">Referenciák</a></li>
        <li><a href="#contact" class="nav-cta">Kapcsolat</a></li>
    </ul>
</nav>

{{-- ── HERO ── --}}
<section id="hero">
    <div class="hero-bg"></div>
    <div class="container">
        <div class="hero-grid">
            <div>
                <div class="hero-eyebrow">Laravel &amp; Vue.js fejlesztő · Szekszárd</div>
                <h1>Beépülök a csapatodba,<br><em>azonnal produktívan.</em></h1>
                <p class="hero-sub">
                    Tapasztalt medior fejlesztő vagyok, aki IT cégeknek nyújt kapacitást órabérben vagy
                    projektalapon. Nem kell betanítani – gyorsan beilleszkedem, hozom a saját munkamódszeremet.
                </p>
                <div class="btn-group">
                    <a href="#contact" class="btn-primary">
                        Írj nekem
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </a>
                    <a href="#about" class="btn-secondary">Bővebben rólam</a>
                </div>
            </div>
            <div>
                <div class="hero-stats">
                    <div class="stat-box">
                        <div class="stat-num">6+</div>
                        <div class="stat-label">év tapasztalat<br>webfejlesztésben</div>
                    </div>
                    <div class="stat-box">
                        <div class="stat-num">30+</div>
                        <div class="stat-label">lezárt projekt<br>különböző iparágban</div>
                    </div>
                    <div class="stat-box">
                        <div class="stat-num">48h</div>
                        <div class="stat-label">válaszidő és<br>beépülési idő</div>
                    </div>
                    <div class="stat-box">
                        <div class="stat-num">100%</div>
                        <div class="stat-label">remote-képes,<br>rugalmas ütemezés</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ── ABOUT ── --}}
<section id="about">
    <div class="container">
        <div class="about-grid">
            <div class="about-left">
                <div class="section-header">
                    <p class="section-eyebrow">Rólam</p>
                    <h2>Fejlesztő,<br>aki <em>érti</em><br>az üzleti oldalt is</h2>
                    <div class="accent-line"></div>
                </div>
                <div class="tech-list">
                    <span class="tech-tag accent">Laravel</span>
                    <span class="tech-tag accent">Vue.js</span>
                    <span class="tech-tag accent">PHP</span>
                    <span class="tech-tag">MySQL</span>
                    <span class="tech-tag">REST API</span>
                    <span class="tech-tag">Git</span>
                    <span class="tech-tag">Docker</span>
                    <span class="tech-tag">React</span>
                    <span class="tech-tag">Nuxt</span>
                    <span class="tech-tag">Tailwind</span>
                    <span class="tech-tag">Linux</span>
                    <span class="tech-tag">CI/CD</span>
                </div>
            </div>
            <div class="about-body">
                <p>
                    <strong>[NEV] vagyok</strong>, freelance webfejlesztő Szekszárdról, 6+ évnyi tapasztalattal
                    PHP/Laravel és Vue.js területen. Elsősorban IT cégeknek dolgozom be – legyen szó
                    kapacitáshiányról, egyedi projektről, vagy egy meglévő csapat tehermentesítéséről.
                </p>
                <p>
                    Amit a legtöbb cég értékel bennem: <strong>gyorsan produktív vagyok.</strong>
                    Megszoktam, hogy egy létező codebase-be kell belevágni, megérteni a struktúrát, és hamar
                    értéket teremteni. Nem kell hónapokig betanítanom magam.
                </p>
                <p>
                    Az évek során dolgoztam e-commerce rendszereken, belső vállalati eszközökön, SaaS
                    alkalmazásokon és egyedi API-integráción egyaránt. Értem az üzleti kontextust is –
                    nemcsak kódot írok, hanem <strong>megoldásokat szállítok.</strong>
                </p>
                <p>
                    Távolról dolgozom, de elérhető vagyok, kommunikatív, és belefér az időnkénti személyes egyeztetés is.
                    Ha kapacitáshiányod van, vagy egy meglévő projektre kellenék – keress meg.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- ── SERVICES ── --}}
<section id="services">
    <div class="container">
        <div class="section-header">
            <p class="section-eyebrow">Mivel segíthetek</p>
            <h2>Hol <em>kapcsolódhatok be</em><br>a munkátokba</h2>
            <p class="section-lead">Rugalmasan dolgozom – órabérben, napi díjban, vagy projektalapon. A feladat szabja meg a formátumot.</p>
        </div>
        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                    </svg>
                </div>
                <h3>Csapatba beépülés</h3>
                <p>Beállok a meglévő fejlesztési csapatba medior fejlesztőként. Vállalok feladatokat sprintből, bugfixet, feature fejlesztést.</p>
                <ul class="service-list">
                    <li>Scrum / Agile munkamód</li>
                    <li>Laravel, Vue.js, PHP</li>
                    <li>Órabér alapú együttmüködés</li>
                    <li>Rövid és hosszú távon is</li>
                </ul>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/>
                    </svg>
                </div>
                <h3>Projekt kiszervezés</h3>
                <p>Ha van egy projekt, amire nincs belső kapacitás, átveszem és önállóan viszem végig – kommunikálva a haladást.</p>
                <ul class="service-list">
                    <li>Egyedi webes alkalmazások</li>
                    <li>API fejlesztés, integráció</li>
                    <li>Frontend &amp; backend együtt</li>
                    <li>Átadás, dokumentáció</li>
                </ul>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="13 2 13 9 20 9"/><path d="M20 14.5V7l-5-5H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h7.5"/><path d="M15 19l2 2 5-5"/>
                    </svg>
                </div>
                <h3>Kód átvizsgálás &amp; refaktor</h3>
                <p>Meglévő, régi codebase átvilágítása, tisztítása, modernizálása. Rálátást adok és javítok.</p>
                <ul class="service-list">
                    <li>Legacy PHP / Laravel</li>
                    <li>Code review, audit</li>
                    <li>Teljesítmény optimalizálás</li>
                    <li>Technikai adósság csökkentés</li>
                </ul>
            </div>
        </div>
    </div>
</section>

{{-- ── PROCESS ── --}}
<section id="process">
    <div class="container">
        <div class="section-header">
            <p class="section-eyebrow">Hogyan dolgozom</p>
            <h2>Egyszerű, <em>átlátható</em> folyamat</h2>
        </div>
        <div class="process-grid">
            <div class="process-step">
                <div class="step-num">01</div>
                <h3>Rövid egyeztetés</h3>
                <p>30 perces call, ahol átbeszéljük a feladatot, az elvárásokat és az ütemezést.</p>
            </div>
            <div class="process-step">
                <div class="step-num">02</div>
                <h3>Ajánlat &amp; feltételek</h3>
                <p>Átlátható órabér vagy projektár, egyértelmű keretekkel. Nincs rejtett plusz.</p>
            </div>
            <div class="process-step">
                <div class="step-num">03</div>
                <h3>Bekapcsolódás</h3>
                <p>Megkapom a hozzáféréseket, megismerem a codebase-t, és elkezdem a munkát.</p>
            </div>
            <div class="process-step">
                <div class="step-num">04</div>
                <h3>Szállítás &amp; átadás</h3>
                <p>Rendszeres státuszok, clean commit history, és igény szerint dokumentáció.</p>
            </div>
        </div>
    </div>
</section>

{{-- ── REFERENCES ── --}}
<section id="references">
    <div class="container">
        <div class="section-header">
            <p class="section-eyebrow">Referenciák</p>
            <h2>Mit mondanak,<br>akikkel <em>dolgoztam</em></h2>
            <p class="section-lead">Valódi projektek, valódi visszajelzések – cseréld le a saját referenciáidra.</p>
        </div>
        <div class="ref-grid">
            <div class="ref-card">
                <p class="ref-quote">„Gyorsan bekapcsolódott a csapatba, minimális betanítással azonnal értéket hozott. A kódja tiszta, a kommunikációja precíz – pontosan azt kaptuk, amire szükségünk volt."</p>
                <div class="ref-author">
                    <div class="ref-avatar">KG</div>
                    <div>
                        <div class="ref-name">[Ügyfél neve]</div>
                        <div class="ref-role">CTO, [Cég neve]</div>
                    </div>
                    <span class="ref-tag">Laravel projekt</span>
                </div>
            </div>
            <div class="ref-card">
                <p class="ref-quote">„Egy régi, rendezetlen codebase-t kellett felvennie és modernizálnia. Türelmesen, alaposan végezte a munkát, és dokumentálta is amit csinált. Ajánlom mindenkinek."</p>
                <div class="ref-author">
                    <div class="ref-avatar">NP</div>
                    <div>
                        <div class="ref-name">[Ügyfél neve]</div>
                        <div class="ref-role">Vezető fejlesztő, [Cég neve]</div>
                    </div>
                    <span class="ref-tag">Refaktor</span>
                </div>
            </div>
            <div class="ref-card">
                <p class="ref-quote">„Kapacitáshiányunk volt, és [NEV] tökéletesen töltötte be a rést. Sprintenként megbízható, határidőtartó, és kérdés nélkül beolvadt a Scrum folyamatainkba."</p>
                <div class="ref-author">
                    <div class="ref-avatar">MZ</div>
                    <div>
                        <div class="ref-name">[Ügyfél neve]</div>
                        <div class="ref-role">Scrum master, [Cég neve]</div>
                    </div>
                    <span class="ref-tag">Hosszú táv</span>
                </div>
            </div>
            <div class="ref-card">
                <p class="ref-quote">„Vue.js fronton volt szükségünk segítségre, és nagyon profin megoldotta. Látszik, hogy érti a teljes stacket, nem csak az egyik réteget."</p>
                <div class="ref-author">
                    <div class="ref-avatar">BT</div>
                    <div>
                        <div class="ref-name">[Ügyfél neve]</div>
                        <div class="ref-role">Product Owner, [Cég neve]</div>
                    </div>
                    <span class="ref-tag">Vue.js / API</span>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ── CONTACT ── --}}
<section id="contact">
    <div class="container">
        <div class="contact-inner">
            <div>
                <div class="section-header">
                    <p class="section-eyebrow">Kapcsolat</p>
                    <h2>Dolgozzunk<br><em>együtt</em></h2>
                    <div class="accent-line"></div>
                </div>
                <div class="contact-right">
                    <p>
                        Ha kapacitáshiányod van, érdekel a kiszervezés, vagy csak felmérjük, hogy tudnék-e segíteni –
                        írj nyugodtan. Általában 24 órán belül válaszolok.
                    </p>
                    <div class="contact-links">
                        <a href="mailto:[EMAIL]" class="contact-link">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                            [EMAIL]
                        </a>
                        <a href="https://linkedin.com/in/[LINKEDIN]" target="_blank" rel="noopener" class="contact-link">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
                            LinkedIn profil
                        </a>
                        <a href="tel:[TELEFON]" class="contact-link">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 1.27h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 9a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                            [TELEFON]
                        </a>
                    </div>
                </div>
            </div>
            <div>
                <form class="contact-form" method="POST" action="#">
                    @csrf
                    <div class="form-group">
                        <label for="name">Neved / Céged</label>
                        <input type="text" id="name" name="name" placeholder="Pl. Kovács Péter / Acme Kft." required>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail cím</label>
                        <input type="email" id="email" name="email" placeholder="pelda@ceg.hu" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Miben segíthetek?</label>
                        <textarea id="message" name="message" placeholder="Röviden írd le a feladatot, csapat méretét, és az ütemezési elvárásaidat..." required></textarea>
                    </div>
                    <button type="submit" class="btn-primary" style="align-self: flex-start; border: none; cursor: pointer; font-family: var(--sans);">
                        Üzenet küldése
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

{{-- ── FOOTER ── --}}
<footer>
    <div class="container">
        <p>© {{ date('Y') }} [NEV] · Laravel & Vue.js fejlesztő · Szekszárd, Magyarország</p>
    </div>
</footer>

<script>
    // Smooth nav highlight on scroll
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.nav-links a[href^="#"]');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                navLinks.forEach(link => {
                    link.style.color = link.getAttribute('href') === '#' + entry.target.id
                        ? 'var(--text)' : '';
                });
            }
        });
    }, { threshold: 0.3 });

    sections.forEach(s => observer.observe(s));

    // Fade-in on scroll
    const fadeEls = document.querySelectorAll('.stat-box, .service-card, .ref-card, .process-step');
    const fadeObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, { threshold: 0.1 });

    fadeEls.forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(16px)';
        el.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
        fadeObserver.observe(el);
    });
</script>

</body>
</html>
