$(document).ready(function() {
  $("#testimonial-slider").owlCarousel({
    items: 3,
    itemsDesktop: [1199, 3],
    itemsDesktopSmall: [1000, 2],
    itemsTablet: [767, 1],
    pagination: false,
    navigation: true,
    navigationText: ["", ""],
    autoPlay: true
  });
});
