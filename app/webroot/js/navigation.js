//$(function(){
//	$('.ajax').on('click', function(){
//		$('.progress').fadeIn();
//		$.get($(this).attr('href'),{},function(data){
//			$('#blogmaster').empty().append(data);
//			$('.progress').fadeOut();
//		});
//		return false;
//	});
//});

$(function(){
	$('.ajax').on('click', function(){
		$('#busy-indicator').fadeIn();
		$.get($(this).attr('href'),{},function(data){
			$('#page-wrapper').empty().append(data);
			//$('#wrapper').css('padding-left', '0px');
			$('#busy-indicator').fadeOut();
		});
		return false;
	});
});

//formulaire de contact
$(function(){
	$('.ajax-contact').on('click', function(){
		$('#indicator-contact').fadeIn();
		$.get($(this).attr('href'),{},function(data){
			$('#ajax-contact').empty().append(data);
			$('#indicator-contact').fadeOut();
		});
		return false;
	});
});
