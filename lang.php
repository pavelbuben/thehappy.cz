<?php

function getLang() {
	$lang = 'en';
	if (strpos($_SERVER['REQUEST_URI'], 'cz') !== false) {
		$lang = 'cz';
	}
	return $lang;
}

function _($key) {
	$lang = getLang();

	// MENU //

	$l['cz']['menuHome'] = 'Home';
	$l['cz']['menuReference'] = 'Reference';
	$l['cz']['menuContact'] = 'Kontakt';

	$l['en']['menuHome'] = 'Home';
	$l['en']['menuReference'] = 'Reference';
	$l['en']['menuContact'] = 'Contact';

	// CONTACT BUTTON //

	$l['cz']['buttonContact'] = 'Chci nový web nebo aplikaci';
	$l['en']['buttonContact'] = 'I want a happy app or web';

	// TABS //

	$l['cz']['tabApps'] = 'Aplikace';
	$l['cz']['tabWebsites'] = 'Weby';

	$l['en']['tabApps'] = 'Apps';
	$l['en']['tabWebsites'] = 'Websites';

	// REFERENCE APPS //

	$l['cz']['flipoContent'] = 'Flipo je aplikace, která vám pomůže s rozšiřováním slovní zasoby při učení cizího jazyka.';
	$l['cz']['flipoLink'] = 'Připravujeme';

	$l['cz']['lineeContent'] = 'Linee vám vždy připomene nový díl vašeho oblíbeného seriálu nebo začátek nové serie.';
	$l['cz']['lineeLink'] = 'Připravujeme';

	$l['cz']['winkatContent'] = 'Winkat vám najde nejlepší zábavu ve vašem okolí a pomůže vám najít nové přátele nebo novou lásku.';
	$l['cz']['winkatLink'] = 'Připravujeme';

	$l['en']['flipoContent'] = 'Flipo is an app that can help you to expand your vocabulary when learning a foreign language.';
	$l['en']['flipoLink'] = 'Work in Progress';

	$l['en']['lineeContent'] = 'Linee will always remind you of a new episode of your favourite tv series or a new season.';
	$l['en']['lineeLink'] = 'Work in Progress';

	$l['en']['winkatContent'] = 'Winkat will help you to find the best entertainment in your area and new friends or a new love.';
	$l['en']['winkatLink'] = 'Work in Progress';

	// REFERENCE WEBSITES //

	$l['cz']['karelchabaContent'] = 'Karel Chaba, byl slavný český malíř. Proslavil se jako malíř Prahy. Karel Chaba miloval Prahu a krásné ženy.';
	$l['cz']['karelchabaLink'] = 'Otevřít web';

	$l['cz']['arealitkaContent'] = 'A-Realitka je realitní kacelář s osobním přístupem a důrazem na kvalitní služby spojené s prodejem nemovitostí.';
	$l['cz']['arealitkaLink'] = 'Připravujeme';

	$l['cz']['pblandscapesContent'] = 'PB Landscapes je zahradnická firma s působností v Perthu. Specializují se na realizaci a údržbu zahrad.';
	$l['cz']['pblandscapesLink'] = 'Připravujeme';

	$l['en']['karelchabaContent'] = 'Karel Chaba was a famous Czech painter well-known for his paintings of Prague. He loved Prague and beautiful women.';
	$l['en']['karelchabaLink'] = 'Open web';

	$l['en']['arealitkaContent'] = 'A-Realitka is a real estate agency focussing on a personal approach and high-quality services.';
	$l['en']['arealitkaLink'] = 'Work in Progress';

	$l['en']['pblandscapesContent'] = 'PB Landscapes is a landscape architecture company in Perth focussing on garden design and maintenance.';
	$l['en']['pblandscapesLink'] = 'Work in Progress';

	// SERVICES //

	$l['cz']['appsHeadline'] = 'Aplikace';
	$l['cz']['appsContent'] = 'Vytváříme aplikace pro platformy iOS a Android. Specializujeme se na aplikace pro iPhone a iPad.';

	$l['cz']['websitesHeadline'] = 'Weby';
	$l['cz']['websitesContent'] = 'Vytváříme designově hezké weby, které jsou moderní a optimalizované pro mobilní telefony a tablety.';

	$l['en']['appsHeadline'] = 'Apps';
	$l['en']['appsContent'] = 'We design apps for iOS and Android. We specialize in apps for iPhone and iPad.';

	$l['en']['websitesHeadline'] = 'Websites';
	$l['en']['websitesContent'] = 'We make modern websites with a high-quality design suitable especially for mobile phones and tablets.';

	// CONTACT //

	$l['cz']['pavelContent'] = 'Designér mobilní aplikací a webů. Kodér HTML a CSS šablon.';
	$l['cz']['mirkaContent'] = 'Spravuje obsah klientských webů.';
	$l['cz']['tomasContent'] = 'Designér mobilních aplikací a fotograf.';

	$l['en']['pavelContent'] = 'Mobile apps and web designer. HTML and CSS coder.';
	$l['en']['mirkaContent'] = 'Client website editor.';
	$l['en']['tomasContent'] = 'Mobile apps designer and photographer.';

	// FOOTER //

	$l['cz']['footerHeadline'] = 'Ozvěte se nám';
	$l['en']['footerHeadline'] = 'To contact us';

	// FORM //

	$l['cz']['formName'] = 'Zadejte jméno';
	$l['cz']['formEmail'] = 'Zadejte email';
	$l['cz']['formMessage'] = 'Napište nám zpávu';
	$l['cz']['formSend'] = 'Odeslat formulář';

	$l['en']['formName'] = 'Enter Your Name';
	$l['en']['formEmail'] = 'Enter Your Email';
	$l['en']['formMessage'] = 'Enter Your Message';
	$l['en']['formSend'] = 'Send Form';


	return isset($l[$lang][$key]) ? $l[$lang][$key] : '';
}