<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;500&display=swap" rel="stylesheet">
	<script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css" integrity="sha384-X8QTME3FCg1DLb58++lPvsjbQoCT9bp3MsUU3grbIny/3ZwUJkRNO8NPW6zqzuW9" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Product</title>
</head>
<body>
<?php include 'assets/header.php'; ?>

<section class="banner-sec">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-12">
				<div class="banner-txt">
					
					<h1>PRODUCTS</h1>
					
				</div>
			</div>

			<div class="col-lg-6 col-md-6 col-12">
				<div class="banner-img">
					<img src="images/bottle.png" alt="img">
				</div>
			</div>
		</div>
	</div>
</section>



<br><br><br><br><br>
    <section class="product-list">
        <div class="container">
            <div class="row">
                <div class="col-3 search-list">
                    <h6 class="search-product">SEARCH PRODUCTS</h6>
                    <div class="searchbar">
                        <input type="text" name="search-bar" class="form-control" placeholder="Search.." >
                        <!-- <i class="fa fa-search"></i> -->
                    </div>
                    <div class="categories-heading">
                        <h3>CATEGORIES</h3>
                        <hr>
                        <p>Leruom Ipsum</p>
                        <hr>
                        <p>Leruom Ipsum</p>
                        <hr>
                        <p>Leruom Ipsum</p>
                        <hr>
                        <p>Leruom Ipsum</p>
                        <hr>
                        <p>Leruom Ipsum</p>
                        <hr>
                        <p>Leruom Ipsum</p>
                        <hr>
                        <p>Leruom Ipsum</p>
                        <hr>
                        <p>Leruom Ipsum</p>
                        <hr>
                        <p>Leruom Ipsum</p>
                        <hr>
                        <p>Leruom Ipsum</p>
                        <hr>
                        <p>Leruom Ipsum</p>
                    </div>

                </div>
                



                <div class="col-9 product">
                    <div class="row pr">
                        <?php
                        
                        include "connection/connection.php";
                        $sql="Select * from product_table";
                        $result=mysqli_query($connection,$sql);
                        while($row=mysqli_fetch_assoc($result))
                        {
                            echo '<div class="col-3 sec">
                            <a href="productdetail.html"><img src="images/'.$row["images"].'"></a>
                            <p class="description">'.$row["detail"].'</p>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="count">('.$row["total_purchased"].')</i>
                            <p class="price">$'.$row["price"].' CAD</p>
                            <a href="cart.html" class="btn theme-btn"><span class="cartimg"><img src="images/shopping-cart (1) copy 6.png"></span>ADD TO CART</a>
                        </div>';





                        }
                        
                        
                        ?>
                        
                    </div>
                </div>
            
                
            </div>

        </div>

    </section>

    <?php include 'assets/footer.php'; ?>
</body>
</html>