


const observer = new IntersectionObserver((entries) => {

  // entries = lista de todos los elementos observados
  entries.forEach((entry, i) => {

    if (entry.isIntersecting) {

      setTimeout(() => {
        entry.target.classList.add('visible'); 
      }, i * 80); 

      
      observer.unobserve(entry.target);
    }
  });

}, { threshold: 0.1 });


document.querySelectorAll('.fade-up').forEach(el => observer.observe(el));




// Guardamos referencias a todas las secciones y todos los links de nav
const sections = document.querySelectorAll('section[id]');
const navLinks  = document.querySelectorAll('.nav-links a');

// Escuchamos el evento scroll de la ventana
window.addEventListener('scroll', () => {

  let current = ''; 

  sections.forEach(section => {
    
    if (window.scrollY >= section.offsetTop - 80) {
      current = section.id; // Actualizamos cuál es la sección visible
    }
  });

  // Recorremos los enlaces de nav y marcamos solo el que corresponde
  navLinks.forEach(link => {
    link.classList.toggle(
      'active',
      link.getAttribute('href') === `#${current}` 
    );
  });
});



const burger  = document.getElementById('navBurger');
const navMenu = document.getElementById('navLinks');

// Solo ejecutamos el código si ambos elementos existen en el HTML
if (burger && navMenu) {

  burger.addEventListener('click', () => {
    burger.classList.toggle('open');   // Anima las líneas en X
    navMenu.classList.toggle('open');  // Muestra u oculta el menú
  });

  navMenu.querySelectorAll('a').forEach(link => {
    link.addEventListener('click', () => {
      burger.classList.remove('open');
      navMenu.classList.remove('open');
    });
  });
}
