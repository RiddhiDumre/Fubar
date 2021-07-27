

<?php
    $comedy=array(
        
        array('name'=>'I LOVE LUCY','age rating'=>'14','platform'=>'cbs website','link'=>'//www.cbs.com/shows/i_love_lucy/'),
      
        array('name'=>'SATURDAY NIGHT LIVE','age rating'=>'17','platform'=>'global','link'=>'//www.globaltv.com/shows/saturday-night-live/'),
        
        array('name'=>'PARKS AND RECREATION','age rating'=>'16','platform'=>'amazon','link'=>'//www.primevideo.com/detail/Parks-And-Recreation/0IMOVVKFVSJLZKRHDHZ7HNSWUT'),
       
        array('name'=>'THE GOOD PLACE','age rating'=>'16','platform'=>'netflix','link'=>'//www.netflix.com/in/title/80113701'),
       
        // array('name'=>'FRIENDS'=>'16','platform'=>'hotstar','link'=>'//www.primevideo.com/detail/0NYGYQHXHE4UR3GBGXHK8U1RS7/ref=atv_sr_def_c_unkc__1_1_1?sr=1-1&pageTypeIdSource=ASIN&pageTypeId=B01M6Y6ZXM&qid=1603310138'),
       
        array('name'=>'ARRESTED DEVELOPMENT','age rating'=>'16','platform'=>'netfix','link'=>'//www.netflix.com/in/title/70153404'),
        
         array('name'=>'SEINFELD','age rating'=>'16','platform'=>'amazon','link'=>'//www.hotstar.com/in/tv/arrested-development/11952'),
      
        
        
        

        
       array('name'=>'MODERN FAMILY','age rating'=>'16','platform'=>'hotstar','link'=>'//www.hotstar.com/in/tv/modern-family/8549'),
       
        array('name'=>'THE OFFICE','age rating'=>'16','platform'=>'amazon','link'=>'//www.primevideo.com/detail/0GDPEP9RW67VR3SU1XNWF5YR8Y/ref=atv_sr_def_c_unkc__1_1_1?sr=1-1&pageTypeIdSource=ASIN&pageTypeId=B079FBNCX7&qid=1603309996'),
        
        array('name'=>'BROOKLYN NINE NINE','age rating'=>'16','platform'=>'netflix','link'=>'//www.netflix.com/in/title/70281562'),
        
        array('name'=>' HOW I MET YOUR MOTHER','age rating'=>'16','platform'=>'hotstar','link'=>'//www.hotstar.com/in/tv/how-i-met-your-mother/8323'),
       
        array('name'=>'TWO AND A HALF MEN','age rating'=>'17','platform'=>'amazon','link'=>'//www.primevideo.com/detail/0GM6ZNFEBHZFBA5KY9J4CIP4OU/ref=atv_sr_def_c_unkc__1_1_1?sr=1-1&pageTypeIdSource=ASIN&pageTypeId=B01N75VWWH&qid=1603309920'),

        array('name'=>'THE FRESH PRINCE OF BEL-AIR','age rating'=>'16','platform'=>'amazon','link'=>'//www.primevideo.com/detail/0MAU34Q3NP6IQDN24URNOV4Z27/ref=atv_sr_def_c_unkc__1_1_1?sr=1-1&pageTypeIdSource=ASIN&pageTypeId=B079SSXK3V&qid=1603307139'),
        
        array('name'=>' THE BIG BANG THEORY','age rating'=>'16','platform'=>'amazon','link'=>'//https://www.primevideo.com/detail/0O71IX5EUTTAYSGMEG6TAM9DYN/ref=atv_dp_season_select_s1'),
        
        array('name'=>'YOUNG SHELDON','age rating'=>'15','platform'=>'amazon','link'=>'//www.primevideo.com/detail/0SGH7918KG4DSTEVP4NH9HLZ6G/ref=atv_dp_season_select_s1')
    );
    $sort= array();
    $i=0;
    foreach ($comedy as $key => $value)
    {
        $sort['age rating'][$key]=$value['age rating'];
        $sort['name'][$key]=$value['name'];
        $sort['platform'][$key]=$value['platform'];
        $sort['link'][$key]=$value['link'];
    }
    if (isset($_POST['submit']))
    {
        if(!empty($_POST['sort']))
        {
            $choice=$_POST['sort'];
            
            if($choice=='age')
            {
                array_multisort($GLOBALS["sort"]['age rating'], SORT_ASC, $GLOBALS["comedy"]);
            }
            elseif($choice=='alphabetical')
            {
                array_multisort($sort['name'], SORT_ASC, $comedy);
            }
        }
    }
    $name=$_COOKIE['name'] ?? 'Guest';
    function printdata()
    {
        global $comedy;
        global $i;
        echo "<a href='".$comedy[$i]['link']."'>".$comedy[$i]['name']."</a>";$i++;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>comedy</title>
</head>
<body>
    <video autoplay muted loop id="myVideo">
        <source src="images/Bouncing_DVD_logo[Youtubetomp3.sc].mp4" type="video/mp4">
      </video>
    <header>
      <a href="index.php"><img class="logo" src="images/f.png" width="40px" height="40px"  alt=""></a>
      <h3>UBAR</h3>
      <nav class="nav-area" >
            <li>Hello <?php echo htmlspecialchars($name)?></li>
            <li><a href="index.html">HOME</a></li>
            <li><a href="contac.php">CONTACT</a></li>
            <li><a href="login.php">LOG-IN</a></li>
            <li><a href="forms1.php">SIGN-IN</a></li>
            <li><form action="tvcomedy.php" method="post"></li>
            <input type="submit" value="SORT" name="submit" style="background-color:black; color:white">
            <select name="sort" id="sort">
            <option value="" disabled selected></option>
            <option value="age" id="age" >Age Rating</option>
            <option value="alphabetical" id="alphabetical" >Alphabetical</option>
            </select>
    </form>
        </nav>
    </header>
            <div class="fav" ><h1>HERE ARE SOME OF OUR FAVS!</h1>
            CLICK TO GET TO THE STREAMING SERVICE
            </div>
            <form>
                
            </form>

        <div class="list1" >
        <?php ?>
            

                
                <table>
                  <tr>
                    <td>
                 <ul style="list-style-type:none;">
                <li><?php echo printdata(); ?></li>
                <li><?php echo printdata(); ?></li>
                <li><?php echo printdata(); ?></li>
                <li><?php echo printdata(); ?></li>
                <li><?php echo printdata(); ?></li>
                <li><?php echo printdata(); ?></li>
                <li><?php echo printdata(); ?></li>
                <li><?php echo printdata(); ?></li>
              </ul>
              </td>
              
              
                
                <td>
                  <ul style="list-style-type:none;"> 
                <li><?php echo printdata(); ?></li>
                <li><?php echo printdata(); ?></li>
                <li><?php echo printdata(); ?></li>
                <li><?php echo printdata(); ?></li>
                <li><?php echo printdata(); ?></li>
                <li><?php echo printdata(); ?></li>
    
             
              </ul>     
              </td>
              </tr>
              </table>    
                
           
             
        </div>
        <p>“I’m the king of the world!”</p>
    
</body>
</html>


