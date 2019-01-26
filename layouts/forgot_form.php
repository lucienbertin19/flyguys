<div class="modal" id='modal_forgot'>
    <button class="modal_close" onclick="closeModal()">&times;</button>
    <div class='modal_content'>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id='forgot_form'>
        <h1>Forgot</h1>
        <p>Please fill in the email associated with the account.</p>
        <input type="email" placeholder="Enter Email" name="email" required>
        
        <div class="clearfix">
        <button type="submit" class="submitbtn">Submit</button>
        </div>
    </form>
    </div>    
</div>