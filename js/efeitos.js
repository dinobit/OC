
			$(document).ready(function(){

			//	$("#logotipo").on("mouseover",function(){
			//		$("#banner h1").addClass("efeito");
			//		console.log("passou o mouse no logotipo");
			//	}).on("mouseout", function(){
			//		$("#banner h1").removeClass("efeito");
			//	});

				$("#input-search").on("focus", function(){

					$("li.busca").addClass("ativo");

				}).on("blur", function(){
					$("li.busca").removeClass("ativo");
				});


				$(".thumbnails").owlCarousel({
					items: 1,
					loop: true
					//margin: 10
//					nav:true,
//					navText: ["<", ">"],

				});

				var owl = $(".thumbnails");
				owl.owlCarousel();
				$('#btn-news-prev').on("click", function(){
				    owl.trigger('prev.owl.carousel');
				});
				$('#btn-news-next').on("click", function(){
				    owl.trigger('next.owl.carousel');
				});

				//menu mobile

				$("#btn-bars").on("click", function(){
					$("header").toggleClass("open-menu");
				});
				
				$("#menu-mobile-mask, .btn-close").on("click", function(){
					$("header").removeClass("open-menu");
				});

				$("#btn-search").on("click", function(){
					$("header").toggleClass("open-search");
					$("input-search-mobile").focus();

				});
});