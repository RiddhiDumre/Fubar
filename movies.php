<?php $name=$_COOKIE['name'] ?? 'Guest'; ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
    <video autoplay muted loop id="myVideo">
        <source src="images/Gradient Liquid Red Shapes Looped Animation Background Free Version.mp4" type="video/mp4">
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
    <div class="icons">
    
        <a href="drama.php"><img style="margin-left: 10%; margin-top: 8%;" src="images/drama-64.png" alt=""></a>
        <a href="musical.php"><img style="margin-left: 10%; margin-top: 8%;" src="images/musical-note-64.png" alt=""></a>
        <a href="comedy.php"><img style="margin-left: 10%; margin-top: 8%;" src="images/comedy-2-64.png" alt=""></a>
        <a href="horror.php"><img style="margin-left: 10%; margin-top: 8%;" src="images/triller-64.png" alt=""></a>
        <a href="scifi.php"><img style="margin-left: 10%; margin-top: 8%;" src="images/sci-fi-64.png" alt=""></a>
        <a href="sports.php"><img style="margin-left: 10%; margin-top: 8%;" src="images/sport-64.png" alt=""></a>
        <a href="action.php"><img style="margin-left: 10%; margin-top: 8%;" src="images/action-64.png" alt=""></a>
        <a href="crime.php"><img style="margin-left: 10%; margin-top: 8%;" src="images/crime-64.gif" alt=""></a>
        <a href="fantasy.php"><img style="margin-left: 10%; margin-top: 8%;" src="images/fantasy-64.png" alt=""></a>
        <a href="classic.php"><img style="margin-left: 10%; margin-top: 8%;" src="images/detective-64.png" alt=""></a>
        <a href="romantic.php"><img style="margin-left: 10%; margin-top: 8%;" src="images/novel-64.png" alt=""></a>
        <a href="thriller.php"><img style="margin-left: 10%; margin-top: 8%;" src="images/historical-64.png" alt=""></a>
    
        </div>
    
    <p>“To infinity and beyond!”</p>
  
</body>
</html>