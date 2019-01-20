<!DOCTYPE html>
<html>
<?php include 'layouts/head.php';?>
<body>
<?php include 'layouts/nav.php';?>
<?php include 'layouts/booking_form.php';?>
    <?php include 'layouts/locations.php';?>
    <script>
        function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
          x.className += " responsive";
        } else {
          x.className = "topnav";
        }
      }
    </script>
</body>
</html>