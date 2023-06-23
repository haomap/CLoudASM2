<?php 
    // $conn = mysqli_connect('localhost','root','','cloudasm') 
    // or die("Cannot connect database".mysqli_connect_error());

    $conn = mysqli_connect("u6354r3es4optspf.cbetxkdyhwsb.us-east-1.rds.amazonaws.com","srbfoq4iu1fa75mm","mni1wlnjr1v56ibt","vs9ynvsx7zs2180x") 
    or die("Cannot connect database".mysqli_connect_error());

    mysqli_query($conn, 'SET NAMES "utf8"')
?>