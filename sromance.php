<?php $name=$_COOKIE['name'] ?? 'Guest'; ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>romance</title>
</head>
<body>
    <video autoplay muted loop id="myVideo">
    <source src="images/bolly.mp4" type="video/mp4">
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
<li><a href = "https://youtu.be/Umqb9KENgmk">Tum Hi Ho, Aashiqui 2 </a > </li>
<li><a href = "https://youtu.be/qoq8B8ThgEM">Tujh Mein Rab Dikhta Hai, Rab Ne Bana Di Jodi </a></li>
<li><a href = "https://youtu.be/mt9xg0mmt28">Tum Se Hi, Jab We Met </a></li>
<li><a href = "https://youtu.be/BlHjfL0pcsw">Dil Toh Baccha Hai Ji, Ishqiya</a></li>
<li><a href = "https://www.youtube.com/watch?v=eN6AYHAT8UM">Yaad Piya Ki Aane Lagi(FROM: TSERIES)</a></li>
<li><a href = "https://www.youtube.com/watch?v=SAcpESN_Fk4">Dil Diyan Gallan(FROM:TIGER ZINDA HAI)</a></li>
<li><a href = "https://www.youtube.com/watch?v=lgTHGZF3BQw">Pal Pal Dil Ke Paas</a></li>

</ul>


</td>



<td>
<ul style = "list-style-type:none;">

<li><a href = "https://www.youtube.com/watch?v=hVCYwwFwGEE">Duniyaa(FROM:LUKA CHUPPI)</a></li>
<li><a href = "https://www.youtube.com/watch?v=Qdz5n1Xe5Qo">Tera Ban Jaunga(FROM:KABIR SINGH)</a></li>
<li><a href = "https://www.youtube.com/watch?v=g4HDfqEWf6Y">Tujhe Kitna Chahne Lage(FROM:KABIR SINGH) Oh Humsafar(FROM: TSERIES)</a></li>
<li><a href = "https://www.youtube.com/watch?v=yVImQoGNdTE">Yaar Bina Chain Kahan Re(FROM:SAAHEB)</a></li>
<li><a href = "https://www.youtube.com/watch?v=eS29KERO_d4">Om Shanti Om(FROM:KARZ)</a></li>
<li><a href = "https://open.spotify.com/track/45Bfnqhwy4dtqTYmClzEWM">Dilbara(FROM:PATI PATNI AUR WOH)</a></li>
</ul>
</td>

</table>
                    
                
             
        </div>
        <p>“I’m the king of the world!”</p>
    
</body>
</html>