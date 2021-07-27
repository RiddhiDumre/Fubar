<?php $name=$_COOKIE['name'] ?? 'Guest'; ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SONGS</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
    <video autoplay muted loop id="myVideo">
        <source src="images/12.mp4" type="video/mp4">
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
            MAKE A CHOICE!!
        </div>
    <div class="icons2" style="margin-left: 15%;" >

        
        <a href="hollywood.php"><img style="margin-left:7%; margin-top:6%;" src="images/img_63167 (1).png" width="400px" height="100px" alt=""></a> 
        <a href="bollywood.php"><img style="margin-left:7%; margin-top:6%;" src="images/bb.png" width="400px" height="80px" alt=""></a> 
       
    </div>
    
    <p>“To infinity and beyond!”</p>
  
</body>
</html>