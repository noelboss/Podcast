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
	 * Image
	 *
	 * @var string
	 */
	protected $image;

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
	 * altfiles
	 *
	 * @var string
	 */
	protected $altfiles;

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
	 * keywords
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Podcast_Domain_Model_Keyword>
	 */
	protected $keywords;

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
		$this->keywords = new Tx_Extbase_Persistence_ObjectStorage();
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
	 * set duration
	 *
	 * @param integer $duration
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
	 * Set the mime
	 *
	 * @param string $mime
	 */
	public function setMime($mime) {
		$this->mime = $mime;
	}



	/**
	 * Sets the mime
	 *
	 * @return void
	 */
	private function getFileMime($file) {
		$mime = '';
		$file = t3lib_div::getFileAbsFileName($file);
		if ($fp = fopen($file, 'rb')) {
			//This will set the Content-Type to the appropriate setting for the file 
			$fileinfo = pathinfo($file);
			$file_extension = strtolower($fileinfo['extension']);
			switch($file_extension) {	   
				case 'm4a': $mime='audio/x-m4a'; break;
				case 'mp4': $mime='video/mp4'; break;
				case 'm4v': $mime='video/x-m4v'; break;
				case 'webm': $mime='video/webm'; break;
				case 'mp3': $mime='audio/mpeg'; break;
				case 'mov': $mime='video/quicktime'; break;
				case 'pdf': $mime='application/pdf'; break;
				case 'epub':$mime='document/x-epub'; break;
				case 'mpg': $mime='video/mpeg'; break;
				case 'avi': $mime='video/x-msvideo'; break;
			}  
		}
		return $mime;
	}
	
	
	/**
	 * Sets the duration
	 *
	 * @param integer $duration
	 * @return void
	 */
	private function getFileDuration($file) {
		$duration = 0;
		$file = t3lib_div::getFileAbsFileName($file);
		if ($fp = fopen($file, 'rb')) {
			require_once('typo3conf/ext/podcast/Classes//Utilities/getid3/getid3.php');       

			// Initialize getID3 engine
			$getID3 = new getID3;
			$getID3->option_md5_data        = true;
			$getID3->option_md5_data_source = true;
			$getID3->encoding               = 'UTF-8';
		    print_r($getID3->info);
			$getID3->analyze($file);
			if (empty($getID3->info['error'])) {
				// Init wrapper object
				$result = array();
				$result['playing_time']    = (isset($getID3->info['playtime_seconds'])         ? $getID3->info['playtime_seconds']         : '');
				$duration= round($result['playing_time']);
				
			}
		}
		return $duration;
	}
	
	/**
	 * Returns the alternative files
	 *
	 * @return string $altfiles
	 */
	public function getAltfiles() {
		if(!$this->altfiles){
			$this->setAltfiles();
		}

		$all = explode('|',$this->altfiles);
		$altfiles = array();
		for ($i=0; $i < count($all); $i++) { 
			$file = explode(',',$all[$i]);
			$altfiles[$i]['name'] = $file[0];
			$altfiles[$i]['mime'] = $file[1];
			/*$altfiles[$i]['duration'] = $file[2];*/
		}

		return $altfiles; 
	}

	/**
	 * Sets the alternative files
	 *
	 * @return void
	 */
	public function setAltfiles() {
		$fileInfo = t3lib_div::split_fileref($this->file);

		/* get mime and duration from provided file */
		$this->setMime($this->getFileMime($this->file));
		$this->setDuration($this->getFileDuration($this->file));

		$altfiles = array();
		$altfiles[0] = $this->file.','.$this->mime/*.','.$this->duration*/;
		
		$basepath = $fileInfo['path'].$fileInfo['filebody'].'.*';
		$files = glob($basepath);
		/* search for other files */
		for ($i=0; $i < count($files); $i++) {
			if($files[$i] != $this->file){
				$altfiles[$i+1] =$files[$i].','.$this->getFileMime($files[$i])/*.','.$this->getFileDuration($files[$i])*/;
			}
		}
		$this->altfiles = implode('|',$altfiles);
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
              

	/**
	 * Adds a Keyword
	 *
	 * @param Tx_Podcast_Domain_Model_Keyword $keyword
	 * @return void
	 */
	public function addKeyword(Tx_Podcast_Domain_Model_Keyword $keyword) {
		$this->keywords->attach($keyword);
	}

	/**
	 * Removes a Keyword
	 *
	 * @param Tx_Podcast_Domain_Model_Keyword $keywordToRemove The Keyword to be removed
	 * @return void
	 */
	public function removeKeyword(Tx_Podcast_Domain_Model_Keyword $keywordToRemove) {
		$this->keywords->detach($keywordToRemove);
	}

	/**
	 * Returns the keywords
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_Podcast_Domain_Model_Keyword> $keywords
	 */
	public function getKeywords() {
		return $this->keywords;
	}

	/**
	 * Sets the keywords
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_Podcast_Domain_Model_Keyword> $keywords
	 * @return void
	 */
	public function setKeywords(Tx_Extbase_Persistence_ObjectStorage $keywords) {
		$this->keywords = $keywords;
	}
}
?>