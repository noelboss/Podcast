<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'Pi1',
	array(
		'Podcast' => 'index, show, new, create, edit, update, delete','Episode' => 'index, show, new, create, edit, update, delete','Category' => 'index, show, new, create, edit, update, delete','Person' => 'index, show, new, create, edit, update, delete','Website' => 'index, show, new, create, edit, update, delete','Subcategory' => 'index, show, new, create, edit, update, delete',
	),
	array(
		'Podcast' => 'create, update, delete','Episode' => 'create, update, delete','Category' => 'create, update, delete','Person' => 'create, update, delete','Website' => 'create, update, delete','Subcategory' => 'create, update, delete',
	)
);

?>