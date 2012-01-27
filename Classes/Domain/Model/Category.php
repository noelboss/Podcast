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
class Tx_Podcast_Domain_Model_Category extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * Title
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $title;

	/**
	 * Sub Categories
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Podcast_Domain_Model_Category> $subcategory
	 */
	protected $subcategory;

	/**
	 * Parent Categories
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Podcast_Domain_Model_Category> $parentcategory
	 */
	protected $parentcategory;

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
		$this->subcategory = new Tx_Extbase_Persistence_ObjectStorage();
		$this->parentcategory = new Tx_Extbase_Persistence_ObjectStorage();
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
	 * Adds a Category
	 *
	 * @param Tx_Podcast_Domain_Model_Category $subcategory
	 * @return void
	 */
	public function addSubcategory(Tx_Podcast_Domain_Model_Category $subcategory) {
		$this->subcategory->attach($subcategory);
	}

	/**
	 * Removes a Category
	 *
	 * @param Tx_Podcast_Domain_Model_Category $subcategoryToRemove The Category to be removed
	 * @return void
	 */
	public function removeSubcategory(Tx_Podcast_Domain_Model_Category $subcategoryToRemove) {
		$this->subcategory->detach($subcategoryToRemove);
	}

	/**
	 * Returns the subcategory
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_Podcast_Domain_Model_Category> $subcategory
	 */
	public function getSubcategory() {
		return $this->subcategory;
	}

	/**
	 * Sets the subcategory
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_Podcast_Domain_Model_Category> $subcategory
	 * @return void
	 */
	public function setSubcategory($subcategory) {
		$this->subcategory = $subcategory;
	}

	/**
	 * Adds a Category
	 *
	 * @param Tx_Podcast_Domain_Model_Category $parentcategory
	 * @return void
	 */
	public function addParentcategory(Tx_Podcast_Domain_Model_Category $parentcategory) {
		$this->parentcategory->attach($parentcategory);
	}

	/**
	 * Removes a Category
	 *
	 * @param Tx_Podcast_Domain_Model_Category $parentcategoryToRemove The Category to be removed
	 * @return void
	 */
	public function removeParentcategory(Tx_Podcast_Domain_Model_Category $parentcategoryToRemove) {
		$this->parentcategory->detach($parentcategoryToRemove);
	}

	/**
	 * Returns the parentcategory
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_Podcast_Domain_Model_Category> $parentcategory
	 */
	public function getParentcategory() {
		return $this->parentcategory;
	}

	/**
	 * Sets the parentcategory
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_Podcast_Domain_Model_Category> $parentcategory
	 * @return void
	 */
	public function setParentcategory($parentcategory) {
		$this->parentcategory = $parentcategory;
	}
	
}
?>