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
                    <li><a href = "https://open.spotify.com/album/0te1B7RLmSG29MBoj0cKzq"> O SAKI SAKI(FROM:BATLA HOUSE) </a > </li>
                        <li><a href = "https://open.spotify.com/album/7LwW8qe6sND4ySnKmdZacl">ILLEGAL WEAPON 2.0 (FROM: STREET DANCER 3D </a></li>
                            <li><a href = "https://open.spotify.com/album/6NYmsKroUtthf1XpzGSCx7">GARMI(FROM : STREET DANCER 3D) </a > </li>
                            <li><a href = "https://open.spotify.com/album/4Tm5PfvhoU8ZAkmHYvEzIN?highlight=spotify:track:63MvWd6T6yoS7h4AJ4Hjrm">AANKH MAREY(From SIMMBA) </a > </li>
                            <li><a href = "https://open.spotify.com/album/1bugBSaVPqGgvzNcX41W2r">FEVICOL SE(FROM : DABBANG2) </a > </li>
                            <li><a href = "https://www.youtube.com/watch?v=jCEdTq3j-0U">Gallan Goodiyaan(FROM:DIL DHADAKNE DO)</a></li>
                        
                            </ul>
                        
                        
                            </td>
                        
                        
                        
                            <td>
                            <ul style = "list-style-type:none;">
                            <li><a href = "https://open.spotify.com/album/1FU97iwW5a0nV7wq3Mk5DQ">GHUNGROO(FROM: WAR) </a > </li>
                            <li><a href = "https://open.spotify.com/track/3W1XPf7mvuQcWQB7U7MbTM"> DILLIWALI GIRLFRIEND(FROM: YEH JAAWANI HAI DEEWANI) </a > </li>
                            <li><a href = "https://open.spotify.com/track/60XrRbNjDMAGUZ2xLkU9W3">HAULI HAULI(FROM: DE DE PYAAR DE) </a > </li>
                            <li><a href = "https://open.spotify.com/track/0biCSADTAblvLTLtJz4pXO?si=_DniDzCoS8yIT8PBCN89_Q">NASHE SI CHAD GAYI(FROM: BEFIKRE) </a > </li>
                            <li><a href = "https://open.spotify.com/track/0oy4Zk7CVLObwnDX8YZZ1e">JOOOMA CHUMMA DE DE(FROM: HUM) </a > </li>
                            <li><a href = "https://www.youtube.com/watch?v=NTHz9ephYTw">Kar Gayi Chull(FROM:KAPOOR AND SONS)</a></li>
                </ul>
                </td>
                </tr>
            </table>
                    
                
             
        </div>
        <p>“I’m the king of the world!”</p>
    
</body>
</html>