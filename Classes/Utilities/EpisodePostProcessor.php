<?php

class Tx_Podcast_Utilities_EpisodePostProcessor {

    function processDatamap_postProcessFieldArray ($status, $table, $id, &$fieldArray, &$reference) {

        if ($status == 'update' && $table == 'tx_podcast_domain_model_episode') {
            $row = t3lib_BEfunc::getRecord($table, $id);
            if (is_array($row)) {
                    
                //$readpath = t3lib_div::getFileAbsFileName('uploads/tx_nxdownloads/' . $row['file']);

                 $fieldArray['duration'] = 60;
              
            }
        }
    }

}
                

?>