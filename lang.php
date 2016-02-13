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

	$l['cz']['buttonContact'] = 'Chci nový web nebo aplikaci';
	$l['en']['buttonContact'] = 'I want a happy app or web';

	$l['cz']['lineeDescription'] = 'Linee vám vždy připomene nový díl vašeho oblíbeného seriálu nebo začátek nové serie.';
	$l['en']['lineeDescription'] = 'Linee will always remind you of a new episode of your favourite tv series or a new season.';


	return isset($l[$lang][$key]) ? $l[$lang][$key] : '';
}