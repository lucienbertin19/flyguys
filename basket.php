<!doctype html>
<html>
  <?php include 'layouts/head.php';?>
  <body>
    <?php include 'layouts/nav.php';?>

    <form action="" id="basket">
        <i class="fa fa-ticket" style="font-size:30px" ></i>
        <input type="text" value="Flight name" name="flight_name" >
        <input type= "number" value="quantity" min=1 max=1 >
        <input type="number" value="price" min=0  >
        <i class="fa fa-trash-o" style="font-size:30px"></i>
        <input type="submit" value="checkout" text="proceed to checkout" id="text1">
           
    </form>  
    <?php include 'layouts/registration_form.php';?>
    <?php include 'layouts/login_form.php';?>
    <?php include 'layouts/forgot_form.php';?>
    <?php include 'layouts/contact_form.php';?>
    <script src="js/lazyload.js"></script>
</body>
</html>
