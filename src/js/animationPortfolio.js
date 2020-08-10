$(window).scroll(function ()
{
    //console.log( $(window).scrollTop() );
    if ($(window).scrollTop() > 100) {
      $('.retourHaut').fadeIn(300);
    } else {
      $('.retourHaut').fadeOut(100);

    }
  });

var btn = document.querySelector('.burger');
var nav = document.querySelector('.navResponsive');

// fonction qui permet de changer la classe navResponsive en navResponsive_open grace au clic sur la balise posseddant la classe burger
btn.onclick = function () {
    nav.classList.toggle('navResponsive_open');
  };

//rajoute la class active à la div burger permettant de faire l'animation du outon burger 
var burger = document.querySelector('.burger');
burger.addEventListener('click', function () {
    burger.classList.toggle('active');
  });


//ferme le burger quand on ckick pour aller à une section de la pge
$('.goTitreToggle').click(function(){
  nav.classList.toggle('navResponsive_open');
  burger.classList.toggle('active');
});
