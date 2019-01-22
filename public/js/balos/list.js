
$(".lista li").click(function(){
  if ($( window ).width() >= 992) {
    $(".lista li").removeClass("proba");
    $(this).addClass("proba");
  } else {
    $(".lista li").removeClass("proba");
    $(".lista li").css("background-color", "");
    $(this).css("background-color", "#ffaa00");
  }
});

$(".lista li:first").click(function(){
  $(".gallery").addClass("d-block");
  $(".gallery").removeClass('d-none');
  $(".map").addClass("d-none");
  $(".map").removeClass('d-block');
  $(".video").removeClass("d-block");
  $(".video").addClass("d-none");
  $(".travel-program").removeClass("d-block");
  $(".travel-program").addClass("d-none");
  $(".payment").removeClass("d-block");
  $(".payment").addClass("d-none");
  $(".price").removeClass("d-block");
  $(".price").addClass("d-none");
});

$(".lista li:first").next().click(function(){
  $(".gallery").removeClass("d-block");
  $(".gallery").addClass("d-none");
  $(".map").removeClass("d-none");
  $(".map").addClass("d-block");
  $(".video").removeClass("d-block");
  $(".video").addClass("d-none");
  $(".travel-program").removeClass("d-block");
  $(".travel-program").addClass("d-none");
  $(".payment").removeClass("d-block");
  $(".payment").addClass("d-none");
  $(".price").removeClass("d-block");
  $(".price").addClass("d-none");
});

$(".lista li").eq(2).click(function(){
  $(".gallery").addClass("d-none");
  $(".gallery").removeClass('d-block')
  $(".map").addClass("d-none");
  $(".map").removeClass('d-block');
  $(".video").removeClass("d-none");
  $(".video").addClass("d-block");
  $(".travel-program").removeClass("d-block");
  $(".travel-program").addClass("d-none");
  $(".payment").removeClass("d-block");
  $(".payment").addClass("d-none");
  $(".price").removeClass("d-block");
  $(".price").addClass("d-none");
})

$(".lista li").eq(3).click(function(){
  $(".gallery").addClass("d-none");
  $(".gallery").removeClass('d-block')
  $(".map").addClass("d-none");
  $(".map").removeClass('d-block');
  $(".video").removeClass("d-block");
  $(".video").addClass("d-none");
  $(".travel-program").removeClass("d-none");
  $(".travel-program").addClass("d-block");
  $(".payment").removeClass("d-block");
  $(".payment").addClass("d-none");
  $(".price").removeClass("d-block");
  $(".price").addClass("d-none");

})

$(".lista li").eq(4).click(function(){
  $(".gallery").addClass("d-none");
  $(".gallery").removeClass('d-block')
  $(".map").addClass("d-none");
  $(".map").removeClass('d-block');
  $(".video").removeClass("d-block");
  $(".video").addClass("d-none");
  $(".travel-program").removeClass("d-block");
  $(".travel-program").addClass("d-none");
  $(".payment").removeClass("d-none");
  $(".payment").addClass("d-block");
  $(".price").removeClass("d-block");
  $(".price").addClass("d-none");

})

$(".lista li").eq(5).click(function(){
  $(".gallery").addClass("d-none");
  $(".gallery").removeClass('d-block')
  $(".map").addClass("d-none");
  $(".map").removeClass('d-block');
  $(".video").removeClass("d-block");
  $(".video").addClass("d-none");
  $(".travel-program").removeClass("d-block");
  $(".travel-program").addClass("d-none");
  $(".payment").removeClass("d-block");
  $(".payment").addClass("d-none");
  $(".price").removeClass("d-none");
  $(".price").addClass("d-block");

})

// scroll

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("btn-top").style.display = "block";
    } else {
        document.getElementById("btn-top").style.display = "none";
    }
}

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

document.getElementById("btn-top").addEventListener('click', topFunction)

// navigation


$('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
  if (!$(this).next().hasClass('show')) {
    $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
  }
  var $subMenu = $(this).next(".dropdown-menu");
  $subMenu.toggleClass('show');


  $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
    $('.dropdown-submenu .show').removeClass("show");
  });


  return false;
});


// google Maps

// function initMap() {
//   var location = {lat: 40.704623, lng: 23.652122 }
//   var map = new google.maps.Map(document.querySelector('#map'), {
//     zoom: 4,
//     center: location
//   });
//
// }
