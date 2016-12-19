<?php
session_start();
include 'dbconnect.php';
if(!isset($_SESSION['so'])){
    header('Location: /');
}
$shop_id = $_SESSION['shop_id'];
echo "<hr><hr>
$shop_id
<hr><hr>";

if(isset($_POST['product_upload_button']))
{
  $tbl_name="product";
  if(!empty($_POST['product_name']) && !empty($_POST['product_price']) && !empty($_POST['product_category']) && !empty($_POST['fileinput']))
  {
    $product_name = $_POST['product_name']; 
    $product_price = $_POST['product_price'];
    $product_category = $_POST['product_category'];
    $shop_name = $_SESSION['shop_name'];
    $image = $_POST['fileinput'];
    $brand_tag = $_POST['brand_tag'];
    $row = mysqli_fetch_assoc(mysqli_query($connect,"SELECT `id` FROM `category1` WHERE main ='$product_category'"));
    $category_id = $row['id'];
    echo $category_id;
    echo"<hr>";
    $row2 = mysqli_fetch_assoc(mysqli_query($connect,"SELECT `id` FROM `shops` WHERE `shop_name` = '$shop_name'"));
    $shop_id = $row2['id'];
    echo $shop_id;
    echo "<hr>";

      
    $query=mysqli_query($connect,"INSERT INTO `product` (`name`,`categoryid`,`shop_id`,`brand_tag`,`inshopname`,`productimage`)
      VALUES ('$product_name',$category_id,$shop_id,'$brand_tag','$shop_name','$image')");
    if($query == FALSE){
    	echo "<script>alert(\"Problem in Uploading\");</script>";
    }
    else{
    	echo "<script>alert(\"Success\");</script>";
    }
  }
  else
  {
    echo "<script>alert(\"Try again.\");</script>";
  }
}

?>
<form class="form-horizontal style-form" onsubmit="return showFileSize();" method="post" action="#">
                         <div class="form-group">
                              
                              <div class="col-sm-12">
                                  <input type="text" class="form-control" name="product_name" placeholder="Name" required>
                              </div>
                          </div>

                          <div class="form-group">
                              <div class="col-sm-12">
                                  <input type="text" placeholder="Price in &#8377;" name="product_price" class="form-control round-form" required>
                              </div>
                          </div>
                        
                          
                          <div class="form-group">
                            <label class="col-sm-2 col-sm-3 control-label">Category:</label>
                              <div class="col-sm-10">
                                <select class="form-control" onselect="oncategoryselection(this)"
                                 onchange="oncategoryselection(this)" name="product_category">
                                  <?php
                                  $query1 = mysqli_query($connect,"SELECT distinct main FROM `category1`");
                                  while($row = mysqli_fetch_assoc($query1)){
                                    $cat = $row['main'];
                                      echo "<option value=\"$cat\" selected> $cat </option>";
                                    }
                                  ?>
                                  </select>
                              </div>
                          </div>

                          <div id="sub1"></div>
                          <div id="sub2"></div>
                          <div id="sub3"></div>
                          
                          <div class="form-group">
                              <div class="col-sm-12">
                                  <input type="file" id="fileinput" name="fileinput" onchange="showFileSize();" required>
                                  <div id="filestatus"></div>
                              </div>
                          </div>
                          
                          <div class="form-group">
                            <label class="col-sm-2 col-sm-3 control-label">Brand:</label>
                              <div class="col-sm-10">
                                <select class="form-control" name="brand_tag">
                                  <?php
                                  $query1 = mysqli_query($connect,"SELECT distinct BrandName FROM `brands`");
                                  while($row = mysqli_fetch_assoc($query1)){
                                    $brand = $row['BrandName'];
                                      echo "<option value=\"$brand\"> $brand </option>";
                                    }
                                  ?>
                                  </select>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-lg-2 col-sm-2 control-label">Shop:</label>
                              <div class="col-lg-10">
                                  <p class="form-control-static"><?php echo ($_SESSION['shop_name']);?></p>
                              </div>
                          </div>

                          <div class="form-group">
                              <div class="col-lg-10">
                                  <input type="submit" name="product_upload_button" class="btn btn-info" value="Upload Product">
                              </div>
                          </div>
</form>