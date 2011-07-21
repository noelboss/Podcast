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
 * Podcast Categorie
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Tx_Podcast_Domain_Model_Category extends Tx_Extbase_DomainObject_AbstractValueObject {
	
	/**
	 * Title
	 * @var string
	 * @validate NotEmpty
	 */
	protected $title;
	
	/**
	 * subcategory
	 * @var Tx_Podcast_Domain_Model_Subcategory
	 */
	protected $subcategory;
	
	
	
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
	 * Setter for subcategory
	 *
	 * @param Tx_Podcast_Domain_Model_Subcategory $subcategory subcategory
	 * @return void
	 */
	public function setSubcategory(Tx_Podcast_Domain_Model_Subcategory $subcategory) {
		$this->subcategory = $subcategory;
	}

	/**
	 * Getter for subcategory
	 *
	 * @return Tx_Podcast_Domain_Model_Subcategory subcategory
	 */
	public function getSubcategory() {
		return $this->subcategory;
	}
	
}
?>