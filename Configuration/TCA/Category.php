<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

$TCA['tx_podcast_domain_model_category'] = array(
	'ctrl' => $TCA['tx_podcast_domain_model_category']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'title,subcategory'
	),
	'types' => array(
		'1' => array('showitem' => 'title,subcategory')
	),
	'palettes' => array(
		'1' => array('showitem' => '')
	),
	'columns' => array(
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.php:LGL.allLanguages',-1),
					array('LLL:EXT:lang/locallang_general.php:LGL.default_value',0)
				)
			)
		),
		'l18n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_podcast_domain_model_category',
				'foreign_table_where' => 'AND tx_podcast_domain_model_category.uid=###REC_FIELD_l18n_parent### AND tx_podcast_domain_model_category.sys_language_uid IN (-1,0)',
			)
		),
		'l18n_diffsource' => array(
			'config'=>array(
				'type'=>'passthrough')
		),
		't3ver_label' => array(
			'displayCond' => 'FIELD:t3ver_label:REQ:true',
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.versionLabel',
			'config' => array(
				'type'=>'none',
				'cols' => 27
			)
		),
		'hidden' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array(
				'type' => 'check'
			)
		),
		'title' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:podcast/Resources/Private/Language/locallang_db.xml:tx_podcast_domain_model_category.title',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required',
			)
		),
		'subcategory' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:podcast/Resources/Private/Language/locallang_db.xml:tx_podcast_domain_model_category.subcategory',
			'config'  => array(
				'type' => 'inline',
				'foreign_table' => 'tx_podcast_domain_model_subcategory',
				'minitems' => 0,
				'maxitems' => 1,   
				'eval' => 'trim',
				'appearance' => array(
					'collapse' => 0,
					'newRecordLinkPosition' => 'top',
					'enabledControls' => array(
						'dragdrop' => 0,
						'info' => 0,
						'hide' => 0,
					),
				),
			)
		),
	),
);
?>