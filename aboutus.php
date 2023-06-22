<?php
    include "connection/connection.php";
    $sql='SELECT * FROM about_us_table where id=24';
    $sql2='SELECT * FROM customer_review where review_id=1';
    $result=$connection->query($sql);
    $data=array();
    if (mysqli_num_rows($result)>0) {
         $data=mysqli_fetch_assoc($result);
     } 

    $result2=$connection->query($sql2);
    $data2=array();
    if (mysqli_num_rows($result2)>0) {
        $data2=mysqli_fetch_assoc($result2);
    } 
?>   
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
    <title>About Us</title>
    
</head>
<body>
    <?php include 'assets/header.php'; ?>

<section class="banner-sec">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-12">
				<div class="banner-txt">
					
					<h1>ABOUT US</h1>
					
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



<section class="img-des">
    <div class="container">
        <div class="row">
            <div class="col-7 img-side">
                <img src="images/<?php echo $data['image'];?>" style="height: 500px;">
                
            </div>
            <div class="col-5 des-list">
                <h6>About Us</h6>
                <h1><?php echo $data['title'];?></h1>
                <p>
                    <?php echo $data['long_description'];?>
                </p>
                
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p>
                    <?php echo $data['short_description'];?>
                </p>
            </div>
        </div>
    </div>

</section>


<section class="customer-review">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Customer Reviews</h1>
                <br>
                <p><?php echo $data2['description'];?></p>
                <p><?php echo $data2['customer_name'];?></p>
                <a href="#" class="btn theme-btn">Verified By CR</a>
                <br>  
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>

            </div>
        </div>
    </div>

</section>

<section class="containt">
    <div class="container">
        <div class="row">
            
                <div class="col-4">
                    <h3>30-DAY</h3>
                    <p>Lorem Ipsum Dolor Sit</p>

                </div>
                <div class="col-4">
                    <h3>FREE</h3>
                    <p>Lorem Ipsum Dolor Sit</p>
                </div>
                <div class="col-4">
                    <h3>365</h3>
                    <p>Lorem Ipsum Dolor Sit</p>
                </div>
            
        </div>
    </div>
</section>


<section class="findproduct">
    <div class="container">
        <div class="row">
            
            <div class="col-12">
                <h1>Find Your Product</h1>
                <br>
                <p>Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit, sed do eiusmod tempor <br>
                    incididunt ut labore.</p>
                <p>Jane Doe</p>
                <a href="#" class="btn theme-btn">Find My Perfect Dose</a>
                

            </div>
        </div>
    </div>

</section>

<section class="cbd">
    <div class="container">
        <div class="row">
            <div class="col-12">Learn Everything About CBD</div>
        </div>
        <div class="row">
            <div class="col-6">
                <h6>What is CBD?</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.
                    , totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
            </div>
            <div class="col-6">
                <h6>What is CBD?</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                    
                  </p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                   , totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                </div>
        </div>
        <div class="row">
            <div class="col-12 contiue-reading">
                <a href="#" class="btn theme-btn">Continue Reading -></a>
            </div>
        </div>

    </div>

</section>

<section class="cbdproduct">
    <div class="container">
        <div class="row">
            
            <div class="col-12">
                <h1>Subscribe to get special discounts<br>
                    on our CBD products</h1>
                <br>
                <input type="text" name="email" placeholder="Enter your email address">
                <br><br>
                <a href="#" class="btn theme-btn">Subscribe</a>
                

            </div>
        </div>
    </div>
    

</section>
<?php include 'assets/footer.php';  ?>

</body>
</html>