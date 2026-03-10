<?php
// includes/nav.php — Barra de navegación
?>
<nav>
  <div class="nav-inner">
    <a href="#hero" class="nav-logo"><?= htmlspecialchars($config['nombre']) ?></a>
    <button class="nav-burger" id="navBurger" aria-label="Abrir menú">
      <span></span><span></span><span></span>
    </button>
    <ul class="nav-links" id="navLinks">
      <li><a href="#about">Sobre mí</a></li>
      <li><a href="#skills">Habilidades</a></li>
      <li><a href="#projects">Proyectos</a></li>
      <li><a href="#contact">Contacto</a></li>
    </ul>
  </div>
</nav>
