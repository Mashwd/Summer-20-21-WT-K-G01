<?php include ('../template/header.php'); ?> 


<form method="post" action="/registration-form/action_page.php">
    <fieldset>
      <legend>Discount creation:</legend>

      <label for="dsname">Discount Name:</label>
      <input type="text" id="dsname" name="dsname" required><br><br>
        <br>

      <label for="dsstart">Discount Start Date:</label>
      <input type="date" id="dsstart" name="dsstart" required><br><br>
      <br>

      <label for="dsend">Discount End Date</label>
      <input type="date" id="dsend" name="dsend" required><br><br>
      <br>

      <label for="pid">Product Id</label>
      <input type="number" id="pid" name="pid" required><br><br>
      <br>

      <label for="dspercent">Discount Percentage:</label>
      <input type="number" id="dspercent" name="dspercent" required><br><br>
      <br>


       </fieldset>

  </fieldset><br>
  <input type="submit" value="Submit">
</form>


<?php include ('../template/footer.php'); ?> 
