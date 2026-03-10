<?php
// sections/contact.php — Sección de contacto
$icon_linkedin = '<svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"/><circle cx="4" cy="4" r="2"/></svg>';
$icon_github   = '<svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.3 3.44 9.8 8.2 11.38.6.11.82-.26.82-.58v-2.03c-3.34.72-4.04-1.61-4.04-1.61-.55-1.4-1.34-1.77-1.34-1.77-1.09-.74.08-.73.08-.73 1.2.09 1.84 1.24 1.84 1.24 1.07 1.83 2.8 1.3 3.48 1 .1-.78.42-1.3.76-1.6-2.67-.3-5.47-1.33-5.47-5.93 0-1.31.47-2.38 1.24-3.22-.14-.3-.54-1.52.1-3.18 0 0 1.01-.32 3.3 1.23a11.5 11.5 0 016 0c2.29-1.55 3.3-1.23 3.3-1.23.64 1.66.24 2.88.12 3.18.77.84 1.23 1.91 1.23 3.22 0 4.61-2.81 5.63-5.48 5.92.43.37.81 1.1.81 2.22v3.29c0 .32.21.7.82.58C20.56 21.8 24 17.3 24 12c0-6.63-5.37-12-12-12z"/></svg>';
$icon_cv       = '<svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="12" y1="18" x2="12" y2="12"/><line x1="9" y1="15" x2="15" y2="15"/></svg>';
?>
<section id="contact">
  <div class="container">
    <div class="contact-inner">
      <p class="section-label fade-up">Contacto</p>
      <h2 class="section-title fade-up">¿Trabajamos juntos?</h2>
      <p class="section-body fade-up">
        Estoy abierto a nuevas oportunidades, proyectos freelance o simplemente a una charla
        sobre tecnología. No dudes en escribirme.
      </p>
      <p class="contact-email fade-up">
        📧 <a href="mailto:<?= htmlspecialchars($config['email']) ?>">
          <?= htmlspecialchars($config['email']) ?>
        </a>
      </p>
      <div class="contact-links fade-up">
        <a href="<?= htmlspecialchars($config['linkedin']) ?>" class="contact-link" target="_blank" rel="noopener">
          <?= $icon_linkedin ?> LinkedIn
        </a>
        <a href="<?= htmlspecialchars($config['github']) ?>" class="contact-link" target="_blank" rel="noopener">
          <?= $icon_github ?> GitHub
        </a>
        <a href="<?= htmlspecialchars($config['cv_path']) ?>" class="contact-link" download>
          <?= $icon_cv ?> Descargar CV
        </a>
      </div>
    </div>
  </div>
</section>
