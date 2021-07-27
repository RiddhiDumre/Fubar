<?php $name=$_COOKIE['name'] ?? 'Guest'; ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>party</title>
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
<li><a href = "https://open.spotify.com/album/4yP0hdKOZPNshxUOjY0cZj">BLINDING LIGHTS</a></li>
<li><a href = "https://open.spotify.com/album/0dnmmbHWt1kH47FWDhwBHq">Savage Love(Laxed - Siren Beat) </a></li>
<li><a href = "https://open.spotify.com/album/3ZJSoxsPMkNC9eb6gUn0Q8">SUPALONELY</a></li>
<li><a href = "https://open.spotify.com/album/6K4chJALBBMYmXjwgvqahx">Dynamite(DayTime Version) </a></li>
<li><a href = "https://open.spotify.com/album/40LbnfieVTWtHrK24WQeEB">CANT STOP THE FEELING!</a></li>
</ul>


</td>



<td>
<ul style = "list-style-type:none;">

<li><a href = "https://www.youtube.com/watch?v=V_ZsbqSg4aE">MY POWER</a></li>
<li><a href = "https://open.spotify.com/album/5glfCPECXSHzidU6exW8wO">Head & Heart(feat.MNEK) </a></li>
<li><a href = "https://open.spotify.com/album/3tuAs968COA2vxKjiLvmxr">Tick Tock(feat. 24kGoldn) </a></li>
<li><a href = "https://open.spotify.com/album/3mMWlBGocBwsS1Q0o9wvlc">SUNDAY BEST</a></li>
<li><a href = "https://open.spotify.com/playlist/06S64oWn7uGnfGrwjh5IWb">Heaven On My Mind(with Sigala) </a></li>
</ul>
</td>

</table>
                    
                
             
        </div>
        <p>“I’m the king of the world!”</p>
    
</body>
</html>