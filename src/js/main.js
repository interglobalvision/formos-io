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
      _this.videoWrapper();
      _this.InlineVideo.onResize();
    });

    $(document).ready(function () {
      _this.videoWrapper();
      _this.InlineVideo.init();
    });
  },

  onResize: function() {
    var _this = this;

    Site.Menu.windowWidth = $(window).width();
  },

  fixWidows: function() {
    // utility class mainly for use on headines to avoid widows [single words on a new line]
    $('.js-fix-widows').each(function(){
      var string = $(this).html();
      string = string.replace(/ ([^ ]*)$/,'&nbsp;$1');
      $(this).html(string);
    });
  },

  videoWrapper: function() {
    $('.wrapped-video').each(function() {
      // the video wrapper element
      var $wrapper = $(this).parent('.video-wrapper');

      // the video aspect ratio from data attr
      var ratio = $(this).attr('data-ratio');

      if ($(this).hasClass('splash-video')) {
        // is splash video

        var windowHeight = $(window).height();

        // get height of visible header (mobile or desktop)
        var headerHeight = $('.header:visible').outerHeight();

        // set height of video and get height for wrapper
        var height = $(this).css('height', windowHeight - headerHeight + 'px').height();
      } else {
        // is not splash video

        // get height of video
        var height = $(this).parent().parent().width();
      }

      var width = (height * ratio);
      var marginTop = -(height / 2);
      var marginLeft = -((height * ratio) / 2);

      // set height and width of wrapper - 5px
      $wrapper.css({
        'width': width - 5 + 'px',
        'height': height - 5 + 'px'
      });

      // set height and width of video, set margins for absolute centering
      $(this).addClass('show').css({
        'width': width + 'px',
        'height': height + 'px',
        'margin-top': marginTop + 'px',
        'margin-left': marginLeft + 'px',
      });
    });
  },
};

Site.InlineVideo = {
  vimeoPlayers: [],
  init: function() {
    var _this = this;

    // Iterate thru players
    $('.inline-video-player').each(function(index,player) {

      // Check if vimeo url exists as an attribute
      var vimeoUrl = $(player).attr('data-vimeo-url');

      if (vimeoUrl && vimeoUrl !== undefined) { // If Vimeo
        var vimeoOptions = {
          url: vimeoUrl,
          title: false
        };

        _this.vimeoPlayers[index] = new Vimeo.Player(player, vimeoOptions);

        _this.bindVimeo(_this.vimeoPlayers[index]);
      } else { // Else is HTML video
        $(player).on('click', _this.handleClick);
      }
    });
  },

  handleClick: function() {
    var $player = $(this);
    var $video = $player.find('.inline-video');

    if ($player.hasClass('playing')) {
      $video[0].pause();
      $player.removeClass('playing');
    } else {
      $video[0].play();
      $player.addClass('playing');
    }
  },

  bindVimeo: function($player) {
    var _this = this;

    $player.on('loaded', function() {
      _this.iframeHeight(this.element);
    });

    $player.on('play', function() {
      $(this.element).parent('.inline-video-player').addClass('playing');
    });

    $player.on('pause', function() {
      $(this.element).parent('.inline-video-player').removeClass('playing');
    });
  },

  iframeHeight: function(iframe) {
    var $iframe = $(iframe);
    var iframeWidth = Math.round($iframe.width());
    var iframeHeight = iframeWidth / 16 * 9;

    // We add 6 pixels more to the height, so the iframe fits better
    // This is a hack by @cas
    iframeHeight += 6;

    $iframe.css('height', iframeHeight + 'px');
  },

  onResize: function() {
    var _this = this;

    if (_this.vimeoPlayers.length > 0) {
      $(_this.vimeoPlayers).each( function(index,player) {
        _this.iframeHeight(player.element);
      });
    }
  },
};

Site.Menu = {
  init: function() {
    var _this = this;

    _this.windowWidth = $(window).width();

    $('.js-scrollto').on('click', function() {
      var section = $(this).data('scroll');
      var isMobile = $(this).hasClass('mobile-scrollto');
      var headerOffset = _this.getHeaderOffset(isMobile);

      _this.scrollTo(section, headerOffset);
    });

    // Mobile Menu
    if($('#menu-toggle').length) {
      $('#menu-toggle').on('click', function() {
        $('body').toggleClass('menu-open');
      });
    }
  },

  getHeaderOffset: function(isMobile) {
    var _this = this;
    var $header = $('#header');

    if (isMobile) {
      $header = $('#mobile-header');
    }

    // scrollTo offset = header height + top padding + bottom padding
    return $header.outerHeight() + ($header.innerHeight() - $header.height());
  },

  scrollTo: function(section, headerOffset) {
    var _this = this;
    var $target = $('#section-' + section);

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

Site.init();
