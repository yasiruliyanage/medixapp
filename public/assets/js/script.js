
$(document).ready(function(){

  $('.home-img-wrapper').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: false,
    infinite: true,
    cssEase: 'linear',
    pauseOnHover: false,
    responsive:[{
        breakpoint: 767,
        settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true
      }
    }
    ]
});

$('.home-member-wrapper').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  arrows: false,
  infinite: true,
  cssEase: 'linear',
  pauseOnHover: false,
  responsive:[{
      breakpoint: 767,
      settings: {
      slidesToShow: 1,
      slidesToScroll: 1,
      infinite: true,
    }
  }
  ]
});

$('.mobile-galery').slick({
  responsive:[{
      breakpoint: 767,
      settings: {
      slidesToShow: 1,
      slidesToScroll: 1,
      infinite: true
    }
  }
  ]
});



/* Accorion */
$("#accorion .panel-group", this).click(function(){
  $(".panel-collapse", this).attr("class", "collapseDownload");
})


/* Main Nav */
$("#mnavb li").mouseover(function(){
  $("a", this).css("color","#fff");
});
$("#mnavb li").mouseleave(function(){
  $("a", this).css("color","#333");
});

/* Event Cards */
$(".event-card").mouseover(function(){
  $(".field", this).css("color","#fff");
});
$(".event-card").mouseleave(function(){
  $(".field", this).css("color","#850c06");
});


  // Show or hide the sticky footer button
  $(window).scroll(function() {
    if ($(this).scrollTop() > 200) {
        $('.scrollToTop').fadeIn(200);
    } else {
        $('.scrollToTop').fadeOut(200);
    }
});

// Animate the scroll to top
$('.scrollToTop').click(function(event) {
    event.preventDefault();

    $('html, body').animate({
        scrollTop: 0
    }, 700);
})

}); 

$("#mnavb").on('click', 'li', function(){
  $("#mnavb li.active").removeClass('active');
  $(this).addClass('active');
});





