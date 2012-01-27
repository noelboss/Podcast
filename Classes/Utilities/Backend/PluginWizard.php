<?php

/**
 * Adds the Plugin Wizard to the Backend
 *
 * @author Noël Bossart
 */
class Tx_Podcast_Utilities_PluginWizard {

	/**
	 * Adds the podcast wizard icon
	 *
	 * @param	array		Input array with wizard items for plugins
	 * @return	array		Modified input array, having the item for Podcast Plugin added.
	 */
	function proc($wizardItems)	{
		return $wizardItems['plugins_tx_podcast_display'] = array(
			'icon'=>t3lib_extMgm::extRelPath('podcast').'Resources/Public/Icons/be_wizard.gif',
			'title'=>Tx_Extbase_Utility_Localization::translate("backend.wizard", "podcast", NULL),
			'description'=>Tx_Extbase_Utility_Localization::translate("backend.description", "podcast", NULL),
			'params'=>'&defVals[tt_content][CType]=list&defVals[tt_content][list_type]=podcast_display'
		);
	}
}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/podcast/Classes/Utilities/Backend/wizicon.php'])	{
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/podcast/Classes/Utilities/Backend/wizicon.php']);
}
?>