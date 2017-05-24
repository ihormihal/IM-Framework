var cssTransitionEnd = 'transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd';

/* WOW plugin - animate when Scrolling
var Wow = new WOW({
	boxClass: 'wow',
	animateClass: 'animated',
	offset: 0,
	mobile: true,
	live: true
});
*/

//Wow.init();


//window resize
$(window).on('resize', function(){

});

//all images loaded
$(window).on('load', function(){
	if($().imParallax) $('.parallax').imParallax();
});

// $(document).on('click', '.popup-img', function() {
// 	var src = $(this).attr('src');
// 	$.fancybox.open({
// 		type: 'image',
// 		href: src,
// 		fitToView: true,
// 		autoSize: true,
// 		width: 'false',
// 		height: 'false',
// 		padding: 0,
// 		helpers     : {
// 			overlay : {
// 				opacity : 0.4,
// 				locked: true
// 			}
// 		}
// 	});
// });

var App = {
	/* MOBILE MENU CONSTRUCTOR */
	makeMobileMenu: function(navContainer){

		var memuArray = [];
		if(navContainer === null) return false;
		var nav = navContainer.children[0];
		for (var i = 0; i < nav.children.length; i++) {
			var a = nav.children[i].children[0];
			var lev1 = {
				a: {
					href: a.href,
					text: a.innerHTML.trim()
				},
				children: []
			};
			if(nav.children[i].children.length > 1){
				var ul = nav.children[i].children[1];
				for (var j = 0; j < ul.children.length; j++) {
					var a = ul.children[j].children[0];
					lev1.children.push({
						a: {
							href: a.href,
							text: a.innerHTML.trim()
						}
					});
				}
			}
			memuArray.push(lev1);
		}

		var menuHTML = '';
		for (var i = 0; i < memuArray.length; i++) {
			menuHTML += '<li><a class="ripple" href="'+memuArray[i].a.href+'">'+memuArray[i].a.text+'</a>';
			if(memuArray[i].children.length){
				menuHTML += '<ul>';
				for (var j = 0; j < memuArray[i].children.length; j++) {
					menuHTML += '<li><a class="ripple" href="'+memuArray[i].children[j].a.href+'">'+memuArray[i].children[j].a.text+'</a>';
				}
				menuHTML += '</ul>';
			}
			menuHTML += '</li>';
		}

		var mobileMunu = document.createElement('div');
		mobileMunu.innerHTML = '<div class="menu-slide slide-left white-bg"><nav><ul class="nav nav-col">'+menuHTML+'</ul></nav></div><div class="page-overlay"></div>';
		document.body.appendChild(mobileMunu);
	}
};

$(document).on('click', '.image-preview-box a', function(e) {
	e.preventDefault();
	var src = $(this).attr('href');
	$.fancybox.open({
		type: 'image',
		href: src,
		fitToView: true,
		autoSize: true,
		width: 'false',
		height: 'false',
		padding: 0,
		helpers     : {
			overlay : {
				opacity : 0.4,
				locked: true
			}
		}
	});
});

//for jQuery dataTable
$(document).on('click', 'tr.clickable', function() {
	window.document.location = $(this).attr('data-href');
});

//input-icon fix
$(document).on('click', '.input-icon i', function(event) {
	event.stopPropagation();
	$(this).parent().find('input').focus();
});

$(function() {

	App.makeMobileMenu(document.getElementById('desktop-menu'));

	//single gmap
	$('.gmap.single').imGmapSingle();

	//multipe points gmap
	var ajaxMap = $('#ajax-map').imGmapMultiple({
		animation: true
	});
	//gmap filter
	$('#map-filter').on('click', '.filter', function(event){
		event.preventDefault();
		$('#map-filter').find('.filter').removeClass('active');
		$(this).addClass('active');
		ajaxMap.loadPoints($(this).attr('href'), $(this).data());
	});

	//Simple fancybox
	$('.fancybox').fancybox({
		type: 'image',
		fitToView: true,
		autoSize: true,
		width: false,
		height: false,
		padding: 0,
		wrapCSS: 'popup',
		closeBtn: true,
		helpers     : {
			overlay : {
				opacity : 0.4,
				locked: true
			}
		}
	});

	$('.owl-carousel').imOwlCarousel();
	$('.owl-slider').imOwlCarousel({type: 'slider'});

	/* CountUp Plugin */
	/*
	$('.counter > span').each(function(){
		var endVal = parseInt($(this).text());
		new CountUp(this,0,endVal,0,3).start();
	});
	*/

	//Select autocomplete
	if($().imSelect) {
		$('select.multiselect').imSelect();
	}
	//Dropdown
	$('.nav-inline .dropdown').imDropdown();
	//Code highlighter
	$('pre code').each(function(i, block) {
		hljs.highlightBlock(block);
	});
	//Code popup
	$('.show-code').fancybox();
	//jQuery Datatable
	if($().DataTable){
		$('.datatable').DataTable({
			dom : dataTablesDom,
			language : dataTablesLng
		});
	}
	//Floating label init
	$('.floating-label').each(function(){
		if($(this).find('input, textarea').val() !== ''){
			$(this).addClass('focus');
		}
	});

	/* AJAX MAP START */
	/*var ajaxMap = function(container){
		var self = this;
		self.container = container;
		var center = $(container).data('center').split(',');
		self.options = {
			oneZoom : parseInt($(container).data('one-zoom')),
			zoom: parseInt($(container).data('zoom')),
			center: new google.maps.LatLng(
				parseFloat(center[0].trim()),
				parseFloat(center[1].trim())
			),
			zoomControl: true,
			mapTypeControl: false,
			streetViewControl: false,
			scrollwheel: true,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};
		self.map = new google.maps.Map(self.container, self.options);
		self.markers = [];
		self.load = function(points){
			for(var i = 0; i < self.markers.length; i++){
				self.markers[i].setMap(null);
			}
			self.markers = [];
			self.bounds = new google.maps.LatLngBounds();
			self.infowindow = new google.maps.InfoWindow();
			for (i = 0; i < points.length; i++) {
				var marker = new google.maps.Marker({
					position: new google.maps.LatLng(parseFloat(points[i].lat), parseFloat(points[i].lng)),
					map: self.map,
					icon: $(container).data('marker'),
					id: points[i].id
				});
				self.markers.push(marker);
				google.maps.event.addListener(marker,'click',function(){
					loadInfoWindow(this);
				});
				self.bounds.extend(marker.position);
			}
			self.map.fitBounds(self.bounds);
			google.maps.event.addListenerOnce(self.map, 'idle', function(){
				if(self.markers.length == 0){
					self.map.setCenter(self.options.center);
					self.map.setZoom(self.options.zoom);
				}
				if(self.markers.length == 1){
					self.map.setZoom(self.options.oneZoom);
				}
			});
			function loadInfoWindow(marker){
				$.ajax({
					url: $(container).data('ajax-window'),
					data: {id: marker.id}
				}).done(function(data){
					self.infowindow.close();
					self.infowindow.setContent(data);
					self.infowindow.open(self.map,marker);
				});
			}
		};
	};
	*/

	//TABS
	$('.tab-control').each(function(){
		var control = $(this);
		var target = $(this).data('target');
		$(this).on('click','li',function(){
			control.find('.active').removeClass('active');
			$(this).addClass('active');
			var activeTab = $(target+' .tab:eq('+$(this).index()+')');
			var runAnimation = function(){
				activeTab.addClass('in');
			}
			$(target+' .tab.active.in').removeClass('active in');
			activeTab.addClass('active');
			setTimeout(runAnimation, 50);
		});
	});


});

//accordion menu
//accordion menu
$(document).on('click', '.accordion .title', function(event) {
	event.stopPropagation();
	var container = $(this).parents('.accordion');
	var row = $(this).parents('.accordion-item');

	
	if(row.hasClass('active')){
		row.removeClass('active');
	}else{
		container.find('.active').removeClass('active');
		row.addClass('active');
	}
});

//Floating-label
$(document).on('focusin', '.floating-label input, .floating-label textarea', function(){
	$('.floating-label').addClass('focus');
});
$(document).on('focusout', '.floating-label input, .floating-label textarea', function(){
	if($(this).val() == ''){
		$('.floating-label').removeClass('focus');
	}
});
//END Floating-label