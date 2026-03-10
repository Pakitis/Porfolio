<?php
// sections/skills.php — Sección de habilidades
// ✏️ Edita o añade categorías y tecnologías según tus conocimientos reales

$habilidades = [
  'Lenguajes' => [
    'JavaScript', 'TypeScript', 'Python', 'PHP',
  ],
  'Frontend' => [
    'HTML5', 'CSS3', 'React',
    // ✏️ Añade: 'Vue.js', 'Tailwind CSS', 'SASS', etc.
  ],
  'Backend' => [
    'Node.js', 'Django', 'Laravel',
    // ✏️ Añade: 'Express', 'FastAPI', 'Symfony', etc.
  ],
  'Bases de datos' => [
    'MySQL', 'PostgreSQL', 'MongoDB',
    // ✏️ Añade: 'Redis', 'SQLite', etc.
  ],
  'Herramientas' => [
    'Git', 'Docker', 'VS Code', 'Linux',
    // ✏️ Añade: 'GitHub Actions', 'Postman', 'Figma', etc.
  ],
];
?>
<section id="skills">
  <div class="container">
    <p class="section-label fade-up">Tecnologías</p>
    <h2 class="section-title fade-up">Habilidades</h2>
    <p class="section-body fade-up">
      Las herramientas y lenguajes con los que trabajo día a día para construir productos sólidos.
    </p>

    <div class="skills-grid">
      <?php foreach ($habilidades as $categoria => $tags): ?>
        <div class="skill-category fade-up">
          <div class="skill-cat-title"><?= htmlspecialchars($categoria) ?></div>
          <div class="skill-list">
            <?php foreach ($tags as $tag): ?>
              <span class="skill-tag"><?= htmlspecialchars($tag) ?></span>
            <?php endforeach; ?>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
