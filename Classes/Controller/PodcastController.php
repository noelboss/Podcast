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
class Tx_Podcast_Controller_PodcastController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * podcastRepository
	 *
	 * @var Tx_Podcast_Domain_Repository_PodcastRepository
	 */
	protected $podcastRepository;

	/**
	 * injectPodcastRepository
	 *
	 * @param Tx_Podcast_Domain_Repository_PodcastRepository $podcastRepository
	 * @return void
	 */
	public function injectPodcastRepository(Tx_Podcast_Domain_Repository_PodcastRepository $podcastRepository) {
		$this->podcastRepository = $podcastRepository;
	}

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$podcasts = $this->podcastRepository->findAll();
		$this->view->assign('podcasts', $podcasts);
	}

	/**
	 * action new
	 *
	 * @param $newPodcast
	 * @dontvalidate $newPodcast
	 * @return void
	 */
	public function newAction(Tx_Podcast_Domain_Model_Podcast $newPodcast = NULL) {
		$this->view->assign('newPodcast', $newPodcast);
	}

	/**
	 * action create
	 *
	 * @param $newPodcast
	 * @return void
	 */
	public function createAction(Tx_Podcast_Domain_Model_Podcast $newPodcast) {
		$this->podcastRepository->add($newPodcast);
		$this->flashMessageContainer->add('Your new Podcast was created.');
		$this->redirect('list');
	}

	/**
	 * action show
	 *
	 * @param $podcast
	 * @return void
	 */
	public function showAction(Tx_Podcast_Domain_Model_Podcast $podcast) {
		$this->view->assign('podcast', $podcast);
	}

}
?>