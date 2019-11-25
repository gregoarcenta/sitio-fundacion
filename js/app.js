//CAMBIA EL CLOR DE LA BARRA AL HACER SCROLL
const barra = document.querySelector('.header .barra')
const nav = document.querySelector('.header .barra nav')
let c = console.log;
window.addEventListener('scroll', e => {
     const scrollview= window.pageYOffset;
     if (scrollview > 360) {
          barra.classList.add('barra-scroll')
          nav.classList.add('p-1')
     } else {
          barra.classList.remove('barra-scroll')
          nav.classList.remove('p-1')
     }
});

//VALIDACIÓN DEL FORMULARIO
(function() {
     'use strict';
     window.addEventListener('load', function() {
       // Seleccionar el formulario para validar
       var forms = document.getElementsByClassName('needs-validation');
       // Validar cada campo y prevenir que se envie
       var validation = Array.prototype.filter.call(forms, function(form) {
         form.addEventListener('submit', function(event) {
           if (form.checkValidity() === false) {
             event.preventDefault();
             event.stopPropagation();
           }
           form.classList.add('was-validated');
         }, false);
       });
     }, false);
   })();