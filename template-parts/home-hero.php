<div id="main-page" class="the-home-page">
	<section id="hero" class="section hero first-section home-banner dark-env">

		<?php get_template_part('template-parts/header-dark', 'index'); ?>

		<div class="hb-row-wrapper">
			<div class="to-parent">
				<div class="to-mid">
					<div class="container">
						<div class="row justify-content-md-center">
							<div class="col-md-6">
								<div class="hb-inner">
									<?php
									/* This sets the $time variable to the current hour in the 24 hour clock format */
									$time = date("H");
									/* Set the $timezone variable to become the current timezone */
									$timezone = date("e");
									/* If the time is less than 1200 hours, show good morning */
									if ($time < "12") {
										echo "Good morning";
									} else
										/* If the time is grater than or equal to 1200 hours, but less than 1700 hours, so good afternoon */
										if ($time >= "12" && $time < "17") {
											echo "Good afternoon";
										} else
											/* Should the time be between or equal to 1700 and 1900 hours, show good evening */
											if ($time >= "17" && $time < "19") {
												echo "Good evening";
											} else
												/* Finally, show good night if the time is greater than or equal to 1900 hours */
												if ($time >= "19") {
													echo "Good night";
												}
									?>,
									<span class="preheader"><span data-words="Hello|Hola|你好|Salut|مرحبا|नमस्ते|Olá|Привет|こんにちは|Halo|안녕|Merhaba|Hallo|Chào bạn|Hej|Ciao|Cześć"></span>, we are Linux Internet</span>
									<h1>Design + Digital Studio</h1>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="background">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</section>
	<section class="section about-section light-env">
		<?php get_template_part('template-parts/header-light', 'index'); ?>
		<div class="inner">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="page-content__">
							<div class="page-title__">
								<span class="sub-pt">/ About us</span>
								<h2>Inspired design, bold solutions & bottom line results</h2>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="page-content__">
							<div class="page-the-content__">
								<p style="font-weight: 700; margin-bottom: 20px;">We are Linux Internet</p>
								<p>A digital design and development studio based in the North East of England. We are a small, but powerful independent team of digital specialists combining the most advanced web technologies, with modern design and bold communication. We live and breath the work we produce, focused on delivering amazing experiences you will love and driving future growth for your business.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section projects-section dark-env">
		<?php get_template_part('template-parts/header-dark', 'index'); ?>
		<div class="inner">
			<div class="container">
				<div class="row row-1">
					<div class="col-md-12">
						<div class="section-top-wrapper">
							<div class="page-title-group">
								<div class="page-title__">
									<span class="sub-pt">/ Featured</span>
									<h2>Recent Work</h2>
								</div>
								<div class="page-sub-title__">
									<p>A selected collection of our recent projects</p>
								</div>
							</div>
							<div class="page-button__">
								<a href="#">
									<div class="button-wrapper__">
										<div class="button-back__"></div>
										<div class="button-text__">
											<p>View all projects</p>
										</div>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="row row-2">
					<div class="col-md-6">
						<div class="project-item project-item-1">
							<div class="project-item-inner">
								<div class="pii-image" style="background: #2e2e2e;">
									<div class="pii-image-inner">
										<img src="http://4xd.co.uk/linux/wp-content/uploads/2022/10/nkbco-scaled.jpg">
									</div>
								</div>
								<div class="pii-title-group">
									<div class="pii-title">
										<h3>Newcastle Kitchen and Bedroom Co.</h3>
									</div>
									<div class="pii-sub-title">
										<p>Website Design & Development</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="project-item project-item-2">
							<div class="project-item-inner">
								<div class="pii-image" style="background: #0b2c61;">
									<div class="pii-image-inner">
										<img src="http://4xd.co.uk/linux/wp-content/uploads/2022/10/ukopa-scaled.jpg">
									</div>
								</div>
								<div class="pii-title-group">
									<div class="pii-title">
										<h3>United Kingdom Onshore Pipeline Operators' Association</h3>
									</div>
									<div class="pii-sub-title">
										<p>Members Centre UX Design and Development</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section clients-section light-env">
		<?php get_template_part('template-parts/header-light', 'index'); ?>
		<div class="inner">
			<div class="container">
				<div class="row row-1">
					<div class="col-md-12">
						<div class="section-top-wrapper">
							<div class="page-title-group">
								<div class="page-title__">
									<span class="sub-pt">/ Select Clients</span>
									<h2>A few brands we’ve had the privilege to work with</h2>
								</div>
								<div class="page-sub-title__">
									<p>We value our client relationship, past and present have included enterprise level technology companies, authoritative industry bodies, small local businesses, start-ups, and more.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row row-2">
					<?php
					if (have_rows('client_each')) :
						while (have_rows('client_each')) : the_row(); ?>

							<div class="col-md-3 client-each">
								<div class="client-each-inner">
									<a href="<?php echo get_sub_field('client_link'); ?>">
										<?php $client_logo = get_sub_field('client_logo') ?>
										<div class="client-each-thumb has-transition">
											<img src="<?php echo $client_logo['url']; ?>">
										</div>
									</a>
								</div>
							</div>

					<?php endwhile;
						endif;
					?>
				</div>
			</div>
		</div>
	</section>

	<section class="section services-section dark-env">
		<?php get_template_part('template-parts/header-dark', 'index'); ?>
		<div class="inner">
			<div class="services-video">
				<div class="video-0 video__ reveal">

				</div>
				<div class="video-1 video__">
					<video autoplay muted loop id="video-1">
						<source src="<?php echo get_template_directory_uri() . '/video/code.mp4' ?>" type="video/mp4">
					</video>
				</div>
				<div class="video-2 video__">
					<video autoplay muted loop id="video-2">
						<source src="<?php echo get_template_directory_uri() . '/video/creative.mp4' ?>" type="video/mp4">
					</video>
				</div>
				<div class="video-3 video__">
					<video autoplay muted loop id="video-3">
						<source src="<?php echo get_template_directory_uri() . '/video/hosting.mp4' ?>" type="video/mp4">
					</video>
				</div>
				<div class="video-4 video__">
					<video autoplay muted loop id="video-4">
						<source src="<?php echo get_template_directory_uri() . '/video/marketing.mp4' ?>" type="video/mp4">
					</video>
				</div>
				<div class="video-overlay__"></div>
			</div>
			<div class="container">
				<div class="row row-1">
					<div class="col-md-12">
						<div class="section-top-wrapper">
							<div class="page-title-group">
								<div class="page-title__">
									<span class="sub-pt">/ Capabilities</span>
									<h2>Services</h2>
								</div>
								<div class="page-sub-title__">
									<p>From dedicated front-end and user experience solutions, to complicated but perfectly-executed<br> back-end projects, our team is ready to help take your offering to the next level.</p>
								</div>
							</div>
							<div class="page-button__">
								<a href="#">
									<div class="button-wrapper__">
										<div class="button-back__"></div>
										<div class="button-text__">
											<p>Explore our services</p>
										</div>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="row row-2">
					<div class="col-md-12">
						<div class="services-list">
							<div class="services-list-inner">
								<ul>
									<li class="service-1">
										<p><span>01.</span> Digital Production</p>
									</li>
									<li class="service-2">
										<p><span>02.</span> Creative</p>
									</li>
									<li class="service-3">
										<p><span>03.</span> Hosting & Servers</p>
									</li>
									<li class="service-4">
										<p><span>04.</span> Performace Marketing</p>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section cta-section blue-env">
		<div class="inner">
			<div class="container">
				<div class="col-row">
					<div class="col-md-12">
						<div class="cta-wrapper">
							<div class="cta-title">
								<h2>Let's make something great together</h2>
							</div>
							<div class="cta-btn">
								<div class="page-button__">
									<a href="#">
										<div class="button-wrapper__">
											<div class="button-back__"></div>
											<div class="button-text__">
												<p>Start a project today</p>
											</div>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<script>
	function dataWord() {
		$("[data-words]").attr("data-words", function(i, d) {
			var $self = $(this),
				$words = d.split("|"),
				tot = $words.length,
				c = 0;
			for (var i = 0; i < tot; i++) $self.append($('<span/>', {
				text: $words[i]
			}));
			$words = $self.find("span").hide();
			(function loop() {
				$self.animate({
					width: $words.eq(c).width()
				});
				$words.stop().fadeOut().eq(c).fadeIn().delay(1800).show(0, loop);
				c = ++c % tot;
			}());
		});
	}
	$(window).on("load", dataWord);
</script>