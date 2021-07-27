


<?php
    $fantasy=array(
        
        array('name'=>'The Stand','age rating'=>'14','platform'=>'cbs website','link'=>'//www.cbs.com/shows/the-stand/'),
      
        array('name'=>'Supernatural','age rating'=>'17','platform'=>'amazon','link'=>'//www.primevideo.com/detail/0GM6ZF5EEFJNL8AQ4WEEB02SAC/ref=atv_dp_season_select_s1'),
        
        array('name'=>'Raised by Wolves','age rating'=>'16','platform'=>'amazon','link'=>'//www.amazon.com/Raised-by-Wolves-Series-1/dp/B01H0VKRYU'),
       
        array('name'=>'Lovecraft Country','age rating'=>'18','platform'=>'amazon','link'=>'//www.amazon.com/Lovecraft-Country-Season-1/dp/B087Z1CRSB'),
       
        // array('name'=>'Game of Thrones'=>'18','platform'=>'hotstar','link'=>'//www.hotstar.com/in/tv/game-of-thrones/8184'),
       
        array('name'=>'Lucifer','age rating'=>'16','platform'=>'netfix','link'=>'//www.netflix.com/in/title/80057918'),
        
        array('name'=>'The Witcher','age rating'=>'17','platform'=>'netflix','link'=>'//www.netflix.com/in/title/80189685'),
        
        
        

        
       array('name'=>'The Vampire Diaries','age rating'=>'16','platform'=>'Amazonn','link'=>'//www.primevideo.com/detail/0HOK2IOF5E6RFUO8LL6L4LAW3W/ref=atv_dp_season_select_s1'),
       
        array('name'=>'Buffy the Vampire Slayer','age rating'=>'16','platform'=>'amazon','link'=>'//www.amazon.com/Buffy-Vampire-Slayer-Season-1/dp/B000HCYN18'),
        
        array('name'=>'His Dark Materials','age rating'=>'17','platform'=>'Amazon','link'=>'//www.amazon.com/His-Dark-Materials-Season-1/dp/B07S1CGR4P'),
        
        array('name'=>'Misfits','age rating'=>'16','platform'=>'Amazon','link'=>'//www.amazon.com/Misfits-Season-1/dp/B00574Q58A'),
       
        array('name'=>'Swamp Thing','age rating'=>'17','platform'=>'amazon','link'=>'//www.amazon.com/Swamp-Thing-Season-1/dp/B0823QTF7K'),

        array('name'=>'The Originals','age rating'=>'16','platform'=>'amazon','link'=>'//www.primevideo.com/detail/0FSCTCL7C8TN8PISV8QRF1HPRS/ref=atv_sr_def_c_unkc__1_1_1?sr=1-1&pageTypeIdSource=ASIN&pageTypeId=B01MXKTY4J&qid=1603362790'),
        
        array('name'=>'Daredevil','age rating'=>'17','platform'=>'netflix','link'=>'//www.netflix.com/in/title/80018294'),
        
        array('name'=>'THE BOYS','age rating'=>'16','platform'=>'amazon','link'=>'//www.primevideo.com/detail/0KRGHGZCHKS920ZQGY5LBRF7MA/%7Cm_c_c452441516049')
    );
    $sort= array();
    $i=0;
    foreach ($fantasy as $key => $value)
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
                array_multisort($GLOBALS["sort"]['age rating'], SORT_ASC, $GLOBALS["fantasy"]);
            }
            elseif($choice=='alphabetical')
            {
                array_multisort($sort['name'], SORT_ASC, $fantasy);
            }
        }
    }
    $name=$_COOKIE['name'] ?? 'Guest';
    function printdata()
    {
        global $fantasy;
        global $i;
        echo "<a href='".$fantasy[$i]['link']."'>".$fantasy[$i]['name']."</a>";$i++;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>fantasy</title>
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
            <li><form action="tvfantasy.php" method="post"></li>
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


