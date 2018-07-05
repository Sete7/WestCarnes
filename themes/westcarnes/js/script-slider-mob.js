$(document).ready(function(){var imgItems=$('.slider li').length;var imgPos=1;$('.slider li').hide();$('.slider li:first').show();setInterval(function(){nextSlider()},5000);function pagination(){var paginationPos=$(this).index()+1;$('.slider li').hide();$('.slider li:nth-child('+paginationPos+')').fadeIn();imgPos=paginationPos}
function nextSlider(){if(imgPos>=imgItems){imgPos=1}else{imgPos++}
$('.slider li').hide();$('.slider li:nth-child('+imgPos+')').fadeIn()}
function prevSlider(){if(imgPos<=1){imgPos=imgItems}else{imgPos--}
$('.slider li').hide();$('.slider li:nth-child('+imgPos+')').fadeIn()}})