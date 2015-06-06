

$(".menu-toggle").on('click', function() {
  $(this).toggleClass("on");
  $('.menu-section').toggleClass("on");
  $(".responsivenav ul").toggleClass('hidden');
});
