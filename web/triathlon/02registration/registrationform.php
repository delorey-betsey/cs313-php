<?php
    if(!empty($errors)){
        echo '<ul class="notify"';
        foreach ($errors as $error){
            echo "<li>$error</li>" ;
        }
        echo '</ul>';
            unset($errors);
        }
?>

<form  method="post" action="registrationformindex.php" id="registrationform"> 
    <label for="name=">Name:</label><br>
    <input type="text" name="name" id="name" size="40" value="<?php echo $name; ?>" required><br> 
    
    <label for="street=">Street:</label><br>
    <input type="text" name="street" id="street" size="40" value="<?php echo $street; ?>" required><br> 
    
    <label for="city=">City:</label><br>
    <input type="text" name="city" id="city" size="40" value="<?php echo $city; ?>" required><br> 
    
    <label for="state=">State:</label><br>
    <input type="text" name="state" id="state" size="40" value="<?php echo $state; ?>" required><br> 
    
    <label for="zip=">Zip:</label><br>
    <input type="text" name="zip" id="zip" size="40" value="<?php echo $zip; ?>" required><br> 
        
    <label for="email" >Email</label><br>
    <input type="email" name="email" id="email" size="50" value="<?php echo $email; ?>" required><br>
    
    <label for="phone=">Phone:</label><br>
    <input type="text" name="phone" id="phone" size="40" value="<?php echo $phone; ?>" required><br> 
        
    <label for="subject" >Subject</label><br>
    <input type="text" name="subject" id="subject" size="50" value="<?php echo $subject; ?>" required><br>
    
    <label for="message" >Message</label><br>
        <textarea name="message" id="message" cols="50" rows="10" required>
            <?php echo $message; ?>
        </textarea><br>
        
    <img src="/triathlon/02registration/captcha_images.php" alt="" ><br />
    <label for="security_code">Security Code:</label><br />
    <input id="cap_code" name="cap_code" type="text">
    <input type="submit" name="action" value="Send">
</form> 