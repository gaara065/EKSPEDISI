<div class="middle-w3l py-sm-5 py-4">
		<div class="container py-xl-5 py-lg-3">
			<h2>Menyediakan Juga Fasilitas Antar Jemput (Door to Door Service)</h2>
			<p class="my-md-4 my-2">
            Memiliki pengalaman usaha Sejak Tahun 2005 , dengan kapal Standar BKI Class jelas memberikan kualitas pelayanan yang Aman dan Terpercaya.
            </p>
			<a href="kontak.php" class="btn btn-secondary btn-lg button2-w3l mt-4" role="button" aria-pressed="true">Kontak Kami</a>
		</div>
	</div>
	<!-- //middle section -->

	<!-- footer -->
	<footer class="py-md-5 py-4">
		<div class="container">
			<div class="row w3ls_footer_grid text-lg-left text-center pb-lg-5 pb-4 mt-xl-4 mt-1 mb-xl-5 mb-4">
				<div class="col-lg-5 footer-w3l">
					<h5>selalu meningkatkan kualitas pelayanan dan kinerja agar menjadi perusahaan logistik terkemuka yang mampu menjawab tantangan masa depan terhadap AFTA dan NAFTA.</h5>
				</div>
				<div class="col-lg-7 w3ls_footer_grid1_right text-lg-right text-center">
					<ul>
						
						<li class="mr-3">
							<a href="about.html">Visi & Misi</a>
						</li>
						<li class="mr-3">
							<a href="services.html">Latar Belakang</a>
						</li>
						<li class="mr-3">
							<a href="gallery.html">Produk & Layanan</a>
						</li>
						<li class="mr-3">
							<a href="index.html" >kontak Kami</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-6 w3ls_footer_grid_right">
					<h1>
						<a href="index.php">
							<i class="fas fa-truck mr-2"></i>Borneo Ekspress</a>
					</h1>
				</div>
			
				<div class="col-lg-6 w3ls_footer_grid1_left mt-lg-2 mt-4 text-lg-right text-center">
					<p>&copy; 2019 Ekspedisi Indonesia. All rights reserved |
						<a href="http://borneoekspress.com/">Borneo Ekspress</a>
					</p>
				</div>
			</div>
		</div>
	</footer>
	<!-- //footer -->

	<!-- Js files -->
	<!-- JavaScript -->
	<script src="js/jquery-3.3.1.min.js"></script>
	<!-- Default-JavaScript-File -->

	<script src="js/bootstrap.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->

	<!-- search -->
	<script src="js/search.js"></script>

	<!-- Owl-Carousel-JavaScript -->
	<script src="js/owl.carousel.js"></script>
	<script>
		var owl = $('.owl-carousel');
		owl.owlCarousel({
			items: 3,
			loop: true,
			margin: 10,
			autoplay: true,
			autoplayTimeout: 1000,
			autoplayHoverPause: true,
			responsive: {
				0: {
					items: 1
				},
				600: {
					items: 2
				},
				1000: {
					items: 3
				}
			}
		});
		$('.play').on('click', function () {
			owl.trigger('play.owl.autoplay', [1000])
		})
		$('.stop').on('click', function () {
			owl.trigger('stop.owl.autoplay')
		})
	</script>
	<!-- //Owl-Carousel-JavaScript -->

	<!-- smooth scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smooth scrolling -->

	<!-- start-smoth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->

	<!-- smooth scrolling-bottom-to-top -->
	<script>
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});
		});
	</script>
	<a href="#" id="toTop" style="display: block;">
		<span id="toTopHover" style="opacity: 1;"> </span>
	</a>
	<!-- //smooth scrolling-bottom-to-top -->
	<!-- //Js files -->

</body>


<!-- Mirrored from demo.w3layouts.com/demos_new/template_demo/19-04-2018/transports-demo_Free/1353294211/web/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 22 Sep 2019 20:51:04 GMT -->
</html>