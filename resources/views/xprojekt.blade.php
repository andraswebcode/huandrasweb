<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="XProjekt – Egyedi weboldal, webshop, CRM és SaaS fejlesztés magyar vállalkozásoknak. Nem sablonos. Nem WordPress. Valódi megoldás.">
    <title>XProjekt – Webfejlesztés vállalkozásoknak</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;1,400&family=Inter:wght@300;400;500&display=swap" rel="stylesheet">

    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        :root {
            --bg:         #080809;
            --bg-card:    #0f0f11;
            --bg-subtle:  #141416;
            --border:     rgba(255,255,255,0.07);
            --border-md:  rgba(255,255,255,0.12);
            --text:       #edeae4;
            --text-mute:  #6e6b67;
            --text-dim:   #3d3c3a;
            --accent:     #4f7fff;
            --accent-lo:  rgba(79,127,255,0.1);
            --accent-hi:  #789dff;
            --green:      #2ec48a;
            --green-lo:   rgba(46,196,138,0.1);
            --serif:      'Playfair Display', Georgia, serif;
            --sans:       'Inter', system-ui, sans-serif;
            --radius:     10px;
            --radius-lg:  18px;
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
            padding: 1.2rem 2.5rem;
            background: rgba(8,8,9,0.88);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid var(--border);
        }
        .nav-logo {
            display: flex; align-items: center; gap: 0.6rem;
            text-decoration: none;
        }
        .logo-mark {
            width: 32px; height: 32px;
            background: var(--accent);
            border-radius: 8px;
            display: flex; align-items: center; justify-content: center;
            font-family: var(--serif);
            font-size: 1rem;
            color: #fff;
            font-weight: 400;
            letter-spacing: -0.02em;
        }
        .logo-text {
            font-family: var(--sans);
            font-size: 1rem; font-weight: 500;
            color: var(--text);
            letter-spacing: 0.01em;
        }
        .nav-links { display: flex; gap: 2rem; list-style: none; }
        .nav-links a {
            color: var(--text-mute);
            text-decoration: none;
            font-size: 0.85rem;
            transition: color 0.2s;
        }
        .nav-links a:hover { color: var(--text); }
        .nav-cta {
            background: var(--accent) !important;
            color: #fff !important;
            padding: 0.5rem 1.2rem;
            border-radius: 6px;
            font-weight: 500 !important;
            transition: background 0.2s !important;
        }
        .nav-cta:hover { background: var(--accent-hi) !important; }

        /* ── LAYOUT ── */
        .container { max-width: 1080px; margin: 0 auto; padding: 0 2rem; }
        section { padding: 6rem 0; }

        /* ── HERO ── */
        #hero {
            min-height: 100vh;
            display: flex; align-items: center;
            padding-top: 5rem;
            position: relative;
            overflow: hidden;
        }
        .hero-glow {
            position: absolute; inset: 0; pointer-events: none;
            background:
                radial-gradient(ellipse 55% 45% at 30% 50%, rgba(79,127,255,0.06) 0%, transparent 65%),
                radial-gradient(ellipse 35% 50% at 80% 30%, rgba(46,196,138,0.04) 0%, transparent 60%);
        }
        .hero-content { position: relative; max-width: 720px; }
        .hero-badge {
            display: inline-flex; align-items: center; gap: 0.6rem;
            background: var(--bg-card);
            border: 1px solid var(--border-md);
            border-radius: 100px;
            padding: 0.4rem 1rem 0.4rem 0.5rem;
            font-size: 0.75rem; font-weight: 500;
            color: var(--text-mute);
            margin-bottom: 2rem;
            letter-spacing: 0.02em;
        }
        .badge-dot {
            width: 6px; height: 6px;
            background: var(--green);
            border-radius: 50%;
        }
        h1 {
            font-family: var(--serif);
            font-size: clamp(3rem, 5.5vw, 4.8rem);
            font-weight: 400;
            line-height: 1.08;
            letter-spacing: -0.02em;
            margin-bottom: 1.75rem;
        }
        h1 em { font-style: italic; color: var(--accent-hi); }
        h1 strong { font-weight: 500; }
        .hero-sub {
            font-size: 1.1rem;
            color: var(--text-mute);
            line-height: 1.75;
            margin-bottom: 2.5rem;
            max-width: 560px;
            font-weight: 300;
        }
        .btn-group { display: flex; gap: 1rem; flex-wrap: wrap; }
        .btn-primary {
            display: inline-flex; align-items: center; gap: 0.5rem;
            background: var(--accent);
            color: #fff;
            font-family: var(--sans);
            font-size: 0.9rem; font-weight: 500;
            padding: 0.9rem 1.75rem;
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
            font-size: 0.9rem;
            padding: 0.9rem 1.75rem;
            border-radius: var(--radius);
            border: 1px solid var(--border-md);
            text-decoration: none;
            transition: color 0.2s, border-color 0.2s;
        }
        .btn-secondary:hover { color: var(--text); border-color: rgba(255,255,255,0.22); }

        /* Hero scroll indicator */
        .scroll-hint {
            display: flex; align-items: center; gap: 0.75rem;
            margin-top: 4rem;
            font-size: 0.75rem;
            color: var(--text-dim);
            letter-spacing: 0.08em;
            text-transform: uppercase;
        }
        .scroll-line {
            width: 32px; height: 1px;
            background: var(--text-dim);
        }

        /* ── TRUST BAR ── */
        #trust {
            padding: 2.5rem 0;
            border-top: 1px solid var(--border);
            border-bottom: 1px solid var(--border);
        }
        .trust-inner {
            display: flex; align-items: center; gap: 3rem;
            flex-wrap: wrap;
        }
        .trust-label {
            font-size: 0.72rem; font-weight: 500;
            text-transform: uppercase; letter-spacing: 0.1em;
            color: var(--text-dim);
            white-space: nowrap;
        }
        .trust-items {
            display: flex; align-items: center; gap: 2.5rem;
            flex-wrap: wrap;
        }
        .trust-item {
            font-size: 0.82rem; font-weight: 500;
            color: var(--text-mute);
            display: flex; align-items: center; gap: 0.5rem;
        }
        .trust-item svg { width: 14px; height: 14px; color: var(--green); flex-shrink: 0; }

        /* ── SECTION HEADERS ── */
        .section-header { margin-bottom: 3.5rem; }
        .section-eyebrow {
            font-size: 0.7rem; font-weight: 500;
            text-transform: uppercase; letter-spacing: 0.14em;
            color: var(--accent);
            margin-bottom: 0.75rem;
        }
        h2 {
            font-family: var(--serif);
            font-size: clamp(2rem, 3.5vw, 2.9rem);
            font-weight: 400;
            line-height: 1.15;
            letter-spacing: -0.02em;
        }
        h2 em { font-style: italic; color: var(--accent-hi); }
        .section-lead {
            margin-top: 1rem;
            font-size: 1rem;
            color: var(--text-mute);
            max-width: 500px;
            line-height: 1.7;
            font-weight: 300;
        }

        /* ── PROBLEM SECTION ── */
        #problem { border-top: 1px solid var(--border); }
        .problem-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1px;
            border: 1px solid var(--border);
            border-radius: var(--radius-lg);
            overflow: hidden;
            margin-top: 3rem;
        }
        .problem-card {
            background: var(--bg-card);
            padding: 2rem 1.75rem;
            border-right: 1px solid var(--border);
        }
        .problem-card:last-child { border-right: none; }
        .problem-icon {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            display: block;
        }
        .problem-card h3 {
            font-size: 0.95rem; font-weight: 500;
            margin-bottom: 0.6rem;
            color: var(--text);
        }
        .problem-card p {
            font-size: 0.82rem;
            color: var(--text-mute);
            line-height: 1.65;
        }
        .problem-vs {
            text-align: center;
            margin: 3rem 0 1rem;
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            color: var(--text-dim);
        }
        .solution-box {
            background: var(--bg-card);
            border: 1px solid rgba(79,127,255,0.2);
            border-radius: var(--radius-lg);
            padding: 2.5rem;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 2rem;
        }
        .solution-item { display: flex; gap: 0.75rem; }
        .solution-check {
            width: 20px; height: 20px; flex-shrink: 0;
            background: var(--green-lo);
            border: 1px solid rgba(46,196,138,0.3);
            border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            margin-top: 2px;
        }
        .solution-check svg { width: 10px; height: 10px; color: var(--green); }
        .solution-item h4 { font-size: 0.88rem; font-weight: 500; margin-bottom: 0.25rem; }
        .solution-item p { font-size: 0.78rem; color: var(--text-mute); line-height: 1.5; }

        /* ── SERVICES ── */
        #services { border-top: 1px solid var(--border); }
        .services-list { display: flex; flex-direction: column; gap: 1px; margin-top: 3rem; }
        .service-row {
            display: grid;
            grid-template-columns: 280px 1fr auto;
            align-items: center;
            gap: 3rem;
            padding: 2rem 2.5rem;
            background: var(--bg-card);
            border: 1px solid var(--border);
            border-radius: var(--radius-lg);
            margin-bottom: 0.75rem;
            transition: border-color 0.25s, background 0.25s;
            text-decoration: none;
            color: inherit;
        }
        .service-row:hover {
            border-color: var(--border-md);
            background: var(--bg-subtle);
        }
        .service-row-left { display: flex; align-items: center; gap: 1rem; }
        .service-num {
            font-family: var(--serif);
            font-size: 0.85rem;
            color: var(--text-dim);
            min-width: 20px;
        }
        .service-row h3 {
            font-size: 1rem; font-weight: 500;
        }
        .service-row-mid p {
            font-size: 0.85rem;
            color: var(--text-mute);
            line-height: 1.6;
        }
        .service-tags { display: flex; gap: 0.4rem; flex-wrap: wrap; }
        .stag {
            font-size: 0.7rem;
            padding: 0.25rem 0.6rem;
            border: 1px solid var(--border);
            border-radius: 100px;
            color: var(--text-dim);
        }
        .service-row-right {
            display: flex; align-items: center; justify-content: flex-end;
        }
        .arrow-icon {
            width: 36px; height: 36px;
            border: 1px solid var(--border);
            border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            color: var(--text-mute);
            transition: border-color 0.2s, color 0.2s;
        }
        .service-row:hover .arrow-icon {
            border-color: var(--accent);
            color: var(--accent);
        }

        /* ── WHY ── */
        #why { border-top: 1px solid var(--border); }
        .why-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 5rem;
            align-items: center;
        }
        .why-list { display: flex; flex-direction: column; gap: 1.5rem; margin-top: 1rem; }
        .why-item { display: flex; gap: 1rem; align-items: flex-start; }
        .why-bullet {
            width: 8px; height: 8px;
            border-radius: 50%;
            background: var(--accent);
            margin-top: 0.5rem;
            flex-shrink: 0;
        }
        .why-item h4 { font-size: 0.95rem; font-weight: 500; margin-bottom: 0.3rem; }
        .why-item p { font-size: 0.85rem; color: var(--text-mute); line-height: 1.65; }
        .why-visual {
            background: var(--bg-card);
            border: 1px solid var(--border);
            border-radius: var(--radius-lg);
            padding: 2.5rem;
        }
        .comparison-row {
            display: grid; grid-template-columns: 1fr 1fr;
            gap: 1px;
            border: 1px solid var(--border);
            border-radius: var(--radius);
            overflow: hidden;
            margin-bottom: 1px;
        }
        .comp-cell {
            padding: 0.9rem 1rem;
            font-size: 0.8rem;
            background: var(--bg);
        }
        .comp-cell.header {
            font-size: 0.7rem; font-weight: 500;
            text-transform: uppercase; letter-spacing: 0.1em;
            color: var(--text-dim);
            background: var(--bg-subtle);
        }
        .comp-cell.bad { color: var(--text-mute); }
        .comp-cell.good {
            color: var(--text);
            background: rgba(79,127,255,0.05);
            display: flex; align-items: center; gap: 0.5rem;
        }
        .comp-cell.good::before {
            content: '';
            width: 5px; height: 5px;
            border-radius: 50%;
            background: var(--green);
            flex-shrink: 0;
        }

        /* ── PROCESS ── */
        #process { border-top: 1px solid var(--border); }
        .process-timeline {
            display: flex; flex-direction: column; gap: 0;
            margin-top: 3rem;
            position: relative;
        }
        .process-timeline::before {
            content: '';
            position: absolute;
            left: 19px; top: 0; bottom: 0;
            width: 1px;
            background: var(--border);
        }
        .timeline-step {
            display: grid;
            grid-template-columns: 40px 1fr;
            gap: 1.5rem;
            padding-bottom: 2.5rem;
        }
        .timeline-step:last-child { padding-bottom: 0; }
        .timeline-dot {
            width: 38px; height: 38px;
            border-radius: 50%;
            background: var(--bg-card);
            border: 1px solid var(--border);
            display: flex; align-items: center; justify-content: center;
            font-family: var(--serif);
            font-size: 0.85rem;
            color: var(--accent);
            position: relative; z-index: 1;
            flex-shrink: 0;
        }
        .timeline-content {
            padding-top: 0.5rem;
        }
        .timeline-content h3 {
            font-size: 0.95rem; font-weight: 500;
            margin-bottom: 0.4rem;
        }
        .timeline-content p {
            font-size: 0.83rem;
            color: var(--text-mute);
            line-height: 1.65;
        }

        /* ── REFERENCES ── */
        #references { border-top: 1px solid var(--border); }
        .ref-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1rem;
            margin-top: 3rem;
        }
        .ref-card {
            background: var(--bg-card);
            border: 1px solid var(--border);
            border-radius: var(--radius-lg);
            padding: 1.75rem;
            transition: border-color 0.25s;
        }
        .ref-card:hover { border-color: var(--border-md); }
        .ref-stars {
            display: flex; gap: 3px;
            margin-bottom: 1rem;
        }
        .star { color: #f5a623; font-size: 0.75rem; }
        .ref-quote {
            font-size: 0.875rem;
            line-height: 1.7;
            color: var(--text-mute);
            margin-bottom: 1.5rem;
            font-style: italic;
        }
        .ref-author { display: flex; align-items: center; gap: 0.65rem; }
        .ref-avatar {
            width: 32px; height: 32px; border-radius: 50%;
            background: var(--accent-lo);
            border: 1px solid rgba(79,127,255,0.2);
            display: flex; align-items: center; justify-content: center;
            font-size: 0.7rem; font-weight: 500;
            color: var(--accent);
        }
        .ref-name { font-size: 0.82rem; font-weight: 500; }
        .ref-role { font-size: 0.73rem; color: var(--text-mute); }
        .ref-type {
            margin-left: auto;
            font-size: 0.67rem;
            padding: 0.2rem 0.6rem;
            border: 1px solid var(--border);
            border-radius: 100px;
            color: var(--text-dim);
        }

        /* ── CTA BAND ── */
        #cta-band {
            border-top: 1px solid var(--border);
            padding: 5rem 0;
        }
        .cta-inner {
            background: var(--bg-card);
            border: 1px solid rgba(79,127,255,0.15);
            border-radius: var(--radius-lg);
            padding: 4rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 3rem;
        }
        .cta-text h2 {
            font-family: var(--serif);
            font-size: clamp(1.8rem, 3vw, 2.4rem);
            font-weight: 400;
            line-height: 1.2;
            margin-bottom: 0.75rem;
        }
        .cta-text p {
            font-size: 0.95rem;
            color: var(--text-mute);
            max-width: 480px;
            font-weight: 300;
        }
        .cta-actions { display: flex; gap: 1rem; flex-shrink: 0; }

        /* ── CONTACT ── */
        #contact { border-top: 1px solid var(--border); }
        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 5rem;
        }
        .contact-form { display: flex; flex-direction: column; gap: 1rem; }
        .form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; }
        .form-group { display: flex; flex-direction: column; gap: 0.4rem; }
        label {
            font-size: 0.73rem; font-weight: 500;
            color: var(--text-mute);
            text-transform: uppercase; letter-spacing: 0.08em;
        }
        input[type="text"], input[type="email"], input[type="tel"], select, textarea {
            background: var(--bg-card);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            padding: 0.85rem 1rem;
            color: var(--text);
            font-family: var(--sans);
            font-size: 0.875rem;
            width: 100%;
            transition: border-color 0.2s;
            outline: none;
            appearance: none;
        }
        input:focus, select:focus, textarea:focus {
            border-color: rgba(79,127,255,0.5);
        }
        input::placeholder, textarea::placeholder { color: var(--text-dim); }
        select { color: var(--text-mute); }
        textarea { resize: vertical; min-height: 120px; }
        .contact-info { padding-top: 0.5rem; }
        .contact-info p {
            font-size: 0.95rem; color: var(--text-mute);
            line-height: 1.75; font-weight: 300;
            margin-bottom: 2rem;
        }
        .info-blocks { display: flex; flex-direction: column; gap: 0.75rem; }
        .info-block {
            display: flex; align-items: center; gap: 0.75rem;
            padding: 1rem 1.25rem;
            background: var(--bg-card);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            font-size: 0.85rem;
            color: var(--text-mute);
            text-decoration: none;
            transition: color 0.2s, border-color 0.2s;
        }
        .info-block:hover { color: var(--text); border-color: var(--border-md); }
        .info-block svg { width: 16px; height: 16px; color: var(--accent); flex-shrink: 0; }

        /* ── FOOTER ── */
        footer {
            border-top: 1px solid var(--border);
            padding: 2rem 0;
        }
        .footer-inner {
            display: flex; align-items: center; justify-content: space-between;
        }
        .footer-copy { font-size: 0.78rem; color: var(--text-dim); }
        .footer-links { display: flex; gap: 1.5rem; }
        .footer-links a {
            font-size: 0.78rem; color: var(--text-dim);
            text-decoration: none; transition: color 0.2s;
        }
        .footer-links a:hover { color: var(--text-mute); }

        /* ── RESPONSIVE ── */
        @media (max-width: 960px) {
            nav { padding: 1rem 1.5rem; }
            .nav-links { display: none; }
            .why-grid, .contact-grid { grid-template-columns: 1fr; gap: 3rem; }
            .ref-grid { grid-template-columns: 1fr; }
            .cta-inner { flex-direction: column; text-align: center; }
            .cta-text p { max-width: 100%; }
            .problem-grid { grid-template-columns: 1fr; }
            .problem-card { border-right: none; border-bottom: 1px solid var(--border); }
            .problem-card:last-child { border-bottom: none; }
            .solution-box { grid-template-columns: 1fr; }
            .service-row { grid-template-columns: 1fr; gap: 1rem; }
            .service-row-right { display: none; }
            section { padding: 4rem 0; }
        }
        @media (max-width: 600px) {
            .form-row { grid-template-columns: 1fr; }
            .footer-inner { flex-direction: column; gap: 1rem; text-align: center; }
        }
    </style>
</head>
<body>

{{-- ── NAVIGATION ── --}}
<nav>
    <a href="#hero" class="nav-logo">
        <div class="logo-mark">X</div>
        <span class="logo-text">XProjekt</span>
    </a>
    <ul class="nav-links">
        <li><a href="#services">Szolgáltatások</a></li>
        <li><a href="#why">Miért mi?</a></li>
        <li><a href="#references">Referenciák</a></li>
        <li><a href="#contact" class="nav-cta">Ingyenes konzultáció</a></li>
    </ul>
</nav>

{{-- ── HERO ── --}}
<section id="hero">
    <div class="hero-glow"></div>
    <div class="container">
        <div class="hero-content">
            <div class="hero-badge">
                <span class="badge-dot"></span>
                Vállalunk új projekteket · Szekszárd &amp; remote
            </div>
            <h1>A weboldal, amire<br><em>tényleg szükséged van</em><br>– nem amit mindenki kap.</h1>
            <p class="hero-sub">
                Egyedi fejlesztésű weboldalak, webshopok, CRM és SaaS megoldások magyar vállalkozásoknak.
                Nem sablon. Nem WordPress. Valódi, méretre szabott rendszer, ami nő veled.
            </p>
            <div class="btn-group">
                <a href="#contact" class="btn-primary">
                    Ingyenes konzultáció
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </a>
                <a href="#services" class="btn-secondary">Mit csinálunk?</a>
            </div>
            <div class="scroll-hint">
                <span class="scroll-line"></span>
                Görgets lejjebb
            </div>
        </div>
    </div>
</section>

{{-- ── TRUST BAR ── --}}
<div id="trust">
    <div class="container">
        <div class="trust-inner">
            <span class="trust-label">Amit garantálunk</span>
            <div class="trust-items">
                <span class="trust-item">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                    Határidőre szállítás
                </span>
                <span class="trust-item">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                    Átlátható árazás
                </span>
                <span class="trust-item">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                    Forráskód a tiéd
                </span>
                <span class="trust-item">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                    3 hónap garancia
                </span>
                <span class="trust-item">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                    Nincs rejtett díj
                </span>
            </div>
        </div>
    </div>
</div>

{{-- ── PROBLEM ── --}}
<section id="problem">
    <div class="container">
        <div class="section-header">
            <p class="section-eyebrow">A probléma</p>
            <h2>Ismered ezt a <em>három helyzetet?</em></h2>
        </div>
        <div class="problem-grid">
            <div class="problem-card">
                <span class="problem-icon">😤</span>
                <h3>„Csináltattam egy oldalt, de nem hozza az eredményt."</h3>
                <p>Szép, de lassú. Vagy mobilon nem jó. Vagy egyszerűen nem jelenik meg a Google-ban. Nem az oldal van meg – az eredmény hiányzik.</p>
            </div>
            <div class="problem-card">
                <span class="problem-icon">🔒</span>
                <h3>„Egy ügynökséghez vagyok kötve, bármi változtatásért fizetnem kell."</h3>
                <p>WordPress, zárt rendszer, senki nem tudja átvenni. Minden apróság extra számla. Ez nem fejlesztés – ez fogság.</p>
            </div>
            <div class="problem-card">
                <span class="problem-icon">📋</span>
                <h3>„Kellene egy rendszer, de nem tudom, hogyan álljak hozzá."</h3>
                <p>Excelben vezeted az ügyfeleket, kézzel küldöd a számlákat, nincs egységes folyamat. Érzed, hogy lehetne jobban – csak nem tudod, hol kezdd.</p>
            </div>
        </div>
        <p class="problem-vs">Ezek helyett az XProjekttel ezt kapod</p>
        <div class="solution-box">
            <div class="solution-item">
                <div class="solution-check">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                </div>
                <div>
                    <h4>Egyedi fejlesztés</h4>
                    <p>Sem sablon, sem WordPress. A kód a te cégedre van szabva.</p>
                </div>
            </div>
            <div class="solution-item">
                <div class="solution-check">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                </div>
                <div>
                    <h4>A kód a tiéd</h4>
                    <p>Átadunk mindent – forráskód, dokumentáció, teljes kontroll.</p>
                </div>
            </div>
            <div class="solution-item">
                <div class="solution-check">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                </div>
                <div>
                    <h4>Skálázható rendszer</h4>
                    <p>Amit ma megépítünk, holnap is bővíthető – bárki által.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ── SERVICES ── --}}
<section id="services">
    <div class="container">
        <div class="section-header">
            <p class="section-eyebrow">Szolgáltatások</p>
            <h2>Miben tudunk <em>segíteni</em></h2>
            <p class="section-lead">Minden projektet nulláról, a te cégedre szabva fejlesztünk – nem sablonból, nem pluginokból.</p>
        </div>
        <div class="services-list">
            <div class="service-row">
                <div class="service-row-left">
                    <span class="service-num">01</span>
                    <h3>Egyedi weboldal &amp; landing page</h3>
                </div>
                <div class="service-row-mid">
                    <p>Prémium megjelenés, gyors betöltés, mobilra optimalizálva. Google-ban is megtalálható, konvertáló oldal – nem csak szép vizuál.</p>
                    <div class="service-tags" style="margin-top: 0.5rem;">
                        <span class="stag">Laravel</span>
                        <span class="stag">Vue.js</span>
                        <span class="stag">SEO</span>
                        <span class="stag">Animációk</span>
                    </div>
                </div>
                <div class="service-row-right">
                    <div class="arrow-icon">
                        <svg width="14" height="14" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </div>
                </div>
            </div>
            <div class="service-row">
                <div class="service-row-left">
                    <span class="service-num">02</span>
                    <h3>Webshop fejlesztés</h3>
                </div>
                <div class="service-row-mid">
                    <p>Egyedi e-commerce megoldás vagy WooCommerce testreszabás – attól függően, mi felel meg az üzleti modellnek és a méretnek.</p>
                    <div class="service-tags" style="margin-top: 0.5rem;">
                        <span class="stag">WooCommerce</span>
                        <span class="stag">Egyedi rendszer</span>
                        <span class="stag">Fizetési integráció</span>
                    </div>
                </div>
                <div class="service-row-right">
                    <div class="arrow-icon">
                        <svg width="14" height="14" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </div>
                </div>
            </div>
            <div class="service-row">
                <div class="service-row-left">
                    <span class="service-num">03</span>
                    <h3>CRM &amp; belső rendszerek</h3>
                </div>
                <div class="service-row-mid">
                    <p>Ügyféladatbázis, ajánlatkezelés, számlázás, feladatkövetés – minden egy helyen, a te folyamataidra szabva. Excel helyett valódi eszköz.</p>
                    <div class="service-tags" style="margin-top: 0.5rem;">
                        <span class="stag">CRM</span>
                        <span class="stag">Automatizálás</span>
                        <span class="stag">Riportok</span>
                    </div>
                </div>
                <div class="service-row-right">
                    <div class="arrow-icon">
                        <svg width="14" height="14" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </div>
                </div>
            </div>
            <div class="service-row">
                <div class="service-row-left">
                    <span class="service-num">04</span>
                    <h3>SaaS alkalmazás fejlesztés</h3>
                </div>
                <div class="service-row-mid">
                    <p>Ha van egy ötleted, amit szoftverré szeretnél tenni – felépítjük az MVP-t, és méretezhetőre tervezzük az alapoktól.</p>
                    <div class="service-tags" style="margin-top: 0.5rem;">
                        <span class="stag">Laravel SaaS</span>
                        <span class="stag">API</span>
                        <span class="stag">Előfizetés</span>
                        <span class="stag">MVP</span>
                    </div>
                </div>
                <div class="service-row-right">
                    <div class="arrow-icon">
                        <svg width="14" height="14" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ── WHY ── --}}
<section id="why">
    <div class="container">
        <div class="why-grid">
            <div>
                <div class="section-header">
                    <p class="section-eyebrow">Miért XProjekt?</p>
                    <h2>Nem ügynökség.<br><em>Személyes</em> fejlesztő.</h2>
                </div>
                <div class="why-list">
                    <div class="why-item">
                        <div class="why-bullet"></div>
                        <div>
                            <h4>Egyetlen kapcsolattartó, elejétől végéig</h4>
                            <p>Nem adunk tovább senki másnak. Aki elindítja a projektet, az szállítja is. Nincs információvesztés, nincs felelősségáthárítás.</p>
                        </div>
                    </div>
                    <div class="why-item">
                        <div class="why-bullet"></div>
                        <div>
                            <h4>Átlátható folyamat és árazás</h4>
                            <p>Ajánlatkérés után 48 órán belül pontos árajánlat. Mérföldkövek, haladási jelentések. Sosem leszel sötétben.</p>
                        </div>
                    </div>
                    <div class="why-item">
                        <div class="why-bullet"></div>
                        <div>
                            <h4>Modern tech, hosszú távú gondolkodás</h4>
                            <p>Laravel, Vue.js, biztonságos alapok. Olyan rendszert kapasz, amit 5 év múlva is karbantartható, bővíthető.</p>
                        </div>
                    </div>
                    <div class="why-item">
                        <div class="why-bullet"></div>
                        <div>
                            <h4>6+ év tapasztalat KKV projekteken</h4>
                            <p>Tudjuk, mire van szüksége egy kis- és középvállalkozásnak. Nem enterprise megoldásokat erőltetünk, ahol nincs rá szükség.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="why-visual">
                <p style="font-size: 0.72rem; font-weight: 500; text-transform: uppercase; letter-spacing: 0.1em; color: var(--text-dim); margin-bottom: 1rem;">XProjekt vs. tipikus ügynökség</p>
                <div class="comparison-row">
                    <div class="comp-cell header">Ügynökség</div>
                    <div class="comp-cell header">XProjekt</div>
                </div>
                <div class="comparison-row">
                    <div class="comp-cell bad">Sablonos WordPress megoldás</div>
                    <div class="comp-cell good">Egyedi fejlesztés</div>
                </div>
                <div class="comparison-row">
                    <div class="comp-cell bad">3-5 kapcsolattartó</div>
                    <div class="comp-cell good">1 fejlesztő, elejétől végig</div>
                </div>
                <div class="comparison-row">
                    <div class="comp-cell bad">Rejtett havidíjak</div>
                    <div class="comp-cell good">Fix ár, nincsenek meglepetések</div>
                </div>
                <div class="comparison-row">
                    <div class="comp-cell bad">A kód náluk marad</div>
                    <div class="comp-cell good">Minden forráskód a tiéd</div>
                </div>
                <div class="comparison-row">
                    <div class="comp-cell bad">6–12 hetes átfutás</div>
                    <div class="comp-cell good">2–6 hét projekt mérettől</div>
                </div>
                <div class="comparison-row">
                    <div class="comp-cell bad">Support külön díj</div>
                    <div class="comp-cell good">3 hónap garancia</div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ── PROCESS ── --}}
<section id="process">
    <div class="container">
        <div class="section-header">
            <p class="section-eyebrow">Folyamat</p>
            <h2>Hogyan épül fel<br>egy <em>projekt</em> nálunk</h2>
        </div>
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: start;">
            <div class="process-timeline">
                <div class="timeline-step">
                    <div class="timeline-dot">1</div>
                    <div class="timeline-content">
                        <h3>Ingyenes konzultáció</h3>
                        <p>30 perces egyeztetés – átbeszéljük a célt, az igényeket, a határidőt. Semmi elkötelezettség, csak tiszta kép.</p>
                    </div>
                </div>
                <div class="timeline-step">
                    <div class="timeline-dot">2</div>
                    <div class="timeline-content">
                        <h3>Ajánlat &amp; megállapodás</h3>
                        <p>48 órán belül részletes, áttekinthető ajánlat. Fix ár, ütemterv, mérföldkövek. Ha megfelelő – indulunk.</p>
                    </div>
                </div>
                <div class="timeline-step">
                    <div class="timeline-dot">3</div>
                    <div class="timeline-content">
                        <h3>Fejlesztés &amp; visszajelzések</h3>
                        <p>Heti státuszok, közbenső demók. Mindig tudod, hol tart a projekt – meglepetés nincs.</p>
                    </div>
                </div>
                <div class="timeline-step">
                    <div class="timeline-dot">4</div>
                    <div class="timeline-content">
                        <h3>Átadás &amp; élesítés</h3>
                        <p>Dokumentáció, oktatás ha szükséges, élesítés. Majd 3 hónap garancia – hibák esetén mi javítjuk, ingyen.</p>
                    </div>
                </div>
            </div>
            <div style="background: var(--bg-card); border: 1px solid var(--border); border-radius: var(--radius-lg); padding: 2.5rem; margin-top: 0.5rem;">
                <p style="font-size: 0.72rem; font-weight: 500; text-transform: uppercase; letter-spacing: 0.1em; color: var(--text-dim); margin-bottom: 1.5rem;">Tájékoztató átfutási idők</p>
                <div style="display: flex; flex-direction: column; gap: 1rem;">
                    <div style="display: flex; justify-content: space-between; align-items: center; padding-bottom: 1rem; border-bottom: 1px solid var(--border);">
                        <span style="font-size: 0.85rem;">Egyedi weboldal</span>
                        <span style="font-size: 0.82rem; color: var(--accent); font-weight: 500;">2–3 hét</span>
                    </div>
                    <div style="display: flex; justify-content: space-between; align-items: center; padding-bottom: 1rem; border-bottom: 1px solid var(--border);">
                        <span style="font-size: 0.85rem;">Webshop</span>
                        <span style="font-size: 0.82rem; color: var(--accent); font-weight: 500;">3–5 hét</span>
                    </div>
                    <div style="display: flex; justify-content: space-between; align-items: center; padding-bottom: 1rem; border-bottom: 1px solid var(--border);">
                        <span style="font-size: 0.85rem;">CRM / belső rendszer</span>
                        <span style="font-size: 0.82rem; color: var(--accent); font-weight: 500;">4–8 hét</span>
                    </div>
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span style="font-size: 0.85rem;">SaaS MVP</span>
                        <span style="font-size: 0.82rem; color: var(--accent); font-weight: 500;">6–12 hét</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ── REFERENCES ── --}}
<section id="references">
    <div class="container">
        <div class="section-header">
            <p class="section-eyebrow">Referenciák</p>
            <h2>Mit mondanak<br><em>ügyfeleink</em></h2>
            <p class="section-lead">Cseréld le a saját referenciáidra – de addig is ez a struktúra.</p>
        </div>
        <div class="ref-grid">
            <div class="ref-card">
                <div class="ref-stars">
                    <span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span>
                </div>
                <p class="ref-quote">„Pontosan azt kaptuk, amit kértünk – és kicsit többet. Az oldal gyors, szép, és végre a Google-ban is megjelenünk."</p>
                <div class="ref-author">
                    <div class="ref-avatar">KA</div>
                    <div>
                        <div class="ref-name">[Ügyfél neve]</div>
                        <div class="ref-role">Ügyvezető, [Cég neve]</div>
                    </div>
                    <span class="ref-type">Weboldal</span>
                </div>
            </div>
            <div class="ref-card">
                <div class="ref-stars">
                    <span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span>
                </div>
                <p class="ref-quote">„A webshopunk előző fejlesztője után azt hittük, mindenki ilyen. Nem. Határidőre kész volt, és az első hónapban 30%-kal nőtt a konverzió."</p>
                <div class="ref-author">
                    <div class="ref-avatar">SB</div>
                    <div>
                        <div class="ref-name">[Ügyfél neve]</div>
                        <div class="ref-role">Tulajdonos, [Cég neve]</div>
                    </div>
                    <span class="ref-type">Webshop</span>
                </div>
            </div>
            <div class="ref-card">
                <div class="ref-stars">
                    <span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span>
                </div>
                <p class="ref-quote">„Excelből egy valódi CRM-be kerültünk. Az adminunk napi 2 óra munkát spórolt meg. Bárcsak korábban csináltuk volna."</p>
                <div class="ref-author">
                    <div class="ref-avatar">MV</div>
                    <div>
                        <div class="ref-name">[Ügyfél neve]</div>
                        <div class="ref-role">Értékesítési vezető, [Cég neve]</div>
                    </div>
                    <span class="ref-type">CRM</span>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ── CTA BAND ── --}}
<section id="cta-band">
    <div class="container">
        <div class="cta-inner">
            <div class="cta-text">
                <h2>Legyen meg a <em>következő lépésed</em> még ma.</h2>
                <p>Egy ingyenes, 30 perces konzultáción kiderül, mit tudnánk építeni neked – és mennyiért. Semmi elkötelezettség.</p>
            </div>
            <div class="cta-actions">
                <a href="#contact" class="btn-primary">
                    Konzultációt kérek
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </a>
            </div>
        </div>
    </div>
</section>

{{-- ── CONTACT ── --}}
<section id="contact">
    <div class="container">
        <div class="section-header">
            <p class="section-eyebrow">Kapcsolat</p>
            <h2>Meséld el,<br>mire van <em>szükséged</em></h2>
        </div>
        <div class="contact-grid">
            <form class="contact-form" method="POST" action="#">
                @csrf
                <div class="form-row">
                    <div class="form-group">
                        <label for="name">Neved</label>
                        <input type="text" id="name" name="name" placeholder="Kovács Péter" required>
                    </div>
                    <div class="form-group">
                        <label for="company">Céged neve</label>
                        <input type="text" id="company" name="company" placeholder="Acme Kft.">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" id="email" name="email" placeholder="peter@acme.hu" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Telefon (opcionális)</label>
                        <input type="tel" id="phone" name="phone" placeholder="+36 30 ...">
                    </div>
                </div>
                <div class="form-group">
                    <label for="service">Mivel kapcsolatban keresed fel az XProjektet?</label>
                    <select id="service" name="service">
                        <option value="" disabled selected>Válassz kategóriát...</option>
                        <option value="weboldal">Egyedi weboldal / landing page</option>
                        <option value="webshop">Webshop fejlesztés</option>
                        <option value="crm">CRM / belső rendszer</option>
                        <option value="saas">SaaS alkalmazás</option>
                        <option value="egyeb">Egyéb / nem tudom pontosan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="message">Mit szeretnél elérni?</label>
                    <textarea id="message" name="message" placeholder="Röviden írd le a projektet, a célt, és ha van, a határidőt..." required></textarea>
                </div>
                <button type="submit" class="btn-primary" style="align-self: flex-start; border: none; cursor: pointer; font-family: var(--sans);">
                    Üzenet küldése
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </button>
            </form>
            <div class="contact-info">
                <p>
                    Írd meg, mire van szükséged – akár egy rövid mondatban. 24 órán belül visszajelzünk,
                    és megbeszéljük, hogyan tudunk segíteni.
                </p>
                <div class="info-blocks">
                    <a href="mailto:[EMAIL]" class="info-block">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                        [EMAIL]
                    </a>
                    <a href="https://linkedin.com/in/[LINKEDIN]" target="_blank" rel="noopener" class="info-block">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
                        LinkedIn – XProjekt
                    </a>
                    <a href="tel:[TELEFON]" class="info-block">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 1.27h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 9a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                        [TELEFON]
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ── FOOTER ── --}}
<footer>
    <div class="container">
        <div class="footer-inner">
            <p class="footer-copy">© {{ date('Y') }} XProjekt · Webfejlesztés vállalkozásoknak · Szekszárd</p>
            <div class="footer-links">
                <a href="#">Adatvédelem</a>
                <a href="#">ÁSZF</a>
                <a href="/portfolio">Személyes oldal</a>
            </div>
        </div>
    </div>
</footer>

<script>
    const fadeEls = document.querySelectorAll('.service-row, .ref-card, .problem-card, .timeline-step, .why-item, .solution-item');
    const obs = new IntersectionObserver((entries) => {
        entries.forEach(e => {
            if (e.isIntersecting) {
                e.target.style.opacity = '1';
                e.target.style.transform = 'translateY(0)';
            }
        });
    }, { threshold: 0.08 });

    fadeEls.forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(14px)';
        el.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
        obs.observe(el);
    });

    // Nav active state
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.nav-links a[href^="#"]');
    new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                navLinks.forEach(link => {
                    link.style.color = link.getAttribute('href') === '#' + entry.target.id
                        ? 'var(--text)' : '';
                });
            }
        });
    }, { threshold: 0.35 }).observe(...sections);
</script>

</body>
</html>
