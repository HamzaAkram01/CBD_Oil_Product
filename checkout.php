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
        <title>Checkout</title>
    </head>
<body>
<?php include 'assets/header.php'; ?>

    <section class="banner-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="banner-txt">
                        
                        <h1>CHECKOUT</h1>
                        
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

    <section class="billing-details-form1">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-8 billingportion1">
					<form>
						<div class="bill-det1">
							<h4>Billing Details</h4>
							<div class="row">
								<div class="col-lg-5 col-5">
									<div class="fname1">
										<label>First name*</label>
										<input type="text" name="fname">
									</div>
								</div>
								<div class="col-lg-5 col-5">
									<div class="lname1">
										<label>Lastname*</label>
										<input type="text" name="lname">
									</div>
								</div>
							</div>
							<label>Company name(optional)</label><br>
							<input type="text" name="companyname" class="xbox1"><br>
							<div class="placeeditor1">
								<label>Country/Region*</label><br>
								<input type="text" name="country" placeholder="United States(US)" class="xbox1"><br>

								<label>Street Address</label><br>
								<input type="text" name="stadd" placeholder="House number and street name" class="xbox1"><br>
								<input type="text" name="stadd2" placeholder="Appartment, suite, unit, etc (optional)" class="xbox1">
							</div>
							<div class="row">
								<div class="col-lg-5 col-5">
									<div class="fname1">
										<label>Town/City*</label>
										<input type="text" name="fname">
									</div>
								</div>

								<div class="col-lg-5 col-5">
									<div class="lname1">
										<label>State*</label>
										<input type="text" name="lname">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-5 col-5">
									<div class="fname1">
										<label>ZIP*</label>
										<input type="text" name="fname">
									</div>
								</div>

								<div class="col-lg-5 col-5">
									<div class="lname1">
										<label>Phone*</label>
										<input type="text" name="lname">
									</div>
								</div>
							</div>
							<label>Email address*</label><br>
							<input type="text" name="email" class="xbox1">
						</div>

					</form>

					
				</div>

				<div class="col-lg-4 col-4">
					<div class="place-order">
						<h4>Your Order</h4>
						<h6>Product</h6><hr>

						<div class="reciept">
							<div class="row">
								<div class="col-lg-9 col-9">
								<p>Palm Print Jacket x1</p>
								</div>
								<div class="col-lg-3 col-3">
								<p>$40.00</p>
								</div>
						</div>
							
						</div>

						<div class="reciept">
							<div class="row">
								<div class="col-lg-9 col-9">
								<p>Palm Print Jacket x1</p>
								</div>
								<div class="col-lg-3 col-3">
								<p>$60.00</p>
								</div>
							</div>

						<div class="subtotal">
							<div class="row">
								<div class="col-lg-9 col-9">
								<h5 class="subtotal-h5">Subtotal</h5>
								</div>
								<div class="col-lg-3 col-3">
								<h5 class="subtotal-amount">$100.00</h5>
								</div>
							</div>
						</div>

						<div class="ship">
							<h5>Shipping</h5>
							 <input type="checkbox">
							  <label for="vehicle1">Free Shipping</label><br>

							  <input type="checkbox">
							  <label for="vehicle1">Local Pickup</label><br>

							  <input type="checkbox">
							  <label for="vehicle1">Flat Rate: $5.00</label><br>
						</div>	
					</div>
					<hr>

					<div class="subtotal">
							<div class="row">
								<div class="col-lg-9 col-9">
								<h5>Total</h5>
								</div>
								<div class="col-lg-3 col-3">
								<h5>$100.00</h5>
								</div>
							</div>
						</div><hr>

						<div class="payment-method">
							<h5>Payment Methods</h5>
								
									<input type="radio" class="radio-color" name="fav_language">
									 <label>Direct Bank Transfer</label><br>
									 <input type="radio" class="radio-color" name="fav_language">
									<label>Check Payments</label><br>
									<input type="radio" class="radio-color" name="fav_language">
									 <label>Cash on delivery</label><br>
									 <input type="radio" class="radio-color" name="fav_language">
									 <label>PayPal</label>
								
						</div><hr>
						<div class="order-btn">
						<button class="place-btn">PLACE ORDER</button>
						</div>
				</div>
				</div>

					
		</div>	
	</section>

	<?php include 'assets/footer.php'; ?>
</body>
</html>