/*** custom js here ***/

// menu js start here
$(document).ready(function(){
	jQuery('.menu-item').addClass("nav-item");
	jQuery('.menu-item a').addClass("nav-link");

	jQuery('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
    if (!$(this).next().hasClass('show')) {
      jQuery(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
    }
    var $subMenu = jQuery(this).next(".dropdown-menu");
    $subMenu.toggleClass('show');
    jQuery(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
      jQuery('.dropdown-submenu .show').removeClass("show");
    });
  });
});

// menu js end here
//side push menu
function openNav() {
  // document.getElementById("mySidenav").style.width = "50%";
  // document.getElementById("main").style.marginLeft = "250px";
  var width = $(window).width();
  if($(window).width() < 480) {
    document.getElementById("mySidenav").style.width = "100%";
  }else if(width < 740) {
    document.getElementById("mySidenav").style.width = "50%";
  }else if(width < 1023) {
    document.getElementById("mySidenav").style.width = "70%";
  }else {
    document.getElementById("mySidenav").style.width = "50%";
  }
}
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  // document.getElementById("main").style.marginLeft= "0";
}
// product slider
$(document).ready(function() {
  $('#Carousel').carousel({
    auto : true,
  });
// Logo slider js starts
// menu js end here
if($(window).width() > 1024){
  var width = $(".container").width();
  var width1 = width/5;
  var width2 = width/6;
  var width3 = width/4;
  var margin = 35;
}else {
  width = 100;
  width3 = 180;
  margin = 10;
}
$('.bxslider').bxSlider({
  auto: true,
  pager: false,
  minSlides: 1,
  maxSlides: 6,
  slideWidth: 175,
  slideMargin:margin,
  moveSlides: 1,
  shrinkItems: true,
  pause: 2000
});

$('.bxslider2').bxSlider({
  auto: true,
  minSlides: 1,
  maxSlides: 5,
  controls: false,
  slideWidth: 200,
  slideMargin: 10,
  pager:true,
  moveSlides: 1,
  shrinkItems: true
});
$('#Carousel3').bxSlider({
  auto: true,
  minSlides: 1,
  maxSlides: 6,
  controls: true,
  slideWidth: 186,
  slideMargin: 22,
  pager:false,
  moveSlides: 1,
  shrinkItems: true
});
$('.bxslider3').bxSlider({
  auto: true,
  minSlides: 1,
  maxSlides: 4,
  slideWidth: width3,
  slideMargin: 10,
  pager:false,
  moveSlides: 1,
  shrinkItems: true
});
});
// isotop casestudies
$('a.card-link').on("click",function(){
 $('a.card-link').not(this).each(function(){
   $(this).closest('.card-header').find('.fa-plus').removeClass('fa-minus');
 });
 $(this).closest('.card-header').find('.fa-plus').toggleClass('fa-minus');
});
// init Isotope
var $grid = $('.grid').isotope({
  itemSelector: '.element-item',
  layoutMode: 'fitRows'
});
// filter functions
var filterFns = {
  // show if number is greater than 50
  numberGreaterThan50: function() {
    var number = $(this).find('.number').text();
    return parseInt( number, 10 ) > 50;
  },
  // show if name ends with -ium
  ium: function() {
    var name = $(this).find('.name').text();
    return name.match( /ium$/ );
  }
};
// bind filter button click
$('.filters-button-group').on( 'click', 'button', function() {
  var filterValue = $( this ).attr('data-filter');
  // use filterFn if matches value
  filterValue = filterFns[ filterValue ] || filterValue;
  $grid.isotope({ filter: filterValue });
});
// change is-checked class on buttons
$('.button-group').each( function( i, buttonGroup ) {
  var $buttonGroup = $( buttonGroup );
  $buttonGroup.on( 'click', 'button', function() {
    $buttonGroup.find('.is-checked').removeClass('is-checked');
    $( this ).addClass('is-checked');
  });
});

(function($) {
  window.fnames = new Array(); 
  window.ftypes = new Array();
  fnames[0]='EMAIL';
  ftypes[0]='email';
  fnames[1]='FNAME';
  ftypes[1]='text';
  fnames[2]='LNAME';
  ftypes[2]='text';
  fnames[3]='ADDRESS';
  ftypes[3]='address';
  fnames[4]='PHONE';
  ftypes[4]='phone';
  fnames[5]='BIRTHDAY';
  ftypes[5]='birthday';
}(jQuery));

// // sticky header
jQuery(document).ready(function( $ ){
  $(window).scroll(function (event) {
  var scroll = $(window).scrollTop();
  if($(window).width() > 767) {
    $('header').toggleClass('sticky_header', scroll > 0);
    //add 'sticky_header' class when div position match or exceeds else remove that class.
  }
  });
  //trigger the scroll
  // $(window).scroll();//ensure if you're in current position when page is refreshed
});


jQuery(document).ready(function( $ ){
  // search submit btn
  $("#searchsubmit").val("");

  // side scroll
	// var pos_slider = $("#homepageslider").position();
	// var pos_hww = $("#howwework").position();
  // var pos_productslider = $("#productslider").position();
  // var pos_technolgoies = $("#technolgoies").position();
  // var pos_solutions = $("#solutions").position();
  // var pos_case_study = $("#case_study").position();
  // var pos_Insidenewsroom = $("#Insidenewsroom").position();
  // var pos_testimonial = $("#testimonial").position();
  // var pos_gptw = $("#greatplacetowork").position();
  // var pos_dayp = $("#discussabtproject").position();
  // var pos_newsletter = $("#newsletter").position();
  // var pos_sitemap = $("#sitemap").position();				 

	// $(window).scroll(function() {
	// 	var windowpos = $(window).scrollTop();
	// 	if (windowpos >= pos_slider.top & windowpos < pos_hww.top) {
  //     $('#fp-nav a').removeClass('active');
	// 		$("#hslider").addClass("active");
	// 	} 
  //   if(windowpos >= pos_hww.top & windowpos < pos_productslider.top) {
	// 		$('#fp-nav a').removeClass('active');
  //     $("#hww").addClass("active");
	// 	} 
  //   if(windowpos >= pos_productslider.top & windowpos < pos_technolgoies.top) {
	// 		$('#fp-nav a').removeClass('active');
  //     $("#prodslider").addClass("active");
	// 	} 
  //   if(windowpos >= pos_technolgoies.top & windowpos < pos_solutions.top) {
	// 		$('#fp-nav a').removeClass('active');
  //     $("#techn").addClass("active");
	// 	} 
  //   if(windowpos >= pos_solutions.top & windowpos < pos_case_study.top) {
	// 		$('#fp-nav a').removeClass('active');
  //     $("#soln").addClass("active");
	// 	} 
  //   if(windowpos >= pos_case_study.top & windowpos < pos_Insidenewsroom.top) {
	// 		$('#fp-nav a').removeClass('active');
  //     $("#cstudy").addClass("active");
	// 	} 
  //   if(windowpos >= pos_Insidenewsroom.top & windowpos < pos_testimonial.top) {
	// 		$('#fp-nav a').removeClass('active');
  //     $("#newsi").addClass("active");
	// 	} 
  //   if(windowpos >= pos_testimonial.top & windowpos < pos_gptw.top) {
	// 		$('#fp-nav a').removeClass('active');
  //     $("#testm").addClass("active");
	// 	} 
  //   if(windowpos >= pos_gptw.top & windowpos < pos_dayp.top) {
	// 		$('#fp-nav a').removeClass('active');
  //     $("#gptw").addClass("active");
	// 	} 
  //   if(windowpos >= pos_dayp.top & windowpos < pos_newsletter.top) {
	// 		$('#fp-nav a').removeClass('active');
  //     $("#dayp").addClass("active");
	// 	} 
  //   if(windowpos >= pos_newsletter.top & windowpos < pos_sitemap.top){
  //     $('#fp-nav a').removeClass('active');
  //     $("#subs").addClass("active");
  //   } 
  //   if(windowpos >= pos_sitemap.top) {
  //     $('#fp-nav a').removeClass('active');
  //     $("#stmp").addClass("active");
  //   }
	// });

  $("#fp-nav a").click(function(){
    $('#fp-nav a').removeClass('active');
    $(this).addClass('active'); 
  });

  //gtranslate show which language showing
  $(".glink").click(function(){
    var title = $( this ).attr( "title" );
    $( "#lang" ).text( title ); 
  });

  // Header btns
  $(".flag_phnno").click(function(){
    //$(this).toggleClass("active");
    $(".all_phn_nos").toggleClass("active");
    $("#multilangbox").addClass("hide");
    $("#searchbox").addClass("hide");
    $("#totalinfo").addClass("hide");
  });

  $("#multilang").click(function(){
    $("#multilangbox").toggleClass("hide");
    //$("#lang").toggleClass("active");
    $("#searchbox").addClass("hide");
    $("#totalinfo").addClass("hide");
    $(".all_phn_nos").removeClass("active");
  });

  $(".fa-search").click(function(){
    $("#searchbox").toggleClass("hide");
    $("#multilangbox").addClass("hide");
    $("#totalinfo").addClass("hide");
    $(".all_phn_nos").removeClass("active");
  });

  $("#infobtn").click(function(){
      $("#totalinfo").toggleClass("hide");
      $("#multilangbox").addClass("hide");
      $("#searchbox").addClass("hide");
      $(".all_phn_nos").removeClass("active");
  });
});

// The function actually applying the offset
function offsetAnchor() {
  if (location.hash.length !== 0) {
    window.scrollTo(window.scrollX, window.scrollY - 100);
  }
}

// Captures click events of all a elements with href starting with #
$(document).on('click', 'a[href^="#"]', function(event) {
  // Click events are captured before hashchanges. Timeout
  // causes offsetAnchor to be called after the page jump.
  window.setTimeout(function() {
    offsetAnchor();
  }, 0);
});

// Set the offset when entering page with hash present in the url
window.setTimeout(offsetAnchor, 0);


// $(document).mouseup(function(e){
//     var searchbox = $("#searchbox");
//     var searchbtn = $("#searchbtn .fa-search");
//     var multilangbtn = $("#multilang .fa-globe");
//     var multilangbox = $("#multilangbox");
//     var infobtn = $("#infobtn .fa-info");
//     var infobox = $("#totalinfo");

//     if(searchbtn.is(e.target)) {
//       searchbox.toggleClass("hide");
//       multilangbox.addClass("hide");
//       infobox.addClass("hide");
//     } else if(!searchbox.is(e.target) && searchbox.has(e.target).length === 0){
//       searchbox.addClass("hide");
//     } 

//     if(multilangbtn.is(e.target)) {
//       multilangbox.toggleClass("hide");
//       infobox.addClass("hide");
//     } else if(!multilangbox.is(e.target) && multilangbox.has(e.target).length === 0 && multilangbox.css('display') != 'none') {
//       multilangbox.addClass("hide");
//     }
    
//     if(infobtn.is(e.target)) {
//       infobox.toggleClass("hide");
//     } else if(!infobox.is(e.target) && infobox.has(e.target).length === 0 && infobox.css('display') != 'none') {
//       infobox.addClass("hide");
//     }

//     // If the target of the click isn't the container
//     // if(!searchbox.is(e.target) && searchbox.has(e.target).length === 0 && !searchbox.hasClass("hide")){
//     //     searchbox.addClass("hide");
//     // }
// });



