# 🚀 Portfolio — Guía de despliegue en Vercel

## Estructura de archivos

```
portfolio-vercel/
├── index.html          ← Tu portfolio (edita aquí)
├── vercel.json         ← Configuración de Vercel (no tocar)
├── assets/
│   ├── css/
│   │   └── style.css   ← Estilos
│   ├── js/
│   │   └── main.js     ← Animaciones
│   └── img/
│       ├── foto.jpg    ← Pon aquí tu foto de perfil
│       └── proyectos/  ← Capturas de tus proyectos
└── README.md
```

---

## ✏️ Personalización rápida

Abre `index.html` y busca los comentarios `✏️` — te indican exactamente qué cambiar:

- **Tu nombre** → aparece en el nav, hero y footer
- **Descripción** → párrafo debajo de tu nombre
- **Foto** → sustituye el bloque `img-placeholder` por `<img src="assets/img/foto.jpg" />`
- **Habilidades** → añade/quita `<span class="skill-tag">...</span>`
- **Proyectos** → rellena los 3 bloques `.project-card` con tu info real
- **Email, LinkedIn, GitHub** → sección de contacto

---

## 🌐 Publicar en Vercel — Paso a paso

### Método A: Subir directamente (sin cuenta GitHub) — más rápido

1. Ve a **[vercel.com](https://vercel.com)** e inicia sesión (o crea cuenta gratis)
2. En el dashboard, haz clic en **"Add New Project"**
3. Selecciona **"Deploy from CLI"** o arrastra la carpeta
4. Espera ~30 segundos → Vercel te da una URL pública tipo `tuportfolio.vercel.app`

### Método B: Con GitHub — recomendado para actualizar fácil

1. Crea un repositorio en **[github.com](https://github.com)** (puede ser privado)
2. Sube todos estos archivos al repo:
   ```bash
   git init
   git add .
   git commit -m "Portfolio inicial"
   git remote add origin https://github.com/TUUSUARIO/portfolio.git
   git push -u origin main
   ```
3. Ve a **[vercel.com](https://vercel.com)** → "Add New Project" → "Import Git Repository"
4. Selecciona tu repo → clic en **Deploy**
5. ✅ Listo. Cada vez que hagas `git push`, Vercel actualiza la web automáticamente

### Método C: Vercel CLI — para developers

```bash
npm install -g vercel
cd portfolio-vercel
vercel
# Sigue las instrucciones del asistente
```

---

## 🔗 Dominio personalizado (opcional)

En el dashboard de Vercel, entra a tu proyecto → **Settings → Domains** → añade tu dominio.
Si no tienes dominio, la URL `tunombre.vercel.app` es gratuita y permanente.
