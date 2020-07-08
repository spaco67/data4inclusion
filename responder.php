<?php

$connection = mysqli_connect("localhost","dataincl_db","data4inclusion","dataincl_db");


//Check that the transaction contains a valid message id

if (isset($_POST[‘id’]) && $_POST[‘id’] != “”){
    $messageId = $_POST["id"];
    $phone = $_POST["phone"];
    $network = $_POST["network"];
    $shortcode = $_POST["shortcode"];
    $message = $_POST["message"];
    
//check for empty message

$query = "INSERT INTO shortcode_msg(id,message_id,phone,network,shortcode,message) VALUES ('?','$messageId','$phone','$network','$shortcode','$message')";

$query_run = mysqli_query($connection, $query);

}

?>