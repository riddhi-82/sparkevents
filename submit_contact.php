<?php

include 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$sql = "INSERT INTO inquiries
(name,email,phone,subject,message)
VALUES
('$name','$email','$phone','$subject','$message')";

if(mysqli_query($conn,$sql))
{
    echo "<h2>Inquiry Submitted Successfully!</h2>";
}
else
{
    echo mysqli_error($conn);
}

?><?php
