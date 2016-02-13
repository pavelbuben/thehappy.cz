<!DOCTYPE html>
<?php include('lang.php'); ?>
<html lang="cs">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="content-language" content="cs">
	<meta name="author" content="">
	<meta name="robots" content="index, follow">
	<meta name="keywords" content="">
	<meta name="description" content="Tvorba webových stránek a mobilních aplikaci pro iOS a Android">
	<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">
	
	<link type="text/css" media="all" href="style/style.css" rel="stylesheet">
	<link type="text/css" media="all" href="style/responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>

	<link href="images/iphone-icon.png" sizes="120x120" rel="apple-touch-icon">
	
	<title>The Happy.cz - Happy iPhone Apps & Websites</title>
</head>
<body>
	<div class="main">
		<div class="header">
			<div class="inside">
				<h1 class="logo">Happy</h1>
				<div class="opacity"></div>
				<ul class="main-menu">
					<li class="logo-menu">The Happy</li>
					<li><a href="/">Home</a></li>
					<li class="margin"><a href="#reference">Reference</a></li>
					<li><a href="#contact">Contact</a></li>

					<li class="language english<?=getLang() == 'en' ? ' active' : ''?>"><a href="/">en</a></li>
					<li class="language czech<?=getLang() == 'cz' ? ' active' : ''?>"><a href="/cz">cz</a></li>
				</ul>

				<ul class="menu-hamburger">
					<li class="line-01"></li>
					<li class="line-02"></li>
					<li class="line-03"></li>
				</ul>

				<ul class="menu-cros">
					<li class="line-01"></li>
					<li class="line-02"></li>
				</ul>
				
				<img src="images/logo-smile.svg" class="icon" alt="The Happy" title="Click tu back Home">

				<h2>Happy <span>Apps</span> & <span>Websites</span></h2>

				<a href="#form" class="button-contact"><?=_('buttonContact')?></a>
			</div>
		</div>

		<div class="form hidden" id="form">
			<div class="inside">
				<form action="mailForm.php" class="contact-form" method="post">
					<p>
						<input type="text" name="name" id="formName" class="input" placeholder="Enter Your Name">
					</p>
					<p>
						<input type="text" name="email" class="input" placeholder="Enter Your Email">
					</p>
					<p>
						<textarea name="message" cols="40" rows="3" class="textarea" placeholder="Enter Your Message"></textarea>
					</p>
					<input type="submit" name="submit" class="button" value="Send Form">
				</form>
			</div>
		</div>

		<div class="reference" id="reference">
			<div class="inside">
				<ul class="tabs apps">
					<li class="apps active"><a href="#iphone-apps">Apps</a></li>
					<li class="webs"><a href="#websites">Websites</a></li>
				</ul>
				<div id="iphone-apps" class="content-webs">
					<div class="item">
						<div class="img apps">
							<img src="images/reference/flipo.png" alt="Flipo" title="">
						</div>
						<h3><a href="#">Flipo 2.0</a></h3>
						<p>Flipo is an app that can help you to expand your vocabulary when learning a foreign language.</p>
						<span class="button-wip">Work in Progress</span>
					</div>

					<div class="item">
						<div class="img apps">
							<img src="images/reference/linee.png" alt="Linee" title="">
						</div>
						<h3><a href="#">Linee</a></h3>
						<p><?=_('lineeDescription')?></p>
						<span class="button-wip">Work in Progress</span>
					</div>

					<div class="item">
						<div class="img apps">
							<img src="images/reference/sentence.png" alt="Winkat" title="">
						</div>
						<h3><a href="#">Winkat</a></h3>
						<p>Winkat will help you to find the best entertainment in your area and new friends or a new love.</p>
						<span class="button-wip">Work in Progress</span>
					</div>
				</div>
				<div id="websites" class="content-webs">
					<div class="item">
						<div class="img webs">
							<img src="images/reference/karel-chaba.jpg" alt="Karel Chaba" title="">
						</div>
						<h3><a href="#">Karel Chaba</a></h3>
						<p>Karel Chaba was a famous Czech painter well-known for his paintings of Prague. He loved Prague and beautiful women.</p>
						<a href="http://karelchaba.cz" class="button-reference" target="_blank">Open Web</a>
					</div>

					<div class="item">
						<div class="img webs">
							<img src="images/reference/a-realitka.jpg" alt="A - Realitka" title="">
						</div>
						<h3><a href="#">Arealitka.cz</a></h3>
						<p>A-Realitka is a real estate agency focussing on a personal approach and high-quality services.</p>
						<span class="button-wip">Work in Progress</span>
					</div>

					<div class="item">
						<div class="img webs">
							<img src="images/reference/pb-landscapes.jpg" alt="PB Landscapes" title="">
						</div>
						<h3><a href="#">PB Landscapes</a></h3>
						<p>PB Landscapes is a landscape architecture company in Perth focussing on garden design and maintenance.</p>
						<span class="button-wip">Work in Progress</span>
					</div>
				</div>
			</div>
		</div>

		<div class="service" id="service">
			<div class="inside">
				<div class="item">
					<div class="img">
						<img src="images/apps.svg" alt="iPhone Apps" title="">
					</div>
					<h3>Apps</h3>
					<p>We design apps for iOS and Android. We specialize in apps for iPhone and iPad.</p>
				</div>

				<div class="item">
					<div class="img">
						<img src="images/webs.svg" alt="Websites" title="">
					</div>
					<h3>Websites</h3>
					<p>We make modern websites with a high-quality design suitable especially for mobile phones and tablets.</p>
				</div>
			</div>
		</div>

		<div class="contact">
			<div class="inside">
				<div class="item">
					<div class="img">
						<img src="images/pavel.png" alt="Flipo" title="">
					</div>
					<h3>Pavel</h3>
					<span>Sesigner & Coder</span>
					<p>Mobile apps and web designer. HTML and CSS coder.</p>
				</div>

				<div class="item">
					<div class="img">
						<img src="images/mirka.png" alt="Linee" title="">
					</div>
					<h3>Mirka</h3>
					<span>Content & Office</span>
					<p>Client website editor.</p>
				</div>

				<div class="item">
					<div class="img">
						<img src="images/tomas.png" alt="Last Sentence" title="">
					</div>
					<h3>Tomáš</h3>
					<span>Designer & Photographer</span>
					<p>Mobile apps designer and photographer.</p>
				</div>
			</div>
		</div>

		<div class="footer" id="contact">
			<div class="inside">
				<p><em>To contact us:</em> <a href="mailto:info@thehappy.cz" class="email">info@thehappy.cz</a><strong>+420 773 600 604</strong></p>
			</div>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/tabs.js"></script>
</body>
</html>



