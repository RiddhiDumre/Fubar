<?php $name=$_COOKIE['name'] ?? 'Guest'; ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bollywood</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
    <video autoplay muted loop id="myVideo">
        <source src="images/old_Trim.mp4" type="video/mp4">
      </video>
      <header>
      <a href="index.php"><img class="logo" src="images/f.png" width="40px" height="40px"  alt=""></a>
      <h3 style=" margin-left: -55%;">UBAR</h3>
        <nav class="nav-area">
            <li>Hello <?php echo htmlspecialchars($name)?></li>
            <li><a href="index.php">HOME</a></li>
            <li><a href="search.php">SEARCH</a></li>
            <li><a href="contac.php">CONTACT</a></li>
            <li><a href="login.php">LOG-IN</a></li>
            <li><a href="forms1.php">SIGN-IN</a></li>
        </nav>
    
    </header>
        <div class="gen" >
            SELECT YOUR GENRE
        </div>
    <div class="icons" style="margin-top:5%; margin-left: 5%; margin-bottom: 4%;" >
    
        <a href="sparty.php"><img style="margin-left: 10%; margin-top: 8%; width: 70px;height: 70px;" src="images/party.png" alt=""></a>
        <a href="sromance.php"><img style="margin-left: 10%; margin-top: 8%;width: 70px;height: 70px;" src="images/hearts.png" alt=""></a>
        <a href="sclassic.php"><img style="margin-left: 10%; margin-top: 8%;width: 70px;height: 70px;" src="images/valentine-giftbox-open.png" alt=""></a>
        <a href="ssoul.php"><img style="margin-left: 10%; margin-top: 8%;width: 70px;height: 70px;" src="images/heart-in-hands.png" alt=""></a>
        <a href="sdance.php"><img style="margin-left: 10%; margin-top: 8%;width: 70px;height: 70px;" src="images/dancing.png" alt=""></a>
       
        </div>
        <br><br><br><br><br><br>

        <!-- <p1 style="margin-left: 38%; position: relative;" >DIDN'T FIND WHAT YOU WHERE LOOKING FOR? </p1><br><br>
        <p2 style="margin-left: 43%; position: relative;"> CLICK<a href="search.html"> HERE</a>TO SEARCH</p2>  -->
    
        
  
  
</body>
</html>