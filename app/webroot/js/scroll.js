 $(document).ready(function(){
		$('#top').hide();
		$(function(){
				$(window).scroll(function(){
					 if ($(this).scrollTop() > 200){
							 $('#top').fadeIn();
					 }else{
							 $('#top').fadeOut();
					 }
				});
		});
		 $('#top a').click(function(){
				$('body,html').animate({
					 scrollTop: 0
				}, 300);
				return false;
		 });
		});
