function slide(){

	var num = 0;
	$slider = function($a){
		$('#slide_wrap .slideCount div').css({
			backgroundColor: ''
			});
		$('#slide_wrap .slider .slide').hide();

		if (num < $a-1) {
			num++;
			$('#slide_wrap .slideCount div:eq('+num+')').css({
			backgroundColor: 'black'
			});
			$('#slide_wrap .slider .slide:eq('+num+')').fadeIn();
		}else{
			$('#slide_wrap .slideCount div:first').css({
			backgroundColor: 'black'
			});
			$('#slide_wrap .slider .slide:first').fadeIn();
			num = 0;
		}
	}

	var imgCount = $('#slide_wrap .slider .slide').length;
	var interval = setInterval('$slider('+imgCount+')', 6000);
	// $('#slide_wrap .slider').hover(function() {
	// 	clearInterval(interval);
	// }, function() {
	// 	setInterval('$slider('+imgCount+')', 6000);
	// });


	$('#slide_wrap .slideCount div:first').css({
		backgroundColor: 'black'
		});
	$('#slide_wrap .slider').fadeOut();
	$('#slide_wrap .slider:first').fadeIn();

	$('#slide_wrap .slideCount div').click(function() {
		var n = $(this).index();
		$('#slide_wrap .slideCount div').css({
		backgroundColor: ''
		});
		$(this).css({
		backgroundColor: 'black'
		});
		$('#slide_wrap .slider .slide').fadeOut();
		$('#slide_wrap .slider .slide:eq('+n+')').fadeIn();
		num = n;
		return false;
	});
}
slide();



//menudaki UserName bolmesi
function userName(){
	$('#header .profil button').click(function() {
		$('#header .profil ul').toggle();
	});
}
userName();

//mobil versiyadaki serach, register menyusunu acmaq ucun
function mobileVersion(){
	$('#header .mobileVersion i').click(function() {
		$('#header .mobileVersion .mobile').toggle();
	});
}
mobileVersion();

function mobileVersion2(){
	$('#header .mobileVersion2 i').click(function() {
		$('#header .mobileVersion2 .mobile').toggle();
	});
}
mobileVersion2();


function profil(){
	$('#profil .bar ul li').eq(0).click(function() {
		$('#profil .usersEdit').css({
			display: 'inherit'
		});
		$('#profil .addBook').css({
			display: 'none'
		});
	});
	$('#profil .bar ul li').eq(1).click(function() {
		$('#profil .usersEdit').css({
			display: 'none'
		});
		$('#profil .addBook').css({
			display: 'inherit'
		});
	});

	$('#profil .result ul li').eq(0).click(function() {
		$('#profil .usersEdit').css({
			display: 'inherit'
		});
		$('#profil .addBook').css({
			display: 'none'
		});
	});
	$('#profil .result ul li').eq(1).click(function() {
		$('#profil .usersEdit').css({
			display: 'none'
		});
		$('#profil .addBook').css({
			display: 'inherit'
		});
	});
}
profil()