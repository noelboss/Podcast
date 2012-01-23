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
class Tx_Podcast_Controller_WebsiteController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * websiteRepository
	 *
	 * @var Tx_Podcast_Domain_Repository_WebsiteRepository
	 */
	protected $websiteRepository;

	/**
	 * injectWebsiteRepository
	 *
	 * @param Tx_Podcast_Domain_Repository_WebsiteRepository $websiteRepository
	 * @return void
	 */
	public function injectWebsiteRepository(Tx_Podcast_Domain_Repository_WebsiteRepository $websiteRepository) {
		$this->websiteRepository = $websiteRepository;
	}

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$websites = $this->websiteRepository->findAll();
		$this->view->assign('websites', $websites);
	}

	/**
	 * action show
	 *
	 * @param $website
	 * @return void
	 */
	public function showAction(Tx_Podcast_Domain_Model_Website $website) {
		$this->view->assign('website', $website);
	}

	/**
	 * action new
	 *
	 * @param $newWebsite
	 * @dontvalidate $newWebsite
	 * @return void
	 */
	public function newAction(Tx_Podcast_Domain_Model_Website $newWebsite = NULL) {
		$this->view->assign('newWebsite', $newWebsite);
	}

	/**
	 * action create
	 *
	 * @param $newWebsite
	 * @return void
	 */
	public function createAction(Tx_Podcast_Domain_Model_Website $newWebsite) {
		$this->websiteRepository->add($newWebsite);
		$this->flashMessageContainer->add('Your new Website was created.');
		$this->redirect('list');
	}

}
?>