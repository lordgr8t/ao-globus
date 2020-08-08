$(document).ready(function () {
	var offset = $('#fixed_specs').offset();
	var topPadding = 0;
	$(window).scroll(function() {
		if ($(window).scrollTop() > offset.top) {
			$('#fixed_specs').stop().animate({marginTop: $(window).scrollTop() - offset.top + topPadding});
		}
		else {
			$('#fixed_specs').stop().animate({marginTop: 0});
		}
	});
});
$(document).ready(function(){
	$('.tab-content:first').show(0);
	$('.tab:first>span').addClass('selected');
	$('.tab>span').click(function(){
		$('.tab>span').removeClass('selected');
		$(this).addClass('selected'); 
		$('.tab-content').hide(0);   
		$(this).next('.tab-content').show(0);     
	});
});

var signup_h = document.getElementById('signup_h');
var myEl_signup_h = document.getElementById('modal-body');
signup_h.onclick = function(){
    myEl_signup_h.style.height = '603px';
};

var signin_h = document.getElementById('signin_h');
var myEl_signin_h = document.getElementById('modal-body');
signin_h.onclick = function(){
    myEl_signin_h.style.height = '329px';
};


