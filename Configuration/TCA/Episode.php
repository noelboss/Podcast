<?php
if (!defined ('TYPO3_MODE'))	die ('Access denied.');

$TCA['tx_podcast_domain_model_episode'] = array(
	'ctrl' => $TCA['tx_podcast_domain_model_episode']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'title,subtitle,description,file,image,publication_date,website,author,itunesblock,duration,mime,altfiles'
	),
	'types' => array(
		'1' => array('showitem' => '--div--;LLL:EXT:podcast/Resources/Private/Language/locallang_db.xml:tx_podcast_domain_model_episode,
									title;;1;;1-1-1,subtitle,description,file;;2;;2,image,
									--div--;LLL:EXT:podcast/Resources/Private/Language/locallang_db.xml:tx_podcast_domain_model_episode.tab.meta,publication_date,website,author,keywords')
	),
	'palettes' => array(
		'1' => array('showitem' => 'itunesblock'),
		'2' => array('showitem' => 'altfiles,duration,mime'),
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
				'foreign_table' => 'tx_podcast_domain_model_episode',
				'foreign_table_where' => 'AND tx_podcast_domain_model_episode.uid=###REC_FIELD_l18n_parent### AND tx_podcast_domain_model_episode.sys_language_uid IN (-1,0)',
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
			'label'	  => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array(
				'type' => 'check'
			)
		),
		'title' => array(
			'exclude' => 0,
			'label'	  => 'LLL:EXT:podcast/Resources/Private/Language/locallang_db.xml:tx_podcast_domain_model_episode.title',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			)
		),
		'itunesblock' => Array (
			'exclude' => 1,
			'label'   => 'LLL:EXT:podcast/Resources/Private/Language/locallang_db.xml:tx_podcast_domain_model_episode.itunesblock',
			'config' => Array (
				'type' => 'check',
				'default' => '0',
			)
		),
		'subtitle' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:podcast/Resources/Private/Language/locallang_db.xml:tx_podcast_domain_model_episode.subtitle',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'description' => array(
			'exclude' => 0,
			'label'	  => 'LLL:EXT:podcast/Resources/Private/Language/locallang_db.xml:tx_podcast_domain_model_episode.description',
			'config'  => array(
				'type' => 'text',
				'cols' => '45',	
				'rows' => '5',
				'eval' => 'required,trim',
				'max' => '1000',
			)
		),
		'file' => array(
			'exclude' => 0,
			'label'	  => 'LLL:EXT:podcast/Resources/Private/Language/locallang_db.xml:tx_podcast_domain_model_episode.file',
			/*'config' => array (
				'type' => 'group',
				'internal_type' => 'file',
				'allowed' => 'pdf,mp3,jpeg,jpg',	
				'max_size' => 100000,	
				'uploadfolder' => 'uploads/tx_podcast',
				'show_thumbs' => 1, 
				'size' => 1,	
				'minitems' => 0,
				'maxitems' => 1,
			)*/	   
			'config' => array (
				'type' => 'input',
				'size' => '43',
				'max' => '256',   
				'eval' => 'trim,required',
				'wizards' => array(
					'_PADDING' => 10, 
					'link' => array(
						'type' => 'popup',
						'title' => 'LLL:EXT:podcast/Resources/Private/Language/locallang_db.xml:tx_podcast_domain_model_episode.file',
						'icon' => 'link_popup.gif',
						'script' => 'browse_links.php?mode=wizard',
						'params' => array(
							'blindLinkOptions' => 'mail, page, spec, folder',
							'allowedExtensions' => 'mp3,m4a,mp4,pdf,mov,wmv',
						),
						'JSopenParams' => 'height=500,width=600,status=0,menubar=0,scrollbars=1'
					)
				)
			)
		),
		'image' => array(
			'exclude' => 0,
			'label'	  => 'LLL:EXT:podcast/Resources/Private/Language/locallang_db.xml:tx_podcast_domain_model_episode.image',
			'config' => array (
				'type' => 'group',
				'internal_type' => 'file',
				'allowed' => 'png,jpeg,jpg',	
				'max_size' => 4500, 
				'uploadfolder' => 'uploads/tx_podcast',
				'show_thumbs' => 1, 
				'size' => 1,	
				'minitems' => 0,
				'maxitems' => 1,
			)
		),
		'publication_date' => array(
			'exclude' => 0,
			'label'	  => 'LLL:EXT:podcast/Resources/Private/Language/locallang_db.xml:tx_podcast_domain_model_episode.publication_date',
			'config'  => array(
				'type' => 'input',
				'size' => 12,
				'max' => 10,
				'eval' => 'date,required',
				'checkbox' => '0',
				'default' => time(),
			)
		),
		'website' => array(
			'exclude' => 0,
			'label'	  => 'LLL:EXT:podcast/Resources/Private/Language/locallang_db.xml:tx_podcast_domain_model_episode.website',
			'config' => array(
				'type' => 'select',	 
				'size' => 2,
				'autoSizeMax' => 3,
				'maxitems' => 1,
				//'renderMode' => 'checkbox',
				'foreign_table' => 'tx_podcast_domain_model_website',
				'foreign_table_where' => 'AND tx_podcast_domain_model_website.pid=###CURRENT_PID###',
				'wizards' => array(
					 '_POSITION' => 'left',
					 '_PADDING' => 1,
					 '_VERTICAL' => 1,
					 'edit' => array(
						 'type' => 'popup',
						 'title' => 'Edit',
						 'script' => 'wizard_edit.php',
						 'icon' => 'edit2.gif',
						 'popup_onlyOpenIfSelected' => 1,
						 'JSopenParams' => 'height=650,width=650,status=0,menubar=0,scrollbars=1',
					 ),
					 'add' => array(
						 'type' => 'script',
						 'title' => 'Create New Website',
						 'icon' => 'add.gif',
						 'params' => array(
							 'table'=>'tx_podcast_domain_model_website',
							 'pid' => '###CURRENT_PID###',
							 'setValue' => 'prepend'
						 ),
						 'script' => 'wizard_add.php',
					 ),
				 ),
			),
		),
		'author' => array(
			'exclude' => 0,
			'label'	  => 'LLL:EXT:podcast/Resources/Private/Language/locallang_db.xml:tx_podcast_domain_model_episode.author',
			'config' => array(
				'type' => 'select',	 
				'size' => 2,
				'autoSizeMax' => 3,
				'foreign_table' => 'tx_podcast_domain_model_person',
				'foreign_table_where' => 'AND tx_podcast_domain_model_person.pid=###CURRENT_PID###',
				/*'items' => array(
						array('--none--', 0),
					),*/
				'wizards' => array(
					 '_POSITION' => 'left',
					 '_PADDING' => 1,
					 '_VERTICAL' => 1,
					 'edit' => array(
						 'type' => 'popup',
						 'title' => 'Edit',
						 'script' => 'wizard_edit.php',
						 'icon' => 'edit2.gif',
						 'popup_onlyOpenIfSelected' => 1,
						 'JSopenParams' => 'height=650,width=650,status=0,menubar=0,scrollbars=1',
					 ),
					 'add' => array(
						 'type' => 'script',
						 'title' => 'Create New Author',
						 'icon' => 'add.gif',
						 'params' => array(
							 'table'=>'tx_podcast_domain_model_person',
							 'pid' => '###CURRENT_PID###',
							 'setValue' => 'prepend'
						 ),
						 'script' => 'wizard_add.php',
					 ),
				 ),
			),
		),
		'keywords' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:podcast/Resources/Private/Language/locallang_db.xml:tx_podcast_domain_model_podcast.keywords',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_podcast_domain_model_keyword',
				'MM' => 'tx_podcast_episode_keyword_mm',
				'renderMode' => 'checkbox',
				'size' => 10,
				'autoSizeMax' => 30,
				'maxitems' => 9999,
				'multiple' => 0,
				'wizards' => array(
					 '_POSITION' => 'right',
					 '_PADDING' => 1,
					 '_VERTICAL' => 0,
					/*'edit' => array(
						'type' => 'popup',
						'title' => 'Edit',
						'script' => 'wizard_edit.php',
						'icon' => 'edit2.gif',
						'popup_onlyOpenIfSelected' => 1,
						'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
						),*/
					'add' => Array(
						'type' => 'script',
						'title' => 'Create new',
						'icon' => 'add.gif',
						'params' => array(
							'table' => 'tx_podcast_domain_model_keyword',
							'pid' => '###CURRENT_PID###',
							'setValue' => 'prepend'
							),
						'script' => 'wizard_add.php',
					),
				),
			),
		),
		'duration' => array(
			'exclude' => 0,
			'label'	  => 'LLL:EXT:podcast/Resources/Private/Language/locallang_db.xml:tx_podcast_domain_model_episode.duration',
			'config' => array (
				'type' => 'none',
				'cols' => 15,
				'rows' => 4,
				//'userFunc' => 'EXT:podcast/Classes/Domain/Model/Episode.php:tx_podcast_domain_model_episode->getDuration',
			)
		),
		'mime' => array(
			'exclude' => 0,
			'label'	  => 'LLL:EXT:podcast/Resources/Private/Language/locallang_db.xml:tx_podcast_domain_model_episode.mime',
			'config' => array (
				'type' => 'none',
				'cols' => 20,
				'rows' => 4,
				//'userFunc' => 'EXT:podcast/Classes/Domain/Model/Episode.php:tx_podcast_domain_model_episode->getMime',
			)
		),
		'altfiles' => array(
			'exclude' => 0,
			'label'	  => 'LLL:EXT:podcast/Resources/Private/Language/locallang_db.xml:tx_podcast_domain_model_episode.altfiles',
			'config' => array (
				'type' => 'none',
				'cols' => 20,
				'rows' => 4,
				//'userFunc' => 'EXT:podcast/Classes/Domain/Model/Episode.php:tx_podcast_domain_model_episode->getAltfiles',
			)
		),
		'podcast' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		), 
	),
);
?>