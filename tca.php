<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

$TCA['tx_podcast_chanels'] = array (
	'ctrl' => $TCA['tx_podcast_chanels']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'hidden,title,subtitle'
	),
	'feInterface' => $TCA['tx_podcast_chanels']['feInterface'],
	'columns' => array (
		'hidden' => array (		
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array (
				'type'    => 'check',
				'default' => '0'
			)
		),
		'title' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:podcast/locallang_db.xml:tx_podcast_chanels.title',		
			'config' => array (
				'type' => 'input',	
				'size' => '30',	
				'eval' => 'required',
			)
		),
		'subtitle' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:podcast/locallang_db.xml:tx_podcast_chanels.subtitle',		
			'config' => array (
				'type' => 'input',	
				'size' => '30',
			)
		),
	),
	'types' => array (
		'0' => array('showitem' => 'hidden;;1;;1-1-1, title;;;;2-2-2, subtitle;;;;3-3-3')
	),
	'palettes' => array (
		'1' => array('showitem' => '')
	)
);
?>