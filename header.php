<html lang="en">
    <!--
  Hi there! As you are analysing source code, I assume that you are a technically interested and 
  creative person. What brought you here is beyond me - as this is no masterpiece. But I am happy 
  you are here and I want you to never stop exploring. I want you to keep that spark and to pass
  it on. Let nobody ever tell you that technology is magic and a company or government should 
  control it. We, the interested, should be the ones getting the information and tools we need.
  And we, the tweakers, the hackers, the people poking holes into things should be the ones to 
  educate the next to come and replace us. Share, teach, introduce, help, mentor. Use that brain
  to make this place better. I like you - go ahead and have a look. 
  .----.-----.-----.-----.
 /      \     \     \     \
|  \/    |     |   __L_____L__
|   |    |     |  (           \
|    \___/    /    \______/    |
|        \___/\___/\___/       |
 \      \     /               /
  |                        __/
   \_                   __/
    |        |         |
    |                  |
    |                  |
          RESIST! 
-->
<head>
    <meta http-equiv="Cache-Control" content="no-cache" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <meta name="msvalidate.01" content="C432869997D8BB7B65B909EA944A7272" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-142580246-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-142580246-1');
    </script>
    <!--END GTAGS -->
    <!--GFONTS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
    <!--END GFONTS-->
	<!-- ANIMATE CSS -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">
	<!-- END ANIMATE CSS -->
	<script src="http://cdn.ckeditor.com/4.11.2/full/ckeditor.js"></script>
	<link rel="icon" href="<?php echo bloginfo('template_url'); ?>/assets/img/favicon.png">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
		  integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
		  crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/assets/css/cards.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/assets/css/style.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
		  integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
		  crossorigin="anonymous">
	<title>
		llamasec | Web Security and Programming Blog
	</title>
	<script>
		$(window).load(function () {
			$('.post-module').hover(function () {
				$(this).find('.description').stop().animate({
					height: "toggle",
					opacity: "toggle"
				}, 300);
			});
		});
	</script>
	<?php wp_head(); ?>
</head>
<body>
<?php
// use base url like this
//echo echo bloginfo('template_url');
?>
<div class="container">
	<nav class="navbar navbar-expand-lg navbar-light animated fadeInDown">
		<a class="navbar-brand" href="<?php echo home_url();?>"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/llamasec.png" alt="llamasec logo"
											  id="navbar-brand"></a>
		<button id="navbar-toggler" class="navbar-brand navbar-toggler" type="button" data-toggle="collapse"
				data-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span style="margin: auto;"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/llamasec.png" alt="llamasec logo"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto text-left">
				<li class="nav-item active">
					<h5 id="navcontent"><a class="nav-link ml-5" href="https://llamasec.tk">Home <span
								class="sr-only">(current)</span></a></h5>
				</li>
				<li class="nav-item">
					<h5 id="navcontent"><a class="nav-link ml-5" href="https://llamasec.tk/posts">Blogs</a></h5>
				</li>
				<li class="nav-item">
					<h5 id="navcontent"><a class="nav-link ml-5" href="https://llamasec.tk/about">About</a></h5>
				</li>
			</ul>
		</div>
	</nav>
</div>

