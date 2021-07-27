<?php $name=$_COOKIE['name'] ?? 'Guest'; ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>dance</title>
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
<li><a href = "https://www.youtube.com/watch?v=0WtRNGubWGA">Balam Pichkari</a></li>
<li><a href = "https://www.youtube.com/watch?v=WQfdwsPao9E">Udi Udi Jaye </a></li>
<li><a href = "https://www.youtube.com/watch?v=H9ySOP8PYEI">Go Go Govinda</a></li>
<li><a href = "https://www.youtube.com/watch?v=telF6KWeN48">Lahu Munh Lag Gaya</a></li>
<li><a href = "https://www.youtube.com/watch?v=tzRFLMn4kpM">Pinga</a></li>



</ul>


</td>



<td>
<ul style = "list-style-type:none;">

<li><a href = "https://www.youtube.com/watch?v=RYqJ5w-GrfM">Deva Shree Ganesha</a></li>
<li><a href = "https://www.youtube.com/watch?v=TITGBTGJZS8">Selfie Le Le Re</a></li>
<li><a href = "https://www.youtube.com/watch?v=aZj-MEqy2CM">Happy Diwali</a></li>
<li><a href = "https://www.youtube.com/watch?v=dx4Teh-nv3A">Namo Namo</a></li>
<li><a href = "https://www.youtube.com/watch?v=Jf92MOkrbEw">Rang Barse Song</a></li>
</ul>
</td>

</table>
                    
                
             
        </div>
        <p>“I’m the king of the world!”</p>
    
</body>
</html>