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

    _this.$container = $('#splash-video-container');

    // Selector for both videos
    _this.$videos = $('.splash-video');
    _this.$video1 = $('#splash-video-1');
    _this.$video2 = $('#splash-video-2');

    _this.$video1.on('canplaythrough', _this.handleCanPlayThrough.bind(_this));

    // TODO: Detect can autoplay
    _this.canAutoplay = true;

    // TODO: Get threshold based on video position/margin/something
    _this.threshold = 100;

    // Create waypoint
    _this.Waypoint = new Waypoint({
      element: _this.$container[0],
      handler: _this.handleWaypoint.bind(this),
      offset: -300,
      enabled: false,
    });

  },

  handleCanPlayThrough: function() {
    var _this = this;

    // Bind scroll
    _this.Waypoint.enable();
  },

  bindWaypoint: function() {
    var _this = this;

  },

  handleWaypoint: function(direction) {
    var _this = this;

    // Check if browser can autoplay and it's not playing
    if(_this.canAutoplay && !_this.playing) {
      if(direction == 'down') { // First video is to play and postition is below threshold
        _this.playAndSwitch(_this.$video1);
      } else if(direction === 'up') { // second video is to play and postition is above threshold * 0.8. Value was made up, it will change based on design
        _this.playAndSwitch(_this.$video2);
      }
    }
  },

  playAndSwitch: function($videoToPlay) {
    var _this = this;

    console.log('playing', $videoToPlay);

    // Play video
    $videoToPlay[0].play();

    // Set playing to true
    _this.playing = true;

    // Listen for video ended event
    $videoToPlay.on('ended', function(event) {
      // Remove event
      $videoToPlay.off('ended');

      // Set playing to false
      _this.playing = false;

      // Switch videos
      _this.$videos.removeClass('u-hidden');
      $videoToPlay.addClass('u-hidden');

      // Reset position to 0
      $videoToPlay[0].position = 0;
      $videoToPlay[0].play();
      $videoToPlay[0].pause();

      // DEBUG
      if(WP.wp_debug) {
        var notHidden = _this.$videos.filter(':not(.u-hidden)');
        $('#video-displayed').text(notHidden[0].id);
      }

    });
  },
};

Site.init();
