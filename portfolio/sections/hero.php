<?php
// sections/hero.php — Sección portada
?>
<section id="hero">
  <div class="container">
    <?php if ($config['disponible']): ?>
      <div class="hero-tag">Disponible para proyectos</div>
    <?php endif; ?>
    <h1 class="hero-name fade-up">
      Hola, soy<br />
      <em><?= htmlspecialchars($config['nombre']) ?></em>
    </h1>
    <p class="hero-desc fade-up">
      <?= htmlspecialchars($config['descripcion']) ?>
    </p>
    <div class="hero-btns fade-up">
      <a href="#projects" class="btn btn-primary">
        <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path d="M3 12l9-9 9 9M4 10v10a1 1 0 001 1h5v-5h4v5h5a1 1 0 001-1V10"/>
        </svg>
        Ver proyectos
      </a>
      <a href="<?= htmlspecialchars($config['cv_path']) ?>" download class="btn btn-outline">
        <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path d="M12 5v14M5 12l7 7 7-7"/>
        </svg>
        Descargar CV
      </a>
    </div>
  </div>
</section>
