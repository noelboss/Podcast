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
class Tx_Podcast_Domain_Model_Podcast extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * Title
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $title;

	/**
	 * Subtitle
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $subtitle;

	/**
	 * Description
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $description;

	/**
	 * Copyright
	 *
	 * @var string
	 */
	protected $copyright;

	/**
	 * Image
	 *
	 * @var string
	 */
	protected $image;

	/**
	 * iTunes optimized
	 *
	 * @var boolean
	 */
	protected $itunes;

	/**
	 * categories
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Podcast_Domain_Model_Category>
	 */
	protected $categories;

	/**
	 * episodes
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Podcast_Domain_Model_Episode>
	 */
	protected $episodes;

	/**
	 * author
	 *
	 * @var Tx_Podcast_Domain_Model_Person
	 */
	protected $author;

	/**
	 * technicalContact
	 *
	 * @var Tx_Podcast_Domain_Model_Person
	 */
	protected $technicalContact;

	/**
	 * website
	 *
	 * @var Tx_Podcast_Domain_Model_Website
	 */
	protected $website;

	/**
	 * __construct
	 *
	 * @return void
	 */
	public function __construct() {
		//Do not remove the next line: It would break the functionality
		$this->initStorageObjects();
	}

	/**
	 * Initializes all Tx_Extbase_Persistence_ObjectStorage properties.
	 *
	 * @return void
	 */
	protected function initStorageObjects() {
		/**
		 * Do not modify this method!
		 * It will be rewritten on each save in the extension builder
		 * You may modify the constructor of this class instead
		 */
		$this->categories = new Tx_Extbase_Persistence_ObjectStorage();
		
		$this->episodes = new Tx_Extbase_Persistence_ObjectStorage();
	}

	/**
	 * Returns the title
	 *
	 * @return string $title
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Sets the title
	 *
	 * @param string $title
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * Returns the subtitle
	 *
	 * @return string $subtitle
	 */
	public function getSubtitle() {
		return $this->subtitle;
	}

	/**
	 * Sets the subtitle
	 *
	 * @param string $subtitle
	 * @return void
	 */
	public function setSubtitle($subtitle) {
		$this->subtitle = $subtitle;
	}

	/**
	 * Returns the description
	 *
	 * @return string $description
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Sets the description
	 *
	 * @param string $description
	 * @return void
	 */
	public function setDescription($description) {
		$this->description = $description;
	}

	/**
	 * Returns the copyright
	 *
	 * @return string $copyright
	 */
	public function getCopyright() {
		return str_replace('{year}', date('Y'), $this->copyright);
	}

	/**
	 * Sets the copyright
	 *
	 * @param string $copyright
	 * @return void
	 */
	public function setCopyright($copyright) {
		$this->copyright = $copyright;
	}

	/**
	 * Returns the image
	 *
	 * @return string $image
	 */
	public function getImage() {
		return $this->image;
	}

	/**
	 * Sets the image
	 *
	 * @param string $image
	 * @return void
	 */
	public function setImage($image) {
		$this->image = $image;
	}

	/**
	 * Returns the itunes
	 *
	 * @return boolean $itunes
	 */
	public function getItunes() {
		return $this->itunes;
	}

	/**
	 * Sets the itunes
	 *
	 * @param boolean $itunes
	 * @return void
	 */
	public function setItunes($itunes) {
		$this->itunes = $itunes;
	}

	/**
	 * Returns the boolean state of itunes
	 *
	 * @return boolean
	 */
	public function isItunes() {
		return $this->getItunes();
	}

	/**
	 * Adds a Category
	 *
	 * @param Tx_Podcast_Domain_Model_Category $category
	 * @return void
	 */
	public function addCategory(Tx_Podcast_Domain_Model_Category $category) {
		$this->categories->attach($category);
	}

	/**
	 * Removes a Category
	 *
	 * @param Tx_Podcast_Domain_Model_Category $categoryToRemove The Category to be removed
	 * @return void
	 */
	public function removeCategory(Tx_Podcast_Domain_Model_Category $categoryToRemove) {
		$this->categories->detach($categoryToRemove);
	}

	/**
	 * Returns the categories
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_Podcast_Domain_Model_Category> $categories
	 */
	public function getCategories() {
		return $this->categories;
	}

	/**
	 * Sets the categories
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_Podcast_Domain_Model_Category> $categories
	 * @return void
	 */
	public function setCategories(Tx_Extbase_Persistence_ObjectStorage $categories) {
		$this->categories = $categories;
	}

	/**
	 * Adds a Episode
	 *
	 * @param Tx_Podcast_Domain_Model_Episode $episode
	 * @return void
	 */
	public function addEpisode(Tx_Podcast_Domain_Model_Episode $episode) {
		$this->episodes->attach($episode);
	}

	/**
	 * Removes a Episode
	 *
	 * @param Tx_Podcast_Domain_Model_Episode $episodeToRemove The Episode to be removed
	 * @return void
	 */
	public function removeEpisode(Tx_Podcast_Domain_Model_Episode $episodeToRemove) {
		$this->episodes->detach($episodeToRemove);
	}

	/**
	 * Returns the episodes
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_Podcast_Domain_Model_Episode> $episodes
	 */
	public function getEpisodes() {
		return $this->episodes;
	}

	/**
	 * Sets the episodes
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_Podcast_Domain_Model_Episode> $episodes
	 * @return void
	 */
	public function setEpisodes(Tx_Extbase_Persistence_ObjectStorage $episodes) {
		$this->episodes = $episodes;
	}

	/**
	 * Returns the author
	 *
	 * @return Tx_Podcast_Domain_Model_Person $author
	 */
	public function getAuthor() {
		return $this->author;
	}

	/**
	 * Sets the author
	 *
	 * @param Tx_Podcast_Domain_Model_Person $author
	 * @return void
	 */
	public function setAuthor(Tx_Podcast_Domain_Model_Person $author) {
		$this->author = $author;
	}

	/**
	 * Returns the technicalContact
	 *
	 * @return Tx_Podcast_Domain_Model_Person $technicalContact
	 */
	public function getTechnicalContact() {
		return $this->technicalContact;
	}

	/**
	 * Sets the technicalContact
	 *
	 * @param Tx_Podcast_Domain_Model_Person $technicalContact
	 * @return void
	 */
	public function setTechnicalContact(Tx_Podcast_Domain_Model_Person $technicalContact) {
		$this->technicalContact = $technicalContact;
	}

	/**
	 * Returns the website
	 *
	 * @return Tx_Podcast_Domain_Model_Website $website
	 */
	public function getWebsite() {
		return $this->website;
	}

	/**
	 * Sets the website
	 *
	 * @param Tx_Podcast_Domain_Model_Website $website
	 * @return void
	 */
	public function setWebsite(Tx_Podcast_Domain_Model_Website $website) {
		$this->website = $website;
	}

}
?>