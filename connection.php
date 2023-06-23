<?php 
    // $conn = mysqli_connect('localhost','root','','cloudasm') 
    // or die("Cannot connect database".mysqli_connect_error());

    $conn = mysqli_connect("l0ebsc9jituxzmts.cbetxkdyhwsb.us-east-1.rds.amazonaws.com","kzz6wrcbj4kyflfq","swp43hheb82lm44z","qvma6i9xvv07wovb") 
    or die("Cannot connect database".mysqli_connect_error());

    mysqli_query($conn, 'SET NAMES "utf8"')
?>