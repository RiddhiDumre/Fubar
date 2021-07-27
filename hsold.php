<?php $name=$_COOKIE['name'] ?? 'Guest'; ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>evergreen</title>
</head>
<body>
    <video autoplay muted loop id="myVideo">
    <source src="images/HOLLY.mp4" type="video/mp4">
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
            <div class="fav" ><h1>HERE ARE SOME OF OUR FAVS!</h1>
            CLICK TO GET TO THE STREAMING SERVICE
            </div>
            <p>CLICK ON THE SONG NAME TO DIRECTLY GO TO THE STREAMING PLATFORM!!</p><br><br><br><br><br>

        <div class="list1" >
     

        <table>
<tr>
<td>
<ul style = "list-style-type:none;">
<li><a href = "https://www.youtube.com/watch?v=2YFYRYUoCPQ">Cant Help Falling In Love</a></li>
<li><a href = "https://www.youtube.com/watch?v=iv8GW1GaoIc">The Doors - Riders On The Storm</a></li>
<li><a href = "https://www.youtube.com/watch?v=-tJYN-eG1zk">Queen - We Will Rock You</a></li>
<li><a href = "https://www.youtube.com/watch?v=QkF3oxziUI4">Led Zeppelin - Stairway To Heaven</a></li>
<li><a href = "https://www.youtube.com/watch?v=CS9OO0S5w2k">Village People - YMCA OFFICIAL Music Video</a></li>
</ul>


</td>



<td>
<ul style = "list-style-type:none;">

<li><a href = "https://www.youtube.com/watch?v=fJ9rUzIMcZQ">Queen – Bohemian Rhapsody</a></li>
<li><a href = "https://www.youtube.com/watch?v=lDK9QqIzhwk">Bon Jovi - Livin On A Prayer</a></li>
<li><a href = "https://www.youtube.com/watch?v=9qIlIFHqHEQ">Tokens - The Lion Sleeps Tonight</a></li>
<li><a href = "https://www.youtube.com/watch?v=cs4RG9u8IVU">Nights in White Satin - The Moody Blues</a></li>
<li><a href = "https://www.youtube.com/watch?v=6D9vAItORgE">Guns N Roses - Live And Let Die</a></li>
</ul>
</td>

</table>
                    
                
             
        </div>
        <p>“I’m the king of the world!”</p>
    
</body>
</html>