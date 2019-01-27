<script>
$(document).ready(function () {
    $.ajax({
            type:'POST',
            url: '../handlers/booking_handler.php',
            data: '',
            datatype: 'json',
            encode: true
        }).done(function(data){
            console.log(data);
        });

  //dispaying result from index page for destinations
  var destination_array = <?php echo($result);?>;
    var result = destination_array.map(function (currentValue, index, array){
        $('datalist#destination')
        .append("<option value='"+currentValue['destination_name']+"'>"+currentValue['destination_name']+"</option>");
    });  
});
</script>
<form id="booking_form">
    <input type="text" value="Standsted" name="standsted" disabled>
    <input list="destination" name="destination" placeholder="where are you looking to go?">
    <datalist id="destination">
    </datalist>
    <input type="date" name="date">
    <input type="submit" value="Search" name="search">
</form>