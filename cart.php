<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;500&display=swap" rel="stylesheet">
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css"
    integrity="sha384-X8QTME3FCg1DLb58++lPvsjbQoCT9bp3MsUU3grbIny/3ZwUJkRNO8NPW6zqzuW9" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Cart</title>
</head>

<body>

  <?php include 'assets/header.php'; ?>

	<section class="banner-sec">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
          <div class="banner-txt">
            
            <h1>CART</h1>
            
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


  
<!-- Carting Section -->
  <section class="carting">
    <div class="container">
      <div class="row">
        <div class="col-lg-9">
          <div class="table-area">
            <table class="table">
              <thead>
                <tr >
                  <th>Items</th>
                  <th class="quanity">Quantity</th>
                  <th class="unit">Unit Price</th>
                  <th class="subpr">Sub Price</th>
                  <th> </th>
                </tr>
              </thead>
              <tbody>
                <tr >
                  <td class="col-lg-5 pro1">
                    <div class="row">
                      <div class="col-lg-4">
                        <img src="../images/blue.png" alt="Product" class="img">
                      </div>
                      <div class="col-lg-8 itemdesc">
                      <p>Lorem ipsum</p>
                      <p>Gram: 50</p>
                      <p>30 Reviews</p>
                      </div>
                    </div>
                  </td>
                  <td class="col-lg-2">
                    <input type="number" class="num" value="1">
                    <div class="updatecart"><a href="#">Update Cart</a></div>
                  </td>
                  <td class="col-lg-2 unit">
                    <p>$22</p>
                  </td>
                  <td class="col-lg-2 subpr"><p>$22</p></td>
                  <td ><a href="#" class="xbox">x</a></td>
                </tr>
                <tr >
                  <td class="col-lg-5 pro1">
                    <div class="row">
                      <div class="col-lg-4">
                        <img src="../images/blue.png" alt="Product" class="img">
                      </div>
                      <div class="col-lg-8 itemdesc">
                      <p>Lorem ipsum</p>
                      <p>Gram: 50</p>
                      <p>30 Reviews</p>
                      </div>
                    </div>
                  </td>
                  <td class="col-lg-2">
                    <input type="number" class="num" value="1">
                    <div class="updatecart"><a href="#">Update Cart</a></div>
                  </td>
                  <td class="col-lg-2 unit">
                    <p>$22</p>
                  </td>
                  <td class="col-lg-2 subpr"><p>$22</p></td>
                  <td ><a href="#" class="xbox">x</a></td>
                </tr>
                
              </tbody>
            </table>
          </div>
          <div class="row">
            <div class="col-lg-5">
              <div class="cont-purchasing"><a href="Product.html">Continue Purchasing  ></a></div>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-5">
              <div class="checkoutproceed">
              <a href="checkout.html" style="text-decoration: none;">Proceed to Checkout</a></div>
              <div class="paymethod">
                <p>or Checkout With</p>
                <div class="paypal"><a href="#" ><img src="images/paypal.png" alt="paypal"></a></div>
              </div>
            </div>
          </div>
        </div>
      <div class="col-lg-3">
        <div class="row costotal">
          <div class="col-lg-9">
            <ul>
              <li>Sub Total</li>
              <li>Discount</li>
              <li>Shipping </li>
              <br>
              <li class="total">Total</li>
            </ul>

          </div>
          <div class="col-lg-3">
            <ul>
              <li>$76</li>
              <li>$10</li>
              <li>$30</li>
              <br>
              <li class="totalamount">$91</li>
            </ul>

          </div>
        </div>


        <div class="row shipping">
          <div class="col-lg-12 shipping-col">
            <h6>Shipping</h6>
            <p>Courier ($15)</p>
            <br>
            <h6>Estimate For</h6>
            <p>United Estate,NY,1230</p>

          </div>
          
        </div>

      </div>
    </div>
    </div>
  </section>


  <!-- Footer Naviagtor -->
  <?php include 'assets/footer.php'; ?>
</body>

</html>