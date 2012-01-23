<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2012 Noël Bossart <n dot company at me dot com>, noelboss.ch
 *  
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/


/**
 *
 *
 * @package podcast
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 *
 */
class Tx_Podcast_Controller_EpisodeController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$episodes = $this->episodeRepository->findAll();
		$this->view->assign('episodes', $episodes);
	}

	/**
	 * action show
	 *
	 * @param $episode
	 * @return void
	 */
	public function showAction(Tx_Podcast_Domain_Model_Episode $episode) {
		$this->view->assign('episode', $episode);
	}

	/**
	 * action new
	 *
	 * @param $newEpisode
	 * @dontvalidate $newEpisode
	 * @return void
	 */
	public function newAction(Tx_Podcast_Domain_Model_Episode $newEpisode = NULL) {
		$this->view->assign('newEpisode', $newEpisode);
	}

	/**
	 * action create
	 *
	 * @param $newEpisode
	 * @return void
	 */
	public function createAction(Tx_Podcast_Domain_Model_Episode $newEpisode) {
		$this->episodeRepository->add($newEpisode);
		$this->flashMessageContainer->add('Your new Episode was created.');
		$this->redirect('list');
	}

}
?>