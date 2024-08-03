<?php
require_once('server.php');

if($_SERVER["REQUEST_METHOD"] =="POST")
{
    $username = $_POST['name'];
    $useremail = $_POST['email'];
    $usermsg= $_POST['message'];


    $query = "INSERT INTO contact_us (user_name,user_email,user_msg) values('$username','$useremail','$usermsg')";

    if(mysqli_query($connections,$query)){
        echo "your message has been delivered";
    }
    else{
        echo"your message is not delivered! try again.";
    }
}
mysqli_close($connections);
?>