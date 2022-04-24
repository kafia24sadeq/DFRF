<?php
use Carbon\Carbon;

if (!function_exists('Mydate')) {

  /**
  * description
  *
  * @param
  * @return
  */
  function Mydate($date, $data = array())
  {
  // return   phpar::saySomething($date->timestamp);

      Carbon::setLocale(config('app.locale'));

      $dt = Carbon::parse($date);
       $now      = Carbon::now();
      return $dt->diffForHumans($now);
  }

  function ara($from){
      $periodone = array ("سنه", "شهر", "أسبوع", "يوم", "ساعه", "دقيقه", "ثانيه" );
      $periodmany = array ("سنوات", "شهور", "اسابيع", "ايام", "ساعات", "دقائق", "ثوانى" );
      $periodtwo = array ("سنتان", "شهران", "اسبوعان", "يومان", "ساعتان", "دقيقتان", "ثانيتان" );

      $units = array (
      0   => 29030400, // seconds in a year   (12 months)
      1  => 2419200,  // seconds in a month  (4 weeks)
      2   => 604800,   // seconds in a week   (7 days)
      3   => 86400,    // seconds in a day    (24 hours)
      4  => 3600,     // seconds in an hour  (60 minutes)
      5 => 60,       // seconds in a minute (60 seconds)
    );

      $diff = abs ( time () - $from );
      $output = '';
      foreach ( $units as $unit => $mult )
      if ($diff >= $mult) {
        $difference = intval ( $diff / $mult );
        if ($difference == 1) {
          $output .= " و " . $periodone [$unit];
        } elseif ($difference == 2) {
          $output .= " و " . $periodtwo [$unit];
        } elseif ($difference != 1 and $difference <= 10) {
          $output .= " و " . $difference . ' ' . $periodmany [$unit];
        } else {
          $output .= " و " . $difference . ' ' . $periodone [$unit];
        }
        $diff -= intval ( $diff / $mult ) * $mult;
      }

      $output = substr ( $output, 3 );
      $output = 'منذ ' . $output;
      return   $output;
    }

}
