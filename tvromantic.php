

<?php
    $romantic=array(
        
        array('name'=>' FRIDAY NIGHT LIGHTS','age rating'=>'14','platform'=>'amazon','link'=>'//www.amazon.com/Eyes-Wide-Open/dp/B000V5RUES/ref=sr_1_3?tag=alstsite-20'),
      
        array('name'=>'NEVER HAVE I EVER','age rating'=>'17','platform'=>'netflix','link'=>'//www.netflix.com/in/title/80179190'),
        
        array('name'=>'THE O.C.','age rating'=>'16','platform'=>'amazon','link'=>'//https://www.amazon.com/gp/video/detail/B001AVW600/ref=atv_dp_season_select_s1?tag=alstsite-20'),
       
        array('name'=>'GREYS ANATOMY','age rating'=>'16','platform'=>'amazon','link'=>'//https://www.amazon.com/gp/video/detail/B003TTH4IU/ref=atv_dp_season_select_s1?tag=alstsite-20'),
       
        // array('name'=>'INSECURE'=>'16','platform'=>'amazon','link'=>'//www.amazon.com/gp/video/detail/B01MRJ63LR/ref=atv_dp_season_select_s1?tag=alstsite-20'),
       
        array('name'=>'THE L WORD','age rating'=>'16','platform'=>'amazon','link'=>'//www.amazon.com/The-Pilot-Part-1/dp/B00C0OLEJU/ref=sr_1_1?ots=1&slotNum=4&imprToken=28baa7d3-87c6-1e7f-34a&tag=alstsite-20'),
        
         array('name'=>'THE GREAT','age rating'=>'16','platform'=>'hulu','link'=>'//www.hulu.com/series/the-great-238db0d4-c476-47ed-9bee-d326fd302f7d'),
      
        
        
        

        
       array('name'=>'CRASH LANDING ON YOU','age rating'=>'16','platform'=>'hotstar','link'=>'//www.netflix.com/in/title/81159258'),
       
        array('name'=>'MY LOVE FROM THE STARS','age rating'=>'16','platform'=>'amazon','link'=>'//www.netflix.com/in/title/80025266'),
        
        array('name'=>'OUTLANDER','age rating'=>'17','platform'=>'netflix','link'=>'//www.netflix.com/in/title/70285581'),
        
        array('name'=>'SEX EDUCATION','age rating'=>'18','platform'=>'hotstar','link'=>'//www.netflix.com/in/title/80197526"'),
       
        array('name'=>'COFEE PRINCE','age rating'=>'15','platform'=>'amazon','link'=>'//www.netflix.com/in/title/80029647'),

        array('name'=>'BANDISH BANDITS','age rating'=>'17','platform'=>'amazon','link'=>'//www.primevideo.com/detail/0GZ3CSDRPF7ZJ8E9ORRVO8NWRS/ref=atv_tv_hom_c_vPUAZf_brws_12_1'),
        
        array('name'=>'MODERN LOVE','age rating'=>'16','platform'=>'amazon','link'=>'//https://www.primevideo.com/detail/0KVQAAI5LR5DXQUXVFX8UZPCO4/ref=atv_tv_hom_c_vPUAZf_brws_12_2'),
        
        array('name'=>'FAMOUS IN LOVE','age rating'=>'15','platform'=>'amazon','link'=>'//www.primevideo.com/detail/0J7ZLKXACCOW46V4UR3S4CN4LD/ref=atv_dp_season_select_s1')
    );
    $sort= array();
    $i=0;
    foreach ($romantic as $key => $value)
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
                array_multisort($GLOBALS["sort"]['age rating'], SORT_ASC, $GLOBALS["romantic"]);
            }
            elseif($choice=='alphabetical')
            {
                array_multisort($sort['name'], SORT_ASC, $romantic);
            }
        }
    }
    $name=$_COOKIE['name'] ?? 'Guest';
    function printdata()
    {
        global $romantic;
        global $i;
        echo "<a href='".$romantic[$i]['link']."'>".$romantic[$i]['name']."</a>";$i++;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>romantic</title>
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
            <li><form action="tvromantic.php" method="post"></li>
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


