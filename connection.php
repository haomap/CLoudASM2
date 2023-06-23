<?php 
    // $conn = mysqli_connect('localhost','root','','cloudasm') 
    // or die("Cannot connect database".mysqli_connect_error());

    $conn = mysqli_connect("l0ebsc9jituxzmts.cbetxkdyhwsb.us-east-1.rds.amazonaws.com","glor6xrp9sme9tdb","wm0k7utsrzyfen1c","ziq2ocu4st66m068") 
    or die("Cannot connect database".mysqli_connect_error());

    mysqli_query($conn, 'SET NAMES "utf8"')
?>