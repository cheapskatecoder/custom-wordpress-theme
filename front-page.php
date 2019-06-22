<?php get_header(); ?>

<section>
	<div class="container">
		<div class="row">
			<div class="col-md-6 animated fadeInLeft" style="margin: auto;">
				<h1 class="justify-content-center">llamasec</h1>
				<p class="justify-content-center">This blog is dedicated to encompass my journey in the Infosec and the
					Programming industry and
					hopefully help someone out with the troubles that I once faced. I hope to see you join me and
					experience the adventures of a <code>script kiddie</code> to become a pro.
				</p>
			</div>
			<div class="col-md-6 animated fadeInRight">
				<img id="headerimage" src="<?php echo bloginfo('template_url'); ?>/assets/img/header-web-security.png"
					 alt="Vector designed obtained from the website VECTEEZY.com"
					 class="img-fluid rounded">
			</div>
		</div>
	</div>
</section>
<br>

<section>
	<h2 class="h2 text-center animated fadeIn">These are the three main things that I'd be focusing on mainly</h2>
	<p id="lead-text text-center" class="section-lead animated fadeIn">All of these topics are immense on their own and to cover them in it's
		entirety would be
		impossible however, I try to cover most important aspects in extensive detail :)</p>
	<div class="container">
		<div class="row row-eq-height">
			<div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
				<div class="card service1">
					<img alt="" class="img-fluid" src="<?php echo bloginfo('template_url'); ?>/assets/img/bughunting.png">
					<div class="card-body">
						<h5 class="card-title">Bug Hunting</h5>
						<p class="card-text">Bug hunting is the practise of finding out vulnerabilites in Websites,
							Android apps any
							software or service you can think of. I'd be focusing on building upon the existing
							methodologies and try to build one of my own.</p>
						<a href="#" class="cta">Read More <span class="ti-angle-right"></a>
					</div>
				</div>
			</div>

			<div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
				<div class="card service2">
					<img alt="" class="img-fluid rounded-circle" src="<?php echo bloginfo('template_url'); ?>/assets/img/coding.png">
					<div class="card-body">
						<h5 class="card-title">Programming</h5>
						<p class="card-text">Programming as a whole is massive, so I'll mainly be focusing on Web
							App programming,
							Database
							handling, Datastructures and writing quick little scripts to automate tasks.</p>
						<a href="#" class="cta">Read More <span class="ti-angle-right"></a>
					</div>
				</div>
			</div>

			<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
				<div class="card service3">
					<img class="img-thumbnail rounded-circle img-fluid" alt=""
						 src="<?php echo bloginfo('template_url'); ?>/assets/img/re.png">
					<div class="card-body">
						<h5 class="card-title">Reverse Engineering</h5>
						<p class="card-text">Reverse Engineering is deconstructing software to reveal it's internal
							logic and architecture. I'll be focusing mostly on assembly and following <a target="_blank"
																										 href="https://securedorg.github.io/">Malware Unicorn's Guide</a>.
						</p>
						<a href="#" class="cta">Read More <span class="ti-angle-right"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<br>
<section style="margin-top: 3rem;">
	<div class="container ">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-4 col-lg-4 text-center">
				<img alt="llama" src="<?php echo bloginfo('template_url'); ?>/assets/img/me.jpg"
					 align="center"
					 class="img-fluid rounded-circle text-right">
			</div>
			<div class="col-12 col-sm-12 col-md-7 col-lg-8">
				<h2>Who Am I?</h2>
				<p>I am a llama. I used to live happily in Andes, but one day my parents decided to gift me a computer.
					That's when the curiosity began. I started coding static html only websites, like most of the 90's
					computer savvy llama's did. One of my best friends pushed me into the computer science field. Right
					now
					I am a senior year college student, at the verge of completing my BCA. I am also a part time bug
					bounty
					hunter, and a full time programmer. I strive to become a better security researcher, and hopefully
					share
					a beer with <a href="https://twitter.com/jhaddix">Mr. Json Haddix</a>, <a
						href="https://twitter.com/malwareunicorn">Malware Unicorn</a>, <a
						href="https://twitter.com/nnwakelam">Naffy</a>, <a href="https://twitter.com/blackroomsec">BlackRoomSec</a>
					or with <a
						href="https://twitter.com/hacks4pancakes">Hacks4Pancakes</a> who have been my inspiration
					throughout my entire journey.</p>
			</div>
		</div>
	</div>
</section>
<br><br>
<?php get_footer(); ?>