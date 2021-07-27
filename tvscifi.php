



<?php
    $scifi=array(
        // 'the stand'=>
        array('name'=>'BATTLESTAR GALACTICA','age rating'=>'14','platform'=>'amazon','link'=>'https://www.amazon.com/Battlestar-Galactica-Season-1/dp/B000UU2YKE'),
        // 'walking Dead'=>
        array('name'=>'DOCTOR WHO','age rating'=>'17','platform'=>'Netflix','link'=>'//www.amazon.com/Doctor-Who-Season-1/dp/B003LQ3YXU'),
        
        array('name'=>'THE X - FILES ','age rating'=>'16','platform'=>'Amazon','link'=>'//www.amazon.com/The-X-Files-Season-1/dp/B001BWQ0XM'),
       
        array('name'=>'STAR TREK : THE NEXT GENERATION','age rating'=>'15','platform'=>'Netflix','link'=>'//www.netflix.com/in/title/70158329'),
       
        array('name'=>'STAR TREK','age rating'=>'13','platform'=>'CBS WEBSITE','link'=>'//www.cbs.com/shows/star_trek/'),
       
        array('name'=>'LOST','age rating'=>'14','platform'=>'Amazon','link'=>'//https://www.amazon.com/Lost-Season-1/dp/B003U4XNKC'),
        
        array('name'=>'WESTWORLD','age rating'=>'12','platform'=>'HBO','link'=>'//www.hbo.com/westworld'),
        
        
        

        
       array('name'=>'STRANGER THINGS','age rating'=>'16','platform'=>'Netflix','link'=>'//www.netflix.com/in/title/80057281'),
       
        array('name'=>'BLACK MIRROR','age rating'=>'16','platform'=>'Netflix','link'=>'https://www.netflix.com/in/title/70264888'),
        
        array('name'=>'THE EXPANSE','age rating'=>'17','platform'=>'Amazon','link'=>'//www.amazon.com/The-Expanse-Season-1/dp/B018BZ3SCM'),
        
        array('name'=>'FRINGE','age rating'=>'16','platform'=>'Amazon','link'=>'////www.primevideo.com/detail/0LL7ZV5F9CZFF6S4GYTHAP5NYR/ref=atv_tv_hom_c_oWa4KH_brws_4_3'),
       
        array('name'=>'FIREFLY','age rating'=>'17','platform'=>'Amazon','link'=>'//www.amazon.com/Firefly-Season-1/dp/B000H4TX9I'),

        array('name'=>'ORPHAN BLACK','age rating'=>'16','platform'=>'Netflix','link'=>'//www.netflix.com/in/title/70276033'),
        
        array('name'=>'COUNTERPART','age rating'=>'17','platform'=>'Amazon','link'=>'//www.amazon.com/Counterpart/dp/B077MVJ553'),
        
        array('name'=>'BABYLON 5','age rating'=>'18','platform'=>'Amazon','link'=>'//www.amazon.com/Babylon-5-Season-1/dp/B000I5SYHS')
    );
    $sort= array();
    $i=0;
    foreach ($scifi as $key => $value)
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
                array_multisort($GLOBALS["sort"]['age rating'], SORT_ASC, $GLOBALS["scifi"]);
            }
            elseif($choice=='alphabetical')
            {
                array_multisort($sort['name'], SORT_ASC, $scifi);
            }
        }
    }
    $name=$_COOKIE['name'] ?? 'Guest';
    function printdata()
    {
        global $scifi;
        global $i;
        echo "<a href='".$scifi[$i]['link']."'>".$scifi[$i]['name']."</a>";$i++;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>scifi</title>
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
            <li><form action="tvscifi.php" method="post"></li>
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


