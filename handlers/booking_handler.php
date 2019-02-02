<?php
   //send search results to the page to get a JSON object and display with AJAX 
   if($_SERVER['REQUEST_METHOD']=='GET' && isset($_GET['destination']) && isset($_GET['date'])){
      include '../config/database.php';
      //create an instance of database
      $db_object = new DBController();
      //convert date string to time   
      $d = strtotime($_GET['date']);

      //convert time to day of the week
      $d = date('l', $d);

      $query = 'SELECT DISTINCT flight_type.type, "Stanstead" 
      as "name", destination.destination_name 
      as "destination_name", departure.departure_day 
      as "departure_day", destination.duration FROM departure 
      JOIN flight ON flight.id=departure.flight_id
      JOIN flight_type ON flight_type.id=flight.type_id 
      JOIN destination ON destination.flight_type_id = flight_type.id
      WHERE destination.destination_name = \''.$_GET["destination"].'\' AND departure.departure_day like \'%'.strtolower($d).'%\'';
      $search_flight = $db_object->runQuery($query);
      print_r(json_encode($search_flight));
   }

?>