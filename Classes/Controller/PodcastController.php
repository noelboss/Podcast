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
	 * action show
	 *
	 * @param $podcast
	 * @return void
	 */
	public function showAction(Tx_Podcast_Domain_Model_Podcast $podcast = NULL) {
		if($this->settings['feed']){  
			$this->request->setFormat('xml');
			$lang = $this->settings['ll']['language'];
			$this->view->assign('language', $lang ? $lang : $GLOBALS['TSFE']->config['config']['htmlTag_langKey']);
		}
		if(!$podcast && $this->settings['podcast']){
			$podcast = $this->podcastRepository->findOneByUid($this->settings['podcast']);
		}
		$change = false;
		foreach ($podcast->getEpisodes() as $episode) {
			if($episode->getDuration() < 1){
				$change = true;
				$episode->getAltfiles();
			}
		}
		if($change){
			$persistenceManager = t3lib_div::makeInstance('Tx_Extbase_Persistence_Manager');
			$persistenceManager->persistAll();
		}
		//$this->view->assign('version', '0.3.9');
		$this->view->assign('podcast', $podcast);
	}
}
?>