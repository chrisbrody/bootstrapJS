// lesson 1
$(document).ready(function(){
	// lesson 1 spining icons
	$('.responsive_icons .fa').on('mouseenter', function(){
		$(".responsive_icons .fa").addClass('fa-spin reverse');
	});
	$('.responsive_icons .fa').on('mouseleave', function(){
		$(".responsive_icons  .fa").removeClass('fa-spin');
	});


	// slideToggle Extra Bootstrap Examples
	$('.extra_images').hide();
	$('.view_more_examples').on('click', function(){
		$('.extra_images').slideToggle(1000);
	});


	// fadeToggle Tasks
	$(".next1, .task1").hide();
	$('.btn-task').on('click', function(){
		$(this).closest('.task').find('.task1, .next1').fadeToggle();
		// $(this).hide();
	});


	// fadeToggle Bootstrap icons
	$('.extra_icons').hide();
	$('#more_bootstrap').on('click', function(){
		$('.extra_icons').fadeToggle(500);
	});


	// smoothscroll
	$(".smooth, .tabs").click(function() {
		$('html').find('#main_content').animate({'height':'100%'}, 500);
		$(window).scrollTop(0);
		$('html').find('#main_content').animate({'height':'100vh'}, 500);
	});
	// close sidebar on click of nav or overview anchors
	$('nav a, .course_overview_lessons a').click(function() {
		if ($("#sidebar").hasClass("open")) {
			closeSidebar();
		} 
	});

	// Tooltips
	$('[data-toggle="tooltip"]').tooltip()
});


function closeSidebar() {
	if ( $(window).width() >= 1025 && $(window).width() <= 1200 ) {
		$("#sidebar > a").animate({'left':'.75%'}, 500);
		$('#main_content').animate({ 'width':'96.5%' }, 500);
		$('#sidebar').animate({'width':'3.5%'}, 500);
	} else if( $(window).width() >= 1025 ) {
		$("#sidebar > a").animate({'left':'1%'}, 500);
		$('#main_content').animate({ 'width':'96.5%' }, 500);
		$('#sidebar').animate({'width':'3.5%'}, 500);
	} else if ( $(window).width() <= 1024 ) {
		$("#sidebar > a").animate({'left':'1.2%'}, 500);
		$('#main_content').animate({ 'width':'95%' }, 500);
		$('#sidebar').animate({'width':'5%'}, 500);
	}
		$('#sidebar').removeClass('open').addClass('closed');
		$('.primary_logo').fadeOut();
		$('.course_materials').fadeOut();
}
function openSidebar() {
	$('#main_content').animate({ 'width':'75%' }, 500);
	$('#sidebar').addClass('open').removeClass('closed').animate({'width':'25%'}, 500);
	if( $(window).width() >= 1025 ) {		
		$("#sidebar > a").animate({'left':'21%'}, 500);
	} else if( $(window).width() <= 1024 ) {
		$("#sidebar > a").animate({'left':'20%'}, 500);
	}
	$('.primary_logo').fadeIn();
	$('.course_materials').fadeIn();
}

function adjustSidebar() {
	if ($("#sidebar").hasClass("open")) {
		closeSidebar();
	} else {
		openSidebar();
	}
}

if(window.location.href.indexOf("answers") > -1) {
   $('body').css('overflow', 'auto');
   $('img').css({'width':'100%', 'padding-bottom':'25px'});
}

$('.tooltips').tooltip('hide');

// popovers
$('.pop_active').popover("hide");


$('.revealer').on('click', function(){
	$('body').find('.reveal_answer').toggleClass('hidden');
});
