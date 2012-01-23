<?php
require_once('mp3.php');

class Tx_Podcast_Utilities_EpisodePostProcessor {

	function processDatamap_postProcessFieldArray ($status, $table, $id, &$fieldArray, &$reference) {

		if ($status == 'update' && $table == 'tx_podcast_domain_model_episode') {
			$row = t3lib_BEfunc::getRecord($table, $id);
			if (is_array($row)) {
					
				//$readpath = t3lib_div::getFileAbsFileName('uploads/tx_nxdownloads/' . $row['file']); 
				$file = t3lib_div::getFileAbsFileName($row['file']);
				$fileinfo = pathinfo($file);
				$file_extension = strtolower($path_info['extension']); 
				
				//This will set the Content-Type to the appropriate setting for the file
				$mime='audio/mpeg';
				switch($file_extension) {	   
					case 'm4a': $mime='audio/x-m4a'; break;
					case 'mp4': $mime='video/mp4'; break;
					case 'm4v': $mime='video/x-m4v'; break;
					case 'mov': $mime='video/quicktime'; break;
					case 'pdf': $mime='application/pdf'; break;
					case 'epub':$mime='document/x-epub'; break;
					case 'mp3': $mime='audio/mpeg'; break;
					case 'mpg': $mime='video/mpeg'; break;
					case 'avi': $mime='video/x-msvideo'; break;
				}  
				$fieldArray['mime'] = $mime;
				
				//echo '<script type="text/javascript" charset="utf-8">alert("'.$a['Length'].'");</script>';
                            
				$m = new mp3file($file);
				$a = $m->get_metadata();
				if ($a['Length']) {
					$fieldArray['duration'] = $a['Length'];
				}       
				unset($a); 
				
			}
		}
	}
}

?>