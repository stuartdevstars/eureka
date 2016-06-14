<?php
/*
Template Name: Thank you
*/
if(isset($_POST['contact-us-submit'])) {
	if(trim($_POST['first-name']) === '') {
		$first_name_error = 'Please enter your first name.';
		$hasError = true;
	} else {
		$first_name = trim($_POST['first-name']);
	}

	if(trim($_POST['last-name']) === '') {
		$last_name_error = 'Please enter your last name.';
		$hasError = true;
	} else {
		$last_name = trim($_POST['last-name']);
	}

	if(trim($_POST['email']) === '')  {
		$email_error = 'Please enter your email address.';
		$hasError = true;
	} else if (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", trim($_POST['email']))) {
		$emailError = 'You entered an invalid email address.';
		$hasError = true;
	} else {
		$email = trim($_POST['email']);
	}

	if(trim($_POST['post-code']) !== '') {
		$post_code = trim($_POST['post-code']);
	}

	if(trim($_POST['telephone']) !== '') {
		$telephone = trim($_POST['telephone']);
	}

	if(trim($_POST['message']) === '') {
		$message_error = 'Please enter a message.';
		$hasError = true;
	} else {
		if(function_exists('stripslashes')) {
			$message = stripslashes(trim($_POST['message']));
		} else {
			$message = trim($_POST['message']);
		}
	}

	if(!isset($hasError)) {
		$emailTo = 'chris.pattle@gmail.com';
		if (!isset($emailTo) || ($emailTo == '') ){
			$emailTo = get_option('admin_email');
		}
		$subject = 'Contact form submission from '.$name;
		$body = "First name: $first_name \n\nLast name: $last_name \n\nEmail: $email \n\nMessage: $message";
		$headers = 'From: ' . $first_name . ' ' . $last_name . ' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

		wp_mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
	}

}
?>

<?php get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
					<div class="content shadow">
						<h1><?php the_title(); ?></h1>
						<?php the_content(); ?>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>