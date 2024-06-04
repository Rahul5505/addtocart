
<?php
    $mainurl="http://localhost/addtocart/";
    $baseurl="http://localhost/addtocart/assets";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>MVC APP</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="<?php echo $baseurl; ?>/css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"></head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav p-1 m-1">
            <li class="nav-item">
                <a class="nav-link active" href="<?php echo $mainurl; ?>./">Home</a>
              </li>  
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#" data-bs-toggle="modal" data-bs-target="#productmodal">Add To Product</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="<?php echo $mainurl; ?>cart">Cart</a>
              </li>
              <li class="nav-item" >
                <a class="nav-link active" href="<?php echo $mainurl;?>cart"><span class="bi bi-cart"><span class="badge badge-sm bg-danger"><?php echo $totalcount[0]["total"]; ?></span></span></a>
              </li>
             
              
            </ul>
          </div>
        </div>
      </nav>
</body>
</html>

<!-- Modal -->
<div class="modal fade" id="productmodal" tabindex="-1" aria-labelledby="productmodelLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Enter Product Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="form-group">
      <div class="input-group">
       <form method="post" enctype="multipart/form-data"> 
      <label class="lable-group">Select Image</label>
      &nbsp;<input type="file" name="photo" class="input-group"><br><br>
      <label>Mobile Name</label>
      &nbsp;<input type="text" name="name" class="input-group"><br><br>
      <label>Price</label>
      &nbsp;<input type="text" name="price" class="input-group"><br><br>
      
      </div>
      </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input type="submit" name="submit" value="submit" class="btn btn-primary">
        </form>
      </div>
    </div>
  </div>
</div>