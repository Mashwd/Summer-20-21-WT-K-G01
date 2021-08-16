
<?php include ('../template/header.php'); ?> 



<br>

<form action="">
  <label for="msguser">Search By User Name:</label>
  <input type="text" id="msguser" name="msguser" onkeyup="showHint(this.value)">
</form>

<br>


<br><br><br>

<table style="width:100%" border="1" id="productList">
    <tr>
      <th>Message Time</th>
      <th>User Name</th>
      <th>Message</th>
      <th>Action</th>
    </tr>
    <tr>
      <td>15/10/2021 01:23 PM</td>
      <td>Admin A</td>
      <td>Hello World</td>
      <td>
          <button>Respond</button>
      </td>
    </tr>
    
  </table>

  <br><br>

  <?php include ('../template/footer.php'); ?> 