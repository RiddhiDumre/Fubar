<?php $name=$_COOKIE['name'] ?? 'Guest'; ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>rap</title>
</head>
<body>
    <video autoplay muted loop id="myVideo">
        <source src="images/Bouncing_DVD_logo[Youtubetomp3.sc].mp4" type="video/mp4">
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
<li><a href = "https://open.spotify.com/track/7ytR5pFWmSjzHJIeQkgog4">ROCKSTAR</a></li>
<li><a href = "https://open.spotify.com/track/02kDW379Yfd5PzW5A6vuGt">LEMONADE </a></li>
<li><a href = "https://open.spotify.com/track/0PvFJmanyNQMseIFrU708S">FOR THE NIGHT</a></li>
<li><a href = "https://open.spotify.com/track/5nWVyZaCwtfAkBnwDuXjBh">SPICY</a></li>
<li><a href = "https://open.spotify.com/track/6EDO9iiTtwNv6waLwa1UUq">POPSTAR</a></li>

</ul>


</td>



<td>
<ul style = "list-style-type:none;">

<li><a href = "https://open.spotify.com/track/2MbdDtCv5LUVjYy9RuGTgC">WHATS POPPIN</a></li>
<li><a href = "https://open.spotify.com/track/4jVBIpuOiMj1crqd8LoCrJ">FRANCHISE</a></li>
<li><a href = "https://open.spotify.com/track/6WTpvfT2YnooMKKwRx23AR">PISTOL</a></li>
<li><a href = "https://open.spotify.com/album/4otkd9As6YaxxEkIjXPiZ6">GODZILLA</a></li>
<li><a href = "https://open.spotify.com/track/3nS9a01VvXHQriLqJYwRqG">DOLLAZ ON MY HEAD</a></li>
</ul>
</td>

</table>
                    
                
             
        </div>
        <p>“I’m the king of the world!”</p>
    
</body>
</html>