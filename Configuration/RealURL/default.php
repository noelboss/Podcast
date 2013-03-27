<?php

$TYPO3_CONF_VARS['EXTCONF']['realurl']['_DEFAULT']['postVarSets']['_DEFAULT']['podcast'] = array(
	array(
		'GETvar' => 'tx_podcast_display[action]',
	),
	array(
		'GETvar' => 'tx_podcast_display[podcast]',
		'lookUpTable' => array(
			 'table' => 'tx_podcast_domain_model_podcast',
			 'id_field' => 'uid',
			 'alias_field' => 'title',
			 'addWhereClause' => ' AND NOT deleted AND NOT hidden',
			 'useUniqueCache' => 1,
			 'useUniqueCache_conf' => array(
				 'strtolower' => 1,
				 'spaceCharacter' => '-',
			 ),
			 'enable404forInvalidAlias' => 1,
			 'autoUpdate' => 1, 
			 'expireDays' => 60,
		)
	),
);
$TYPO3_CONF_VARS['EXTCONF']['realurl']['_DEFAULT']['fileName']['defaultToHTMLsuffixOnPrev'] = 1;
$TYPO3_CONF_VARS['EXTCONF']['realurl']['_DEFAULT']['fileName']['index']['.xml'] = array(
	'keyValues' => array(
		'type' => 1289377,
	),
);

?>