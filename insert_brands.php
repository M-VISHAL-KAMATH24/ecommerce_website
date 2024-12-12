<?php
include('../includes/connect.php');
if(isset($_POST['insert_brand'])){
$brand_title=$_POST['brand_title'];
$select_query="Select * from `brands` where brand_title='$brand_title'";
$result_select=mysqli_query($con,$select_query);
$number=mysqli_num_rows($result_select);
if($number>0){
    echo "<script >alert('this brand is alreayd present inthe database') </script>";
}
else{

$insert_query="insert into `brands`(brand_title) values ('$brand_title')";

$result=mysqli_query($con,$insert_query);
if($result){
    echo "<script >alert('successfull insertion') </script>";
}
}
}
?>

<h2 class="text-center">insert brands</h2>
<form action="" method="post" class="mb-2">
<div class="input-group w-90 mb-3">
  <span class="input-group-text bg-info"><i class="fa-solid fa-receipt"></i></span>
  
    <input type="text" class="form-control" id="floatingInputGroup1" 
    name="brand_title"placeholder="insert brands">
   
  </div>
  <div class="input-group w-10 mb-3 m-auto">
  <span class="input-group-text bg-info"><i class="fa-solid fa-receipt"></i></span>
  
    <input type="submit" class=" bg-info border-0 my-3 p-2" id="floatingInputGroup1" 
    name="insert_brand"placeholder="insert brands" class="bg-info">
  
   
  </div>
</form>