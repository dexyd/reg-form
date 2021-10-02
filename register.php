<?php

$fullname = $_POST["fullname"];
$age = $_POST["age"];
$phone = $_POST["phone"];
$whatsapp = $_POST["whatsapp"];
$email = $_POST["email"];
$states = $_POST["states"];
$residence = $_POST["residence"];
$how = $_POST["how"];

if (!empty($fullname) || !empty($age) || 
!empty($phone) || !empty($whatsapp) || !empty($email) || 
!empty($states) || !empty($residence) || !empty($how)) {

    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "";

    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    if (mysqli_connect_error()) {
        die('Connect Error('. mysqli_connect_errno(). ')' . mysqli_connect_error());
    } else {
        $SELECT = "SELECT email FROM registration WHERE email = ? Limit 1";
        $INSERT = "INSERT INTO registration (fullname, age, phone, 
        whatsapp, email, states, residence, how, dateadded) VALUES (?, ?, ?, ?, ?, ?, ?, ?, now() )";
    };
    //Prepare statement
    $stmt = $conn->prepare($SELECT);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($email);
    $stmt->store_result();
    $rnum = $stmt->num_rows;

    if ($rnum==0) {
        $stmt->close();

        $stmt = $conn->prepare($INSERT);
        $stmt->bind_param("sissssss", $fullname, $age, $phone, $whatsapp, $email, $states, $residence, $how);

        $stmt->execute();
        echo '<script type="text/javascript">
                alert("CONGRATULATIONS ON YOUR SUCCESSFUL REGISTRATION!");
                location.href = "./";
              </script>';
    } else {
        echo '<script type="text/javascript"> 
        alert("ERROR! You already registered using this email. To continue, try a different email.");
        location.href = "./";
      </script>';
      }
    $stmt->close();
    $conn->close();
    } else {
    echo '<script type="text/javascript"> 
            alert("All fields are required, please fill all!");
            location.href = "./";
          </script>';
    die();
}

?>
