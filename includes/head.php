<link rel="stylesheet" href="../assests/css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"  rel="stylesheet">
<link rel="stylesheet" href="../assests/css/responsive.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
$(document).ready(function () {
  var owl = $('.hero-carousel');

  owl.owlCarousel({
    items: 1,
    loop: true,
    nav: false,   // default arrows off
    dots: true
  });

  // Custom arrows
  $('.arrowleft').click(function () {
    owl.trigger('prev.owl.carousel');
  });

  $('.arrowright').click(function () {
    owl.trigger('next.owl.carousel');
  });
});

</script>

<script>
$(document).ready(function () {
  var owl = $('.hero-carousel');

  owl.owlCarousel({
    items: 1,
    loop: true,
    nav: false,   // default arrows off
    dots: true
  });

  // Custom arrows
  $('.Announcementarrowleft').click(function () {
    owl.trigger('prev.owl.carousel');
  });

  $('.Announcementarrowright').click(function () {
    owl.trigger('next.owl.carousel');
  });
});

</script>

<script>
  var owl = $('.owl-carousel');
owl.owlCarousel({
    items:4,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:1000,
    autoplayHoverPause:true
});
$('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[1000])
})
$('.stop').on('click',function(){
    owl.trigger('stop.owl.autoplay')
})
</script>