<?php
    $hostname="localhost";
    $username="root";
    $password="";
    $db="FUBAR";
    
    
    $conn=mysqli_connect($hostname,$username,$password,$db);
    if (!$conn)
    {
        echo "UNSUCCESSFUL CONNECTION". mysqli_connect_error();
    }
    // $sql="CREATE TABLE Users(
    //     id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //     username TEXT NOT NULL,
    //     password TEXT NOT NULL,
    //     email VARCHAR(255) NOT NULL,
    //     age INT(3) NOT NULL,
    //     subscription VARCHAR(255) NOT NULL,
    //     pname VARCHAR(255) NOT NULL
    // )";
    // if(!mysqli_query($conn,$sql))
    // {
    //     echo "UNSUCCESSFULL TABLE CREATION". mysqli_error($conn);
    // }
?>
<!-- $message="Unsuccessful Connection";
        $connection=mysqli_connect_error();
        echo $connection;
        printmessage($message); 
        
        
        
                
        if (mysqli_query($conn, $sql)) {
          echo("student table created successfully <br><br>");
        } else {
          echo("Error creating table:<br><br>" . mysqli_error($conn));
        }
        
        mysqli_close($conn);-->