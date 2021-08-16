
<?php include ('../template/header.php'); ?> 

<script>
  function showHint(str) {
    if (str.length == 0) {
      document.getElementById("txtHint").innerHTML = "";
      return;
    } else {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          var html = "<tr> <th>Product Id</th> <th>Product Name</th> <th>Product Price</th> <th>Quantity Available</th> <th>Action</th> </tr>";
          html += this.responseText;
          document.getElementById("productList").innerHTML = html;
        }
      };
      xmlhttp.open("GET", "../operations/gethint.php?q=" + str, true);
      xmlhttp.send();
    }
  }
  </script>


<br>

<form action="">
  <label for="pnamesearch">Search By Product Name:</label>
  <input type="text" id="pnamesearch" name="pnamesearch" onkeyup="showHint(this.value)">
</form>

<br>
<a href="./productForm.php" >Add Product</a>
<br><br><br>

<table style="width:100%" border="1" id="productList">
    <tr>
      <th>Product Id</th>
      <th>Product Name</th>
      <th>Product Price</th>
      <th>Quantity Available</th>
      <th>Action</th>
    </tr>
    <tr>
      <td>1</td>
      <td>Mobile</td>
      <td>100000tk</td>
      <td>10</td>
      <td>
          <button>Edit</button>
          <button>Delete</button>
      </td>
    </tr>
    <tr>
      <td>2</td>
      <td>Headphone</td>
      <td>1000tk</td>
      <td>100</td>
      <td>
          <button>Edit</button>
          <button>Delete</button>
      </td>
    </tr>
    
  </table>

  <?php include ('../template/footer.php'); ?> 