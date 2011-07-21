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
 * Podcast Episode
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Tx_Podcast_Domain_Model_Episode extends Tx_Extbase_DomainObject_AbstractEntity {
	
	/**
	 * Title
	 * @var string
	 * @validate NotEmpty
	 */
	protected $title;
	
	/**
	 * Description
	 * @var string
	 * @validate NotEmpty
	 */
	protected $description;
	
	/**
	 * File
	 * @var string
	 * @validate NotEmpty
	 */
	protected $file;
	
	/**
	 * Publication Date
	 * @var integer
	 */
	protected $publicationDate;
	
	/**
	 * Duration
	 * @var integer
	 */
	protected $duration;
	
	/**
	 * website
	 * @var Tx_Podcast_Domain_Model_Website
	 */
	protected $website;
	
	/**
	 * author
	 * @var Tx_Podcast_Domain_Model_Person
	 */
	protected $author;
	
	
	
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
	 * Setter for file
	 *
	 * @param string $file File
	 * @return void
	 */
	public function setFile($file) {
		$this->file = $file;
	}

	/**
	 * Getter for file
	 *
	 * @return string File
	 */
	public function getFile() {
		return $this->file;
	} 
	
	/**
	 * Getter for File Size
	 *
	 * @return string File Size
	 */
	public function getFilesize() {
		return stat($this->getFile());
	}    
	
	
	/**
	 * Setter for publicationDate
	 *
	 * @param integer $publicationDate Publication Date
	 * @return void
	 */
	public function setPublicationDate($publicationDate) {
		$this->publicationDate = $publicationDate;
	}

	/**
	 * Getter for publicationDate
	 *
	 * @return integer Publication Date
	 */
	public function getPublicationDate() {
		return date('r', $this->publicationDate);
	}
	
	/**
	 * Setter for duration
	 *
	 * @param integer $duration Duration
	 * @return void
	 */
	public function setDuration($duration) {
		$this->duration = $duration;
	}

	/**
	 * Getter for duration
	 *
	 * @return integer Duration
	 */
	public function getDuration() {
		return date('r', $this->duration);
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
	
}
?>