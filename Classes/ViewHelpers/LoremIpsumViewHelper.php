<?php

/**
 * This class is a demo view helper for the Fluid templating engine.
 *
 * @package TYPO3
 * @subpackage Fluid
 * @version
 */
class Tx_Podcast_ViewHelpers_LoremIpsumViewHelper extends Tx_Fluid_Core_ViewHelper_AbstractViewHelper {

    /**
     * Renders some classic dummy content: Lorem Ipsum...
     *
     * @param int $lenght The number of characters of the dummy content
     * @validate $lenght IntegerValidator
     * @return string dummy content, cropped after the given number of characters
     * @author Lorem Ipsum <lorem@example.com>
     */
    public function render($lenght) {
        $dummyContent = 'Lorem ipsum dolor sit amet.';
        return substr($dummyContent, 0, $lenght);
    }
}

?>