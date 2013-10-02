<?php
/**
 * @package WordPress
 * @subpackage Lysander
 * @since HTML5 Reset 2.0
 */

$your_email = 'your@email.com';

/* on contact form submit with basic spam protection */
if (isset($_POST['name']) && empty($_POST['bot'])) {
	
	$errors = array();

	$visitor_name    = strip_tags($_POST['name']);
	$visitor_email   = strip_tags($_POST['email']);
	$visitor_message = strip_tags($_POST['message']);

	// Basic validation

		// Name is too short or missing
		if (strlen($visitor_name) < 2) {
			$errors['name'] = 'Please enter your name.';
		}

		// Short or empty message
		if (strlen($visitor_message) < 7) {
			$errors['message'] = 'Please enter your message.';
		}

		// Invalid e-mail
		if( !filter_var($visitor_email, FILTER_VALIDATE_EMAIL) ) {
			$errors['email'] = 'Please enter a valid email address.';
		}

	// validation is ok, process to send an e-mail
	if (!$errors) {

		$subject = 'New message from '.$visitor_email;
		
		$headers   = array();
		$headers[] = "MIME-Version: 1.0";
		$headers[] = "Content-type: text/plain; charset=utf-8";
		$headers[] = "From: ". $visitor_email;
		$headers[] = "Reply-To: ". $visitor_email;
		$headers[] = "X-Mailer: PHP/".phpversion();

		if (@mail($your_email, $subject, $visitor_message, implode("\r\n", $headers))) {

			$output['status'] = 1;

		} else {

			$errors['system'] = 'There was a problem sending your email';
		}

	} 

	// There were some errors, show them to the visitor
	$output['errors'] = implode($errors,'<br />');

	// json print of output
	die(json_encode($output));

}

/* End of file contact-form.php */
/* Location: php/contact-form */


 get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<!-- <article class="post" id="post-<?php the_ID(); ?>"> -->

		<div class="row" id="blog">
			<!-- Media -->
			<div class="span12">

						<div class="hero-unit">
							<h1>Contact Us</h1>
						</div>

						<p>
							You may reach us via phone or email. If you would prefer, please fill out the form below
							to let us know your preferred method of contact, as well as a good time to reach you.
							We look forward to talking with you soon!
						</p>						
						<br>
							 
							<div class="row">
									<div class="span4 offset1">


										<p class="lead">
											571-212-6145 (cell)
											888.750.4126 (fax)
										</p>
										<p class="lead">
											3623 Tupelo Place<br>
											Alexandria, VA 22304 <br>
											<a>Get Directions</a>
										</p>
										<p class="active lead">
											<a class="social-network twitter"></a> &nbsp;
											<a class="social-network facebook"></a> &nbsp;
											<a class="social-network linkedin"></a> &nbsp;
										</p>										
									</div>
									<div class="span6 pull1">

											<!-- Contact form
											================================================== -->

											<!-- form message -->
											<div id="contact-form-response" class="alert hidden">
												<?php echo $response; ?>
											</div>

											<form id="contact-form" class="row">
												<div class="span3">
													<label>Name</label>
													<input type="text" name="name" placeholder="Your name">
												</div>
												<div class="span3">
													<label>E-mail</label>
													<input type="email" name="email" placeholder="@">
												</div>
												<div class="span3">
													<label>Child's Name</label>
													<input type="condition" name="condition" placeholder="">
												</div>													
												<div class="span3">
													<label>Medical Condition</label>
													<input type="condition" name="condition" placeholder="i.e. torticullis">
												</div>
												<div class="span3">
													<label>Zip Code or City</label>
													<input type="location" name="location" placeholder="22304">
												</div>	
												<div class="span3">
													<label>Preferred method of contact</label>
													<input type="condition" name="condition" placeholder="i.e. torticullis">
												</div>																									
												<div class="span6">
													<label>Your message</label>
													<textarea style="width:450px" name="message" rows="4" placeholder="Leave us your message"></textarea>
													<p>
														<a id="contact-form-submit" class="button yellow fr">Send &nbsp;<i class="icon-chevron-right"></i></a>
													</p>
												</div>
												<input type="hidden" name="bot" value="">
											</form>
									</div>
								</div>
						
					</div>
				</div>

			</div><!-- span8 -->
		</div><!-- row -->

			<?php edit_post_link(__('Edit this entry.'), '<p>', '</p>'); ?>

		<!-- </article> -->
		
		<?php comments_template(); ?>

		<?php endwhile; endif; ?>

<?php get_footer(); ?>
