<?php include_once("header.php");?>
<link rel="stylesheet" href="lib/plyr/dist/plyr.css">
			<section>
				<div id="call-to-action">
					<div class="container">
						<div class="row text-center">
							<h2>Vídeos</h2>
							<hr>
						</div>

						<div class="row">
							<video id="player" playsinline controls data-poster="img/highlights.jpg">
								<source src="mp4/highlights.mp4" type="video/mp4">
								<source src="mp4/Orlando_City_Foundation_2015.mp4" type="video/mp4">
							</video>
						</div>

				</div>
				<div class="row thumbnails owl-carousel owl-theme">
					<div class="item" data-video="highlights">
						<div class="item-inner">
							<img src="img/highlights.jpg" alt="Noticia">
							<h3>Highlights</h3>
						</div>
					</div>
					<div class="item" data-video="Orlando_City_Foundation_2015">
						<div class="item-inner">
							<img src="img/Orlando_City_Foundation_2015.jpg" alt="Noticia">
							<h3>Orlando City Foundation 2015</h3>
						</div>
					</div>
					<div class="item" data-video="highlights">
						<div class="item-inner">
							<img src="img/highlights.jpg" alt="Noticia">
							<h3>Highlights</h3>
						</div>
					</div>
					<div class="item" data-video="Orlando_City_Foundation_2015">
						<div class="item-inner">
							<img src="img/Orlando_City_Foundation_2015.jpg" alt="Noticia">
							<h3>Orlando City Foundation 2015</h3>
						</div>
					</div>
					<div class="item" data-video="highlights">
						<div class="item-inner">
							<img src="img/highlights.jpg" alt="Noticia">
							<h3>Highlights</h3>
						</div>
					</div>
					<div class="item" data-video="Orlando_City_Foundation_2015">
						<div class="item-inner">
							<img src="img/Orlando_City_Foundation_2015.jpg" alt="Noticia">
							<h3>Orlando City Foundation 2015</h3>
						</div>
					</div>
				</div>
			</section>
			<?php include_once("footer.php");?>

			<script src="lib/plyr/dist/plyr.js"></script>
			<script>
  			const player = new Plyr('#player');
			</script>
			<script>
					$(function(){
						$(".thumbnails .item").on("click",function(){
							$("video").attr({
								"src":"mp4/"+$(this).data('video')+".mp4",
				 				"poster":"img/"+$(this).data('video')+".jpg"
							});
						});
					});

					$("#volume").on("mousemove", function(){
						$("video")[0].volume = parseFloat($(this).val());
					});

					$("#btn-play-pause").on("click",function(){
						var video=$("video")[0];

						if($(this).hasClass("btn-success")){
							$(this).text("STOP");
							video.play();
						}
						else{
							$(this).text("PLAY");
							video.pause();
						}

						$(this).toggleClass("btn-success btn-danger");
				
					});
			</script>

</html>