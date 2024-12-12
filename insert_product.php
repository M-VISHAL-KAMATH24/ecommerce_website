<?php
include('../includes/connect.php')
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-light">
    <div class="container mt-3">
        <h1 class="text-center">
            insert products
        </h1>
        <!-- form -->
         <form action="" method="post" enctype="multipart/form-data">
            <!-- title -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_title" class="form-label">
                    product title
                </label>
                <input type="text" name="product_title" id="product_title" class="form-control" placeholder="enter product title" autocomplete="off" required="required">
            </div>
            <!-- description -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="description" class="form-label">
                    product description
                </label>
                <input type="text" name="description" id="description" class="form-control" placeholder="enter product description" autocomplete="off" required="required">
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_keyword" class="form-label">
                    product keyword
                </label>
                <input type="text" name="product_keyword" id="product_keyword" class="form-control" placeholder="enter product keyword" autocomplete="off" required="required">
            </div>
            <!-- categories -->
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_category" id="" class="form-select">
                    <option value="">select a category</option>
                    <!-- dynamic data -->
<?php
$select_query="Select * from `categories`";
$result_query=mysqli_query($con,$select_query);
while($row=mysqli_fetch_assoc($result_query)){
    $category_title=$row['category_title'];
    $category_id=$row['category_id'];

    echo "<option value='$category_id'>$category_title</option>";
}
?>

                   
                </select>
            </div>
            <!-- brands -->
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_brands" id="" class="form-select">
                    <option value="">select a brands</option>
                    <?php
$select_query="Select * from `brands`";
$result_query=mysqli_query($con,$select_query);
while($row=mysqli_fetch_assoc($result_query)){
    $brand_title=$row['brand_title'];
    $brand_id=$row['brand_id'];

    echo "<option value='$brand_id'>$brand_title</option>";
}
?>
                </select>
            </div>
            <!-- img 1 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image1" class="form-label">
                    product keyword
                </label>
                <input type="file" name="product_image1" id="product_image1" class="form-control" required="required">
            </div>
            <!-- img 2 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image2" class="form-label">
                    product keyword
                </label>
                <input type="file" name="product_image2" id="product_image2" class="form-control" required="required">
            </div>
            <!-- image 3 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image3" class="form-label">
                    product keyword
                </label>
                <input type="file" name="product_image3" id="product_image3" class="form-control" required="required">
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_price" class="form-label">
                    product price
                </label>
                <input type="text" name="product_price" id="product_price" class="form-control" placeholder="enter product price" autocomplete="off" required="required">
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
               <input type="text" name="insert_product" id="" class="btn btn-info mb-3 px-3" value="insert products">
            </div>
         </form>
    </div>
    


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>