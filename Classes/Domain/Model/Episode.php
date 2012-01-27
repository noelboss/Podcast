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
class Tx_Podcast_Domain_Model_Episode extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * Title
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $title;
	
	
	/**
	 * Blocked on iTunes
	 *
	 * @var boolean
	 */
	protected $itunesblock;

	/**
	 * Subtitle
	 *
	 * @var string
	 */
	protected $subtitle;

	/**
	 * Summary
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $description;

	/**
	 * File
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $file;

	/**
	 * Publication Date
	 *
	 * @var DateTime
	 */
	protected $publicationDate;

	/**
	 * Duration
	 *
	 * @var integer
	 */
	protected $duration;

	/**
	 * mime
	 *
	 * @var string
	 */
	protected $mime;

	/**
	 * website
	 *
	 * @var Tx_Podcast_Domain_Model_Website
	 */
	protected $website;

	/**
	 * author
	 *
	 * @var Tx_Podcast_Domain_Model_Person
	 */
	protected $author;

	/**
	 * __construct
	 *
	 * @return void
	 */
	public function __construct() {

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
	 * Returns the itunesblock
	 *
	 * @return boolean $itunesblock
	 */
	public function getItunesblock() {
		return $this->itunesblock;
	}

	/**
	 * Sets the itunesblock
	 *
	 * @param boolean $itunesblock
	 * @return void
	 */
	public function setItunesblock($itunesblock) {
		$this->itunesblock = $itunesblock;
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
	 * Returns the file
	 *
	 * @return string $file
	 */
	public function getFile() {
		return $this->file;
	}

	/**
	 * Sets the file
	 *
	 * @param string $file
	 * @return void
	 */
	public function setFile($file) {
		$this->file = $file;
	}

	/**
	 * Returns the publicationDate
	 *
	 * @return DateTime $publicationDate
	 */
	public function getPublicationDate() {
		return $this->publicationDate;
	}

	/**
	 * Sets the publicationDate
	 *
	 * @param DateTime $publicationDate
	 * @return void
	 */
	public function setPublicationDate($publicationDate) {
		$this->publicationDate = $publicationDate;
	}

	/**
	 * Returns the duration
	 *
	 * @return integer $duration
	 */
	public function getDuration() {
		return $this->duration;
	}

	/**
	 * Sets the duration
	 *
	 * @param integer $duration
	 * @return void
	 */
	public function setDuration($duration) {
		$this->duration = $duration;
	}

	/**
	 * Returns the mime
	 *
	 * @return string $mime
	 */
	public function getMime() {
		return $this->mime;
	}

	/**
	 * Sets the mime
	 *
	 * @param string $mime
	 * @return void
	 */
	public function setMime($mime) {
		$this->mime = $mime;
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

}
?>