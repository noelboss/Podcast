<?php

/***************************************************************
*  Copyright notice
*
*  (c) 2010 Noël Bossart <n dot company at me dot com>, noelboss.ch
*  			
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
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
 * This is a podcast
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Tx_Podcast_Domain_Model_Podcast extends Tx_Extbase_DomainObject_AbstractEntity {
	
	/**
	 * Title
	 * @var string
	 * @validate NotEmpty
	 */
	protected $title;
	
	/**
	 * Subtitle
	 * @var string
	 * @validate NotEmpty
	 */
	protected $subtitle;
	
	/**
	 * Description
	 * @var string
	 * @validate NotEmpty
	 */
	protected $description;
	
	/**
	 * Copyright
	 * @var string
	 */
	protected $copyright;
	
	/**
	 * Image
	 * @var string
	 */
	protected $image;
	
	/**
	 * episodes
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Podcast_Domain_Model_Episode>
	 */
	protected $episodes;
	
	/**
	 * category
	 * @var Tx_Podcast_Domain_Model_Category
	 */
	protected $categories;
	
	/**
	 * author
	 * @var Tx_Podcast_Domain_Model_Person
	 */
	protected $author;
	
	/**
	 * technicalContact
	 * @var Tx_Podcast_Domain_Model_Person
	 */
	protected $technicalContact;
	
	/**
	 * website
	 * @var Tx_Podcast_Domain_Model_Website
	 */
	protected $website;   
	
	/**
	 * iTunes
	 * @var string
	 */
	protected $itunes;
	
	/**
	 * Constructor. Initializes all Tx_Extbase_Persistence_ObjectStorage instances.
	 */
	public function __construct($title) {
		$this->episodes = new Tx_Extbase_Persistence_ObjectStorage();
		$this->setTitle($title);
	}
	
	/**
	 * Setter for title
	 *
	 * @param string $title Title
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * Getter for title
	 *
	 * @return string Title
	 */
	public function getTitle() {
		return $this->title;
	}
	
	/**
	 * Setter for subtitle
	 *
	 * @param string $subtitle Subtitle
	 * @return void
	 */
	public function setSubtitle($subtitle) {
		$this->subtitle = $subtitle;
	}

	/**
	 * Getter for subtitle
	 *
	 * @return string Subtitle
	 */
	public function getSubtitle() {
		return $this->subtitle;
	}
	
	/**
	 * Setter for description
	 *
	 * @param string $description Description
	 * @return void
	 */
	public function setDescription($description) {
		$this->description = $description;
	}

	/**
	 * Getter for description
	 *
	 * @return string Description
	 */
	public function getDescription() {
		return $this->description;
	}
	
	/**
	 * Setter for copyright
	 *
	 * @param string $copyright Copyright
	 * @return void
	 */
	public function setCopyright($copyright) {
		$this->copyright = $copyright;
	}

	/**
	 * Getter for copyright
	 *
	 * @return string Copyright
	 */
	public function getCopyright() {
		return str_replace('{year}', date('Y'), $this->copyright);
	}
	
	/**
	 * Setter for image
	 *
	 * @param string $image Image
	 * @return void
	 */
	public function setImage($image) {
		$this->image = $image;
	}

	/**
	 * Getter for image
	 *
	 * @return string Image
	 */
	public function getImage() {
		return $this->image;
	}
	
	/**
	 * Setter for episodes
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_Podcast_Domain_Model_Episode> $episodes episodes
	 * @return void
	 */
	public function setEpisodes(Tx_Extbase_Persistence_ObjectStorage $episodes) {
		$this->episodes = $episodes;
	}

	/**
	 * Getter for episodes
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_Podcast_Domain_Model_Episode> episodes
	 */
	public function getEpisodes() {
		return $this->episodes;
	}
	
	/**
	 * Adds a Episode
	 *
	 * @param Tx_Podcast_Domain_Model_Episode The Episode to be added
	 * @return void
	 */
	public function addEpisode(Tx_Podcast_Domain_Model_Episode $episode) {
		$this->episodes->attach($episode);
	}
	
	/**
	 * Removes a Episode
	 *
	 * @param Tx_Podcast_Domain_Model_Episode The Episode to be removed
	 * @return void
	 */
	public function removeEpisode(Tx_Podcast_Domain_Model_Episode $episode) {
		$this->episodes->detach($episode);
	}
	
	/**
	 * Setter for categories
	 *
	 * @param Tx_Podcast_Domain_Model_Category $categories categories
	 * @return void
	 */
	public function setCategories(Tx_Podcast_Domain_Model_Category $categories) {
		$this->category = $categories;
	}

	/**
	 * Getter for categories
	 *
	 * @return Tx_Podcast_Domain_Model_Category categories
	 */
	public function getCategories() {
		return $this->categories;
	}
	
	/**
	 * Setter for author
	 *
	 * @param Tx_Podcast_Domain_Model_Person $author author
	 * @return void
	 */
	public function setAuthor(Tx_Podcast_Domain_Model_Person $author) {
		$this->author = $author;
	}

	/**
	 * Getter for author
	 *
	 * @return Tx_Podcast_Domain_Model_Person author
	 */
	public function getAuthor() {
		return $this->author;
	}
	
	/**
	 * Setter for technicalContact
	 *
	 * @param Tx_Podcast_Domain_Model_Person $technicalContact technicalContact
	 * @return void
	 */
	public function setTechnicalContact(Tx_Podcast_Domain_Model_Person $technicalContact) {
		$this->technicalContact = $technicalContact;
	}

	/**
	 * Getter for technicalContact
	 *
	 * @return Tx_Podcast_Domain_Model_Person technicalContact
	 */
	public function getTechnicalContact() {
		return $this->technicalContact;
	}
	
	/**
	 * Setter for website
	 *
	 * @param Tx_Podcast_Domain_Model_Website $website website
	 * @return void
	 */
	public function setWebsite(Tx_Podcast_Domain_Model_Website $website) {
		$this->website = $website;
	}

	/**
	 * Getter for website
	 *
	 * @return Tx_Podcast_Domain_Model_Website website
	 */
	public function getWebsite() {
		return $this->website;
	}    
	
	/**
	 * Setter for iTunes
	 *
	 * @param boolean $itunes iTunes
	 * @return void
	 */
	public function setItunes($itunes) {
		$this->itunes = $itunes ? true : false;  
	}

	/**
	 * Getter for iTunes
	 *
	 * @return boolean iTunes
	 */
	public function getItunes() {
		return $this->itunes ? true : false;
	}
	
}
?>