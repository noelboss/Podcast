<?php

class Tx_Podcast_Utilities_EpisodePostProcessor {

	function processDatamap_postProcessFieldArray ($status, $table, $id, &$fieldArray, &$reference) {

		if ($status == 'update' && $table == 'tx_podcast_domain_model_episode') {
			$row = t3lib_BEfunc::getRecord($table, $id);
			if (is_array($row)) {
					
				//$readpath = t3lib_div::getFileAbsFileName('uploads/tx_nxdownloads/' . $row['file']); 
				$file = t3lib_div::getFileAbsFileName($row['file']);
				if ($fp = fopen($file, 'rb')) {
					//This will set the Content-Type to the appropriate setting for the file 
					if(!$row['mime']){    
						$fileinfo = pathinfo($file);
						$file_extension = strtolower($fileinfo['extension']);
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
							default:    $mime='';
						}  
						$fieldArray['mime'] = $mime;
					}

				
					//echo '<script type="text/javascript" charset="utf-8">alert("'.$a['Length'].'");</script>';      
				
	                if($row['duration'] < 1){    
						require_once('getid3/getid3.php');       
	
						// Initialize getID3 engine
						$getID3 = new getID3;
						$getID3->option_md5_data        = true;
						$getID3->option_md5_data_source = true;
						$getID3->encoding               = 'UTF-8';
					    print_r($getID3->info);
						$getID3->analyze($file);
						if (empty($getID3->info['error'])) {
                            
							// Init wrapper object
							$result = array();
							$result['playing_time']    = (isset($getID3->info['playtime_seconds'])         ? $getID3->info['playtime_seconds']         : '');

							$fieldArray['duration'] = round($result['playing_time']);
							
						}
					}    
				}
			}
		}
	}
}

?>