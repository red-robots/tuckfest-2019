/**
 *	Custom jQuery Scripts
 *	
 *	Developed by: Austin Crane	
 *	Designed by: Austin Crane
 */
var page_min_width = 940;
var mobile_width = 500;
var isotope_set = false;
var is_filtering = false;
var current_page_width = 0;
jQuery.noConflict();

jQuery(document).ready(function ($) {

    $( window ).scroll(function() {
      $( ".mobile-header-scroll" ).addClass( "scrolled");
      $( "#masthead" ).addClass( "scrolled");
    });
    /*
    *
    *   Colorbox
    *
    ------------------------------------*/
    $('a.gallery').colorbox({
        rel:'gal',
        width: '95%', 
        height: '95%'
    });
    $('a.colorbox').colorbox({
        inline:true, 
        width:"90%"
    });
    $(".youtube").colorbox({
        inline:true, 
        width:"60%"
    });

    	/*
	*
	*	Current Page Active
	*
	------------------------------------*/
	$("[href]").each(function() {
    if (this.href == window.location.href) {
        $(this).addClass("active");
        }
	});

    $('li.menu-item-has-children').click( function() {
        $(this).find('ul.sub-menu').css('maxHeight:1000');
    });



/*
        FAQ dropdowns
__________________________________________
*/
$('.question').click(function() {
 
    $(this).next('.answer').slideToggle(500);
    $(this).toggleClass('close');
    $(this).find('.plus-minus-toggle').toggleClass('collapsed');
    $(this).parent().toggleClass('active');
 
});

$('.burger, .overlay').click(function(){
  $('.burger').toggleClass('clicked');
  $('.overlay').toggleClass('show');
  $('nav').toggleClass('show');
  $('body').toggleClass('overflow');
});
$('nav.mobilemenu li').click(function() {
    $(this).find('ul.dropdown').toggleClass('active');
});


	/*
	*
	*	Responsive iFrames
	*
	------------------------------------*/
	var $all_oembed_videos = $("iframe[src*='youtube']");
	
	$all_oembed_videos.each(function() {
	
		$(this).removeAttr('height').removeAttr('width').wrap( "<div class='embed-container'></div>" );
 	
 	});
	
	
	/*
	*
	*	Isotope with Images Loaded
	*
	------------------------------------*/
	// var $container = $('#container').imagesLoaded( function() {
 //  	$container.isotope({
 //    // options
	//  itemSelector: '.item',
	// 	  masonry: {
	// 		gutter: 15
	// 		}
 // 		 });
	// });

    //////////////////// new /////////

// init Isotope
// var $grid = $('#container').isotope({
//   itemSelector: '.item'
// });

// // store filter for each group
// var filters = {};

// $('.filters').on( 'click', '.button', function( event ) {
//   var $button = $( event.currentTarget );
//   // get group key
//   var $buttonGroup = $button.parents('.button-group');
//   var filterGroup = $buttonGroup.attr('data-filter-group');
//   // set filter for group
//   filters[ filterGroup ] = $button.attr('data-filter');
//   // combine filters
//   var filterValue = concatValues( filters );
//   // set filter for Isotope
//   $grid.isotope({ filter: filterValue });
// });

// // change is-checked class on buttons
// $('.button-group').each( function( i, buttonGroup ) {
//   var $buttonGroup = $( buttonGroup );
//   $buttonGroup.on( 'click', 'button', function( event ) {
//     $buttonGroup.find('.is-checked').removeClass('is-checked');
//     var $button = $( event.currentTarget );
//     $button.addClass('is-checked');
//   });
// });
  
// // flatten object by concatting values
// function concatValues( obj ) {
//   var value = '';
//   for ( var prop in obj ) {
//     value += obj[ prop ];
//   }
//   return value;
// }

var $container = $('#container'),
      filters = {};

  $container.isotope({
    itemSelector : '.item'
  });

  // filter buttons
  $('select').change(function(){
    var $this = $(this);
    
    // store filter value in object
    // i.e. filters.color = 'red'
    var group = $this.attr('data-filter-group');
    
    filters[ group ] = $this.find(':selected').attr('data-filter-value');
    console.log( $this.find(':selected') );
    // convert object into array
    var isoFilters = [];
    for ( var prop in filters ) {
      isoFilters.push( filters[ prop ] )
    }
    console.log(filters);
    var selector = isoFilters.join('');
    $container.isotope({ filter: selector });
    return false;
  });

  // show filtered results 
  $('select.option-set').on('change', function() {
    $('#outer-container').removeClass('closed');
    $('#outer-container').addClass('open');
  })
      
      // $('ul>li').click(function() {
      //     var $this = $(this);
      //     var group = $this.parent().data('filter-group');
      //     filters[ group ] = $this.data('filter-value'); 
      //     var isoFilters = [];
      //       for ( var prop in filters ) {
      //         isoFilters.push( filters[ prop ] )
      //       }
      //       console.log(filters);
      //       var selector = isoFilters.join('');
      //       $container.isotope({ filter: selector });
      //       return false;
      // });



	/*
	*
	*	Smooth Scroll to Anchor
	*
	------------------------------------*/
	 $('a').click(function(){
	    $('html, body').animate({
	        scrollTop: $('[name="' + $.attr(this, 'href').substr(1) + '"]').offset().top
	    }, 500);
	    return false;
	});

	
	
	
	/*
	*
	*	Equal Heights Divs
	*
	------------------------------------*/
	$('.js-blocks').matchHeight();

	/*
	*
	*	Wow Animation
	*
	------------------------------------*/
	new WOW().init();



    function anchor_scroll_capsule(e) {
        if (!e.sudo) {
            if (e.target.href) {
                var index = e.target.href.indexOf('#');
                if (index > -1) {
                    var target_hash = e.target.href.substr(index);
                    var $target_anchor = $('[name="' + target_hash.substr(1) + '"]');
                    if ($target_anchor.length === 0) {
                        return;
                    }
                }
            }
        }
        $(document).imagesLoaded(function () {
            var hash = window.location.hash;
            if (hash.length > 0) {
                var $anchor = $('[name="' + hash.substr(1) + '"]');
                if ($anchor.length > 0) {
                    var scrollTo = $anchor.offset().top;
                    setTimeout(function(){
                        $('html').animate({
                            scrollTop: scrollTo,
                        }, 500);
                    }, e.data.delay);
                }
            }
        });
    }
    anchor_scroll_capsule({
        sudo: true,
        data: {
            delay: 500,
        },
    });
    $('a').click({delay: 200}, anchor_scroll_capsule);
    var $slides = $('.flexslider .slides li');
    if ($slides.length > 0) {
        $slides.eq(1).add($slides.eq(-1)).find('img.lazy')
            .each(function () {
                var src = $(this).attr('data-src');
                $(this).removeClass('lazy');
                $(this).attr('src', src).removeAttr('data-src');
            });
    }
    $('.flexslider').imagesLoaded(function () {   
        $('.flexslider').flexslider({
            animation: "fade",
            smoothHeight: true,
            start: function () { // Fires when the slider loads the first slide
                anchor_scroll_capsule({
                    sudo: true,
                    data: {
                        delay: 200,
                    },
                });
            },
            before: function (slider) { // Fires asynchronously with each slider animation
                var $slides = $(slider.slides),
                    index = slider.animatingTo,
                    current = index,
                    nxt_slide = current + 1,
                    prev_slide = current - 1;
                if ($slides.length > 0) {
                    $slides.eq(current).add($slides.eq(nxt_slide)).add($slides.eq(prev_slide))
                        .find('img.lazy').each(function () {
                            var src = $(this).attr('data-src');
                            $(this).removeClass('lazy');
                            $(this).attr('src', src).removeAttr('data-src');
                        });
                    if($slides.eq(current).find('.iframe-wrapper').length > 0){
                        slider.pause();
                        setTimeout(function(){
                            slider.play();
                        },10000);
                    }
                }
            },
            start: function(slider){
                var $slides = $(slider.slides);
                if ($slides.length > 0) {
                    if($slides.eq(0).find('.iframe-wrapper').length > 0){
                        slider.pause();
                        setTimeout(function(){
                        slider.play();
                        },10000);
                    }
                }
            }
        }); // end register flexslider
    });

    /* RESET FILTER OPTIONS */
    $('body').on("click",".eventLinkp",function(e){
        e.preventDefault();
        $("select#filter_by_days").val('*');
        $("select#filter_by_type").val('*');
        var link = $(this).attr('href');
        setTimeout(function(){
            window.location.href = link;
        },100);
    });
});// END #####################################    END

