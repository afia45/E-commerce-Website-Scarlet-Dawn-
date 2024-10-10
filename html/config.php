<?php
$conn=mysqli_connect('localhost','root','','checkout_db') or die('connection failed');



if(isset($_POST['save'])){
    $prod_name=$_POST['prod_name'];
    $prod_price=$_POST['prod_price'];
    $color=$_POST['color'];
    $cardname=$_POST['cardname'];
    $cardnumber=$_POST['cardnumber'];
    $expmonth=$_POST['expmonth'];
    $expyear=$_POST['expyear'];
    $cvv=$_POST['cvv'];
    $city=$_POST['city'];
    $states=$_POST['states'];
    $zip=$_POST['zip'];

    $sql_query="INSERT INTO checkout(prod_name,prod_price,color,cardname,cardnumber,expmonth,expyear,cvv,city,states,zip) VALUES ('$prod_name','$prod_price','$color','$cardname','$cardnumber','$expmonth','$expyear','$cvv','$city','$states','$zip')";

    if(mysqli_query($conn,$sql_query)){
        echo "Checkout completed!";
    }

    else{
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>