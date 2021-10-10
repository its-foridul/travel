<?php

    $conn = new mysqli('localhost', 'root', 'root','travel' );

    if($conn->connect_error){
        die("<br> failed to connect <br>").$conn->connect_error;
    }else{
        echo "Successfully Connected";
    }

    if(isset($_POST['submit'])){

        $name = $_POST['name'];
        $location = $_POST['location'];
        $email = $_POST['email'];
        $packages = $_POST['packages'];

        $sql = "INSERT INTO members (name, location, email, packages) values ('$name','$location','$email', '$packages')";

        $result = mysqli_query($conn, $sql);

        if($result){
            header('location:index.html');
        }

    }



?>