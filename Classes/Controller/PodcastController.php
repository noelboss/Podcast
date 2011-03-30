<?php
class Tx_Podcast_Controller_PodcastController extends Tx_Extbase_MVC_Controller_ActionController {
	public function ViewAction(){
        $this->view->assign('Name', 'World');		
	}
}
?>