<h1>Item Selected</h1>
<table class="table table-bordered m-2">
  <caption>List of users</caption>
  <thead>
    <tr align="center">
      <th scope="col">#</th>
      <th scope="col">ProductName</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Total</th>
      <th scope="col">Action</th>
          

    </tr>
  </thead>
  <tbody>
    <?php
    foreach($row as $row1)
    {
    ?>
    <tr align="center">
      <th scope="row"><?php echo $row1['cart_id']; ?></th>
      <td><?php echo $row1['cart_name']; ?></td>
      <td><?php echo $row1['price']; ?></td>
      <td><?php echo $row1['qty']; ?></td>
      <td><?php echo $row1['total']; ?></td>
      <td><button class="btn btn-sm btn-danger">Remove</button></td>
    </tr>
    <?php
    }
    ?>

    <tr align="center">
    <td colspan="3"></td>
    <td>Total Price</td>
    <td>
     <?php echo $subtotal[0]['total']; ?>   
    </td>
    <td><button class="btn btn-sm btn-warning">Clear</button></td>
    </tr>
  </tbody>
</table>