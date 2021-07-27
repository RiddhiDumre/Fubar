<?php
    $conn=mysqli_connect('localhost','Nilay','Nilay0309','fubar');
    if(!$conn)
    {
        $message="Unsuccessful Connection";
        $connection=mysqli_connect_error();
        echo $connection;
        sleep(10);
        printmessage($message);
    }
    function printmessage($message)
    {
        echo ("<script>alert('$message');</script>");
    }
?>