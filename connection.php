<?php 
    // $conn = mysqli_connect('localhost','root','','cloudasm') 
    // or die("Cannot connect database".mysqli_connect_error());

    $conn = mysqli_connect("pxukqohrckdfo4ty.cbetxkdyhwsb.us-east-1.rds.amazonaws.com",
    "jxg0ktpcnrzq1hwm","cfw0btqdv61xeg5u","ju8jnxwyt2xm89yq") 
    
    or die("Cannot connect database".mysqli_connect_error());

    mysqli_query($conn, 'SET NAMES "utf8"')
?>