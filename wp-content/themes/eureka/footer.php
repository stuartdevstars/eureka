    <section id="get-in-touch">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<h4>Get in touch with us</h4>
					<p>Eureka Cove</p>
					<p>123, Address 1, Address 2, City AB1 CD2</p>
					<p>Customer Careline: +44 (0) 203 371 1225</p>
					<p>Email: <a href="mailto:customercare@eurekacove.com">customercare@eurekacove.com</a></p>
					<h5>Trade</h5>
					<p>Mrs Smith - <a href="mailto:trade@eurekacove.com">trade@eurekacove.com</a></p>
					<p>+44 (0) 203 371 1225</p>
					<h5>Press</h5>
					<p>Mrs Smith - <a href="mailto:press@eurekacove.com">press@eurekacove.com</a></p>
					<p>+44 (0) 203 371 1225</p>
				</div>
				<div class="col-sm-8">
					<h5>Send us a message - in a bottle! (Or maybe quicker to use this form)</h5>
					<hr />
					<form>
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
									<label for="email-address" class="sr-only">Email address</label>
									<input type="email" name="email-address" placeholder="Email address" required/>
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
								<label for="your-message" class="sr-only">Your message</label>
								<textarea name="your-message" rows="10" placeholder="Your message, type away..." required></textarea>

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