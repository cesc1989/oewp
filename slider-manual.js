$(document).ready(function(){

		$("#item_1").hide();
		$("#item_2").hide();
		$("#item_3").hide();
		$("#img_1").hide();
		$("#img_2").hide();
		$("#img_3").hide();

		$(window).load(function(){
			animated_asides();
			animated_images();			
		});

		function animated_asides(){
			$("#item").fadeOut(3000,function(){
				$("#item_1").fadeIn(3000).delay(2800).slideUp(3000,function(){
					$("#item_2").slideDown(3000).delay(2800).fadeOut(3000,function(){
						$("#item_3").fadeIn(3000).delay(2800).slideUp(3000,function(){
							$("#item").slideDown(3000,function(){
								animated_asides();
							});
						});
					});
				});
			});
		}
		function animated_images(){
			$("#img").slideUp(3000,function(){
				$("#img_1").slideDown(3000).delay(2800).fadeOut(3000,function(){
					$("#img_2").fadeIn(3000).delay(2800).slideUp(3000,function(){
						$("#img_3").slideDown(3000).delay(2800).fadeOut(3000,function(){
							$("#img").fadeIn(3000,function(){
								animated_images();
							});
						});
					});
				});
			});
		}
	});