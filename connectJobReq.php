<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contactNo = $_POST['contactNo'];
    $comment = $_POST['comment'];

    // Database connection
    $conn = new mysqli('localhost','root','','jobrequest');
    if($conn->connect_error){
        die('Connection Failed :' .$conn->connect_error);
    }else{
        $stmt= $conn->prepare("insert into jobapplication(name,email,contactNo,comment)values(?,?,?,?)");
        $stmt->bind_param("sssi",$name,$email,$contactNo,$comment);
        $stmt->execute();
        echo "ragistraton successfuly";
        $stmt->close();
        $conn->close();
    }
?>