<?php include ('../template/header.php'); ?> 


<form method="post" action="/registration-form/action_page.php">
    <fieldset>
      <legend>PRODUCT FORM:</legend>

      <label for="pname">Product Name:</label>
      <input type="text" id="pname" name="pname" required><br><br>
        <br>

      <label for="pprice">Product Price:</label>
      <input type="number" id="pprice" name="pprice" required><br><br>
      <br>

      <label for="pquantity">Quantity Available:</label>
      <input type="number" id="pquantity" name="pquantity" required><br><br>
      <br>


       </fieldset>

  </fieldset><br>
  <input type="submit" value="Submit">
</form>


<?php include ('../template/footer.php'); ?> 
