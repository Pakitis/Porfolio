# 📁 Portfolio — Guía de uso

## Estructura de carpetas

```
portfolio/
├── index.php              ← Entrada principal + configuración global
├── includes/
│   ├── nav.php            ← Barra de navegación
│   └── footer.php         ← Pie de página
├── sections/
│   ├── hero.php           ← Portada (nombre, título, botones)
│   ├── about.php          ← Sobre mí + foto
│   ├── skills.php         ← Habilidades por categoría
│   ├── projects.php       ← Tarjetas de proyectos
│   └── contact.php        ← Sección de contacto
├── assets/
│   ├── css/
│   │   └── style.css      ← Todos los estilos
│   ├── js/
│   │   └── main.js        ← Animaciones e interacciones
│   └── img/
│       ├── foto.jpg        ← Tu foto (pon la tuya aquí)
│       └── proyectos/     ← Capturas de tus proyectos
└── README.md              ← Este archivo
```

---

## ✏️ Cómo personalizar

### 1. Tus datos personales → `index.php`
Edita el array `$config` al principio del archivo:
```php
$config = [
  'nombre'      => 'Tu Nombre Real',
  'titulo'      => 'Desarrollador Full Stack',
  'email'       => 'tu@email.com',
  'linkedin'    => 'https://linkedin.com/in/tuusuario',
  'github'      => 'https://github.com/tuusuario',
  'ciudad'      => 'Barcelona, España',
  'experiencia' => '3 años de experiencia',
  'disponible'  => true,
];
```

### 2. Texto "Sobre mí" → `sections/about.php`
Edita la variable `$sobre_mi` y cambia `$foto` con la ruta a tu foto.

### 3. Habilidades → `sections/skills.php`
Edita el array `$habilidades` añadiendo o quitando tecnologías por categoría.

### 4. Proyectos → `sections/projects.php`
Rellena el array `$proyectos` con tus proyectos reales:
```php
[
  'titulo'      => 'Nombre real del proyecto',
  'descripcion' => 'Qué hace y qué problema resuelve.',
  'tags'        => ['PHP', 'MySQL'],
  'github'      => 'https://github.com/tuusuario/repo',
  'demo'        => 'https://mi-demo.com',  // null si no tienes demo
],
```

---

## 🚀 Cómo ejecutarlo localmente

Necesitas PHP instalado. Luego, en la carpeta del proyecto:

```bash
php -S localhost:8000
```

Abre tu navegador en: **http://localhost:8000**

---

## 🌐 Cómo publicarlo

### Opción A — Hosting con PHP (recomendado)
Sube todos los archivos a tu hosting (cPanel, Hostinger, etc.) via FTP.

### Opción B — Sin hosting propio
Convierte `index.php` a `index.html` si no necesitas lógica de servidor.
Luego usa **Netlify** (netlify.com/drop) para publicarlo gratis arrastrando la carpeta.
