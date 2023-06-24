<?php 
    // $conn = mysqli_connect('localhost','root','','cloudasm') 
    // or die("Cannot connect database".mysqli_connect_error());

    $conn = mysqli_connect("eanl4i1omny740jw.cbetxkdyhwsb.us-east-1.rds.amazonaws.com","ljdcf3079dfljyl1","l8cuygys3t6nouaa","n85kk1tp6uq035fm") 
    or die("Cannot connect database".mysqli_connect_error());

    mysqli_query($conn, 'SET NAMES "utf8"')
?>