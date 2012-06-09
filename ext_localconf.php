<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'Display',
	array(
		'Podcast' => 'list, show',
	),
	array(
		'Podcast' => '',
	)
);              

require t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/RealURL/default.php';

$GLOBALS ['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass']['podcast'] = 'EXT:podcast/Classes/Utilities/Backend/EpisodePostProcessor.php:Tx_Podcast_Utilities_EpisodePostProcessor';

?>