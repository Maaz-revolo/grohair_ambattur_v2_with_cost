<?php
include 'constant.php';
$loadEnquiryModalPopup = !isset($_COOKIE['enquiry_submitted']);

?>
<!DOCTYPE html>
<html>

<head>
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11477093387"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());
		gtag('config', 'AW-11477093387');
	</script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta property="og:url" content="https://ambtransplant.hairtransplantchennai.com/" />
	<meta property="og:title" content="Advance Grohair Clinic " />
	<meta property="og:site_name" content="Advance Grohair Clinic" />
	<meta property="og:description" content="Hair Transplant Clinic in Chennai" />
	<meta property="og:type" content="landing-page" />
	<meta name="Keywords" content="Hair transplant surgery,FUE hair transplant,Follicular unit extraction,Hair restoration,Hair transplant cost,Hair transplant clinic,Best hair transplant surgeon,Hair transplant surgery,Hair restoration,Hair treatment">

	<link rel="icon" type="image/jpg" sizes="16x16" href="assets/images/favicon.webp">
	<title> Advance Grohair Clinic </title>
	<!-- 
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
	<!-- <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100;0,9..40,200;0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;0,9..40,800;0,9..40,900;0,9..40,1000;1,9..40,100;1,9..40,200;1,9..40,300;1,9..40,400;1,9..40,500;1,9..40,600;1,9..40,700;1,9..40,800;1,9..40,900;1,9..40,1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Kalam:wght@700&display=swap" rel="stylesheet"> -->


	<!-- <link rel="stylesheet" href="assets/css/font-awosome.css" type="text/css"> -->
	<link rel="stylesheet" type="text/css" href="assets/css/slick.css" />
	<link rel="stylesheet" href="assets/css/slick-theme.css">
	<link href="assets/css/bootstrap-5.css" rel="stylesheet">
	<link href="assets/css/thankyou.css" rel="stylesheet" type="text/css">
	<link href="assets/css/theme.min.css?v=1" rel="stylesheet" type="text/css" />
	<link href="assets/css/style-index.min.css?v=1" rel="stylesheet" type="text/css">
	<link href="assets/css/privacy.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/responsive.css?v=1" rel="stylesheet" type="text/css">
	<script type="text/javascript">
		(function(c, l, a, r, i, t, y) {
			c[a] = c[a] || function() {
				(c[a].q = c[a].q || []).push(arguments)
			};
			t = l.createElement(r);
			t.async = 1;
			t.src = "https://www.clarity.ms/tag/" + i;
			y = l.getElementsByTagName(r)[0];
			y.parentNode.insertBefore(t, y);
		})(window, document, "clarity", "script", "nokaa5dqvy");
	</script>
</head>

<body>
	<!--header section start here-->



	<header>

		<div class="header_area">
			<div class="main_header_area animated">
				<div class="container">
					<nav id="navigation1" class="navigation d-flex align-items-center justify-content-between ">
						<div class="nav-header">
							<a class="nav-brand" href="index.php"><img src="assets/images/logo_top.webp" alt="" class="logo-dark"></a>
							<div class="nav-toggle"></div>
						</div>
						<div class="btn-grp d-flex align-items-center">
							<a href="javascript:void(0);" target="_Blank" data-bs-toggle="modal" data-bs-target="#waModal" class="f-btn w-btn-c whats-btn">
								<img src="assets/images/whats-up-icon.webp" alt="">
								<span> Chat on WhatsApp </span>
							</a>
							<a href="javascript:void(0);" class="f-btn w-btn-c" data-bs-toggle="modal" data-bs-target="#callModal">
								<img src="assets/images/call-icon.webp" alt="">
								<span> Speak to Specialist </span>
							</a>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</header>

	<?php if ($loadEnquiryModalPopup) : ?>

		<div class="modal fade auto-modal" id="exampleModal">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">

					<!-- Modal Header -->
					<div class="modal-header">
						<!-- <h6>Fill this form in the next
							<span id="timer">5:00</span>
							minutes and get a <span class="red-grn"> Hair-Scalp Analysis </span> from our Senior Doctor worth <span class="cross-m"> ₹1500 <img src="assets/images/close-red.webp" alt="" loading="lazy"> </span> for <span class="red-clr"> ABSOLUTELY FREE! </span>
						</h6> -->
						<h6>Book a Consultation</h6>
						<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
					</div>

					<!-- Modal body -->
					<div class="modal-body">
						<div class="form-body">
							<form action="javascript:void(0);" method="post" name="feedback-form">
								<div class="fieldsets row">
									<div class="">
										<input type="hidden" placeholder="Name" value="<?= MODAL_POPUP_APPOINTMENT ?>" id="modal_popup_appointment">

										<input type="text" id="modal_popup_appointment_full_name" name="fname" placeholder="Full Name">
									</div>

								</div>
								<div class="fieldsets">
									<div class="">

										<input type="tel" id="modal_popup_appointment_mobile" name="tel" placeholder="Phone Number">
									</div>
								</div>
								<div class="fieldsets">
									<select name="" id="modal_popup_appointment_city">
										<option value="" selected=""> Select Branch </option>
										<option value="Ambattur"> Ambattur </option>
										<option value="Velachery"> Velachery </option>
										<option value="Porur"> Porur </option>
										<option value="Other"> Other </option>
									</select>
								</div>
								<div class="fieldsets">
									<select name="" id="modal_popup_appointment_treatment">
										<option value="" selected=""> Select Issues </option>
										<option value="Hair Thinning"> Hair Thinning </option>
										<option value="Bald Spots"> Bald Spots </option>
										<option value="Receding Hairline"> Receding Hairline </option>
										<option value="Crown Thinning"> Crown Thinning </option>
										<option value="Donor Area Concerns"> Donor Area Concerns </option>
										<option value="Scarring"> Scarring </option>
										<option value="Density and Coverage"> Density and Coverage </option>
										<option value="Non-Surgical Alternatives"> Non-Surgical Alternatives </option>
										<option value="General Issues"> General Issues </option>
										<option value="Others"> Others </option>
									</select>
								</div>
								<div class="fieldsets">

									<textarea id="modal_popup_appointment_message" name="message" placeholder="Your comment here ..."></textarea>
								</div>
								<div class="pop-grade">
									<h6>Grade of baldness</h6>
									<div class="grade-all" id="modal_popup_appointment_bald_grade">
										<div class="grade-single">
											<input type="radio" id="blad-1" name="blad" value="1">
											<label for="blad-1">
												<p>1</p>
												<img src="assets/images/pop-icon-1.webp" alt="" loading="lazy">
											</label>
										</div>
										<div class="grade-single">
											<input type="radio" id="blad-2" name="blad" value="2">
											<label for="blad-2">
												<p>2</p>
												<img src="assets/images/pop-icon-2.webp" alt="" loading="lazy">
											</label>
										</div>
										<div class="grade-single">
											<input type="radio" id="blad-3" name="blad" value="3">
											<label for="blad-3">
												<p>3</p>
												<img src="assets/images/pop-icon-3.webp" alt="" loading="lazy">
											</label>
										</div>
										<div class="grade-single">
											<input type="radio" id="blad-4" name="blad" value="4">
											<label for="blad-4">
												<p>4</p>
												<img src="assets/images/pop-icon-4.webp" alt="" loading="lazy">
											</label>
										</div>
										<div class="grade-single">
											<input type="radio" id="blad-5" name="blad" value="5">
											<label for="blad-5">
												<p>5</p>
												<img src="assets/images/pop-icon-5.webp" alt="" loading="lazy">
											</label>
										</div>
										<div class="grade-single">
											<input type="radio" id="blad-6" name="blad" value="6">
											<label for="blad-6">
												<p>6</p>
												<img src="assets/images/pop-icon-6.webp" alt="" loading="lazy">
											</label>
										</div>
										<div class="grade-single">
											<input type="radio" id="blad-7" name="blad" value="7">
											<label for="blad-7">
												<p>7</p>
												<img src="assets/images/pop-icon-7.webp" alt="" loading="lazy">
											</label>
										</div>
										<div class="grade-single">
											<input type="radio" id="blad-8" name="blad" value="8">
											<label for="blad-8">
												<p>8</p>
												<h6>Other</h6>
											</label>
										</div>
									</div>
								</div>

								<div class="mt-lg-3 mt-2">
									<button id="modal_popup_appointment_btn" type="submit " name="submit" class=" f-btn contact-us-btn disablebtn"> Get free scalp analysis </button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<div class="modal callmodal" id="callModal">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
				</div>
				<div class="modal-body">
					<h4 class="modal-title">One Final Step </h4>
					<div class="call-modal-vec">
						<div class="loading-dots">
							<span class="dot one">.</span>
							<span class="dot two">.</span>
							<span class="dot three">.</span>
							<span class="dot one">.</span>
							<span class="dot two">.</span>
							<span class="dot three">.</span>
							<span class="dot one">.</span>
							<span class="dot two">.</span>
							<span class="dot three">.</span>
							<span class="dot one">.</span>
							<span class="dot two">.</span>
							<span class="dot three">.</span>
						</div>
						<div class="call-modal-vec-img">
							<img src="assets/images/call-modal.webp" alt="">
						</div>
					</div>
					<div class="call-modal-input">
						<div class="call-modal-input-single">
							<h6>+91</h6>
							<input type="text" placeholder="Enter Mobile Number to Call" id="f_call_mobile">
						</div>
						<button href="tel:+916363032157" class="f-btn" id="f_call_btn" data-for=<?= FINAL_CALL_FORM ?>>
							<img src="assets/images/call-icon.webp" alt="">
							<span> Call Now </span>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal callmodal" id="waModal">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
				</div>
				<div class="modal-body">
					<h4 class="modal-title">One Final Step </h4>
					<div class="call-modal-vec">
						<div class="loading-dots">
							<span class="dot one">.</span>
							<span class="dot two">.</span>
							<span class="dot three">.</span>
							<span class="dot one">.</span>
							<span class="dot two">.</span>
							<span class="dot three">.</span>
							<span class="dot one">.</span>
							<span class="dot two">.</span>
							<span class="dot three">.</span>
							<span class="dot one">.</span>
							<span class="dot two">.</span>
							<span class="dot three">.</span>
						</div>
						<div class="call-modal-vec-img">
							<img src="assets/images/whats-up-icon.webp" alt="">
						</div>
					</div>
					<div class="call-modal-input">
						<div class="call-modal-input-single">
							<h6>+91</h6>
							<input type="text" placeholder="Enter Mobile Number to Chat" id="f_wa_mobile">
						</div>
						<button href="https://wa.me/+916363032157?text=I would like to enquire about hair treatment " class="f-btn" id="f_wa_btn" data-for=<?= FINAL_WA_FORM ?>>
							<img src="assets/images/whats-up-icon.webp" alt="">
							<span> Chat on whatsapp </span>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>