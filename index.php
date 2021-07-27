<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="styles.css">
  <title>FUBAR.COM</title>
    <?php
        $name=$_COOKIE['name'] ?? 'Guest';
    ?>
</head>

<body>
    
    <video autoplay muted loop id="myVideo">
        <source src="images/back1.mp4" type="video/mp4">
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
  

<div class="content">

    LETS GET GOIN!! <br><br>

    <button >
        <a href="movies.php">MOVIES</a>
    </button>
    <button>
        <a href="songs.php">SONGS</a>
    </button>
    <button>
        <a href="tv.php"> TV SERIES</a>
       

    </button>

</div>
    <!-- style="margin-top: 300px;" -->
    <div  class="footer">
    <ul>
        <li><a href="https://bit.ly/2HyFl6d"><img src="images/icons8-facebook-64.png" width="30px" height="30px" alt=""></a></li>

         <li><a href="https://bit.ly/34CFDBH"><img src="images/icons8-instagram-64.png" width="30px" height="30px" alt=""></a></li>

         <li><a href="https://bit.ly/2TyNFVU"><img src="images/icons8-twitter-circled-64.png" width="30px" height="30px" alt=""></a></li>

         <li><a href="https://bit.ly/2TyOoWS"><img src="images/icons8-linkedin-64.png" width="30px" height="30px" alt=""></a></li>
         <li><a href="mailto:nilay0160@gmail.com"><img src="images/email.png" width="27px" height="27px" alt=""></a></li>

         <li><a href="tel:+919987207322"><img src="images/phone-call.png" width="25px" height="25px" alt=""></a></li>
    </ul>

  

</div>

</body>
</html>
