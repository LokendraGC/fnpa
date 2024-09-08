<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fnpa
 */

?>
<!-- Footer -->
<footer>
	<div class="container mt-5">
		<div class="row">
			<div class="col-lg-3">
				<a class="navbar-brand pe-4" href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo.svg" alt="fnpa" /></a>
				<p class="pt-5 fs-4 fw-normal lh-base">The Federation of Nepal Printers’ Association (FNPA) is the one and only umbrella organization of printing industries and allied corporate houses in Nepal.</p>
			</div>
			<div class="col-lg-3 hide-on-mobile">
				<div class="row">
					<div class="col d-flex flex-column align-items-start">
						<h5>Membership</h5>
						<a href="about.html" class="text-reset mb-3">About</a>
						<a href="notice.html" class="text-reset mb-3">Notice</a>
						<a href="blog.html" class="text-reset mb-3">Blog</a>
						<a href="contact.html" class="text-reset mb-3">Contact</a>
						<a href="gallery.html" class="text-reset mb-3">Gallery</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 hide-on-mobile">
				<div class="row">
					<h5>Quick Links</h5>
					<div class="col d-flex flex-column align-items-start">
						<a href="events.html" class="text-reset mb-3">Events & Activities</a>
						<a href="committee.html" class="text-reset mb-3">Members</a>
						<a href="message.html" class="text-reset mb-3">Message of President</a>
						<a href="downloads.html" class="text-reset mb-3">Downloads</a>
						<a href="committee.html" class="text-reset mb-3">Committee</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="row">
					<h5>Get in Touch</h5>
					<ul class="menu-footer">
						<li>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/location-pin.png" class="footer-img" alt="">
							Aloknagar, Tinkune Kathmandu, Nepal
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/phone-call.png" class="footer-img" alt="">
							<a href=" 977 1 5910977"> 977 1 5910977</a>
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/mail.png" class="footer-img" alt=""> 
							<a href="mailto:info@fnpa.org.np">info@fnpa.org.np</a>
						</li>
						<li>
							<h5>Follow Us</h5>
							<div class="col d-flex">
								<div class="d-flex gap-4">
									<a href="https://www.facebook.com/" class="text-reset">
										<i class="bi bi-facebook"></i>
									</a>
									<a href="https://twitter.com/" class="text-reset">
										<i class="bi bi-twitter-x"></i>
									</a>
									<a href="https://www.instagram.com/" class="text-reset">
										<i class="bi bi-instagram"></i>
									</a>
									<a href="https://www.youtube.com/" class="text-reset">
										<i class="bi bi-youtube"></i>
									</a>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="container mb-3">
		<hr />
		<div class="my-3 mx-auto align-items-center text-secondary">
			<div class="footer-font">
				© 2024 Copyright Federation of Nepal Printers' Association. All Rights Reserved.Developed By <a href="https://webtechnepal.com/" target="_blank">Webtech Nepal</a>
			</div>
		</div>
	</div>
</footer>

<!-- Scroll top -->
<div class="btn-scroll-top">
	<svg class="progress-square svg-content" width="100%" height="100%" viewBox="0 0 40 40">
		<path d="M8 1H32C35.866 1 39 4.13401 39 8V32C39 35.866 35.866 39 32 39H8C4.13401 39 1 35.866 1 32V8C1 4.13401 4.13401 1 8 1Z" />
	</svg>
</div>

<?php wp_footer(); ?>

</body>
</html>
