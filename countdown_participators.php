<?php
// This script counts the number of items in an app and sends out a mail if the maximum is about to be reached. 
//connect to Podio.
     require_once '../podio-php-master/PodioAPI.php';
     $APP_ID = APP_ID;
     $APP_TOKEN = APP_TOKEN;
     $CLIENT_ID = CLIENT_ID;
     $CLIENT_SECRET = CLIENT_SECRET;
     $NUMBER_OFF_PLACES = SOME_NUMBER;


     function getNumberOffPlaces(){
          Podio::setup($CLIENT_ID,$CLIENT_SECRET);
          try {
          Podio::authenticate('app', array('app_id' => $APP_ID, 'app_token' => $APP_TOKEN ));
          
          $number = PodioItem::get_count($APP_ID);
          $places_left =  $NUMBER_OFF_PLACES-$number;
             return'Der er '.$places_left.' pladser tilbage';
  
     }
    
          catch (PodioError $e) {
          echo $e;
}
}