jQuery(function($){
		$.ajax({
			url : lazytest.ajaxurl, // AJAX handler
			data : data,
			success : function( data ){

        $('#outgoingRecipient').html(result);


			}
		});
	});
});
