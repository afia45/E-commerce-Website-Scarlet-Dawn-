<!-- <?php
    $img=   $_POST['product_img'];
    $name=  $_POST['product_name'];
    $price= $_POST['product_price'];

    echo "$image, $name, $price"
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="css/checkout.css?<?php echo time(); ?>">
</head>
<body>
    <section>
      
        
    </section>
    <form action="config.php" method="post">
            <div class="product">
              <h3>Product Details</h3>
              <h5>Product Name: <?php echo $_POST["prod_name"]?></h5>
              <h5>Product Price: <?php echo $_POST["prod_price"]?></h5>
              <div class=color>
                <h5>Color: <h5>
                <select id="color" name="color">
                  <option value="purple">Purple</option>
                  <option value="blue">Blue</option>
                  <option value="red">Red</option>
                </select>
              </div>
              
            </div>
            <div class="col-50">
              <h3>Payment Details</h3>
              <!-- <label for="fname">Accepted Cards</label> -->
              <!-- <div class="icon-container">
                <i class="fa fa-cc-visa" style="color:navy;"></i>
                <i class="fa fa-cc-amex" style="color:blue;"></i>
                <i class="fa fa-cc-mastercard" style="color:red;"></i>
                <i class="fa fa-cc-discover" style="color:orange;"></i>
              </div> -->
              <input type="hidden" name="prod_name" value="<?php echo $_POST['prod_name'];?>">
              <input type="hidden" name="prod_price" value="<?php echo $_POST['prod_price'];?>">
              <!--888888888888888888888888888888888888888888888888888-->
              <label for="cname">Name on Card</label>
              <input type="text" id="cname" name="cardname" placeholder="John More Doe">
              <label for="ccnum">Credit card number</label>
              <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
              <label for="expmonth">Exp Month</label>
              <input type="text" id="expmonth" name="expmonth" placeholder="September">
              <div class="row">
                <div class="col-50">
                  <label for="expyear">Exp Year</label>
                  <input type="text" id="expyear" name="expyear" placeholder="2018">
                </div>
                <div class="col-50">
                  <label for="cvv">CVV</label>
                  <input type="text" id="cvv" name="cvv" placeholder="352">
                </div>
              </div>
            </div>
            
          </div>
          <div class="col-50">
              <h3>Delivery Details</h3>
              <!-- <label for="fname">Accepted Cards</label> -->
              <!-- <div class="icon-container">
                <i class="fa fa-cc-visa" style="color:navy;"></i>
                <i class="fa fa-cc-amex" style="color:blue;"></i>
                <i class="fa fa-cc-mastercard" style="color:red;"></i>
                <i class="fa fa-cc-discover" style="color:orange;"></i>
              </div> -->
              <label for="ccity">City</label>
              <input type="text" id="ccity" name="city" placeholder="New York">
              <label for="cstate">State</label>
              <input type="text" id="cstate" name="states" placeholder="NY">
              <label for="zip">Zip</label>
              <input type="text" id="zip" name="zip" placeholder="10001">

            
          </div>
          <!-- <label>
            <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
          </label> --><br>
          <input type="submit" value="Checkout" class="btn" name="save">
    </form>

    <!-- <script>
        const img = sessionStorage.getItem('product-img');
        const name = sessionStorage.getItem('product-name');
        const price = sessionStorage.getItem('product-price');

        document.getElementById('product-img').textContent = img;
        document.getElementById('product-name').textContent = name;
        document.getElementById('product-price').textContent = price;

    </script> -->
</body>
</html>