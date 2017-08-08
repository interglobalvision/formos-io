/* jshint browser: true, devel: true, indent: 2, curly: true, eqeqeq: true, futurehostile: true, latedef: true, undef: true, unused: true */
/* global $, jQuery, document, Site, Modernizr */

Site = {
  mobileThreshold: 601,
  init: function() {
    var _this = this;

    $(window).resize(function(){
      _this.onResize();
    });

    $(document).ready(function () {
      _this.Video.init();
    });

  },

  onResize: function() {
    var _this = this;

  },

  fixWidows: function() {
    // utility class mainly for use on headines to avoid widows [single words on a new line]
    $('.js-fix-widows').each(function(){
      var string = $(this).html();
      string = string.replace(/ ([^ ]*)$/,'&nbsp;$1');
      $(this).html(string);
    });
  },
};

Site.Video = {
  playing: false,
  toPlay: 0,
  init:  function() {
    var _this = this;

    // Selector for both videos
    _this.$videos = $('.splash-video');

    // First video
    _this.$video1 = $('#splash-video-1');

    _this.$video1.on('canplaythrough', _this.handleCanPlayThrough.bind(_this));

    // TODO: Detect can autoplay
    _this.canAutoplay = true;

    // TODO: Get threshold based on video position/margin/something
    _this.threshold = 100;

  },

  handleCanPlayThrough: function() {
    var _this = this;

    // Bind scroll
    _this.bindScroll();
  },

  bindScroll: function() {
    var _this = this;

    // On window scroll
    $(window).scroll(function(event) {
      // Get the scroll position
      var scrollTop = $(window).scrollTop();

      // ...handle it
      _this.handleScroll(scrollTop);
    });
  },

  handleScroll: function(scrollTop) {
    var _this = this;

    if(_this.canAutoplay) {
      if(!_this.toPlay && scrollTop > _this.threshold) { // First video is to play and postition is below threshold
        _this.playAndSwitch();
      } else if(_this.toPlay && scrollTop < _this.threshold * 0.8) { // second video is to play and postition is above threshold * 0.8. Value was made up, it will change based on design
        _this.playAndSwitch();
      }
    }
  },

  playAndSwitch: function() {
    var _this = this;

    // Get video to play
    var $videoToPlay = $(_this.$videos[_this.toPlay]);

    // Check it isn't playing already
    if(!_this.playing) {

      // Play video
      $videoToPlay[0].play();

      // Set playing to true
      _this.playing = true;

      // Listen for video ended event
      $videoToPlay.on('ended', function(event) {
        // Set playing to false
        _this.playing = false;

        // Switch videos
        _this.$videos.removeClass('u-hidden');
        $videoToPlay.addClass('u-hidden');

        // Reset position to 0
        $videoToPlay[0].position = 0;
        $videoToPlay[0].play();
        $videoToPlay[0].pause();

        // Switch toPlay value
        _this.toPlay = _this.toPlay ? 0 : 1;

        // Remove event
        $videoToPlay.off('ended');

        // DEBUG
        if(WP.wp_debug) {
          $('#video-displayed').text(_this.toPlay);
        }

        // Recheck scroll position in case user scrolled while playing
        _this.handleScroll($(window).scrollTop());

      });
    }
  },
};

Site.init();
