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
					<li><a href="/"><?=t('menuHome')?></a></li>
					<li class="margin"><a href="#reference" class="scroll-to"><?=t('menuReference')?></a></li>
					<li><a href="#contact" class="scroll-to"><?=t('menuContact')?></a></li>

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

				<a href="#form" class="button-contact"><?=t('buttonContact')?></a>
			</div>
		</div>

		<div class="form hidden" id="form">
			<div class="inside">
				<form action="mailForm.php" class="contact-form" method="post">
					<p>
						<input type="text" name="name" id="formName" class="input" placeholder="<?=t('formName')?>">
					</p>
					<p>
						<input type="text" name="email" class="input" placeholder="<?=t('formEmail')?>">
					</p>
					<p>
						<textarea name="message" cols="40" rows="3" class="textarea" placeholder="<?=t('formMessage')?>"></textarea>
					</p>
					<input type="submit" name="submit" class="button" value="<?=t('formSend')?>">
				</form>
			</div>
		</div>

		<div class="reference" id="reference">
			<div class="inside">
				<ul class="tabs apps">
					<li class="apps active"><a href="#iphone-apps"><?=t('tabApps')?></a></li>
					<li class="webs"><a href="#websites"><?=t('tabWebsites')?></a></li>
				</ul>
				<div id="iphone-apps" class="content-webs">
					<div class="item">
						<div class="img apps">
							<img src="images/reference/flipo.png" alt="Flipo" title="">
						</div>
						<h3>Flipo 2.0</h3>
						<p><?=t('flipoContent')?></p>
						<span class="button-wip"><?=t('flipoLink')?></span>
					</div>

					<div class="item">
						<div class="img apps">
							<img src="images/reference/linee.png" alt="Linee" title="">
						</div>
						<h3>Linee</h3>
						<p><?=t('lineeContent')?></p>
						<span class="button-wip"><?=t('lineeLink')?></span>
					</div>

					<div class="item">
						<div class="img apps">
							<img src="images/reference/sentence.png" alt="Winkat" title="">
						</div>
						<h3>Winkat</h3>
						<p><?=t('winkatContent')?></p>
						<span class="button-wip"><?=t('winkatLink')?></span>
					</div>
				</div>
				<div id="websites" class="content-webs">
					<div class="item">
						<div class="img webs">
							<img src="images/reference/karel-chaba.jpg" alt="Karel Chaba" title="">
						</div>
						<h3>karelchaba.cz</h3>
						<p><?=t('karelchabaContent')?></p>
						<a href="http://karelchaba.cz" class="button-reference" target="_blank"><?=t('karelchabaLink')?></a>
					</div>

					<div class="item">
						<div class="img webs">
							<img src="images/reference/a-realitka.jpg" alt="A - Realitka" title="">
						</div>
						<h3>arealitka.cz</h3>
						<p><?=t('arealitkaContent')?></p>
						<span class="button-wip"><?=t('arealitkaLink')?></span>
					</div>

					<div class="item">
						<div class="img webs">
							<img src="images/reference/pb-landscapes.jpg" alt="PB Landscapes" title="">
						</div>
						<h3>pb-landscapes.com</h3>
						<p><?=t('pblandscapesContent')?></p>
						<span class="button-wip"><?=t('pblandscapesLink')?></span>
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
					<h3><?=t('appsHeadline')?></h3>
					<p><?=t('appsContent')?></p>
				</div>

				<div class="item">
					<div class="img">
						<img src="images/webs.svg" alt="Websites" title="">
					</div>
					<h3><?=t('websitesHeadline')?></h3>
					<p><?=t('websitesContent')?></p>
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
					<p><?=t('pavelContent')?></p>
				</div>

				<div class="item">
					<div class="img">
						<img src="images/mirka.png" alt="Linee" title="">
					</div>
					<h3>Mirka</h3>
					<span>Content & Office</span>
					<p><?=t('mirkaContent')?></p>
				</div>

				<div class="item">
					<div class="img">
						<img src="images/tomas.png" alt="Last Sentence" title="">
					</div>
					<h3>Tomáš</h3>
					<span>Designer & Photographer</span>
					<p><?=t('tomasContent')?></p>
				</div>
			</div>
		</div>

		<div class="footer" id="contact">
			<div class="inside">
				<p><em><?=t('footerHeadline')?>:</em> <a href="mailto:info@thehappy.cz" class="email">info@thehappy.cz</a><strong>+420 773 600 604</strong></p>
			</div>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/tabs.js"></script>
	<script src="js/main.js"></script>
</body>
</html>




