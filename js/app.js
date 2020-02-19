///////////////////////////////////////////////////////////////////////////
// Loader
$(document).ready(function () {
	setTimeout(() => {
		$(".loading").fadeToggle(200);
	}, 500); // hide delay when page load
});
///////////////////////////////////////////////////////////////////////////
// Go Back
$(".goBack").click(function(){
	window.history.back();
});

///////////////////////////////////////////////////////////////////////////
// Owl Carousel
$('.cardOverlayCarousel').owlCarousel({
	margin: 20,
	loop: true,
	stagePadding: 40,
	items: 1,
	dots: false,
	responsiveClass: true,
	responsive: {
		0:{
		  items: 1
		},
		480:{
		  items: 1
		},
		769:{
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
$('.postCarousel').owlCarousel({
	margin: 20,
	loop: true,
	stagePadding: 40,
	items: 2,
	dots: false,
	responsiveClass: true,
	responsive: {
		0:{
		  items: 2
		},
		480:{
		  items: 2
		},
		769:{
		  items: 4
		},
		1024:{
		  items: 5
		},
		1400:{
		  items: 6
		}
	}
});
$('.basicCarousel').owlCarousel({
	margin: 20,
	loop: true,
	stagePadding: 40,
	items: 1,
	dots: false,
	responsiveClass: true,
	responsive: {
		0:{
		  items: 1
		},
		480:{
		  items: 1
		},
		769:{
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
$('.sliderCarousel').owlCarousel({
	loop: false,
	items: 1,
	dots: true,
});
$('.buttonCarousel').owlCarousel({
	margin: 20,
	loop: true,
	stagePadding: 40,
	items: 4,
	dots: false,
	responsiveClass: true,
	responsive: {
		0:{
		  items: 4
		},
		480:{
		  items: 6
		},
		769:{
		  items: 8
		},
		1024:{
		  items: 8
		},
		1400:{
		  items: 10
		}
	}
})

///////////////////////////////////////////////////////////////////////////
// Sidebar 
$(".toggleSidebar").click(function(){
	$(".sidebarWrapper").fadeToggle(200);
	if($("body").hasClass("sidebarActive")){
		$("body").removeClass("sidebarActive");
	}
	else{
		$("body").addClass("sidebarActive");
	}
	if($(".sidebarWrapper .sidebar").hasClass("is-active")){
		$(".sidebarWrapper .sidebar").removeClass("is-active");
		$(".sidebarWrapper .sidebar").addClass("is-passive");
	}
	else{
		$(".sidebarWrapper .sidebar").addClass("is-active");
	}
});

$(".toggleSearchbox").click(function(){
	$(".searchBox").fadeToggle(200);
});
