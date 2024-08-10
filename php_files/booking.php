<?php
require_once('server.php');

if($_SERVER['REQUEST_METHOD']=='POST'){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $peoples = intval($_POST['people']);
    $address = $_POST['address'];
    $date = $_POST['date'];
    $hotel = $_POST['hotel'];
    $destination = $_POST['destination_id'];

    $query = "INSERT INTO booking (cust_name,dest,cust_email,no_of_peoples,cust_address,date,hotel) values('$name','$destination','$email','$peoples','$address','$date','$hotel')";

    if(mysqli_query($connections,$query)){
        echo "<div style='margin: auto; color:green; text-align:center; padding:12px; font-size:20px;'> Congratulations! your booking confirmed. </div>";
    }
    else{
        echo"your message is not delivered! try again.";
    }
}
mysqli_close($connections);
?>