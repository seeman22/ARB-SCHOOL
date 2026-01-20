<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

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
$(document).ready(function () {
    $('.owl-carousel').owlCarousel({
        loop: true,
        // margin: 20,
        autoplay: true,
        autoplayTimeout: 1000,
        autoplayHoverPause: false,
        responsive: {
            0: { items: 2 },
            768: { items: 3 },
            1200: { items: 5 }
        }
    });
});
</script>
