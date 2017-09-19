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

    $mobileHeader = $('#mobile-header');
    // mobile scrollTo offset = mobile header height + top padding + bottom padding
    _this.mobileHeaderOffset = $mobileHeader.outerHeight() + ($mobileHeader.innerHeight() - $mobileHeader.height());

    $('.js-scrollto').on('click', function() {
      var section = $(this).data('scroll');
      var isMobile = $(this).hasClass('mobile-scrollto');

      _this.scrollTo(section, isMobile);
    });

    // Mobile Menu
    if($('#menu-toggle').length) {
      $('#menu-toggle').on('click', function() {
        $('body').toggleClass('menu-open');
      });
    }
  },

  scrollTo: function(section, isMobile) {
    var _this = this;
    var $target = $('#section-' + section);
    var headerOffset = 0;

    if (isMobile) {
      headerOffset = _this.mobileHeaderOffset;
    }

    $('body').removeClass('menu-open');
    $('html, body').stop().animate({ scrollTop: $target.offset().top - headerOffset }, Site.animationSpeed);
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
  offset: 0, // ms offset between each video play init
  init: function() {
    var _this = this;

    _this.$videos = $('.module-video');

    _this.threshold = _this.$videos.offset().top - ($(window).height() / 3) * 2;

    _this.bindScroll();
  },

  bindHover: function(video) {
    var _this = this;

    // Bind mouse over
    $(video).on('mouseover.videoModule', function(event) {
      this.play();
    });

    // Bind mouse leave
    $(video).on('mouseleave', function(event) {
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
          _this.bindHover(this);
        });
      }, _this.offset * index);
    });


  },

};

Site.init();
