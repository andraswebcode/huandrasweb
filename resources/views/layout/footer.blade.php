<footer>
    <div class="container">
        <p>© 2025 Tövisháti András · AndrasWeb</p>
    </div>
</footer>

<script>
    // Nav highlight on scroll
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
    const fadeEls = document.querySelectorAll('.compare-row, .service-card, .project-card, .ref-card, .process-step');
    const fadeObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, { threshold: 0.08 });
    fadeEls.forEach((el, i) => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(14px)';
        el.style.transition = `opacity 0.45s ease ${i * 0.04}s, transform 0.45s ease ${i * 0.04}s`;
        fadeObserver.observe(el);
    });
</script>
</body>
</html>
