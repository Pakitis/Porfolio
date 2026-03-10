<?php
// includes/footer.php — Pie de página
$year = date('Y');
?>
<footer>
  <div class="container">
    <p>© <?= $year ?> <?= htmlspecialchars($config['nombre']) ?> · Diseñado y construido con cariño</p>
  </div>
</footer>
