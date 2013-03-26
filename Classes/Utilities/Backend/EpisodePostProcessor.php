<?php

class Tx_Podcast_Utilities_EpisodePostProcessor {
	function processDatamap_postProcessFieldArray ($status, $table, $id, &$fieldArray, &$reference) {
		
		if ($status == 'update' && $table == 'tx_podcast_domain_model_episode') {
			$row = t3lib_BEfunc::getRecord($table, $id);
			
			// reset data, will be set anew when frontend is called
			if (is_array($row)) {
				$fieldArray['mime'] = '';
				$fieldArray['duration'] = '0';
				$fieldArray['altfiles'] = '';
			}
		}
	}
}

?>