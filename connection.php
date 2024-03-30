<?php
    $conn = mysqli_connect(
        'localhost', 
        'root',
        '',
        'sayan'
    );

    if($conn){
        echo "Connection made successfully";

    }else{
        echo "Failed to Connect with Database";
    }


    // Getting Data from the HTML Form
    $name = $_POST['name'];
    $studentCode = $_POST['studentCode'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    // Inserting data into the
    $sql = "INSERT INTO student_details (name, studentCode, email, phone, address) VALUES ('$name','$studentCode','$email','$phone','$address')";
    if (mysqli_query($conn, $sql)) {
        echo "Data Inserted Successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
?>