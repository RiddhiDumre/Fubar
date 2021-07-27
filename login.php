<?php

    include ('createtable.php');
    $name=$email=$subscription=$age=$username=$password=$cpassword="";
    $error=array(
        'c_password'=>'',
        'c_username'=>''
    );
    $message="";
    if(isset($_POST['submit']))
    {
        $c_username=$_POST['c_username'];
        $c_password=$_POST['c_password'];
        $c_password=md5($c_password);
     ;
        if(empty($_POST['c_username']))
        {
            $error['c_username']= "Enter the username to log in <br/><br/>";
        }
        if(empty($_POST['c_password']))
        {
            $error['c_password']= "Enter the password to log in <br/><br/>";
        }
        if(count($_POST)>0) {
            $result = mysqli_query($conn,"SELECT * FROM Users WHERE username='" . $_POST["c_username"] . "' and password = '". $_POST["c_password"]."'");
            $count  = mysqli_num_rows($result);
        
            $row=mysqli_fetch_array($result);
            if($count==0) {
                $message= "Invalid Username or Password!";
            } else 
            {
                setcookie('name',$row["pname"],time() + (10 * 365 * 24 * 60 * 60));
                $message = "You are successfully authenticated!";
                header('Location:thankyou.php');
            }
        }
    }
?>
<!doctype HTML>
<html>
<head>
<style>
.red-text{
    font-weight: lighter;

}
</style>
<!-- <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="style.css"> -->
<?php include ('header.php'); ?>
<style>
   
    body{
     
        color: white;
        background-image: url(images/god.jpg);
    background-repeat: no-repeat;
    background-size: 100% 155% ;


 
}
.con {
            color: white;
            margin: auto;
            width: 50%;
            margin-top: 120px;
            height: 40%;
            border-radius: 15px;
           
            
        }
form{
    line-height: 1rem;
    border-radius: 10%;
    background-color: rgba(0, 0, 0, 0.3);
    color: white;
	text-align: center;
	Opacity :(100%);
}
nav {
    color: #fff !important;
    background-color: black !important;
    width: 100%;
    height: 56px;
    line-height: 56px;
}
label{
    font-size: large;
    color: white;
	
	text-align: center;
}
</style>
</head>
<body>
    <!--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> -->
      <!-- <a href="index.html"><img class="logo" src="images/f.png" width="40px" height="40px"  alt=""></a>
      <h3>FUBAR</h3>
        <nav class="nav-area">
            <li><a href="index.html">HOME</a></li>
            <li><a href="#">SEARCH</a></li>
            <li><a href="#">CONTACT</a></li>
            <li><a href="#">LOG-IN</a></li>
        </nav> -->
    <link rel="stylesheet" href="form.css">
    <div class="con">
    <form action="" method="POST">
    <label for="c_username">Name:</label><br/><br/>
        <input style="color: white;" type="text" name="c_name" id="c_name"><br/><br/>
        <label for="c_username">Enter Username:</label><br/><br/>
        <input style="color: white;" type="text" name="c_username" id="c_username"><br/><br/>
        <label for="c_password">Enter Password:</label><br/><br/>
        <input style="color: white;"type="password" name="c_password" id="c_password"><br/><br/>
        <div class="center">
            <input style="color: white;" type="submit" name="submit" value="submit" class="btn brand z-depth-0">
        </div>
    </form>
    </div>
    <div class="center">
        <div class="red-text"><?php echo $message;?></div><br><br>
</div>

</body>

</html>