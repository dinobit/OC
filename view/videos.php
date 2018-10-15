<?php include_once("header.php"); ?>

		<section>

			<div id="call-to-action">
				
				<div class="container">
					
					<div class="row text-center">
						<h2>Videos<hr></h2>
						
					</div>

					<div class="mainvideo">
						<video src="mp4/highlights.mp4" controls poster="img/highlights.jpg"></video>
						<br>
						<input type="range" id="volume" min="0" max="1" step="0.01" value="1">
						<button type="button" id="btn-play-pause" class="btn btn-success">PLAY</button>
					</div>

				</div>

				<div id="videolist" class="container">

				<div class="row thumbnails owl-carousel owl-theme">
					
					<div class="item" data-video="highlights">
						<div class="item-inner">
						<img src="img/highlights.jpg" alt="video">
						<h3>Highlights</h3>
						</div>
					</div>

					<div class="item" data-video="Orlando_City_Foundation_2015">
						<div class="item-inner">
						<img src="img/Orlando_City_Foundation_2015.jpg" alt="video">	
						<h3>Orlando City Foundation 2015</h3>		
						</div>
					</div>

					<div class="item" data-video="highlights">
						<div class="item-inner">
						<img src="img/highlights.jpg" alt="video">
						<h3>Highlights</h3>
						</div>
					</div>

					<div class="item" data-video="Orlando_City_Foundation_2015">
						<div class="item-inner">
						<img src="img/Orlando_City_Foundation_2015.jpg" alt="video">	
						<h3>Orlando City Foundation 2015</h3>		
						</div>
					</div>

					<div class="item" data-video="highlights">
						<div class="item-inner">
						<img src="img/highlights.jpg" alt="video">
						<h3>Highlights</h3>
						</div>
					</div>

					<div class="item" data-video="Orlando_City_Foundation_2015">
						<div class="item-inner">
						<img src="img/Orlando_City_Foundation_2015.jpg" alt="video">	
						<h3>Orlando City Foundation 2015</h3>		
						</div>
					</div>
					
				</div>

			</div>

			</div>

		</section>


		<?php include_once("footer.php"); ?>

	<script>
			$(function(){
				$(".thumbnails .item").on("click", function(){

					//console.log($(this).data('video'))
					$("video").attr({
						"src":"mp4/"+$(this).data('video')+".mp4",
						"poster":"img/"+$(this).data('video')+".jpg"
					});		
				});

				$("#volume").on("mousemove", function(){
					//console.log($(this).val());
					$("video")[0].volume = parseFloat($(this).val());
				});

				$("#btn-play-pause").on("click", function(){
					
						var video = $("video")[0];

						if ($(this).hasClass("btn-success")){
							$(this).text("STOP");
							video.play();
						} else {
							$(this).text("PLAY");
							video.pause();
						}
					$(this).toggleClass("btn-success btn-danger");

				});

			});
		</script>