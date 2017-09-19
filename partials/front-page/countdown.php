<?php
  $front_page_options = get_site_option('_igv_front_page_options');

  if (!empty($front_page_options['countdown_end_utc'])) {

    $end = new \Moment\Moment($front_page_options['countdown_end_utc']);
    $endFromNow = $end->fromNow();

    if ($endFromNow->getDirection() === 'future') {

    $seconds = $endFromNow->getSeconds();

    $seconds = $seconds * -1;

    $oneDay = 60 * 60 * 24;
    $oneHour = 60 * 60;

    $daysLeft = $seconds / $oneDay;
    $daysLeftSecondsRemainder = $seconds % $oneDay;

    $hoursLeft = $daysLeftSecondsRemainder / $oneHour;
    $hoursLeftSecondsRemainder = $daysLeftSecondsRemainder % $oneHour;

    $minutesLeft = $hoursLeftSecondsRemainder / 60;
    $minutesLeftSecondsRemainder = $hoursLeftSecondsRemainder % 60;
?>

<div id="section-countdown" class="container margin-bottom-large">
  <div class="grid-row">
    <div class="grid-item item-s-12 text-align-center">
      <h2 class="font-size-basic margin-bottom-small">Countdown to our Kickstarter campaign:</h2>
      <div id="countdown" class="grid-row justify-center font-size-small color-blue" data-end="<?php echo $end->format('U'); ?>">
        <div class="grid-item">
          <div id="countdown-days" class="font-size-countdown"><?php echo floor($daysLeft); ?></div>
          <span class="font-uppercase font-size-tiny">Days</span>
        </div>
        <div class="grid-item no-gutter font-size-countdown">:</div>
        <div class="grid-item">
          <div id="countdown-hours" class="font-size-countdown"><?php echo floor($hoursLeft); ?></div>
          <span class="font-uppercase font-size-tiny">Hours</span>
        </div>
        <div class="grid-item no-gutter font-size-countdown">:</div>
        <div class="grid-item">
          <div id="countdown-minutes" class="font-size-countdown"><?php echo floor($minutesLeft); ?></div>
          <span class="font-uppercase font-size-tiny">Minutes</span>
        </div>
        <div class="grid-item no-gutter font-size-countdown">:</div>
        <div class="grid-item">
          <div id="countdown-seconds" class="font-size-countdown"><?php echo floor($minutesLeftSecondsRemainder); ?></div>
          <span class="font-uppercase font-size-tiny">Seconds</span>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
    }
  }
?>
