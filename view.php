<?php

echo 'hi';exit;

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$message = $_POST['message'];

// if (!empty($fname) || !empty($lname) || !empty($email) || !empty($message)) {
//     $host = "localhost";
//     $dbusername = "root";
//     $dbpassword = "";
//     $dbname = "college_details";

//     $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

//     if (mysqli_connect_error()) {
//         die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
//     } else {
//         $SELECT = "SELECT email FROM students WHERE email=? LIMIT 1";
//         $INSERT = "INSERT INTO students (fname, lname, email, message) VALUES (?, ?, ?, ?)";

//         $stmt = $conn->prepare($SELECT);
//         $stmt->bind_param("s", $email);
//         $stmt->execute();
//         $stmt->bind_result($email);
//         $stmt->store_result();
//         $rnum = $stmt->num_rows;
        
//         if ($rnum == 0) {
//             $stmt->close();
//             $stmt = $conn->prepare($INSERT);
//             $stmt->bind_param("ssss", $fname, $lname, $email, $message);
//             $stmt->execute();
//             echo "New Record Inserted Successfully";
//         } else {
//             echo "Someone already registered using this email";
//         }
//         $stmt->close();
//         $conn->close();
//     }
// }
?>
