<?php
  include('init.php');
  if(!isset($_SESSION['User']))
  {
    header('Location:index.php');
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Add Users</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>

 <div class="bg-warning text-black w-75 .h-75 m-5 mb-4 border-danger rounded mx-auto pt-4 bg-warning ">
    <h1 class="font-weight-bold d-flex justify-content-center mb-3">Add Product</h1>
    <form class="p-5" method="POST" action="add_new_product.php" enctype="multipart/form-data">
      <div class="form-group row">
        <label for="example-text-input" class="col-2 col-form-label "><h3 class="font-weight-bold">Product</h3></label>
        <div class="col-10">
          <input name="product_name" class="form-control border-danger" type="text" id="example-text-input" required>
        </div>
      </div>

      <div class="form-group row">
        <label for="example-number-input" class="col-2 col-form-label"><h3 class="font-weight-bold">Price</h3></label>
        <div class="col-10">
          <input name="price" class="form-control border-danger" type="number" min="5" id="example-number-input" required>
        </div>
      </div>

      <div class="form-group row">
        <label for="example-number-input border-danger" class="col-2 col-form-label"><h3 class="font-weight-bold">Category</h3></label>
        <div class="col-10">
          <select name="category" class="form-control form-control-lg border-danger ">
            <?php
              $stmt = $con->prepare("SELECT * FROM Category");
              $stmt->execute();
              while ($row = $stmt->fetch()) {
                echo '<option value='.$row['id'].'>'.$row['name'].'</option>';
              }
            ?>
          </select>
        </div>
      </div>

      <div class="form-group row"> 
        <label for="example-number-input" class="col-2 col-form-label"><h3 class="font-weight-bold">Product image</h3></label>
        <div class="col-10">
          <div class="input-group">
            <div class="input-group-prepend  ">
              <span class="input-group-text border-danger bg-danger text-white" id="inputGroupFileAddon01">Upload</span>
            </div>
            <div class="custom-file ">
              <input name="fileToUpload" type="file" class="custom-file-input bg-danger text-white" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" required>
              <label class="custom-file-label border-danger " for="inputGroupFile01">Choose file</label>
            </div>
          </div>
        </div>
      </div>

      <div class="form-group row .text-center d-flex justify-content-center mb-3">
       <button type="submit" class="btn btn-danger m-2 font-weight-bold"><h4 class="font-weight-bold">Submit</h4></button>
       <button type="reset" class="btn btn-danger m-2 font-weight-bold"><h4 class="font-weight-bold">Reset</h4></button>
      </div>
    </form>
  </div>




    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>