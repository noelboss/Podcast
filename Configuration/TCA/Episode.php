<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

$TCA['tx_podcast_domain_model_episode'] = array(
	'ctrl' => $TCA['tx_podcast_domain_model_episode']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'title,description,file,publication_date,duration,website,author'
	),
	'types' => array(
		'1' => array('showitem' => 'title,description,file,publication_date,duration,website,author')
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
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array(
				'type' => 'check'
			)
		),
		'title' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:podcast/Resources/Private/Language/locallang_db.xml:tx_podcast_domain_model_episode.title',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			)
		),
		'description' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:podcast/Resources/Private/Language/locallang_db.xml:tx_podcast_domain_model_episode.description',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			)
		),
		'file' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:podcast/Resources/Private/Language/locallang_db.xml:tx_podcast_domain_model_episode.file',
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
		'publication_date' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:podcast/Resources/Private/Language/locallang_db.xml:tx_podcast_domain_model_episode.publication_date',
			'config'  => array(
				'type' => 'input',
				'size' => 12,
				'max' => 10,
				'eval' => 'date,required',
				'checkbox' => '0',
				'default' => '0'
			)
		),
		'duration' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:podcast/Resources/Private/Language/locallang_db.xml:tx_podcast_domain_model_episode.duration',
			'config' => array (
                'type'     => 'input',
                'size'     => '12',
                'max'      => '20',
                'eval'     => 'timesec,required',
                'checkbox' => '0',
                'default'  => '0'
            )
		),
		'website' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:podcast/Resources/Private/Language/locallang_db.xml:tx_podcast_domain_model_episode.website',
			'config' => array(
				'type' => 'select',  
				'size' => 2,
				'autoSizeMax' => 3,
				'foreign_table' => 'tx_podcast_domain_model_website',
				'foreign_table_where' => 'AND tx_podcast_domain_model_website.pid=###CURRENT_PID###',
				'wizards' => array(
		             '_PADDING' => 1,
		             '_VERTICAL' => 0,
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
			'label'   => 'LLL:EXT:podcast/Resources/Private/Language/locallang_db.xml:tx_podcast_domain_model_episode.author',
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
		             '_PADDING' => 1,
		             '_VERTICAL' => 0,
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
		'podcast' => array(
			'config' => array(
				'type' => 'passthrough',
			)
		),
	),
);
?>