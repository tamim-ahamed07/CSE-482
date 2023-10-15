$(document).ready(function(){
	$('.menu-toggle').click(function(){
    $('nav').toggleClass('activation');
  });

  $('ul.mainUl li').click(function(){
    $(this).siblings().removeClass('active');
    $(this).toggleClass('active');
  }); 

});
