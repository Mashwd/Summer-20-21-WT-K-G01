
<?php include ('../template/header.php'); ?> 

<br>

<form action="">
  <label for="dsamesearch">Search By Discount Name:</label>
  <input type="text" id="dsamesearch" name="dsamesearch" onkeyup="showHint(this.value)">
</form>

<br>

<a href="./discountForm.php" >Add Discount</a>
<br><br><br>

<table style="width:100%" border="1" id="discountList">

<table style="width:100%" border="1">
    <tr>
      <th>Discount ID</th>
      <th>Product Name</th>
      <th>Discount Name</th>
      <th>Discount Start Date</th>
      <th>Discount End Date</th>
      <th>Action</th>
    </tr>
    <tr>
      <td>1</td>
      <td>Chair</td>
      <td>Eid Discount</td>
      <td>24-10-2021</td>
      <td>26-10-2021</td>
      <td>
          <button>Deactivate</button>
      </td>
    </tr>
    
  </table>

  <?php include ('../template/footer.php'); ?> 