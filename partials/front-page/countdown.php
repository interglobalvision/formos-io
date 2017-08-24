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

<div id="section-countdown" class="container padding-bottom-basic">
  <div class="grid-row">
    <div class="grid-item item-s-12 text-align-center">
      <h2 class="font-size-basic">Countdown to Kickstarter campaign:</h2>
      <div id="countdown" class="grid-row justify-center font-size-small color-gray" data-end="<?php echo $end->format('U'); ?>">
        <div class="grid-item">
          <div id="countdown-days" class="countdown-value font-size-extra"><?php echo floor($daysLeft); ?></div>
          Days
        </div>
        <div class="grid-item no-gutter font-size-extra">:</div>
        <div class="grid-item">
          <div id="countdown-hours" class="countdown-value font-size-extra"><?php echo floor($hoursLeft); ?></div>
          Hours
        </div>
        <div class="grid-item no-gutter font-size-extra">:</div>
        <div class="grid-item">
          <div id="countdown-minutes" class="countdown-value font-size-extra"><?php echo floor($minutesLeft); ?></div>
          Minutes
        </div>
        <div class="grid-item no-gutter font-size-extra">:</div>
        <div class="grid-item">
          <div id="countdown-seconds" class="countdown-value font-size-extra"><?php echo floor($minutesLeftSecondsRemainder); ?></div>
          Seconds
        </div>
      </div>
    </div>
  </div>
</div>
<?php
    }
  }
?>