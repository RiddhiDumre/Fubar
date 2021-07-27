<?php $name=$_COOKIE['name'] ?? 'Guest'; ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>soul</title>
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
<li><a href = "https://www.youtube.com/watch?v=R1XIXSXKuCw">PASHMINA</a></li>
<li><a href = "https://www.youtube.com/watch?v=ttIKsnxPrMY">NAADAAN PARINDEY</a></li>
<li><a href = "https://www.youtube.com/watch?v=o1RducJbUdc">Tumhi Ho Bandhu </a></li>
<li><a href = "https://www.youtube.com/watch?v=vKDsAB1ccn0">Aayat</a></li>
<li><a href = "https://www.youtube.com/watch?v=hoNb6HuNmU0">KHAIRIYAT</a></li>


</ul>


</td>



<td>
<ul style = "list-style-type:none;">

<li><a href = "https://www.youtube.com/watch?v=HqUeSjsYLNU">Makhna</a></li>
<li><a href = "https://www.youtube.com/watch?v=fSS_R91Nimw">IKTARA</a></li>
<li><a href = "https://www.youtube.com/watch?v=R0XjwtP_iTY">Khaabon Ke Parinday</a></li>
<li><a href = "https://www.youtube.com/watch?v=aCH7RfgELwI">Labon Ka Karobaar</a></li>
<li><a href = "https://www.youtube.com/watch?v=-Hb2DeHvvEg">Tujhe Bhula Diya</a></li>
</ul>
</td>

</table>
                    
                
             
        </div>
        <p>“I’m the king of the world!”</p>
    
</body>
</html>