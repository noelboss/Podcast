#Podcast for TYPO3 is a new extension for the popular OpenSource CMS Typo3. 
It makes creating and managing Podcasts a breeze.

* Visit the Documentation Page: http://noelboss.github.com/Podcast/
* or pull the Code: git@github.com:noelboss/Podcast.git

##Simple to use
Podcast works out of the box. No configuration needed. After just 4 simple steps your TYPO3 is ready to create Podcast Feeds and display them to your users.

##HTML5 video and audio
Podcast for TYPO3 not only creates your feeds, it also displays your Podcasts for users of your Website – using the fancy new HTML5 video and audio tags so your users can listen to your podcast and view your videos directly on your site. For older browsers, a player with flash and silverlight is included.

##It just works – in aplha mode ;)
Podcast generates your XML on the fly – no need to manually generate the XML after every change you make. It supports iTunes specific tags and works with RealURL out of the box (cooluri example configuration included), creating nice URLs for your feeds and pages.

##Featurerich
Create more than one Podcast, use episodes, authors and other settings for multiple Podcasts. Podcast analyses your media and automatically detects video and audio formats and duration of your content.

##Installation & Usage
1. Install the extension from TER
2. Add the static TypoScript template to your template
3. Create a record of the type Podcast on a page or a sysfolder
4. Add an episode to the record (Make sure it's checked in the Podcast select list)
5. Add the Podcast plugin on any page or the page you created the podcast
6. Enjoy your Podcast.

##Adjusting the HTML and XML templates
If the extension does not look or behave as you want it to, you can always change the templates copying the default templates under "Resources/Private" and adjusting the values for the tempalte paths in the typoscript constants.

#Update to 0.5
The update to 0.5 introduces new URL's and a new plugin configuration. In order to update to 0.5 you need to do the following

* Make sure the Database is up to date (deactivating and activating the extension will do the job)
* Open the podcast plugin in the backend and set the "Default action of the plugin" to a correct value (recommended: dynamic)
* Update the information in your iTunes Account to refflect the new feed URL

#Changelog
* 0.5.3
 * Fixed Issue #6 – duration in xml is filesize
 
* 0.5.2
 * Fixed Issue #18 – HTML errors and removed automatic preload of video and audio files
 * Fixed dimensions of poster-image
 * Added prefix for JavaScript video and audio player so it's only used for podcasts and not site wide
 * Added TypoScript option to turn on preload of podcasts, default off
 * Added Flash fallback
 
* 0.5.1 – Update requires user intervention!
 * Fixed Issue #17
 
* 0.5.0 – Update requires user intervention!
 * Fixed Issues 15, single-podcast view not working
 * Updated realurl and plugin configuration to greatly improve urls
 * Updated plugin configuration, plugin needs to be saved again!
 * Added Requirement for record storage page is removed
 * Added Back button in single-podcast view is removed
 * Added CoolUri example configuration (needs to be added manually)
 * Added new media player with flash and silverlight fallback
 * Experimental support for Typo3 6.0
 
* 0.3.11 – 0.3.9
 * Added build and publication build date. 
 * Added a bit of documentation in readme.md.
 * Fixed Issue 14
 
* 0.3.8
 * Improved mime and duration handling
 
* 0.3.7
 * Fixed error in locallang that caused backend to crash
 
* 0.3.6
 * Fixed duration bug
 * Removed categories due to crash
 * Added poster-image for videos
 * Added webm support, 
 * Added initial videojs integration
 * Added german translation 
 
* 0.3.5
 * Fixed keyword Issues
 * Added podcast single view, multiple file support and auto mime/duration detection
 
* 0.3.4
 * Fixed Backend-Plugin registration
 * Added minimal documentation
 * Removed unused files
 * General Improvements
 
* 0.3.2
 * Fixes
 * Added Plugin wizard
 * Podcasts are now also displayed in page-view
 
* 0.3.1
 * Fixed missing upload folder
 * Fixed wrong database definition
 
* 0.3.0
 * Fixed relative image URL in Feed Updated default CSS
 * Updated Description
 
* 0.3.0
 * Initial Release
