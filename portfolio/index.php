<?php
// ─────────────────────────────────────────────
//  CONFIGURACIÓN PRINCIPAL — edita aquí tus datos
// ─────────────────────────────────────────────
$config = [
  'nombre'        => 'Sebastian Rodriguez',
  'titulo'        => 'Desarrollador Full Stack',
  'descripcion'   => 'Especializado en JavaScript, Python, PHP, CSS y MySQL. Construyo aplicaciones web rápidas, limpias y mantenibles.',
  'email'         => 'SebaaaRodriguez@hotmail.com',
  'linkedin'      => 'https://linkedin.com/in/tuusuario',
  'github'        => 'https://github.com/tuusuario',
  'ciudad'        => 'Barcelona, España',
  'experiencia'   => '1 año de experiencia',
  'disponible'    => true,   // false para ocultar el badge
  'cv_path'       => 'assets/cv.pdf',
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portfolio — <?= htmlspecialchars($config['nombre']) ?></title>
  <meta name="description" content="<?= htmlspecialchars($config['descripcion']) ?>" />
  <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>

  <?php include 'includes/nav.php'; ?>

  <main>
    <?php
      include 'sections/hero.php';
      include 'sections/about.php';
      include 'sections/skills.php';
      include 'sections/projects.php';
      include 'sections/contact.php';
    ?>
  </main>

  <?php include 'includes/footer.php'; ?>

  <script src="assets/js/main.js"></script>
</body>
</html>
