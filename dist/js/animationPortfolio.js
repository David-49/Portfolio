$(window).scroll(function(){100<$(window).scrollTop()?$(".retourHaut").fadeIn(300):$(".retourHaut").fadeOut(100)});var btn=document.querySelector(".burger"),nav=document.querySelector(".navResponsive");btn.onclick=function(){nav.classList.toggle("navResponsive_open")};var burger=document.querySelector(".burger");burger.addEventListener("click",function(){burger.classList.toggle("active")}),$(".goTitreToggle").click(function(){nav.classList.toggle("navResponsive_open"),burger.classList.toggle("active")});