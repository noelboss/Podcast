<?php
$TYPO3_CONF_VARS['EXTCONF']['realurl']['_DEFAULT']['postVarSets']['_DEFAULT']['display'] = array(
	array(
		'GETvar' => 'tx_podcast_display[controller]',
		'valueMap' => array(
			'podcast' => 'Podcast',
		),
	),
	array(
		'GETvar' => 'tx_podcast_display[action]'
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
		)
	)
);		 

array_push($TYPO3_CONF_VARS['EXTCONF']['realurl']['_DEFAULT']['preVars'],	
	array(
		'GETvar' => 'type',
		'valueMap' => array(
			'xml' => '1289377328'
		),
		'noMatch' => 'bypass',
	) 
);

?>