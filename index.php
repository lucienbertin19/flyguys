<?php
    include './handlers/booking_handler.php';
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