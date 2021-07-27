


<?php
    $crime=array(
        
        array('name'=>'Breaking Bad','age rating'=>'18','platform'=>'netflix','link'=>'//www.netflix.com/in/title/70143836'),
      
        array('name'=>'MIRZAPUR','age rating'=>'17','platform'=>'amazon','link'=>'//www.primevideo.com/detail/0PDOKMV9CRLOMO5EUKNCUJLG4Q/ref=atv_hm_hom_c_dfByPd_3_1'),
        
        array('name'=>'RECTIFY','age rating'=>'16','platform'=>'netflix','link'=>'//www.netflix.com/title/70260729'),
       
        array('name'=>'SACRED GAMES','age rating'=>'18','platform'=>'Netflix','link'=>'//www.netflix.com/in/title/80115328'),
       
        // array('name'=>'DELHI CRIME'=>'18','platform'=>'netflix','link'=>'//www.netflix.com/in/title/81076756'),
       
        array('name'=>'JAMTARA - SABKA NUMBER AYEGA','age rating'=>'16','platform'=>'netfix','link'=>'//www.netflix.com/in/title/81183491'),
        
        array('name'=>'GUILTY','age rating'=>'17','platform'=>'netflix','link'=>'//www.netflix.com/in/title/81116486'),
        
        
        

        
       array('name'=>'THE FAMILY MAN','age rating'=>'16','platform'=>'Amazonn','link'=>'//www.primevideo.com/detail/0S3QYI59BAEI5KVLHCKSR91YGD/ref=atv_hm_hom_c_dfByPd_3_6'),
       
        array('name'=>'PAATAL LOK','age rating'=>'18','platform'=>'amazon','link'=>'//www.primevideo.com/detail/0G9IEOHCN8KMY6COD9ILGH7IY5/ref=atv_hm_hom_c_dfByPd_3_7'),
        
        array('name'=>'INSIDE EDGE','age rating'=>'17','platform'=>'Amazon','link'=>'//www.primevideo.com/detail/0PDN3DS1B1DWPHDVZ6MTAW1XE9/ref=atv_dp_season_select_s1'),
        
        array('name'=>'TOM CLANCYS : JACK RYAN','age rating'=>'16','platform'=>'Amazon','link'=>'//www.primevideo.com/detail/0GDOSMXQWN8COANTIN8SX9I5C2/ref=atv_dp_season_select_s1'),
       
        array('name'=>'HOSTAGES','age rating'=>'17','platform'=>'Disney+hotstar','link'=>'//www.hotstar.com/in/tv/hostages/1260005113/list/episodes/t-1_2_2162'),

        array('name'=>'NARCOS','age rating'=>'16','platform'=>'Netflix','link'=>'//www.netflix.com/in/title/80025172'),
        
        array('name'=>'MONEY HEIST','age rating'=>'18','platform'=>'netflix','link'=>'//www.netflix.com/in/title/80192098'),
        
        array('name'=>'SCAM 1992 : THE HARSHAD MEHTA STORY','age rating'=>'18','platform'=>'sonyliv','link'=>'//www.sonyliv.com/shows/scam-1992-the-harshad-mehta--1700000292')
    );
    $sort= array();
    $i=0;
    foreach ($crime as $key => $value)
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
                array_multisort($GLOBALS["sort"]['age rating'], SORT_ASC, $GLOBALS["crime"]);
            }
            elseif($choice=='alphabetical')
            {
                array_multisort($sort['name'], SORT_ASC, $crime);
            }
        }
    }
    $name=$_COOKIE['name'] ?? 'Guest';
    function printdata()
    {
        global $crime;
        global $i;
        echo "<a href='".$crime[$i]['link']."'>".$crime[$i]['name']."</a>";$i++;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>crime</title>
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
            <li><form action="tvcrime.php" method="post"></li>
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


