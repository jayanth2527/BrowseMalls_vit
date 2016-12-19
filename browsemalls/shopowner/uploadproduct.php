<?php
session_start();
include 'dbconnect.php';
if(!isset($_SESSION['so'])){
    header('Location:/');
}

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

      
    $query=mysqli_query($connect,"INSERT INTO product (name,categoryid,shop_id,brand_tag,inshopname,productimage)
      VALUES ('$product_name',$category_id,$shop_id,'$brand_tag','$shop_name','$image ')");
    
    $countv=mysqli_num_rows($query);

    if($countv==1)
    {
      echo "<script>alert(\"Success\");</script>";
    }
    else 
    {
      echo "<script>alert(\"Problem in Uploading\");</script>";
    }
  }
  else
  {
    echo "<script>alert(\"Try again.\");</script>";
  }
}