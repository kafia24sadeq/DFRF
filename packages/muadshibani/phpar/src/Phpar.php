<?php
namespace Muadshibani\Phpar;

class Phpar {

    public static function saySomething($date) {
         require_once 'I18N/Arabic.php';
         $Arabic = new I18N_Arabic('Date');

        $Arabic->setMode(3);
        echo  $Arabic->date('l dS F Y h:i:s A', $date).'<br /> ';
        // echo "string";


    }


}
