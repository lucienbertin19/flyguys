<?php $page = basename($_SERVER["PHP_SELF"]); ?>

<div class="topnav" id="myTopnav">
    <a href="index.php" <?php $page == 'index.php' ? print('class="active"') : '';?>>Home</a>
    <a href="news.php" <?php $page == 'news.php' ? print('class="active"') : '';?>>News</a>
    <a href="#contact" onclick="displayModal('contact')">Contact</a>
    <div class="dropdown">
        <button class="dropbtn"> 
        <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
        <a href="#" onclick="displayModal('registration')">Register</a>
        <a href="#" onclick="displayModal('login')">Login</a>
        <a href="#" onclick="displayModal('forgot')">Forgot</a>
        </div>
    </div> 
    <a href="basket.php" <?php $page == 'basket.php' ? print('class="active"') : '';?> >Basket</a>
    <a href="payment.php" <?php $page == 'payment.php' ? print('class="active"') : '';?>>payments</a>
    
    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>