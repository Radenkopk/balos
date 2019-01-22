$('.custom1').owlCarousel({
    animateOut: 'slideOutDown',
    animateIn: 'flipInX',
    items:1,
    margin:30,
    stagePadding:0,
    smartSpeed:450,
    dots:false,
    autoplay:true,
    loop:true,
});


$('.owl-carousel').owlCarousel({
  loop:true,
  margin:20,
  nav:false,
  dots:false,
  autoplay:true,
  autoplaySpeed:1000,
  autoplayHoverPause:true,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:2
      },
      1000:{
          items:4
      }
  }
})
