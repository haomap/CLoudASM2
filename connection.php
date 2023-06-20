<?php 
    // $conn = mysqli_connect('localhost','root','','cloudasm') 
    // or die("Cannot connect database".mysqli_connect_error());

    $conn = mysqli_connect("ckshdphy86qnz0bj.cbetxkdyhwsb.us-east-1.rds.amazonaws.com","bpvhn98qt65r76y7","nmmxs9gyp021u8ch","qpjuxcw0enyg0jyg") 
    or die("Cannot connect database".mysqli_connect_error());

    mysqli_query($conn, 'SET NAMES "utf8"')
?>