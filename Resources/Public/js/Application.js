;(function($){
	$(document).ready(function(){
		$('video,audio').mediaelementplayer({
			pluginPath: '/typo3conf/ext/podcast/Resources/Public/mediaelementplayer/'
		});
	});
})(jQuery);
