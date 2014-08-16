$(document).ready(function() {
	function image(){
		var height1 = $(document).height(); 
		var width1 = $(document).width(); 
    	$.post('imagetotext.php', { width: width1, height:height1 },function(data){
    		$('body').append("<img src='new.png'>"); 
    	});
    }
    image(); 
    $(window).resize(function(){
    	location.reload(); 
    });
});