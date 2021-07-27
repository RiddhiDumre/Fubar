
<?php
    $horror=array(
        // 'the stand'=>
        array('name'=>'THE STAND','age rating'=>'18','platform'=>'CBS WEBSITE','link'=>'//www.cbs.com/shows/the-stand/'),
        // 'walking Dead'=>
        array('name'=>'The Walking Dead','age rating'=>'18','platform'=>'Netflix','link'=>'//www.netflix.com/in/title/70177057'),
        
        array('name'=>'Supernatural','age rating'=>'18','platform'=>'Amazon','link'=>'//www.primevideo.com/detail/0GM6ZF5EEFJNL8AQ4WEEB02SAC/ref=atv_sr_def_c_unkc__3_1_3?sr=1-3&pageTypeIdSource=ASIN&pageTypeId=B01N2GBK9X&qid=1603297646'),
       
        array('name'=>'Lovecraft Country','age rating'=>'16','platform'=>'Amazon','link'=>'//www.amazon.com/Lovecraft-Country-Season-1/dp/B087Z1CRSB'),
       
        array('name'=>'Fear the Walking Dead','age rating'=>'18','platform'=>'Amazon','link'=>'//https://www.amazon.com/Fear-Walking-Dead-Season-1/dp/B0112SYHWA'),
       
        array('name'=>'Stranger Things','age rating'=>'17','platform'=>'Netflix','link'=>'//https://www.netflix.com/in/title/80057281'),
        
        array('name'=>'American Horror Story','age rating'=>'18','platform'=>'Amazon','link'=>'//https://www.primevideo.com/detail/American-Horror-Story/0LPKJ43BIUXFKK6JOZ5CNNJQIA'),
        
        
        

        
       array('name'=>'Evil','age rating'=>'16','platform'=>'Amazon','link'=>'//https://www.amazon.com/Evil-Season-1/dp/B07WNH289G'),
       
        array('name'=>'The Vampire Diaries','age rating'=>'16','platform'=>'Amazon','link'=>'https://www.primevideo.com/detail/0HOK2IOF5E6RFUO8LL6L4LAW3W/ref=atv_tv_hom_c_zkxcBU_brws_5_1'),
        
        array('name'=>'Attack on Titan','age rating'=>'17','platform'=>'Netflix','link'=>'//www.netflix.com/title/7029904'),
        
        array('name'=>'The Originals','age rating'=>'16','platform'=>'Amazon','link'=>'//https://www.primevideo.com/detail/0LL7ZV5F9CZFF6S4GYTHAP5NYR/ref=atv_tv_hom_c_oWa4KH_brws_4_3'),
       
        array('name'=>'Van Helsing','age rating'=>'17','platform'=>'Netflix','link'=>'//https://www.netflix.com/in/title/80121349'),
        // 'roma'=>
        array('name'=>'Locke & Key','age rating'=>'16','platform'=>'Netflix','link'=>'//www.netflix.com/in/title/80241239'),
        
        array('name'=>'The Haunting of Hill House','age rating'=>'17','platform'=>'Netflix','link'=>'//www.netflix.com/in/title/80189221'),
        
        array('name'=>'GHOUL','age rating'=>'18','platform'=>'Netflix','link'=>'//www.netflix.com/in/title/80245450')
    );
    $sort= array();
    $i=0;
    foreach ($horror as $key => $value)
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
                array_multisort($GLOBALS["sort"]['age rating'], SORT_ASC, $GLOBALS["horror"]);
            }
            elseif($choice=='alphabetical')
            {
                array_multisort($sort['name'], SORT_ASC, $horror);
            }
        }
    }
    $name=$_COOKIE['name'] ?? 'Guest';
    function printdata()
    {
        global $horror;
        global $i;
        echo "<a href='".$horror[$i]['link']."'>".$horror[$i]['name']."</a>";$i++;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>horror</title>
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
            <li><form action="horror1.php" method="post"></li>
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
                <li><?php echo printdata(); ?></li>
             
              </ul>     
              </td>
              </tr>
              </table>    
                
           
             
        </div>
        <p>“I’m the king of the world!”</p>
    
</body>
</html>

