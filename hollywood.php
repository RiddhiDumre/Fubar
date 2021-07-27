<?php $name=$_COOKIE['name'] ?? 'Guest'; ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hollywood</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
    <video autoplay muted loop id="myVideo">
        <source src="images/songs.mp4" type="video/mp4">
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
    
        <a href="hsparty.php"><img style="margin-left: 10%; margin-top: 8%; width: 70px;height: 70px;" src="images/dancing.png" alt=""></a>
        <a href="hsold.php"><img style="margin-left: 10%; margin-top: 8%;width: 70px;height: 70px;" src="images/old.png" alt=""></a>
        <a href="hsrap.php"><img style="margin-left: 10%; margin-top: 8%;width: 70px;height: 70px;" src="images/rapper.png" alt=""></a>
        <a href="acoustic.php"><img style="margin-left: 10%; margin-top: 8%;width: 70px;height: 70px;" src="images/guitar-black-shape.png" alt=""></a>
        <a href="1d.php"><img style="margin-left: 10%; margin-top: 8%;width: 70px;height: 70px;" src="images/heart-in-hands.png" alt=""></a>

       
        </div>
        <br><br><br><br><br><br>

        
    
        
  
  
</body>
</html>