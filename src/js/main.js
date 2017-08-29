/* jshint browser: true, devel: true, indent: 2, curly: true, eqeqeq: true, futurehostile: true, latedef: true, undef: true, unused: true */
/* global $, jQuery, document, Site, Modernizr */

Site = {
  animationSpeed: 666,
  mobileThreshold: 601,
  init: function() {
    var _this = this;

    _this.fixWidows();

     _this.Menu.init();
     _this.Countdown.init();

    $(window).resize(function(){
      _this.onResize();
    });

    $(document).ready(function () {
      _this.SplashVideo.init();
      _this.WhatIsVideo.init();
      _this.Modules.init();
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

Site.SplashVideo = {
  playing: false,
  toPlay: 0,
  init:  function() {
    var _this = this;

    // Selector for both videos
    _this.$videos = $('.splash-video');

    // First video
    _this.$video1 = $('#splash-video-1');

    _this.$video1.on('canplaythrough.video1', _this.handleCanPlayThrough.bind(_this));

    // TODO: Detect can autoplay
    _this.canAutoplay = true;

    // TODO: Get threshold based on video position/margin/something
    _this.threshold = 100;

  },

  handleCanPlayThrough: function() {
    var _this = this;

    // Unbind from this event so it only happens once
    _this.$video1.off('canplaythrough.video1');

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
        $videoToPlay[0].currentTime = 0;

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

Site.WhatIsVideo = {
  $player: $('#what-is-video-player'),
  $video: $('#what-is-video'),

  init: function() {
    var _this = this;

    _this.$player.on('click', _this.handleClick.bind(_this));
  },

  handleClick: function() {
    var _this = this;

    if (_this.$player.hasClass('playing')) {
      _this.$video[0].pause();
      _this.$player.removeClass('playing');
    } else {
      _this.$video[0].play();
      _this.$player.addClass('playing');

    }
  },
};

Site.Menu = {
  init: function() {
    var _this = this;

    $('.js-scrollto').on('click', function() {
      var section = $(this).data('scroll');

      _this.scrollTo(section);
    });
  },

  scrollTo: function(section) {
    var _this = this;
    var $target = $('#section-' + section);

    $('html, body').stop().animate({ scrollTop: $target.offset().top }, Site.animationSpeed);
  }
};

Site.Countdown = {
  dayInSeconds: 60 * 60 * 24,
  hoursInSeconds: 60 * 60,
  interval: undefined,

  init: function() {
    var _this = this;

    _this.$countdown = $('#countdown');
    _this.$countdownDays = $('#countdown-days');
    _this.$countdownHours = $('#countdown-hours');
    _this.$countdownMinutes = $('#countdown-minutes');
    _this.$countdownSeconds = $('#countdown-seconds');

    // get end time from markup
    _this.end = _this.$countdown.data('end');

    var now = moment().utc();
    var nowUnixTimestampSeconds = now.format('X');

    // calculate seconds between endtime and now
    _this.secondsRemaining = _this.end - nowUnixTimestampSeconds;

    // check if already finished, then display countdown values
    _this.checkFinished();
    _this.displayRemainingTime();

    // setup interval to count down each second and update the display values
    _this.interval = window.setInterval(function() {
      _this.secondsRemaining--;

      _this.checkFinished();
      _this.displayRemainingTime();
    }, 1000);

  },

  displayRemainingTime: function() {
    var _this = this;

    // each of these calculates the remaining values from the seconds remaining, then calculates the remainder of seconds to be used in the next step, then displays the values

    var daysRemaining = _this.secondsRemaining / _this.dayInSeconds;
    var daysRemainingRemainder = _this.secondsRemaining % _this.dayInSeconds;

    _this.$countdownDays.text(_this.displayValueFromFloat(daysRemaining));

    var hoursRemaining = daysRemainingRemainder / _this.hoursInSeconds;

    _this.$countdownHours.text(_this.displayValueFromFloat(hoursRemaining));

    var hoursRemainingRemainder = daysRemainingRemainder % _this.hoursInSeconds;

    var minutesRemaining = hoursRemainingRemainder / 60;

    _this.$countdownMinutes.text(_this.displayValueFromFloat(minutesRemaining));

    var minutesRemainingRemainder = hoursRemainingRemainder % 60;

    _this.$countdownSeconds.text(_this.displayValueFromFloat(minutesRemainingRemainder));
  },

  checkFinished: function() {
    var _this = this;

    // if there are no seconds remaining kill the countdown
    if (_this.secondsRemaining <= 0) {
      window.clearInterval(_this.interval);

      // perhaps we have a better solution but for now just remove the countdown
      $('#section-countdown').remove();
    }
  },

  displayValueFromFloat: function(input) {
    var _this = this;

    return _this.padNumber(Math.floor(input));
  },

  padNumber: function(n) {
    // adapted from https://stackoverflow.com/questions/10073699/pad-a-number-with-leading-zeros-in-javascript#10073788
    n = n + '';

    return n.length >= 2 ? n : new Array(2 - n.length + 1).join('0') + n;
  },
};

Site.Modules = {
  played: false,
  animatioDelay: 0,
  init: function() {
    var _this = this;

    _this.$videos = $('.module-video');

    _this.threshold = _this.$videos.offset().top - ($(window).height() / 3) * 2;

    _this.bindScroll();
  },

  bindHover: function() {
    var _this = this;

    // Bind mouse over
    _this.$videos.on('mouseover.videoModule', function(event) {
      this.play();
    });

    // Bind mouse leave
    _this.$videos.on('mouseleave', function(event) {
      this.pause();
    });
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

    if(!_this.played && scrollTop > _this.threshold) { // First video is to play and postition is below threshold
      _this.playAnimation();
    }
  },

  playAnimation: function() {
    var _this = this;

    _this.played = true;

    _this.$videos.each( function(index) {
      var video = this;
      setTimeout( function(callback) {
        video.play();

        $(video).on('ended', function() {
          this.loop = true;
        });
      }, _this.animatioDelay);
    });

    _this.bindHover();
  },

};

Site.init();
