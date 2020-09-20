

 $(document).ready(function(){
    $('.sidenav').sidenav();
    $('.carousel.carousel-slider').carousel({
        fullWidth: true,
        indicators: true
      });
    $('.modal').modal();
    $('.datepicker').datepicker();
    $('select').formSelect();
    $('.tabs').tabs();
  });