<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_podcast_chanels'] = array (
	'ctrl' => array (
		'title'     => 'LLL:EXT:podcast/locallang_db.xml:tx_podcast_chanels',		
		'label'     => 'uid',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'default_sortby' => 'ORDER BY crdate',	
		'delete' => 'deleted',	
		'enablecolumns' => array (		
			'disabled' => 'hidden',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icon_tx_podcast_chanels.gif',
	),
);

// adding Plugin with Fluid
Tx_Extbase_Utility_Extension::registerPlugin(
    $_EXTKEY,
    'Pi1', // First UpperCase
    'Podcast'
);

?>