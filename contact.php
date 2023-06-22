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
    <title>Contact Us</title>
</head>
<body>
<?php include 'assets/header.php'; ?>

<section class="banner-sec">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-12">
				<div class="banner-txt">
					
					<h1>CONTACT US</h1>
					
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

<section class="middle">
    <div class="container">
        <div class="row">
            <div class="col-5">
                <div class="for-middles">
                    <h1>Get in Touch</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia vero itaque autem excepturi nemo deserunt mollitia provident at quaerat. Perferendis autem deserunt veniam, illo dicta rerum alias
                    </p>
                    <i class="fa-sharp fa-solid fa-paper-plane"></i>
                    <h4>Email :</h4>
                    <p>your@mail.com</p>
                <h4><i class="fa-sharp fa-solid fa-phone"></i></h4>
                <h4>Phone :</h4>
                    <p>+12345678</p>
                <h4><i class="fa-sharp fa-solid fa-location-dot"></i></h4>
                <h4>Address :</h4>
                    <p>Lorem ipsum,4586 street</p>
                </div>
            </div>
            <div class="col-7">
                <div class="for-middle">
                <h2>Contact Us</h2>
                <form action="/action_page.php">
                    <div class="mb-3 mt-3 inputtxt">
                      <input type="text" class="form-control" id="name" placeholder="Name" name="name">
                    </div>
                    <div class="mb-3 inputtxt">
                      <input type="text" class="form-control" id="address" placeholder="Address" name="address">
                    </div>
                    
                      <div class="mb-3 inputtxt">
                        <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                      </div>
                      <div class="mb-3 inputtxt">
                        <input type="text" class="form-control" id="type" placeholder="Type" name="type">
                      </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</section>

<br><br><br><br>
<?php include 'assets/footer.php'; ?>
</body>
</html>