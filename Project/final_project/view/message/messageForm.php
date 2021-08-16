<?php include ('../template/header.php'); ?> 


<form method="post" action="/registration-form/action_page.php">
    <fieldset>
      <legend>Send Message:</legend>

      <label for="toid">User ID:</label>
      <input type="text" id="toid" name="toid" required><br><br>
        <br>

      <label for="message">Message:</label>
      <input type="text" id="message" name="message" required><br><br>
      <br>

       </fieldset>

  </fieldset><br>
  <input type="submit" value="Send">
</form>


<?php include ('../template/footer.php'); ?> 
