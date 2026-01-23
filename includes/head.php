<link rel="stylesheet" href="../assests/css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"  rel="stylesheet">
<link rel="stylesheet" href="../assests/css/responsive.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">




<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {

  const items = document.querySelectorAll('.nav-item');
  const highlight = document.querySelector('.highlight');
  const nav = document.querySelector('.nav');

  if (!items.length || !highlight || !nav) return;

  function moveHighlight(el) {
    const rect = el.getBoundingClientRect();
    const navRect = nav.getBoundingClientRect();

    highlight.style.left = (rect.left - navRect.left) + 'px';
    highlight.style.width = (rect.width - 10) + 'px'; // 👈 subtract 5px
  }

  items.forEach(item => {
    item.addEventListener('mouseenter', () => {
      moveHighlight(item);
    });

    item.addEventListener('click', () => {
      items.forEach(i => i.classList.remove('active'));
      item.classList.add('active');
      moveHighlight(item);
    });
  });

  // default active
  moveHighlight(items[0]);

});
</script>



<script>
$(document).ready(function () {
    $('.choose-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: true,
        responsive: {
            0: { items: 1 },
            600: { items: 2 },
            1000: { items: 4 } // ✅ FIX
        }
    });
});

</script>
<script>
$(document).ready(function () {
  $('.hero-carousel').owlCarousel({
    items: 1,
    loop: true,
    nav: false,
    dots: true,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    smartSpeed: 800
  });
});
</script>
