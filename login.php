<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $conn = mysqli_connect("localhost", "root", "", "websitelogin");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM logindetails WHERE email='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "Login successful!";
    } else {
        echo "Invalid username or password";
    }
    mysqli_close($conn);
}
?>
                  