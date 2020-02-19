///////////////////////////////////////////////////////////////////////////
// Loader
$(document).ready(function () {
    setTimeout(() => {
        $("#loader").fadeToggle(250);
    }, 700); // hide delay when page load
});
///////////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////////
// Go Back
$(".goBack").click(function () {
    window.history.back();
});
///////////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////////
// Tooltip
$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})
///////////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////////
// Input
$(".clear-input").click(function () {
    $(this).parent(".input-wrapper").find(".form-control").focus();
    $(this).parent(".input-wrapper").find(".form-control").val("");
    $(this).parent(".input-wrapper").removeClass("not-empty");
});
// active
$(".form-group .form-control").focus(function () {
    $(this).parent(".input-wrapper").addClass("active");
}).blur(function () {
    $(this).parent(".input-wrapper").removeClass("active");
})
// empty check
$(".form-group .form-control").keyup(function () {
    var inputCheck = $(this).val().length;
    if (inputCheck > 0) {
        $(this).parent(".input-wrapper").addClass("not-empty");
    }
    else {
        $(this).parent(".input-wrapper").removeClass("not-empty");
    }
});
///////////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////////
// Searchbox Toggle
$(".toggle-searchbox").click(function () {
    $("#search").fadeToggle(200);
    $("#search .form-control").focus();
});
///////////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////////
// Owl Carousel
$('.carousel-full').owlCarousel({
    loop:true,
    margin: 10,
    nav:false,
    items: 1,
    dots: true,
    responsive: {
        0:{
          items: 1
        },
        480:{
          items: 1
        },
        680:{
          items: 2
        },
        1024:{
          items: 3
        },
        1400:{
          items: 4
        }
    }
});
$('.carousel-single').owlCarousel({
    autoplay: true,
    autoplayTimeout: 4000,
    autoplayHoverPause: true,
    stagePadding: 30,
    loop:true,
    margin: 15,
    nav:false,
    items: 1,
    dots: true,
    responsive: {
        0:{
          items: 1
        },
        480:{
          items: 1
        },
        680:{
          items: 2
        },
        1024:{
          items: 3
        },
        1400:{
          items: 4
        }
    }
});
$('.carousel-multiple').owlCarousel({
    stagePadding: 32,
    loop:true,
    margin:16,
    nav:false,
    items: 2,
    dots: false,
});
$('.carousel-small').owlCarousel({
    stagePadding: 32,
    loop:true,
    margin:16,
    nav:false,
    items: 5,
    dots: false,
});
$('.carousel-slider').owlCarousel({
    loop:true,
    margin:8,
    nav:false,
    items: 1,
    dots: true,
});


///////////////////////////////////////////////////////////////////////////