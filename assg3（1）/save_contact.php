<?php

include 'db.php';

$name = mysqli_real_escape_string($conn,$_POST['name']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$message = mysqli_real_escape_string($conn,$_POST['message']);

$sql = "INSERT INTO contact_messages
(name,email,message)
VALUES
('$name','$email','$message')";

if(mysqli_query($conn,$sql))
{
    header("Location: contact.php?success=1");
    exit();
}
else
{
    echo mysqli_error($conn);
}

?>