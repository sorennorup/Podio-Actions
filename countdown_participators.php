<?php
// This script counts the number of items in an app and sends out a mail if the maximum is about to be reached. 
//connect to Podio.
     require_once '../podio-php-master/PodioAPI.php';
     $APP_ID = APP_ID;
     $APP_TOKEN = APP_TOKEN;
     $CLIENT_ID = CLIENT_ID;
     $CLIENT_SECRET = CLIENT_SECRET;


     function getNumberOffPlaces(){
          Podio::setup("aeresrelaterede-konflikter2014","XmkngIKUsg2gFNMoSRx9AgVmNWX5JVee3FiTsJjc8THNJABLENSRW5jrsX9sGSel");
          try {
          Podio::authenticate('app', array('app_id' => $APP_ID, 'app_token' => $APP_TOKEN ));
          
          $number = PodioItem::get_count($APP_ID);
          $places_left = 130-$number;
             return'Der er '.$places_left.' pladser tilbage';
  
     }
    
          catch (PodioError $e) {
          echo $e;
}
}