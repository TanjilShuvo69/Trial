<?php 

if (isset($_REQUEST['submit'])) {
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $message = $_REQUEST['message'];
    if ($name || $email || $message !="") {
        $connect = mysqli_connect("localhost","root","","samin_portfolio");
        if (!$connect) {
            die ("Connection Failed!" . mysqli_error($connect));
        }
        $query = "INSERT INTO contact_data (name, email, message) VALUES ('$name', '$email', '$message')";
        $result = mysqli_query($connect, $query);
        header('location: contact.html');
    }
    header("location: contact.html");
}

?>
