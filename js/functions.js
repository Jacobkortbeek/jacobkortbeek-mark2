$(document).ready(function() {
	$('#fullpage').fullpage({
		menu: '#menu',
		lockAnchors: true,
		anchors:['hero', 'about', 'code', 'design', 'portfolio', 'reading', 'blog', 'contact'],
		navigation: true,
		navigationPosition: 'right',
		slidesNavigation: true,
		navigationTooltips: ['Home', 'About', 'My Skills', 'My Designs', 'Portfolio', 'Reading List', 'Blog', 'Contact Me'],
		showActiveTooltip: true,
		slidesNavigation: true,
		slidesNavPosition: 'bottom',
		//options here
    licenseKey: '',
		autoScrolling:true,
		scrollHorizontally: true
	});

	//methods
	$.fn.fullpage.setAllowScrolling(true);
});

$(function() {
	$('.abHeight').matchHeight({
			byRow: true,
			property: 'height',
			target: null,
			remove: false
	});
});

$(document).ready(function(){
    $('.tooltipped').tooltip();
  });

	$(document).ready(function(){
    $('ul.tabs').tabs({
      swipeable : true,
      responsiveThreshold : 1920
    });
  });

	$(document).ready(function(){
	    $('.sidenav').sidenav({
				edge : 'right',
				draggable : true
			});
	  });
