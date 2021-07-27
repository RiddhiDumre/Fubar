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
<li><a href = "https://youtu.be/ktvTqknDobU">Imagine Dragons - Radioactive</a></li>
<li><a href = "https://www.youtube.com/watch?v=mWRsgZuwf_8">Imagine Dragons - Demons</a></li>
<li><a href = "https://www.youtube.com/watch?v=YiZCzG4RF1M">Imagine Dragons-Mouth Of The River</a></li>
<li><a href = "https://www.youtube.com/watch?v=sENM2wA_FTg">Imagine Dragons - Its Time</a></li>
<li><a href = "https://www.youtube.com/watch?v=fKopy74weus">Imagine Dragons - Thunder</a></li>

</ul>


</td>



<td>
<ul style = "list-style-type:none;">

<li><a href = "https://www.youtube.com/watch?v=kcMU_iT9aDM">Imagine Dragons - Bleeding Out</a></li>
<li><a href = "https://www.youtube.com/watch?v=7wtfhZwyrcc">Imagine Dragons - Believer</a></li>
<li><a href = "https://www.youtube.com/watch?v=VDPnaTQF6Dw">Imagine Dragons - Smoke And Mirrors</a></li>
<li><a href = "https://www.youtube.com/watch?v=1nv9br7P7g0">Walking The Wire</a></li>
<li><a href = "https://www.youtube.com/watch?v=gOsM-DYAEhY">Whatever It Takes</a></li>
</ul>
</td>

</table>
                    
                
             
        </div>
        <p>“I’m the king of the world!”</p>
    
</body>
</html>