/* Initialize Swiper */
   
      var swiper = new Swiper(".slide-content", {
        slidesPerView: 3,
        spaceBetween: 5,
        loop: true,
        centerSlide: true,
        fade: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
          dynamicBullets: true,
        },
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });

      var swiper = new Swiper(".time-swiper", {
        spaceBetween: 30,
        slidesPerView: 4,
        centeredSlides: true,
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        pagination: {
          el: ".swiper-pagination1",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next1",
          prevEl: ".swiper-button-prev1",
        },
      });
    
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
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

const nav = document.querySelector('nav');
    window.addEventListener('scroll',() => {
      
      if(window.scrollY >= 500){
        nav.classList.add('testtt');

      }else{
        nav.classList.remove('testtt');
      }
    });


      
    