	</main>
	
	<footer id="footer">
		<div class="get-in-touch-mobile hidden-sm hidden-md hidden-lg">
			<h4 class="pull-left">Get in touch with us</h4>
			<a href="" class="pull-right"><img src="<?php echo get_template_directory_uri(); ?>/img/plus.svg" alt="Open"></a>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center">
					<div class="social hidden-sm hidden-md hidden-lg">
                        <a href="https://www.facebook.com" title="Like Eureka Cove on Facebook"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/facebook.svg" alt="Facebook logo" width="18"></a>
                        <a href="https://www.twitter.com" title="Follow Eureka Cove on Twitter"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/twitter.svg" alt="Twitter logo" width="18"></a>
                        <a href="https://www.instagram.com" title="Follow Eureka Cove on Instagram"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/instagram.svg" alt="Instagram logo" width="18"></a>
                        <a href="https://www.youtube.com" title="Subscribe to Eureka Cove on YouTube"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/youtube.svg" alt="YouTube logo" width="18"></a>
                    </div>
				</div>
			</div>
			<?php if(!is_home()): ?>
				<div class="row">
					<div class="col-sm-12 text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/img/free-from.png" alt="Free From Gluten and Diary logo">
						<img src="<?php echo get_template_directory_uri(); ?>/img/kosher.png" alt="Kosher logo">
					</div>
				</div>
			<?php endif; ?>
		</div>
		<section class="copyright">
			<div class="text-center"><span>&copy; Eureka! Cove</span>  <span class="hidden-xs">|</span>  <a href="<?php echo get_site_url(); ?>/terms-and-conditions">Terms &amp; Conditions</a>  <span class="hidden-xs">|</span>  <a href="<?php echo get_site_url(); ?>/privacy-policy">Privacy Policy</a>  <span class="hidden-xs">|</span>  <span>Site by feel</span></div>
		</section>
	</footer>

    <section id="get-in-touch">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<h4>Get in touch with us</h4>
					<h5>Eureka Cove</h5>
					<p>Customer Careline: +44 (0) 203 371 1225</p>
					<p>Email: <a href="mailto:customercare@eurekacove.com">customercare@eurekacove.com</a></p>
					<h5>Trade</h5>
					<p>Email:<a href="mailto:Customercare@EurekaCove.com">Customercare@EurekaCove.com</a></p>
					<p>+44 (0) 203 371 1225</p>
				</div>
				<div class="col-sm-8">
					<h5>Send us a message - in a bottle! (Or maybe quicker to use this form)</h5>
					<hr />
					<form action="<?php echo get_site_url(); ?>/thank-you" method="POST">
						<div class="row">
							<div class="col-sm-6">
								<div class="field field-required">
									<label for="first-name" class="sr-only">First name</label>
									<input type="text" name="first-name" placeholder="First name" required/>
								</div>

								<div class="field field-required">
									<label for="last-name" class="sr-only">Last name</label>
									<input type="text" name="last-name" placeholder="Last name" required/>
								</div>

								<div class="field field-required">
									<label for="email" class="sr-only">Email address</label>
									<input type="email" name="email" placeholder="Email address" required/>
								</div>

								<div class="field">
									<label for="post-code" class="sr-only">Post code</label>
									<input type="text" name="post-code" placeholder="Post code" />
								</div>

								<div class="field">
									<label for="telephone" class="sr-only">Telephone</label>
									<input type="phone" name="telephone" placeholder="Telephone" />
								</div>
							</div>
							<div class="col-sm-6">
								<label for="message" class="sr-only">Your message</label>
								<textarea name="message" rows="10" placeholder="Your message, type away..." required></textarea>

								<div class="text-right">
									<button type="submit" name="contact-us-submit" class="btn btn-success" value="Send">Send</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
    
    <?php wp_enqueue_script('jquery'); ?>
    <?php wp_enqueue_script('main.js', get_template_directory_uri() . '/js/main.js', array('jquery')); ?>
    <?php wp_footer(); ?>
</body>
</html>
