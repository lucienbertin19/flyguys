<?php
    include 'config/database.php';
    //create an instance of database
    $db_object = new DBController();
    //fetch all destination names
    $result = $db_object->runQuery('SELECT DISTINCT destination_name FROM destination');
    $search_flight = $db_object->runQuery('SELECT flight_type.type, "Stanstead" as "name", destination.destination_name as "destination_name", departure.departure_day as "departure_day", destination.duration FROM departure 
    JOIN flight_type ON flight_type.id=departure.id JOIN destination on destination.flight_type_id = flight_type.id');

?>
<!DOCTYPE html>
<html>
    <?php include 'layouts/head.php';?>
    <body>
        <?php include 'layouts/nav.php';?>
        <?php include 'layouts/booking_form.php';?>
        <div id='search_flight'>
            <table>
                <col>
                <tr>
                    <th>Flight type</th>
                    <th>Departure</th>
                    <th>Destination</th>
                    <th>Date</th>
                    <th>Duration</th>
                </tr>
            </table>
        </div>
        <?php include 'layouts/locations.php';?>
        <?php include 'layouts/registration_form.php';?>
        <?php include 'layouts/login_form.php';?>
        <?php include 'layouts/forgot_form.php';?>
        <?php include 'layouts/contact_form.php';?>
        <script src="js/lazyload.js"></script>
        <script>
            $(document).ready(function () {
            //dispaying result from index page for destinations
            var flight_result = <?php echo($search_flight);?>;
                var result = flight_result.map(function (currentValue, index, array){
                    $converted_string = currentValue.departure_day;
                    console.log(currentValue);
                    $('#search_flight>table')
                    .append("<tr><td>"+currentValue.type+"</td><td>"+currentValue.name+"</td><td>"+currentValue.destination_name+"</td><td>"
                    +currentValue.departure_day +"</td><td>"+currentValue.duration+"</td></tr>");
                });  
            });
        </script>
    </body>
</html>