<?php
// sections/about.php — Sección "Sobre mí"
// ✏️ Edita $sobre_mi con tu texto personal
$sobre_mi = 'Soy desarrollador con experiencia en el desarrollo de aplicaciones web completas, 
desde el backend hasta la interfaz de usuario. Me apasiona crear soluciones que 
resuelvan problemas reales de manera elegante y eficiente.';

// ✏️ Pon la ruta a tu foto. Ej: 'assets/img/foto.jpg'
//    Si no tienes foto aún, déjalo en null para mostrar el placeholder
$foto = null;
?>
<section id="about">
  <div class="container">
    <div class="about-grid">

      <div class="about-img-wrap fade-up">
        <?php if ($foto): ?>
          <img src="<?= htmlspecialchars($foto) ?>" alt="<?= htmlspecialchars($config['nombre']) ?>" class="about-img" />
        <?php else: ?>
          <div class="img-placeholder">
            <svg width="48" height="48" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
              <circle cx="12" cy="8" r="4"/>
              <path d="M4 20c0-4 3.6-7 8-7s8 3 8 7"/>
            </svg>
            Tu foto aquí
          </div>
        <?php endif; ?>
      </div>

      <div class="fade-up">
        <p class="section-label">Sobre mí</p>
        <h2 class="section-title">Desarrollador apasionado por el código limpio</h2>
        <p class="section-body"><?= nl2br(htmlspecialchars($sobre_mi)) ?></p>
        <div class="about-details">
          <div class="about-detail">
            <svg width="16" height="16" fill="none" stroke="var(--accent)" stroke-width="2" viewBox="0 0 24 24">
              <path d="M17.657 16.657L13.414 20.9a2 2 0 01-2.828 0l-4.243-4.243a8 8 0 1111.314 0z"/>
              <circle cx="12" cy="11" r="3"/>
            </svg>
            <span><?= htmlspecialchars($config['ciudad']) ?></span>
          </div>
          <div class="about-detail">
            <svg width="16" height="16" fill="none" stroke="var(--accent)" stroke-width="2" viewBox="0 0 24 24">
              <circle cx="12" cy="12" r="10"/>
              <path d="M12 6v6l4 2"/>
            </svg>
            <span><?= htmlspecialchars($config['experiencia']) ?></span>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
