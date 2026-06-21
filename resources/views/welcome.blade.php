@include('layout.header')


<!-- HERO -->
<section id="hero">
    <div class="hero-bg"></div>
    <div class="container">
        <div class="hero-grid">
            <div>
                <div class="hero-eyebrow">Szabadúszó webfejlesztő</div>
                <h1>Tövisháti András vagyok <em> szabadúszó webfejlesztő</em></h1>

                <p class="hero-sub">
                    7 éve foglalkozom SaaS alkalmazások, és egyedi wordpress bővítmények fejlesztésével. Eleinte csak hobbiból fejlesztettem, ma már cégeknek segítek be a fejlesztésbe.
                    <br>
                    Dolgozzunk együtt :-)
                </p>
                <div class="btn-group">
                    <a href="#contact" class="btn-primary">
                        Írj nekem
                        <svg width="15" height="15" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </a>
                    <a href="#about" class="btn-secondary">Bővebben rólam</a>
                </div>
            </div>

            <div>
                <div class="hero-profile">
                    <img src="profile.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ABOUT -->
<section id="about">
    <div class="container">
        <div class="about-grid">
            <div class="about-left">
                <div class="section-header">
                    <p class="section-eyebrow">Rólam</p>
                    <h2>7 éve csinálom,<br><em>mert szeretem.</em></h2>
                    <div class="accent-line"></div>
                </div>
                <div class="tech-list">
                    <span class="tech-tag accent">Laravel</span>
                    <span class="tech-tag accent">Vue.js</span>
                    <span class="tech-tag accent">React.js</span>
                    <span class="tech-tag accent">Angular</span>
                    <span class="tech-tag accent">PHP</span>
                    <span class="tech-tag accent">WordPress</span>
                    <span class="tech-tag accent">Alpine.js</span>
                    <span class="tech-tag accent">Inertia</span>
                    <span class="tech-tag">MySQL</span>
                    <span class="tech-tag">REST API</span>
                    <span class="tech-tag">Git</span>
                    <span class="tech-tag">Docker</span>
                    <span class="tech-tag">Nuxt</span>
                    <span class="tech-tag">Vite</span>
                    <span class="tech-tag">Tailwind.css</span>
                    <span class="tech-tag">Linux</span>
                    <span class="tech-tag">CI/CD</span>
                    <span class="tech-tag">OpenAI</span>
                </div>
            </div>
            <div class="about-body">
                <p>
                    7 évvel ezelőtt a zenekaromnak szüksége volt egy weboldalra. Arra gondoltam, hogy <strong>informatikai szakos voltam a gimnáziumban</strong>, ezt talán én is meg tudom csinálni. Ekkor ismerkedtem meg a <strong>WordPress</strong>-szel.
                </p>

                <p>
                    Évekig hobbi szinten fejlesztettem plugineket, amelyeket feltöltöttem <strong>az <a href="#">Envato marketplace-re</a>, ahol számos 5 csillagos értékelést kaptak.</strong> Ezek jelentették az első komoly sikerélményeimet.
                </p>

                <p>
                    Hamar rájöttem, hogy a WordPress önmagában nem minden. Komolyabb frameworkök elsajátításával összetettebb alkalmazásokat építhetek, és értékesebb szakemberré válhatok a piacon. Ekkor kezdtem el tanulni a <strong>Laravelt, a Reactet, a Vue.js-t, az Angulart</strong> és számos más keretrendszert.
                </p>

                <p>
                    <strong>3 éve dolgozom szabadúszóként.</strong> Többnyire IT-cégeknek végzek fejlesztési munkákat, de készítettem már weboldalakat, webáruházakat, teljes platformokat és CRM-rendszereket is a nulláról.
                </p>

                <p>
                    Tapasztalat tekintetében valahol a junior és a senior szint között helyezem el magam. Ez azt jelenti, hogy még bőven van hová fejlődnöm, ugyanakkor már nincs szükség folyamatos iránymutatásra, és nagyobb felelősséggel járó feladatokat is nyugodtan rám lehet bízni.
                </p>

                <p>
                    Szeretek <strong>hosszú távú együttműködésekben</strong> gondolkodni, ezért ügyfeleimmel nem csupán egy-egy projekt erejéig dolgozom együtt. Fontos számomra a <strong>megbízhatóság és a folyamatos kapcsolattartás:</strong> elérhető vagyok, gyorsan reagálok, és a projekt átadása után sem tűnök el.
                </p>

                <div class="ai-callout">
                    <div class="ai-callout-label">Az AI-ról őszintén</div>
                    <p>
                        Mindenki használ már AI-t a fejlesztéshez – én is. De fontos a különbség:
                        nálam az AI eszköz, nem helyettesítő. Minden generált kódot átnézek, megértem,
                        és csak akkor commitolom, ha felelősséget tudok vállalni érte.
                        A "vibe coding" gyors, de töredékeny. Én inkább lassabb, de stabil kódot szállítok.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- WHY -->
<section id="why">
    <div class="hero-bg"></div>
    <div class="container">
        <div class="hero-grid">
            <div>
                <div class="section-eyebrow">Miért dolgozz velem</div>
                <h2>Nem fizetsz többet,<br>mint amennyit<br><em>tényleg kaptál.</em></h2>
                <div class="accent-line"></div>
                <div class="hero-argument">
                    Egy alkalmazott havi bérét akkor is fizeted, ha épp nincs projekt. Én óradíjban dolgozom –
                    <strong>csak azt számlázom, amit valóban elvégeztem.</strong> Nem több, nem kevesebb.
                </div>
            </div>

            <div>
                <div class="hero-compare">
                    <div class="compare-header">
                        <div class="compare-col-label">Főállású alkalmazott</div>
                        <div class="compare-col-label">Szabadúszó</div>
                    </div>
                    <div class="compare-row">
                        <div class="compare-cell bad"><span class="cross">✕</span>Fix havi bér, munka nélkül is</div>
                        <div class="compare-cell"><span class="check">✓</span>Csak a ténylegesen elvégzett munka</div>
                    </div>
                    <div class="compare-row">
                        <div class="compare-cell bad"><span class="cross">✕</span>Betanítás, onboarding hetekig</div>
                        <div class="compare-cell"><span class="check">✓</span>48 órán belül produktív</div>
                    </div>
                    <div class="compare-row">
                        <div class="compare-cell bad"><span class="cross">✕</span>Járulékok, adminisztráció</div>
                        <div class="compare-cell"><span class="check">✓</span>Egyszerű számlás együttműködés</div>
                    </div>
                    <div class="compare-row">
                        <div class="compare-cell bad"><span class="cross">✕</span>Ha nincs munka, ott ül</div>
                        <div class="compare-cell"><span class="check">✓</span>Rugalmas – annyi, amennyi kell</div>
                    </div>
                    <div class="compare-row">
                        <div class="compare-cell bad"><span class="cross">✕</span>Felmondási idő, kötelezettség</div>
                        <div class="compare-cell"><span class="check">✓</span>Rövid és hosszú táv egyaránt</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SERVICES -->
<section id="services">
    <div class="container">
        <div class="section-header">
            <p class="section-eyebrow">Mivel segíthetek</p>
            <h2>Hol tudok <em>bekapcsolódni</em></h2>
            <p class="section-lead">Órabérben, napi díjban, vagy projektalapon – a feladat szabja meg a formát.</p>
        </div>
        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                    </svg>
                </div>
                <h3>Csapatba beépülés</h3>
                <p>Beállok a meglévő fejlesztői csapatba. Vállalok sprintből feladatot, bugfixet, feature fejlesztést – a ti folyamataitokhoz igazodva.</p>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/>
                    </svg>
                </div>
                <h3>Új funkciók fejlesztése</h3>
                <p>Van egy új ötlet, modul vagy üzleti igény? Megtervezem és lefejlesztem az új funkciókat úgy, hogy azok illeszkedjenek a meglévő rendszerhez és hosszú távon is fenntarthatók maradjanak.</p>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="13 2 13 9 20 9"/><path d="M20 14.5V7l-5-5H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h7.5"/><path d="M15 19l2 2 5-5"/>
                    </svg>
                </div>
                <h3>Projektmentés & gyorsítás</h3>
                <p>Sok a nyitott task, csúsznak a fejlesztések vagy megakadt a projekt? Segítek ledolgozni a lemaradást, rendet tenni a prioritások között és új lendületet adni a haladásnak.</p>
            </div>
        </div>
    </div>
</section>

<!-- PROJECTS -->
<section id="projects">
    <div class="container">
        <div class="section-header">
            <p class="section-eyebrow">Saját projektek</p>
            <h2>Amit <em>hobbiból</em> csináltam</h2>
            <p class="section-lead">Nem minden fejlesztés ügyfélmunka – ezeket magamnak, kíváncsiságból építettem.</p>
        </div>
        <div class="projects-grid">
            <div class="project-card project-placeholder">
                <div class="project-type">SaaS / webapp</div>
                <h3>PixKreator</h3>
                <p>PixKreator egy Vue.js és Vuetify alapú egyoldalas alkalmazás (SPA), amely gyors és reszponzív felhasználói élményt biztosít. A backend Laravelre épül, MySQL adatbázist használ, míg a megjelenést Tailwind CSS alapú dizájn támogatja. A frontend és a backend REST API-n keresztül kommunikál, így a projekt jól szemlélteti a frontend- és backend-fejlesztésben szerzett tapasztalataimat, valamint a modern webalkalmazások teljes körű fejlesztésében való jártasságomat.</p>
                <div class="project-tags">
                    <span class="project-tag">Laravel</span>
                    <span class="project-tag">MySQL</span>
                    <span class="project-tag">Vue.js</span>
                </div>
                <div class="flex-1"></div>
                <div class="mt-2">
                    <a href="#" class="btn-secondary">
                        Nézd meg
                    </a>
                </div>
            </div>
            <div class="project-card project-placeholder">
                <div class="project-type">Nyílt forráskódú</div>
                <h3>GrafikJS</h3>
                <p>GrafikJS egy interaktív JavaScript könyvtár, amelyet skálázható vektorgrafikák (SVG) létrehozására fejlesztettem webalkalmazásokhoz. Kiválóan használható React, Angular vagy Vue.js alapú projektekben, és egy rugalmas, könnyen használható API-t biztosít dinamikus grafikák készítéséhez. Kétrétegű architektúrájának köszönhetően külön kezeli a megjelenítést és az interakciókat, emellett támogatja az animációkat és az összetett, egymásba ágyazott grafikai elemek kezelését. A projekt jól tükrözi a JavaScript, az SVG-technológiák és a frontend architektúrák területén szerzett tapasztalataimat.</p>
                <div class="project-tags">
                    <span class="project-tag">JavaScript</span>
                    <span class="project-tag">TypeScript</span>
                    <span class="project-tag">Vue.js</span>
                    <span class="project-tag">React.js</span>
                    <span class="project-tag">Angular</span>
                    <span class="project-tag">Svelte</span>
                </div>
                <div class="flex-1"></div>
                <div class="mt-2">
                    <a href="#" class="btn-secondary">
                        Nézd meg
                    </a>
                </div>
            </div>
            <div class="project-card project-placeholder">
                <div class="project-type">WordPress bővítmény</div>
                <h3>PixMagix</h3>
                <p>PixMagix egy ingyenes, a WordPress.org-on elérhető WordPress-bővítmény, amely lehetővé teszi a médiatárban található képek szerkesztését közvetlenül a WordPress felületén. A felhasználói felület React és Redux technológiákkal készült, míg a háttérben a WordPress REST API biztosítja a zökkenőmentes integrációt. A projekt jól bemutatja, hogy modern frontend technológiák alkalmazásával képes vagyok összetett WordPress-bővítményeket fejleszteni a tervezéstől a megvalósításig.</p>
                <div class="project-tags">
                    <span class="project-tag">WordPress</span>
                    <span class="project-tag">PHP</span>
                    <span class="project-tag">React.js</span>
                    <span class="project-tag">Redux</span>
                </div>
                <div class="flex-1"></div>
                <div class="mt-2">
                    <a href="#" class="btn-secondary">
                        Nézd meg
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- REFERENCES -->
<section id="references">
    <div class="container">
        <div class="section-header">
            <p class="section-eyebrow">Referenciák</p>
            <h2>Nézd meg referenciáimat az <em>XProjekten</em></h2>
            <p class="section-lead">Fent vagyok az XProjekten is, nézd meg a profilom.</p>
        </div>
        <div class="ref-grid">
            <div class="ref-card">
                <p class="ref-quote">„Gyorsan bekapcsolódott a csapatba, minimális betanítással azonnal produktív volt. A kódja tiszta, a kommunikációja precíz – pontosan azt kaptuk, amire szükségünk volt."</p>
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
                <p class="ref-quote">„Egy régi, rendezetlen codebase-t kellett átvennie és modernizálnia. Türelmesen, alaposan végezte a munkát, és dokumentálta is amit csinált."</p>
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
                <p class="ref-quote">„Kapacitáshiányunk volt, és András tökéletesen töltötte be a rést. Sprintenként megbízható, határidőtartó, és gond nélkül beolvadt a Scrum folyamatainkba."</p>
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

<!-- CONTACT -->
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
                        Ha kapacitáshiányod van, kiszerveznél egy projektet, vagy csak felmérjük hogy tudnék-e segíteni –
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
                    </div>
                </div>
            </div>
            <div>
                <form class="contact-form" method="POST" action="#">
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
                        <textarea id="message" name="message" placeholder="Röviden írd le a feladatot, a csapat méretét, és az ütemezési elvárásaidat..." required></textarea>
                    </div>
                    <button type="submit" class="btn-primary" style="align-self:flex-start; border:none; cursor:pointer; font-family:var(--sans);">
                        Üzenet küldése
                        <svg width="15" height="15" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

@include('layout.footer')
