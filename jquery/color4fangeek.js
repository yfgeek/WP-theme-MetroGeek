
$(document).ready(function(){
	// third demo
	original = $('.third a').css('background-color');
	$('.third a').hover(function(){
		var col = 'rgb(' + (Math.floor(Math.random() * 256)) + ',' + (Math.floor(Math.random() * 256)) + ',' + (Math.floor(Math.random() * 256)) + ')';
		$(this).animate({
			'backgroundColor':col
		}, 1000);
	},function(){
		$(this).animate({
			'backgroundColor':original
		},500);
	});
	
});
