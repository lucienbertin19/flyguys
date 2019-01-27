<?php
      include '../config/database.php';
      //create an instance of database
      $db_object = new DBController();
      //fetch all destination names
      $result = $db_object->runQuery('SELECT DISTINCT destination_name FROM destination');
      echo($result);
?>