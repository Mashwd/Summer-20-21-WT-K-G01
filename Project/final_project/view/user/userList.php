
<?php include ('../template/header.php'); ?> 



<br>

<form action="">
  <label for="username">Search By User Name:</label>
  <input type="text" id="username" name="username" onkeyup="showHint(this.value)">
</form>

<br>

<br><br><br>

<table style="width:100%" border="1" id="productList">
    <tr>
      <th>User Id</th>
      <th>User Name</th>
      <th>User Type</th>
      <th>Phone</th>
      <th>Email</th>
      <th>Action</th>
    </tr>
    <tr>
      <td>1</td>
      <td>Arif</td>
      <td>Admin</td>
      <td>01955842154</td>
      <td>arif.aiub2019@gmail.com</td>
      <td>
      <a href="../message/messageForm.php" >Send Message</a>
      </td>
    </tr>
    
  </table>

  <?php include ('../template/footer.php'); ?> 