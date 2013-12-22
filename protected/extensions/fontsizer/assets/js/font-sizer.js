$(document).ready(function(){
	  var originalSize = $('body').css('font-size');
	  // reset
	  $("img.resetMe").click(function(){
		$('body').css('font-size', originalSize); 
	  });

	  // Increase Font Size
	  $("img.increase").click(function(){
		var currentSize = $('body').css('font-size');
		var currentSize = parseFloat(currentSize)*1.2;
		$('body').css('font-size', currentSize+'px');
		
		return false;
	  });

	  // Decrease Font Size
	  $("img.decrease").click(function(){
		var currentFontSize = $('body').css('font-size');
		var currentSize = $('body').css('font-size');
		var currentSize = parseFloat(currentSize)*0.8;
		$('body').css('font-size', currentSize+'px');

		return false;
	  });
});
