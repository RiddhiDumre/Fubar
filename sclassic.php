<?php $name=$_COOKIE['name'] ?? 'Guest'; ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>classic</title>
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
<li><a href = "https://youtu.be/BVnz6oSupUM">Kabhi Kabhie Mere Dil Mein </a></li>
<li><a href = "https://www.youtube.com/watch?v=4dsFQFCvVGU">Kajra Re< / a></li>
<li><a href = "https://www.youtube.com/watch?v=-bNwqXvMuB8">Mehndi Laga Ke Rakhna </a></li>
<li><a href = "https://www.youtube.com/watch?v=tEKi6vnPApI">Didi Tera Devar Deewana</a></li>
<li><a href = "https://www.youtube.com/watch?v=x_elT6zkqN0">Oh Oh Jane Jaana</a></li>
<li><a href = "https://www.youtube.com/watch?v=5gTToFIZp-g">Jumma Chumma De De</a></li>


</ul>


</td>



<td>
<ul style = "list-style-type:none;">

<li><a href = "https://www.youtube.com/watch?v=WRSeV_27z6k">Shava Shava</a></li>
<li><a href = "https://www.youtube.com/watch?v=k8Yn6c7k7Qw"> Bole Chudiyan</a></li>
<li><a href = "https://www.youtube.com/watch?v=WKX5x3KZXfY">Chaiyya Chaiyya</a></li>
<li><a href = "https://www.youtube.com/watch?v=k4PMUZ055vc">Bachna Ae Haseeno</a></li>
<li><a href = "https://www.youtube.com/watch?v=dbdtBQ16CXc">Pappu Cant Dance</a></li>
<li><a href = "https://www.youtube.com/watch?v=eS29KERO_d4">Om Shanti Om</a></li>
</ul>
</td>

</table>
                    
                
             
        </div>
        <p>“I’m the king of the world!”</p>
    
</body>
</html>