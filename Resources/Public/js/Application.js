;(function($){
	$(document).ready(function(){
		$('.modPodcast video, .modPodcast audio').each(function(){
			$this = $(this);
			$this.mediaelementplayer({
				//for all options, see http://mediaelementjs.com/#api
				// path to Flash and Silverlight plugins
				pluginPath: '/typo3conf/ext/podcast/Resources/Public/mediaelementplayer/',
				// width of audio player
				audioWidth: $this.attr('data-width'),
				// height of audio player
				audioHeight: $this.attr('data-height'),
			});
		})
	});
})(jQuery);
