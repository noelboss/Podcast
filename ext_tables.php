<?php
if (!defined ('TYPO3_MODE')) die ('Access denied.');

Tx_Extbase_Utility_Extension::registerPlugin(
	$_EXTKEY,
	'Pi1',
	'Podcast'
);

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Podcast');

//$TCA['tt_content']['types']['list']['subtypes_addlist'][$_EXTKEY . '_pi1'] = 'pi_flexform';
//t3lib_extMgm::addPiFlexFormValue($_EXTKEY . '_pi1', 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_list.xml');


t3lib_extMgm::addLLrefForTCAdescr('tx_podcast_domain_model_podcast', 'EXT:podcast/Resources/Private/Language/locallang_csh_tx_podcast_domain_model_podcast.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_podcast_domain_model_podcast');
$TCA['tx_podcast_domain_model_podcast'] = array (
	'ctrl' => array (
		'title'             => 'LLL:EXT:podcast/Resources/Private/Language/locallang_db.xml:tx_podcast_domain_model_podcast',
		'label' 			=> 'title',
		'tstamp' 			=> 'tstamp',
		'crdate' 			=> 'crdate',
		'versioningWS' 		=> 2,
		'versioning_followPages'	=> TRUE, 
		'dividers2tabs' 	=> '1',
		'origUid' 			=> 't3_origuid',
		'languageField' 	=> 'sys_language_uid',
		'transOrigPointerField' 	=> 'l18n_parent',
		'transOrigDiffSourceField' 	=> 'l18n_diffsource',
		'delete' 			=> 'deleted',
		'enablecolumns' 	=> array(
			'disabled' => 'hidden'
			),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Podcast.php',
		'iconfile' 			=> t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_podcast_domain_model_podcast.gif'
	)
);

t3lib_extMgm::addLLrefForTCAdescr('tx_podcast_domain_model_episode', 'EXT:podcast/Resources/Private/Language/locallang_csh_tx_podcast_domain_model_episode.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_podcast_domain_model_episode');
$TCA['tx_podcast_domain_model_episode'] = array (
	'ctrl' => array (
		'title'             => 'LLL:EXT:podcast/Resources/Private/Language/locallang_db.xml:tx_podcast_domain_model_episode',
		'label' 			=> 'title',
		'tstamp' 			=> 'tstamp',
		'crdate' 			=> 'crdate',
		'versioningWS' 		=> 2,
		'versioning_followPages'	=> TRUE,
		'origUid' 			=> 't3_origuid',
		'languageField' 	=> 'sys_language_uid',
		'transOrigPointerField' 	=> 'l18n_parent',
		'transOrigDiffSourceField' 	=> 'l18n_diffsource',
		'delete' 			=> 'deleted',
		'enablecolumns' 	=> array(
			'disabled' => 'hidden'
			),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Episode.php',
		'iconfile' 			=> t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_podcast_domain_model_episode.gif'
	)
);

t3lib_extMgm::addLLrefForTCAdescr('tx_podcast_domain_model_category', 'EXT:podcast/Resources/Private/Language/locallang_csh_tx_podcast_domain_model_category.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_podcast_domain_model_category');
$TCA['tx_podcast_domain_model_category'] = array (
	'ctrl' => array (
		'title'             => 'LLL:EXT:podcast/Resources/Private/Language/locallang_db.xml:tx_podcast_domain_model_category',
		'label' 			=> 'title',
		'tstamp' 			=> 'tstamp',
		'crdate' 			=> 'crdate',
		'versioningWS' 		=> 2,
		'versioning_followPages'	=> TRUE,
		'origUid' 			=> 't3_origuid',
		'languageField' 	=> 'sys_language_uid',
		'transOrigPointerField' 	=> 'l18n_parent',
		'transOrigDiffSourceField' 	=> 'l18n_diffsource',
		'delete' 			=> 'deleted',
		'enablecolumns' 	=> array(
			'disabled' => 'hidden'
			),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Category.php',
		'iconfile' 			=> t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_podcast_domain_model_category.gif'
	)
);

t3lib_extMgm::addLLrefForTCAdescr('tx_podcast_domain_model_person', 'EXT:podcast/Resources/Private/Language/locallang_csh_tx_podcast_domain_model_person.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_podcast_domain_model_person');
$TCA['tx_podcast_domain_model_person'] = array (
	'ctrl' => array (
		'title'             => 'LLL:EXT:podcast/Resources/Private/Language/locallang_db.xml:tx_podcast_domain_model_person',
		'label' 			=> 'name',
		'tstamp' 			=> 'tstamp',
		'crdate' 			=> 'crdate',
		'versioningWS' 		=> 2,
		'versioning_followPages'	=> TRUE,
		'origUid' 			=> 't3_origuid',
		'languageField' 	=> 'sys_language_uid',
		'transOrigPointerField' 	=> 'l18n_parent',
		'transOrigDiffSourceField' 	=> 'l18n_diffsource',
		'delete' 			=> 'deleted',
		'enablecolumns' 	=> array(
			'disabled' => 'hidden'
			),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Person.php',
		'iconfile' 			=> t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_podcast_domain_model_person.gif'
	)
);

t3lib_extMgm::addLLrefForTCAdescr('tx_podcast_domain_model_website', 'EXT:podcast/Resources/Private/Language/locallang_csh_tx_podcast_domain_model_website.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_podcast_domain_model_website');
$TCA['tx_podcast_domain_model_website'] = array (
	'ctrl' => array (
		'title'             => 'LLL:EXT:podcast/Resources/Private/Language/locallang_db.xml:tx_podcast_domain_model_website',
		'label' 			=> 'title',
		'tstamp' 			=> 'tstamp',
		'crdate' 			=> 'crdate',
		'versioningWS' 		=> 2,
		'versioning_followPages'	=> TRUE,
		'origUid' 			=> 't3_origuid',
		'languageField' 	=> 'sys_language_uid',
		'transOrigPointerField' 	=> 'l18n_parent',
		'transOrigDiffSourceField' 	=> 'l18n_diffsource',
		'delete' 			=> 'deleted',
		'enablecolumns' 	=> array(
			'disabled' => 'hidden'
			),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Website.php',
		'iconfile' 			=> t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_podcast_domain_model_website.gif'
	)
);

t3lib_extMgm::addLLrefForTCAdescr('tx_podcast_domain_model_subcategory', 'EXT:podcast/Resources/Private/Language/locallang_csh_tx_podcast_domain_model_subcategory.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_podcast_domain_model_subcategory');
$TCA['tx_podcast_domain_model_subcategory'] = array (
	'ctrl' => array (
		'title'             => 'LLL:EXT:podcast/Resources/Private/Language/locallang_db.xml:tx_podcast_domain_model_subcategory',
		'label' 			=> 'title',
		'tstamp' 			=> 'tstamp',
		'crdate' 			=> 'crdate',
		'versioningWS' 		=> 2,
		'versioning_followPages'	=> TRUE,
		'origUid' 			=> 't3_origuid',
		'languageField' 	=> 'sys_language_uid',
		'transOrigPointerField' 	=> 'l18n_parent',
		'transOrigDiffSourceField' 	=> 'l18n_diffsource',
		'delete' 			=> 'deleted',
		'enablecolumns' 	=> array(
			'disabled' => 'hidden'
			),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Subcategory.php',
		'iconfile' 			=> t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_podcast_domain_model_subcategory.gif'
	)
);

?>