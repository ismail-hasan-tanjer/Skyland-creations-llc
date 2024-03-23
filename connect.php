<?php
    $userName = $_POST['userName'];
    $password = $_POST['password'];
    $cPassword = $_POST['cPassword'];
    $email = $_POST['email'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];

    //Database connection 
    $conn = new mysqli('localhost', 'root', '', 'sky_land_creations');

    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into registration(userName, password, cPassword, email, firstName, lastName)values(?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssi", $userName, $password, $cPassword, $email, $firstName, $lastName);
        $stmt->execute();
        echo "registration successfully...";
        $stmt->close();
        $conn->class();
    }


?>
