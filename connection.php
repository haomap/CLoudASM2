<?php 
    // $conn = mysqli_connect('localhost','root','','cloudasm') 
    // or die("Cannot connect database".mysqli_connect_error());

    $conn = mysqli_connect("co28d739i4m2sb7j.cbetxkdyhwsb.us-east-1.rds.amazonaws.com","qjyikc5pc19x620g","dowlcekrckr1rxj2","z79rnbmx4isefzu0") 
    or die("Cannot connect database".mysqli_connect_error());

    mysqli_query($conn, 'SET NAMES "utf8"')
?>