(function($){
	$('.btn-delete, .del').on('click',function(e){
		var c = confirm('Please confirm delete this');
		if(c === false){
			return false;
		}
	});
}(jQuery));