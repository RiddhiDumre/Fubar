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

        <div class="list1" >
     

            <table>
                <tr>
                <td>
                <ul style = "list-style-type:none;">
                    <li><a href="https://www.globaltv.com/shows/saturday-night-live/">SATURDAY NIGHT LIFE(1975-PRESENT)</a></li>
                    <li><a href="https://www.primevideo.com/detail/Parks-And-Recreation/0IMOVVKFVSJLZKRHDHZ7HNSWUT">PARKS AND RECREATION(2009-2015)</a></li>
                    <li><a href="https://www.netflix.com/in/title/80113701"> THE GOOD PLACE(2016-2020)</a></li>
                    <li><a href="https://www.primevideo.com/detail/0NYGYQHXHE4UR3GBGXHK8U1RS7/ref=atv_sr_def_c_unkc__1_1_1?sr=1-1&pageTypeIdSource=ASIN&pageTypeId=B01M6Y6ZXM&qid=1603310138">SEINFELD(1989-1998)</a></li>
                    <li><a href="https://www.netflix.com/in/title/70153404">FRIENDS(1994-2004)</a></li>
                    <li><a href="https://www.hotstar.com/in/tv/arrested-development/11952">ARRESTED DEVELOPMENT(2003-2006)</a></li>
                </ul>
                
                
                </td>
                
                
                
                <td>
                <ul style = "list-style-type:none;">
                    <li><a href="https://www.hotstar.com/in/tv/modern-family/8549">MODERN FAMILY(2009-2020)</a></li>
                    <li><a href="https://www.primevideo.com/detail/0GDPEP9RW67VR3SU1XNWF5YR8Y/ref=atv_sr_def_c_unkc__1_1_1?sr=1-1&pageTypeIdSource=ASIN&pageTypeId=B079FBNCX7&qid=1603309996">THE OFFICE(2005-2013)</a></li>
                    <li><a href="https://www.netflix.com/in/title/70281562"> BROOKLYN NINE NINE(2013-PRESENT)</a></li>
                    <li><a href="https://www.hotstar.com/in/tv/how-i-met-your-mother/8323"> HOW I MET YOUR MOTHER(2005-2014)</a></li>
                    <li><a href="https://www.primevideo.com/detail/0GM6ZNFEBHZFBA5KY9J4CIP4OU/ref=atv_sr_def_c_unkc__1_1_1?sr=1-1&pageTypeIdSource=ASIN&pageTypeId=B01N75VWWH&qid=1603309920"> TWO AND A HALF MEN(2005-2013)</a></li>
                    <li><a href="https://www.primevideo.com/detail/0MAU34Q3NP6IQDN24URNOV4Z27/ref=atv_sr_def_c_unkc__1_1_1?sr=1-1&pageTypeIdSource=ASIN&pageTypeId=B079SSXK3V&qid=1603307139"> THE FRESH PRINCE OF BEL-AIR(1990-1996)</a></li>
                    <li><a href="https://www.primevideo.com/detail/0O71IX5EUTTAYSGMEG6TAM9DYN/ref=atv_dp_season_select_s1"> THE BIG BANG THEORY(2008-2019)</a></li>
                    <li><a href="https://www.primevideo.com/detail/0SGH7918KG4DSTEVP4NH9HLZ6G/ref=atv_dp_season_select_s1"> YOUNG SHELDON</a></li>
                </ul>
                </td>
                </tr>
            </table>
                    
                
             
        </div>
        <p>“I’m the king of the world!”</p>
    
</body>
</html>