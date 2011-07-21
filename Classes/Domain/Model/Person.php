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
 * Author or Technical Contact
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Tx_Podcast_Domain_Model_Person extends Tx_Extbase_DomainObject_AbstractEntity {
	
	/**
	 * Name
	 * @var string
	 * @validate NotEmpty
	 */
	protected $name;
	
	/**
	 * E-Mail
	 * @var string
	 * @validate NotEmpty
	 */
	protected $eMail;
	
	
	
	/**
	 * Setter for name
	 *
	 * @param string $name Name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * Getter for name
	 *
	 * @return string Name
	 */
	public function getName() {
		return $this->name;
	}
	
	/**
	 * Setter for eMail
	 *
	 * @param string $eMail E-Mail
	 * @return void
	 */
	public function setEMail($eMail) {
		$this->eMail = $eMail;
	}

	/**
	 * Getter for eMail
	 *
	 * @return string E-Mail
	 */
	public function getEMail() {
		return $this->eMail;
	}
	
}
?>