<!-- <button onclick="topFunction()" id="myBtn" class=" scl-top-btn align-items-center justify-content-center " title="Go to top"> <img src="assets/images/up-arow.webp" alt="" loading="lazy"> </button> -->

<!-- <div class="ftr-wa-sec d-none d-sm-block">
	<img src="assets/images/wa-click.webp" alt="" class="wa-click">
	<a href="https://wa.me/+918921409249?text=I would like to enquire about hair treatment " target="_Blank" class=" align-items-center justify-content-center d-flex ftr-wa f-btn"> <img src="assets/images/whats-up-icon.webp" alt=""> </a>
</div> -->
<!--<div class="wa-btn-n-sec">
	<img src="assets/images/down-arrow.webp" alt="" class="wa-arow">
	<a href="https://wa.me/+916363032157?text=I would like to enquire about hair treatment " target="_Blank" class="f-btn wa-btn-n " id="hid" data-bs-toggle="modal" data-bs-target="#waModal">
		Support Helpline! Click Here
		<img src="assets/images/whats-up-icon.webp" alt="">
	</a>
</div>-->
<footer class="ftr-sec-c ">
	<div class="container">
		<div class="ftr-tp">
			<div class="row">
				<div class="col-md-12">
					<div class="ftr-cmny-dtl">
						<a href="index.php" class="ftr-logo mb-2 d-table">
							<img src="assets/images/logo_top.webp" class="ftr-lgo" alt="" loading="lazy">
						</a>
					</div>
				</div>

				<div class="col-md-12">
					<ul class="footer-links-list ">
						<li>
							<a href="privacy.php" target="_blank" class="d-table py-1 py-md-2"> Privacy policy</a>
						</li>

					</ul>
				</div>
			</div>
		</div>
	</div>


	<div class="copyright-c text-center ">
		<p>Copyright © 2024 <a href="index.php"> Advance Grohair Clinic </a> All rights reserved.</p>
	</div>
</footer>


<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap-5.js" defer></script>
<script src="assets/js/slick.js" defer></script>
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/jquery.countup.js"></script>
<!-- <script src="assets/js/aos.js"></script> -->
<!-- <script src="assets/js/rellax.min.js"></script> -->
<script src="assets/js/custom.js" defer></script>
<script src="assets/js/send_email.js"></script>
<!-- <script>
  AOS.init();
</script> -->
<script>
	$('.counter').countUp();
</script>
<!-- <script>
	var rellax = new Rellax('.rellax', {
	center:true,
	breakpoints:[576, 768, 1201]
	
  });
</script> -->

<script>
	window.addEventListener('load', function() {
		jQuery('[href*="tel:"]').click(function() {
			gtag('event', 'conversion', {
          'send_to': 'AW-16495278159/9vvCCPXB_7UZEM_wx7k9'
			});
		});
	})
</script>

<script>
	window.addEventListener('load', function() {
		jQuery('[href*="wa.me"]').click(function() {
			gtag('event', 'conversion', {
        'send_to': 'AW-16495278159/MuNnCIjG_7UZEM_wx7k9'
			});
		});
	});
</script>
</body>

</html>