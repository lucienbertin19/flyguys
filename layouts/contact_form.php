<div class="modal" id='modal_contact'>
    <button class="modal_close" onclick="closeModal()">&times;</button>
    <div class='modal_content'>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id='contact_form'>
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your first name..">
    
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
    
        <label for="country">Country</label>
        <select id="country" name="country">
          <option value="united kingdom">united kingdom</option>
          <option value="usa">USA</option>
          <option value="paris">Paris</option>
        </select>
    
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="please enter your enquiry..." style="height:200px"></textarea>
    
        <input type="submit" value="Submit">
    </form>
    </div>    
</div>