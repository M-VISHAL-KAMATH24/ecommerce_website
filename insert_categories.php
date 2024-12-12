<?php
include('../includes/connect.php');
if(isset($_POST['insert_cat'])){
$category_title=$_POST['cat_title'];
$select_query="Select * from `categories` where category_title='$category_title'";
$result_select=mysqli_query($con,$select_query);
$number=mysqli_num_rows($result_select);
if($number>0){
    echo "<script >alert('this category is alreayd present inthe database') </script>";
}
else{

$insert_query="insert into `categories`(category_title) values ('$category_title')";

$result=mysqli_query($con,$insert_query);
if($result){
    echo "<script >alert('successfull insertion') </script>";
}
}
}
?>
<h2 class="text-center">insert categories</h2>
<form action="" method="post" class="mb-2">
<div class="input-group w-90 mb-3">
  <span class="input-group-text bg-info"><i class="fa-solid fa-receipt"></i></span>
  
    <input type="text" class="form-control" id="floatingInputGroup1" 
    name="cat_title"placeholder="insert categories">
   
  </div>
  <div class="input-group w-10 mb-3 m-auto">
  <span class="input-group-text bg-info"><i class="fa-solid fa-receipt"></i></span>
  
    <input type="submit" class="bg-info border-0 p-2 my-3" id="floatingInputGroup1" 
    name="insert_cat"placeholder="insert categories">
    
   
  </div>
</form>