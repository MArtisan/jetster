 


videojs('vidjs').ready(function() {
 
  videojs.log('Your player is ready!');

  this.hotkeys({
    playbackRates: [1, 2],
    volumeStep: 0.1,
    seekStep: 5,
    enableModifiersForNumbers: false,
    enableVolumeScroll: true,
    enableHoverScroll: true,
          fullscreenKey: function(e) {
            // fullscreen with the F key or Ctrl+Enter
            return ((e.which === 70) || (e.ctrlKey && e.which === 13));
          }
  });

  this.on('ended', function() {
    videojs.log('Awww...over so soon?!');
  });

});