<h1 align="center">shopping cart data</h1>
<div class="container data">
    
        <?php
            foreach($fetch as $row)
            {
                
        ?>
        <form method="post">
        <div class="row">
            <div class="row p-2 m-2">
        <center>
            <img src="upload/<?php echo $row["image"]; ?>" width="250px" height="200px"><br>
        <b>Product Name : <input type="text" name="name"  value="<?php echo  $row["name"];?>" readonly style="border:none;"></b><br>
        <b>Product Price : RS-<input type="text" id="price" name="price" id="price" value="<?php echo  $row["price"];?>" readonly style="border:none;"></b><br>
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
          <input type="number" name="qty" id="qty" min="1" max="2" value="1" class="input-group" onchange="subtotal()"><br>
          SubTotal Rs.<label id="total"><?php echo  $row["price"];?></label><br>
          <a href="<?php echo $mainurl;?>cart?getid=<?php echo $row['id']; ?>"><input type="submit" name="cart" value="ADD TO CART" class="btn btn bg-dark text-light w-75"></a>
        </center>
            </div>
        </div>
        </form>
        <?php
    
            }
        ?>
   

</div>
</div>
<script>

function subtotal()
{
    var p=document.getElementById("price").value;
    var q=document.getElementById("qty").value;
    var tot=p*q;
    document.getElementById("total").innerHTML=tot;
}

</script>