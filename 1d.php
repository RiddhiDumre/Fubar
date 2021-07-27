<?php $name=$_COOKIE['name'] ?? 'Guest'; ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>drama</title>
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
<li><a href = "https://www.youtube.com/watch?v=SlPhMPnQ58k">Maroon 5 - Memories</a></li>
<li><a href = "https://www.youtube.com/watch?v=aJOTlE1K90k">Maroon 5 - Girls Like You</a></li>
<li><a href = "https://www.youtube.com/watch?v=09R8_2nJtjg">Maroon 5 - Sugar</a></li>
<li><a href = "https://www.youtube.com/watch?v=ANS9sSJA9Yc">Maroon 5 - Dont Wanna Know</a></li>
<li><a href = "https://www.youtube.com/watch?v=fwK7ggA3-bU">Maroon 5 - One More Night</a></li>>



</ul>


</td>



<td>
<ul style = "list-style-type:none;">

<li><a href = "https://www.youtube.com/watch?v=KRaWnd3LJfs">Maroon 5 - Payphone</a></li>
<li><a href = "https://www.youtube.com/watch?v=NmugSMBh_iI">Maroon 5 - Maps(Explicit) </a></li>
<li><a href = "https://www.youtube.com/watch?v=5Wiio4KoGe8">Maroon 5 - What Lovers Do</a></li>
<li><a href = "https://www.youtube.com/watch?v=qpgTC9MDx1o">Maroon 5 - Animals</a></li>
<li><a href = "https://www.youtube.com/watch?v=iEPTlhBmwRg">Maroon 5 - Moves Like Jagger</a></li>
</ul>
</td>

</table>
                    
                
             
        </div>
        <p>“I’m the king of the world!”</p>
    
</body>
</html>