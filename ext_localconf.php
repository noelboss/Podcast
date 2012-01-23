<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'Pi1',
	array(
		'Podcast' => 'index, show, new, create, edit, update, delete',
		'Episode' => 'index, show, new, create, edit, update, delete',
		'Category' => 'index, show, new, create, edit, update, delete',
		'Person' => 'index, show, new, create, edit, update, delete',
		'Website' => 'index, show, new, create, edit, update, delete',
		'Subcategory' => 'index, show, new, create, edit, update, delete',
	),
	array(
		'Podcast' => 'create, update, delete','Episode' => 'create, update, delete','Category' => 'create, update, delete','Person' => 'create, update, delete','Website' => 'create, update, delete','Subcategory' => 'create, update, delete',
	)
);              

//require t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/RealURL/default.php';
require t3lib_extMgm::extPath($_EXTKEY) . 'Classes/Utilities/EpisodePostProcessor.php';

$GLOBALS ['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = 'Tx_Podcast_Utilities_EpisodePostProcessor';

?>