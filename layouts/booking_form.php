<?php
    include 'config/database.php';
    //create an instance of database
    $db_object = new DBController();
    //fetch all destination names
    $result = $db_object->runQuery('SELECT DISTINCT destination_name FROM destination');
    $search_flight = $db_object->runQuery('SELECT DISTINCT flight_type.type, "Stanstead" 
    as "name", destination.destination_name 
    as "destination_name", departure.departure_day 
    as "departure_day", destination.duration FROM departure 
    JOIN flight ON flight.id=departure.flight_id
    JOIN flight_type ON flight_type.id=flight.type_id 
    JOIN destination ON destination.flight_type_id = flight_type.id');
?>
<form id="booking_form" action='handlers/booking_handler.php' method='GET'>
    <input type="text" value="Standsted" name="standsted" disabled>
    <input list="destination" name="destination" placeholder="where are you looking to go?" required>
    <datalist id="destination">
    </datalist>
    <input type="date" name="date" required>
    <input type="submit" value="Search" name="search">
</form>
<script>
$(document).ready(function () {
    $('#booking_form').submit(function(event){
        var formdata = {
            'destination': $('input[name = destination]').val(),
            'date': $('input[name = date]').val(),
        };
    $.ajax({
            type:'GET',
            url: 'handlers/booking_handler.php',
            data: formdata,
            datatype: 'json',
            encode: true
        }).done(function(data){
            var display = JSON.parse(data);
            //for some reason it only converts to json after parsing twice
            display = JSON.parse(display);
            display.map(function(currentValue, index, array){
                $converted_string = currentValue.departure_day;
                    console.log(currentValue);
                    $('#search_flight>table>tbody').empty()
                    .append("<tr><td>"+currentValue.type+"</td><td>"+currentValue.name+"</td><td>"+currentValue.destination_name+"</td><td>"
                    +currentValue.departure_day +"</td><td>"+currentValue.duration+"</td><td><button>Book</button></td></tr>");

                    $('#search_flight button').click(function(event){
                        event.stopPropagation();
                        event.stopImmediatePropagation();
                        localStorage.setItem("booking", "{"+currentValue.destination_name+","+currentValue.departure_day+"}"); 
                        alert('booking has been made');
                    });
            });
        });
        event.preventDefault(); 
    });

  //dispaying result from index page for destinations
  var destination_array = <?php echo($result);?>;
    var result = destination_array.map(function (currentValue, index, array){
        $('datalist#destination')
        .append("<option value='"+currentValue['destination_name']+"'>"+currentValue['destination_name']+"</option>");
    });  
});
</script>