<?php

/**
 * Konfiguace sluzeb cetelem
 */

/**
 * cesta k obsluznym classam
 * @var string
 */
define ('CTLM_CLASSES', realpath(__DIR__.'/../classes'));

/**
 * inicializace fasady Ctlm pro pristup ke sluzbam cetelem
 */
require CTLM_CLASSES.'/Ctlm.php';
require CTLM_CLASSES.'/CtlmHelper.php';

/**
 * inicializace web ciselniku cetelem
 */
$urls = array(
	'dummy' => array(
		'info' => '../data/info.xml',
		'pojisteni' => '../data/pojisteni.xml',
		'kalkulator' => '../data/kalkulace.xml'
	),
	'uat' => array(
		'info' => 'https://www.cetelem.cz:8654/webciselnik2.php?kodProdejce='.CTLM_VDR_ID.'&typ=info',
		'pojisteni' => 'https://www.cetelem.cz:8654/webciselnik2.php?kodProdejce='.CTLM_VDR_ID.'&typ=pojisteni',
		'kalkulator' => 'https://www.cetelem.cz:8654/webkalkulator.php?kodProdejce='.CTLM_VDR_ID
	),
	'production' => array(
		'info' => 'http://www.cetelem.cz/webciselnik2.php?kodProdejce='.CTLM_VDR_ID.'&typ=info',
		'pojisteni' => 'http://www.cetelem.cz/webciselnik2.php?kodProdejce='.CTLM_VDR_ID.'&typ=pojisteni',
		'kalkulator' => 'http://www.cetelem.cz/webkalkulator.php?kodProdejce='.CTLM_VDR_ID
	),
);
/**
 * url ke sluzbe pro definice baremu
 * @var string
 */
define ('CTLM_URL_INFO', $urls[CTLM_ENVIRONMENT]['info']);

/**
 * cesta ke sluzbe pro definice pojisteni
 * @var string
 */
define ('CTLM_URL_POJISTENI', $urls[CTLM_ENVIRONMENT]['pojisteni']);

require CTLM_CLASSES.'/CtlmCiselnik.php';

/**
 * inicializace web kalkulacky cetelem
 */
define ('CTLM_URL_KALKULATOR', $urls[CTLM_ENVIRONMENT]['kalkulator']);
require CTLM_CLASSES.'/CtlmKalkulator.php';
