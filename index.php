<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 

    <!-- bootsrtap css link -->
    <link rel="stylesheet" href="../style.css">
    <style>
        .admin-image{
    width: 100%;
    object-fit: contain;
}
.footer{
    position: absolute;
    bottom:0;
}
    </style>
    </head>
<body>
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid p-0">
                <img src="../images/colorful-ecommerce-logo_1040470-30109.webp  " alt="" class="logo ">
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link">welcome guest</a>
                        </li>
                    </ul>

</nav>
            </div>

        </nav>
<!-- second child -->
<div class="bg-light">
    <h3 class="text-center p-2">Manage Details</h3>
</div>

<!-- third child -->
 <div class="row">
    <div class="col-md-12 bg-secondary p-1 d-flex align-items-center  ">
<div class="p-3 ">
    <a href=""><img src="" alt="img" class="admin-image"></a> 
    <p class="text-light text-center">Admin name</p>
</div>
<div class="button text-center">
    <button><a href="insert_product.php" class="nav-link text-link bg-info my-1">insert products</a></button> 

    <button><a href="" class="nav-link text-link bg-info my-1">view products</a></button>

    <button><a href="index.php?insert_category" class="nav-link text-link bg-info my-1">insert categories</a></button>
    
    <button><a href="" class="nav-link text-link bg-info my-1">view categories</a></button>

    <button><a href="index.php?insert_brand" class="nav-link text-link bg-info my-1">insert brands</a></button>

    <button><a href="" class="nav-link text-link bg-info my-1">view brands</a></button>

    <button><a href="" class="nav-link text-link bg-info my-1">all orders</a></button>

    <button><a href="" class="nav-link text-link bg-info my-1">all payments</a></button>


    <button><a href="" class="nav-link text-link bg-info my-1">login</a></button>

    <button><a href="" class="nav-link text-link bg-info my-1">logout</a></button>
</div>
    </div>
 </div>

 <!-- fourth child -->
  <div class="container my-5">
    <?php
    if(isset($_GET['insert_category'])){
        include('insert_categories.php');
    }
    ?>
    <?php
    if(isset($_GET['insert_brand'])){
        include('insert_brands.php');
    }
    ?>
  </div>

 <div class="bg-info p-3 text-center footer">
    <p>all rights reserved</p>
 </div>
    </div>



<!-- js lnk -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>