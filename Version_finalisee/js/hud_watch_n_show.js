$.fn.extend({
  animateCss: function(animationName, callback) {
    var animationEnd = (function(el) {
      var animations = {
        animation: 'animationend',
        OAnimation: 'oAnimationEnd',
        MozAnimation: 'mozAnimationEnd',
        WebkitAnimation: 'webkitAnimationEnd',
      };

      for (var t in animations) {
        if (el.style[t] !== undefined) {
          return animations[t];
        }
      }
    })(document.createElement('div'));

    this.addClass('animated ' + animationName).one(animationEnd, function() {
      $(this).removeClass('animated ' + animationName);

      if (typeof callback === 'function') callback();
    });

    return this;
  },
});


$(function() {
            $('#galleryherepls').galereya();
            // spacing: 0.5,
        });

//  $('#galleryherepls').galereya({
//             //spacing between cells of the masonry grid
//             spacing: 0,
            
//             //waving visual effect
//             wave: true,
            
//             //waving visual effect timeout duration
//             waveTimeout: 300,

//             // special CSS modifier for the gallery
//             modifier: '',
            
//             //speed of the slide show
//             slideShowSpeed: 10000,
            
//             //speed of appearance of cells
//             cellFadeInSpeed: 200,
            
//             //the name of the general category
//             noCategoryName: 'all',
            
//             //set to true, if you don't want to show the slider on the cell click.
//             disableSliderOnClick: false,
            
//             //loading of images from JS. Just pass data to the callback 'next'.            
//             load: function(next) {
//                 //Data structure example
//                 var data = [{"lowsrc":"upload\/thumbnails\/5165b70278e0e2.80829014.jpg","fullsrc":"upload\/5165b70278e0e2.80829014.jpg","description":"Mehmet Dere","category":"drawing"}]
//                 next(data);
//             },

//             //Cell click handler. Works even when the 'disableSliderOnClick' property is true.
//             onCellClick: function(e) {}
//     });
//  var gallery = $('#gal1').galereya();
// gallery.openSlider(5);




$( document ).ready(function() {
	console.log( "ready!" );

	var dialog = $("#popupinformation").dialog({
		autoOpen: false,
		maxWidth: 1800,
		minWidth: 900,
		maxHeight: 1600,
		minHeight: 300,

		open: function(event, ui) {

			$('.ui-dialog').animateCss('zoomInDown', function() {
	  			// Do somthing after animation
  				opened = false;
	  		});
		}
	});

	var vide = $('#vide').css({
		'width': '100%',
		'height': '100%'
	});
  	var opened = false;
	$(".card-img-top").on("click",function() {

  		if (!opened) {
  			opened = true;
  			dialog.dialog('close'); // Ouvre la boîte de dialogue
  			$('#vide').attr('src', $(this).attr('src'));
    		dialog.dialog('open'); // Ouvre la boîte de dialogue
    	}
	});

    $.scrollUp({
    	scrollName: 'scrollUp',      // Element ID
        scrollDistance: 100,         // Distance from top/bottom before showing element (px)
        scrollFrom: 'top',           // 'top' or 'bottom'
        scrollSpeed: 300,            // Speed back to top (ms)
        easingType: 'linear',        // Scroll to top easing (see http://easings.net/)
        animation: 'fade',           // Fade, slide, none
        animationSpeed: 200,         // Animation speed (ms)
        scrollTrigger: false,        // Set a custom triggering element. Can be an HTML string or jQuery object
        scrollTarget: false,         // Set a custom target element for scrolling to. Can be element or number
        scrollText: 'Scroll to top', // Text for element, can contain HTML
        scrollTitle: false,          // Set a custom <a> title if required.
        scrollImg: false,            // Set true to use image
        activeOverlay: false,        // Set CSS color to display scrollUp active point, e.g '#00FFFF'
        zIndex: 2147483647           // Z-Index for the overlay
    });

	$('#animatetest').on('click', function() {
		$(this).animateCss('bounce', function() {
  			// Do somthing after animation
  			console.log('finito');
  		});
	});

});

var non_watch ="sunglasses-black-tool.png";
var watch ="sunglasses-black-tool2.png";
var non_comm ="speech-bubbles.png";
var comm = "speech-bubbles2.png";
var non_share = "dot-arrow.png";
var share = "dot-arrow2.png";
var container=document.getElementById('.card-body');

function swapImage(objet) {
	console.log(objet)
	var src=objet.src;
	if (src.match(non_watch)) {
		objet.src=watch;
	} 
	else if (src.match(watch)) {
		objet.src=non_watch;
	}
	if (src.match(non_comm)) {
		objet.src=comm;
	} 
	if (src.match(non_share)) {
		objet.src=share;
	} 
	else if (src.match(share)) {
		objet.src=non_share;
	}
}


 // if(width_img<1800){
 // 	width_img=100%;
 // }
 // else{
 // 	width_img=1800;
 // }
 // return width_img;


 // if(height_img<1600){
 // 	height_img=100%;
 // }
 // else{
 // 	height_img=1600;
 // }
 // return height_img;