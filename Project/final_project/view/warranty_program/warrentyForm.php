<?php include ('../template/header.php'); ?> 


<form method="post" action="/registration-form/action_page.php">
    <fieldset>
      <legend>Warrant Program Form:</legend>

      <label for="pid">Product ID</label>
      <input type="text" id="pid" name="pid" required><br><br>
        <br>

      <label for="duration">Warranty Duration in Days</label>
      <input type="number" id="duration" name="duration" required><br><br>
      <br>

      <label for="costpercent">Warranty Cost Percentage</label>
      <input type="number" id="costpercent" name="costpercent" required><br><br>
      <br>

       </fieldset>

  </fieldset><br>
  <input type="submit" value="Submit">
</form>


<?php include ('../template/footer.php'); ?> 
