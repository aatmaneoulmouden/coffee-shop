<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package coffeeshop
 */

?>

<footer id="footer" class="footer bg-cs-primary py-10">
	<div class="container mx-auto">
		<div class="grid grid-cols-1 gap-9 pb-6 mb-6 border-b border-cs-accent lg:grid-cols-3">
			<div class="flex flex-col gap-5">
				<h2 class="text-cs-accent text-3xl font-montserrat font-bold">Coffee Shop</h2>
				<p class="text-white">The coffee ideas shared by these generators are not cool at all, as they are not a human being.</p>
				<div class="flex items-center gap-4">
					<a href="/" class="sm-icon">
						<i class="fa-brands fa-facebook-f text-white"></i>
					</a>
					<a href="https://www.linkedin.com/in/aatmaneoulmouden/" target="_blank" class="sm-icon">
						<i class="fa-brands fa-linkedin-in text-white"></i>
					</a>
					<a href="/" class="sm-icon">
						<i class="fa-brands fa-instagram text-white"></i>
					</a>
					<a href="https://github.com/aatmaneoulmouden" target="_blank" class="sm-icon">
						<i class="fa-brands fa-github-alt text-white"></i>
					</a>
				</div>
			</div>
			<div>
				<h2 class="footer-menu-title">Useful Links</h2>
				<ul>
					<li class="footer-menu-item">
						<a href="#home">Home</a>
					</li>
					<li class="footer-menu-item">
						<a href="#offers">Offers</a>
					</li>
					<li class="footer-menu-item">
						<a href="#gallery">Gallery</a>
					</li>
					<li class="footer-menu-item">
						<a href="#follow-us">Follow us</a>
					</li>
					<li class="footer-menu-item">
						<a href="#blogs">Blogs</a>
					</li>
				</ul>
			</div>
			<div>
				<h2 class="footer-menu-title">Follow us</h2>
				<ul>
					<li class="footer-menu-item">
						<a href="tel:+212651-574352" class="flex items-center gap-2">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="w-3 h-3">
								<path fill-rule="evenodd" d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z" clip-rule="evenodd" />
							</svg>
							+212 651-574352
						</a>
					</li>
					<li class="footer-menu-item">
						<a href="mailto:aatmaneoulmouden@gmail.com" class="flex items-center gap-2">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="w-3 h-3">
								<path d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
								<path d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
							</svg>
							aatmaneoulmouden@gmail.com
						</a>
					</li>
				</ul>
			</div>
		</div>
		<p class="text-center text-white">Copyright ©️ 2023 Coffee shop by <a href="https://github.com/aatmaneoulmouden" target="_blank" class="text-cs-accent">Aatmane</a>. All rights reserved.</p>
	</div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>