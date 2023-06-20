<?php 
    // $conn = mysqli_connect('localhost','root','','cloudasm') 
    // or die("Cannot connect database".mysqli_connect_error());

    $conn = mysqli_connect("ble5mmo2o5v9oouq.cbetxkdyhwsb.us-east-1.rds.amazonaws.com","jslq9yw85mfk1nvi","j8drkarhkj4y7n0s","oxjhitm9u64p4n80") 
    or die("Cannot connect database".mysqli_connect_error());

    mysqli_query($conn, 'SET NAMES "utf8"')
?>