<?php

/*                                                                        *
 * This script belongs to the FLOW3 package "Fluid".                      *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU Lesser General Public License as published by the *
 * Free Software Foundation, either version 3 of the License, or (at your *
 * option) any later version.                                             *
 *                                                                        *
 * This script is distributed in the hope that it will be useful, but     *
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHAN-    *
 * TABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU Lesser       *
 * General Public License for more details.                               *
 *                                                                        *
 * You should have received a copy of the GNU Lesser General Public       *
 * License along with the script.                                         *
 * If not, see http://www.gnu.org/licenses/lgpl.html                      *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */

/**
 * Calculates Episode
 *
 *
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 * @api
 */               
class Tx_Podcast_ViewHelpers_EpisodeViewHelper extends Tx_Fluid_Core_ViewHelper_AbstractViewHelper {

	/**
	 * Iterates through elements of $each and renders child nodes
	 *
	 * @param integer $timestamp The Episode in seconds
	 * @api
	 */
	public function render($timestamp) {
		if(!$timestamp) {
			return '0';
		}

		/* Cleaver Maths! */
		$years=floor($timestamp/(60*60*24*365));$timestamp%=60*60*24*365;
		$weeks=floor($timestamp/(60*60*24*7));$timestamp%=60*60*24*7;
		$days=floor($timestamp/(60*60*24));$timestamp%=60*60*24;
		$hrs=floor($timestamp/(60*60));$timestamp%=60*60;
		$mins=floor($timestamp/60);
		$secs=$timestamp%60;

		/* Display for date, can be modified more to take the S off */
		if ($years >= 1) { $str.= $this->lz($years).':'; }
		if ($weeks >= 1) { $str.= $this->lz($weeks).':'; }
		if ($days >= 1) { $str.=$this->lz($days).':'; }
		if ($hrs >= 1) { $str.=$this->lz($hrs).':'; }
		if ($mins >= 1) { $str.=$this->lz($mins).':'; }
		if ($mins >= 1) { $str.=$this->lz($secs); }

		return $str;
	} 
	/**
	 * leading zeros
	 *
	 * @param integer $timestamp The Episode in seconds
	 * @return integer $timestamp with leading zeros
	 * @api
	 */
	private function lz($timestamp) {
		return str_pad($timestamp, 2, "0", STR_PAD_LEFT);
	}
}

?>