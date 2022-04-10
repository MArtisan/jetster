var tag = document.createElement('script');

tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var player;
function onYouTubeIframeAPIReady() {
	player = new YT.Player('player', {
		width: '100%',
		height: '100%',
		videoId: '70MvJ4ft80g',
		playerVars: { 'autoplay': 1, 'playsinline': 1, 'modestbranding': 1, 'controls': 0 },
		events: {
			'onReady': onPlayerReady
	}
});
}

function onPlayerReady(event) {
	event.target.mute();
	event.target.playVideo();
}