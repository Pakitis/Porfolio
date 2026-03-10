<?php
// sections/projects.php — Sección de proyectos
// ✏️ Rellena cada proyecto con tus datos reales
// Campos disponibles:
//   titulo      → nombre del proyecto
//   descripcion → 2-3 frases explicando qué hace y qué problema resuelve
//   tags        → array de tecnologías usadas
//   github      → URL al repositorio (null si es privado)
//   demo        → URL a la demo en vivo (null si no existe)

$proyectos = [
  [
    'titulo'      => 'Nombre del Proyecto 1',
    'descripcion' => 'Describe aquí qué hace tu proyecto, qué problema resuelve y qué aprendiste al construirlo. 2-3 frases es suficiente.',
    'tags'        => ['JavaScript', 'Node.js', 'MySQL'],
    'github'      => 'https://github.com/tuusuario/proyecto1',
    'demo'        => null,
  ],
  [
    'titulo'      => 'Nombre del Proyecto 2',
    'descripcion' => 'Describe aquí qué hace tu proyecto, qué problema resuelve y qué aprendiste al construirlo. 2-3 frases es suficiente.',
    'tags'        => ['Python', 'Django', 'PostgreSQL'],
    'github'      => 'https://github.com/tuusuario/proyecto2',
    'demo'        => 'https://mi-demo.com',
  ],
  [
    'titulo'      => 'Nombre del Proyecto 3',
    'descripcion' => 'Describe aquí qué hace tu proyecto, qué problema resuelve y qué aprendiste al construirlo. 2-3 frases es suficiente.',
    'tags'        => ['PHP', 'Laravel', 'JavaScript'],
    'github'      => 'https://github.com/tuusuario/proyecto3',
    'demo'        => null,
  ],
];

// SVG reutilizables
$icon_link = '<svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>';
$icon_github = '<svg width="13" height="13" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.3 3.44 9.8 8.2 11.38.6.11.82-.26.82-.58v-2.03c-3.34.72-4.04-1.61-4.04-1.61-.55-1.4-1.34-1.77-1.34-1.77-1.09-.74.08-.73.08-.73 1.2.09 1.84 1.24 1.84 1.24 1.07 1.83 2.8 1.3 3.48 1 .1-.78.42-1.3.76-1.6-2.67-.3-5.47-1.33-5.47-5.93 0-1.31.47-2.38 1.24-3.22-.14-.3-.54-1.52.1-3.18 0 0 1.01-.32 3.3 1.23a11.5 11.5 0 016 0c2.29-1.55 3.3-1.23 3.3-1.23.64 1.66.24 2.88.12 3.18.77.84 1.23 1.91 1.23 3.22 0 4.61-2.81 5.63-5.48 5.92.43.37.81 1.1.81 2.22v3.29c0 .32.21.7.82.58C20.56 21.8 24 17.3 24 12c0-6.63-5.37-12-12-12z"/></svg>';
?>
<section id="projects">
  <div class="container">
    <p class="section-label fade-up">Trabajo</p>
    <h2 class="section-title fade-up">Proyectos destacados</h2>

    <div class="projects-grid">
      <?php foreach ($proyectos as $i => $proyecto): ?>
        <div class="project-card fade-up">
          <div>
            <div class="project-number"><?= str_pad($i + 1, 2, '0', STR_PAD_LEFT) ?> —</div>
            <h3 class="project-title"><?= htmlspecialchars($proyecto['titulo']) ?></h3>
            <p class="project-desc"><?= htmlspecialchars($proyecto['descripcion']) ?></p>
            <div class="project-tags">
              <?php foreach ($proyecto['tags'] as $tag): ?>
                <span class="project-tag"><?= htmlspecialchars($tag) ?></span>
              <?php endforeach; ?>
            </div>
          </div>
          <div class="project-links">
            <?php if ($proyecto['demo']): ?>
              <a href="<?= htmlspecialchars($proyecto['demo']) ?>" class="project-link primary" target="_blank" rel="noopener">
                <?= $icon_link ?> Ver demo
              </a>
            <?php endif; ?>
            <?php if ($proyecto['github']): ?>
              <a href="<?= htmlspecialchars($proyecto['github']) ?>" class="project-link" target="_blank" rel="noopener">
                <?= $icon_github ?> GitHub
              </a>
            <?php endif; ?>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
