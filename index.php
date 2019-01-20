<!DOCTYPE html>
<html>
<?php include 'layouts/head.php';?>
<body>
<?php include 'layouts/nav.php';?>
<?php include 'layouts/booking_form.php';?>
<?php include 'layouts/locations.php';?>
<?php include 'layouts/registration.php';?>
    <script>
        function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
          x.className += " responsive";
        } else {
          x.className = "topnav";
        }
      }
      function displayModal(x){
        switch(x){
          case 'registration':
          var element = document.getElementById('modal_registration');
          element.style.display = 'block';
          break;
        }
      }
      function closeModal(){
        Array.from(document.getElementsByClassName("modal")).forEach(
            function(element, index, array) {
                element.style.display = 'none';
            }
        );
      }
    </script>
</body>
</html>