<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::registerPlugin(
	$_EXTKEY,
	'Display',
	'Display Podcasts'
);

//$pluginSignature = str_replace('_','',$_EXTKEY) . '_' . display;
//$TCA['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
//t3lib_extMgm::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_' .display. '.xml');


t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Podcast');


t3lib_extMgm::addLLrefForTCAdescr('tx_podcast_domain_model_podcast', 'EXT:podcast/Resources/Private/Language/locallang_csh_tx_podcast_domain_model_podcast.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_podcast_domain_model_podcast');
$TCA['tx_podcast_domain_model_podcast'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:podcast/Resources/Private/Language/locallang_db.xml:tx_podcast_domain_model_podcast',
		'label' => 'title',
		'sortby' => 'title',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Podcast.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_podcast_domain_model_podcast.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_podcast_domain_model_episode', 'EXT:podcast/Resources/Private/Language/locallang_csh_tx_podcast_domain_model_episode.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_podcast_domain_model_episode');
$TCA['tx_podcast_domain_model_episode'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:podcast/Resources/Private/Language/locallang_db.xml:tx_podcast_domain_model_episode',
		'label' => 'title',
		'label_alt' => 'publication_date',
		'label_alt_force' => true,
		'default_sortby' => 'ORDER BY publication_date DESC',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Episode.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_podcast_domain_model_episode.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_podcast_domain_model_category', 'EXT:podcast/Resources/Private/Language/locallang_csh_tx_podcast_domain_model_category.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_podcast_domain_model_category');
$TCA['tx_podcast_domain_model_category'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:podcast/Resources/Private/Language/locallang_db.xml:tx_podcast_domain_model_category',
		'label' => 'title',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Category.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_podcast_domain_model_category.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_podcast_domain_model_person', 'EXT:podcast/Resources/Private/Language/locallang_csh_tx_podcast_domain_model_person.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_podcast_domain_model_person');
$TCA['tx_podcast_domain_model_person'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:podcast/Resources/Private/Language/locallang_db.xml:tx_podcast_domain_model_person',
		'label' => 'name',         
		'label_alt' => 'email',
		'label_alt_force' => true,
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Person.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_podcast_domain_model_person.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_podcast_domain_model_website', 'EXT:podcast/Resources/Private/Language/locallang_csh_tx_podcast_domain_model_website.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_podcast_domain_model_website');
$TCA['tx_podcast_domain_model_website'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:podcast/Resources/Private/Language/locallang_db.xml:tx_podcast_domain_model_website',
		'label' => 'title',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Website.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_podcast_domain_model_website.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_podcast_domain_model_keyword', 'EXT:podcast/Resources/Private/Language/locallang_csh_tx_podcast_domain_model_keyword.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_podcast_domain_model_keyword');
$TCA['tx_podcast_domain_model_keyword'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:podcast/Resources/Private/Language/locallang_db.xml:tx_podcast_domain_model_keyword',
		'label' => 'title',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Keyword.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_podcast_domain_model_keyword.gif'
	),
);      

if (TYPO3_MODE == 'BE') {  
	// Add Wizard Icon
	$TBE_MODULES_EXT['xMOD_db_new_content_el']['addElClasses']['Tx_Podcast_Utilities_PluginWizard'] = t3lib_extMgm::extPath($_EXTKEY).'Classes/Utilities/Backend/PluginWizard.php';
	 
	// Add tables on Pages:
	$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['cms']['db_layout']['addTables']['tx_podcast_domain_model_podcast'][0]['fList'] = 'uid,title,subtitle';
	$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['cms']['db_layout']['addTables']['tx_podcast_domain_model_podcast'][0]['icon'] = TRUE;
	$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['cms']['db_layout']['addTables']['tx_podcast_domain_model_episode'][0]['fList'] = 'uid,publication_date,title,subtitle,mime';
	$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['cms']['db_layout']['addTables']['tx_podcast_domain_model_episode'][0]['icon'] = TRUE;
}

?>