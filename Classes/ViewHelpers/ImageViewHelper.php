<?php

/* * *************************************************************
 *	Copyright notice
 *
 *	(c) 2011 Noel Bossart <noel.bossart@namics.com>
 *	All rights reserved
 *
 *	This script is part of the TYPO3 project. The TYPO3 project is
 *	free software; you can redistribute it and/or modify
 *	it under the terms of the GNU General Public License as published by
 *	the Free Software Foundation; either version 2 of the License, or
 *	(at your option) any later version.
 *
 *	The GNU General Public License can be found at
 *	http://www.gnu.org/copyleft/gpl.html.
 *
 *	This script is distributed in the hope that it will be useful,
 *	but WITHOUT ANY WARRANTY; without even the implied warranty of
 *	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *	GNU General Public License for more details.
 *
 *	This copyright notice MUST APPEAR in all copies of the script!
 * ************************************************************* */

/**
 * View helper for rendering contraints.
 */
class Tx_Podcast_ViewHelpers_ImageViewHelper extends Tx_Fluid_ViewHelpers_ImageViewHelper {

	/**
	 * Render an image from the upload folder of the Podcast extension
	 *
	 * @param string $src
	 * @param string $width width of the image. This can be a numeric value representing the fixed width of the image in pixels. But you can also perform simple calculations by adding "m" or "c" to the value. See imgResource.width for possible options.
	 * @param string $height height of the image. This can be a numeric value representing the fixed height of the image in pixels. But you can also perform simple calculations by adding "m" or "c" to the value. See imgResource.width for possible options.
	 * @param integer $minWidth minimum width of the image
	 * @param integer $minHeight minimum height of the image
	 * @param integer $maxWidth maximum width of the image
	 * @param integer $maxHeight maximum height of the image
	 * @param integer $maxImages if multiple images, maximum of images
	 * @param string $wrap tag to wrap the image
	 * @param boolean $absolute render absolute urls
	 *
	 * @return string rendered tag.
	 * @author Noel Bossart <noel.bossart@namics.com>
	 */
	public function render($src, $width = NULL, $height = NULL, $minWidth = NULL, $minHeight = NULL, $maxWidth = NULL, $maxHeight = NULL, $maxImages = NULL, $wrap = NULL, $absolute = NULL) {
		if(!$src) return;
		$srcs = explode(",", $src);
		if(is_array($srcs)){ // multiple images	  
			$code = '';			
			$max = $maxImages ? $maxImages : count($srcs);
			for ($i = 0; $i < $max; $i++) { 
				if(file_exists($srcs[$i])){ 
					$image_src = $srcs[$i]; 
				}
				else if(file_exists("uploads/tx_podcast/" . $srcs[$i])){ 
					$image_src = "uploads/tx_podcast/" . $srcs[$i]; 
				} 
				else if(file_exists($image_src = "uploads/tx_podcast/" . $srcs[$i])){
					$image_src = "uploads/tx_podcast/" . $srcs[$i]; 
				} else {
					$image_src = false;
				}
				if($image_src){
					$tempImage =  parent::render($image_src, $width, $height, $minWidth, $minHeight, $maxWidth, $maxHeight, '');
					if ($wrap) {
						$tempImage = "<".$wrap.">".$tempImage."</".$wrap.">";
					}
					$code .= $tempImage;
				}

			}
		} else { // single images
			if(file_exists($src)){ 
				$image_src = $src; 
			}
			else if(file_exists("uploads/tx_podcast/" . $src)){ 
				$image_src = "uploads/tx_podcast/" . $src; 
			} 
			else if(file_exists($image_src ="uploads/tx_podcast/". $src)){
				$image_src = "uploads/tx_podcast/" . $src; 
			} else {
				$image_src = false;
			}
			if($image_src){
				$code =	 parent::render($image_src,$width, $height, $minWidth, $minHeight, $maxWidth, $maxHeight, '');
				if ($wrap) {
					$code = "<".$wrap.">".$code."</".$wrap.">";
				}
			}
		}
		if($absolute){
			$code = str_replace('src="', 'src="http://'.$_SERVER['SERVER_NAME'].'/', $code);
		}
		return $code;
	}

}

?>