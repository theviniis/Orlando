<html>
<footer>
				<div class="row row-cinza-claro">
					<div class="container">
						<div class="row ">
							<div class="col-md-2 text-center hidden-xs">
								<img class="logotipo" src="img/orlando-logo.png" alt="Logotipo">
							</div>
							<div class="col-md-10">
								<div class="row row-cols">
									<div class="col-md-4 col-popular-posts hidden-xs">
										<h4>Popular Posts</h4>
										<ul class="list-unstyled">
											<li>
												<h5>Neque porro quisquam est, quister.</h5>
												<time>January 01, 2016</time>
											</li>
											<li>
												<h5>Neque porro quisquam est, quister.</h5>
												<time>January 01, 2016</time>
											</li>
										</ul>
									</div>
									<div class="col-md-4 col-links hidden-xs">
										<h4>Links</h4>
											<ul class="list-unstyled">
												<li><a href="#"></a><i class="fa fa-angle-right"></i>Tickets</a></li>
												<li><a href="#"></a><i class="fa fa-angle-right"></i>News</a></li>
												<li><a href="#"></a><i class="fa fa-angle-right"></i>Schedule</a></li>
											</ul>
									</div>
									<div class="col-md-4 col-get-in-touch">
										<h4 class="hidden-xs">Get In Touch</h4>
											<address class="hidden-xs">
												<i class="fa fa-map-marker"></i><span>618 E. South Street, Suite 510<br/>
												Orlando, FL 32801</span>
											</address>
											<p class="hidden-xs"><i class="fa fa-phone"></i><a href="tel:1855ORLCITY">1.855.ORL.CITY</a></p>
											<div class="row-fluid visible-xs">
												<div class="col-xs-6">
													<a href="#" class="btn btn-footer"><i class="fa fa-map-marker"></i>Location</a>
												</div>
											</div>
											<div class="row-fluid visible-xs">
												<div class="col-xs-6">
													<a href="#" class="btn btn-footer"><i class="fa fa-phone"></i>Call</a>
												</div>
											</div>																				
											<ul class="list-unstyled list-socials">
												<li><a href="#" target="blank"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#" target="blank"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#" target="blank"><i class="fa fa-instagram"></i></a></li>
												<li><a href="#" target="blank"><i class="fa fa-pinterest-p"></i></a></li>
												<li class="page-up" id="page-up"><a href="#" target="blank"><i class="fa fa-chevron-up"></i></a></li>
											</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row row-cinza-escuro">
					<div class="container copyright-mobile">
						<p class="pull-left text-cinza">Copyright © Orlando City Soccer 2016. All rights reserved.</p>
						<p class="pull-right text-roxo">Created by Viniis in Udemy</p>					
					</div>
				</div>
			</footer>

			<script src="lib/jquery/jquery.min.js"></script>
			<script src="lib/owlcarousel/dist/owl.carousel.min.js"></script>
			<script src="lib/bootstrap/js/bootstrap.min.js"></script>
			<script src="js/efeitos.js"></script>
			<script>
				$(".thumbnails").owlCarousel({
					loop:true,
					margin:15,
					nav:false,
					dots:false,
					//navText: ["Anterior","Próximo"],
					responsive: {
						0:{
								items: 1
						},
						480:{
								items: 3
						},
						768:{
								items: 4
						},

						1200:{
								items: 6
						},
					}
				});

				var owl = $('.owl-carousel');
				owl.owlCarousel();
				// Go to the next item
				$('#btn-news-next').click(function() {
						owl.trigger('next.owl.carousel');
				})
				// Go to the previous item
				$('#btn-news-prev').click(function() {
						// With optional speed parameter
						// Parameters has to be in square bracket '[]'
						owl.trigger('prev.owl.carousel', [300]);
				})
			</script>
    </body>

</html>