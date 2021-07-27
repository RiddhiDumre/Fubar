<?php
    $crime=array(
        array('name'=>'The Godfather','platform'=>'netflix','no'=>'','link'=>'https://www.netflix.com/in/title/60011152#:~:text=197218%2B%202h%2057mCrime,Brando%2CAl%20Pacino%2CJames%20Caan','no'=>''),
        array('name'=>'Heat','platform'=>'amazon prime','no'=>'','link'=>'https://www.primevideo.com/detail/Heat/0LPIETH9MIDPC7M1TBM4U7BV4I'),
        array('name'=>'The Godfather:Part II','platform'=>'netflix','no'=>'','link'=>'https://www.netflix.com/in/title/60011663'),
        array('name'=>'L.A. Confidential','platform'=>'amazon prime','link'=>'https://www.amazon.com/L-Confidential-Kevin-Spacey/dp/B001N3HUP6'),
        array('name'=>'Pulp Fiction','platform'=>'rent','no'=>'4','link'=>'https://www3.gowatchseries.ac/pulp-fiction-scd-episode-1'),
        array('name'=>'Dhoom 2','platform'=>'amazon prime','no'=>'','link'=>'https://www.amazon.com/Dhoom-English-Subtitled-Hrithik-Roshan/dp/B00ZZ7I45Q/ref=sr_1_1?dchild=1&keywords=dhoom+2&qid=1604287379&s=instant-video&sr=1-1'),
        array('name'=>'The Wolf Of Wall Street','platform'=>'amazon prime','no'=>'','link'=>'https://www.primevideo.com/detail/0PQIDCRPKKH2EELNOXDPIDDEW0/ref=atv_br_def_r_br_c_unkc_1_15'),
        array('name'=>'Django Unchained','platform'=>'netflix','no'=>'','link'=>'https://www.netflix.com/in/title/70230640'),
        array('name'=>'Casino','platform'=>'netflix','no'=>'','link'=>'https://www.netflix.com/in/title/70019012'),
        array('name'=>'The Departed','platform'=>'netflix','no'=>'','link'=>'https://www.netflix.com/in/title/70044689'),
        array('name'=>'The Irishman','platform'=>'netflix','no'=>'','link'=>'https://www.netflix.com/in/title/80175798'),
        array('name'=>'The Drug King','platform'=>'netflix','no'=>'','link'=>'https://www.netflix.com/in/title/80236133'),
        array('name'=>'Uncut Gems','platform'=>'netflix','no'=>'','link'=>'https://www.netflix.com/in/title/70276515'),
        array('name'=>'Gangs Of Wasseypur (Part 1)','platform'=>'netflix','no'=>'','link'=>'https://www.netflix.com/in/title/70278932'),
        array('name'=>'Gangs Of Wasseypur (Part 2)','platform'=>'netflix','no'=>'','link'=>'https://www.primevideo.com/detail/0P0WX3D3OPXUZCDP09ANBBFQOZ/ref=atv_sr_def_c_unkc__1_1_1?sr=1-1&pageTypeIdSource=ASIN&pageTypeId=B07SMNKLBD&qid=1602673257')
        );
        session_start();
    $subs=$_SESSION['subscription'] ?? 'rent';
	$subs=explode(',',$subs);
	$i=0;
	$sort=array();
	if(!isset($_POST['submit']))
	{
		
	}
	// echo "<br/>";
	// var_dump($sort['no']);
	// echo "<br/>";
	$i=0;
	foreach ($crime as $key => $value)
	{
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
			elseif($choice=='platform')
			{
				for($i=0;$i<count($crime);$i++){
					foreach ($subs as $value)
					{
						$value = strtolower($value);
						$crimeval=strtolower($crime[$i]['platform']);
						if (strcmp($value,$crimeval) == 0)
						{
							?>
							<script>
								console.log("match");
							</script>
							<?php
							if (($value == 'hotstar')|($value == 'hotstar'))
							{
								?>
								<script>
									console.log("hotstar");
								</script>
								<?php
								global $crime;
								$ind = array_search('Hotstar',$subs);
								$crime[$i]['no'] = $ind;
							}
							elseif ($value == 'netflix')
							{
								?>
								<script>
									console.log("netflix");
								</script>
								<?php
								global $crime;
								$ind = array_search('Netflix',$subs);
								$crime[$i]['no'] = $ind;
							}
							elseif ($value == 'amazon prime')
							{
								?>
								<script>
									console.log("prime");
								</script>
								<?php
								global $crime;
								$ind = array_search('Amazon Prime',$subs);
								$crime[$i]['no'] = $ind;
							}
							elseif ($value == 'rent')
							{
								global $crime;
								$crime[$i]['no'] = 4;
							}
							else
							{
							}}
					}
				}
				foreach ($crime as $key => $value)
				{
					$sort['no'][$key]=$value['no'];
				}
				array_multisort($GLOBALS["sort"]['no'], SORT_ASC, $GLOBALS["crime"]);
			}
		}
	}
	$name=$_COOKIE['name'] ?? 'Guest';
	$i=0;
	function printdata()
	{
		global $crime;
		global $i;
		echo "<a href='".$crime[$i]['link']."'>".$crime[$i]['name']."</a><br/>";
		// echo "Details:<br/>Age rating:{$crime[$i]['age rating']}+<br/>Available on {$crime[$i]['platform']}";
		$i++;
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="styles.css"> -->
    <style>
        body {
    
    margin: 0;
    color: white;
    font-size: 1.1rem;
    font-family: monospace;
    background-color: rgba(0, 0, 0, 0.578);
    background-color: black;
}


h3{
    margin-top: 38px;
    margin-left: -75%;
}

header{
    margin-top: -10px;
    position: relative;
    transition-duration: 2s;
    display: flex;
    justify-content: space-between;
    
    padding: 5px ,5px;
}

.logo{
    padding: 20px;
    cursor: pointer;
}

.nav-area li{
    display: inline-block;
    padding: 15px;
   
}
.nav-area li a{
    
    color: #fff;
}
.nav-area li a:hover{
  
    transition: 0.5s;
    color: #ffffff5d;
}

a{
    color: white;
    text-decoration: none;
    padding-right: 10px;
    
    
}

.nav-bar a:visited{
    text-decoration: none;
    color: rgb(3, 3, 3);
}


hr{
    opacity: 30%;
}
#myVideo {
   position: fixed;
    opacity: 20%;
    right: 0;
    bottom: 0;
    min-width: 100%; 
    min-height: 100%;
}
.gen{
    transition-duration: 2s;  
    font-family: monospace;
    font-size: 1.8rem;
    letter-spacing: 30px;
    margin-top: 5%;
    text-align: center;
    position: relative;
   
}
.fav{
    transition-duration: 2s;  
    font-family: monospace;
    font-size: 0.8rem;
    letter-spacing: 10px;
    margin-bottom: 5%;
    text-align: center;
    position: relative;
   
}
.list1{
    align-content: center;
    margin-top: 5px;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    margin-left: 15%;
    font-weight: lighter;
    letter-spacing: 0rem;
    position: relative;
    word-spacing: 1rem;
    font-size: 0.8rem;
    cursor: pointer;
    display: run-in;
    text-align: left;
}

td{
    text-align: left;
    width: 2200px;
}

.list1 a{
    color: white;
    text-decoration: none;
}
.list1 li{
    margin-top: 3rem;
}
.content {
    transition-duration: 2s;  
    font-family: monospace;
    font-size: 1.8rem;
    letter-spacing: 30px;
    margin-top: 17%;
    padding-bottom: 300px;
    text-align: center;
    position: relative;
  
}
button{
    background-color:  rgb(9, 156, 167);
    color: rgb(255, 255, 255);
    font-weight: bold;
    padding: 16px 30px;
    border: none;
    cursor: pointer;
    border-radius: 25px;
    text-align: center;
    transition-duration: 0.5s;
}
button:hover{
   background-color: rgba(105, 104, 104, 0.404);
    color: white;
    
  
}

button a:visited{
    color: white;
}
.footer{


    margin-left: -30px;
}
.footer img{
    
  
    filter: invert(100%);
    
}
.footer ul{
    
    display: inline;
}
.footer li{
    padding: 5px;
    display: inline;
}
.icons img{
    filter: invert(100%);
}
.icons a:hover{
    transition-duration: 0.5s;
    opacity: 20%;
}
.icons2{
    margin-top: 7%;
   
    filter: invert(100%);
}
.icons2 a:hover{
    transition-duration: 0.5s;
    opacity: 20%;
}
p{
    margin-top: 12%;
    text-align: center;
}

  
    </style>
	<title>crime</title>
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
			<li><form action="drama.php" method="post"></li>
            <input type="submit" value="SORT" name="submit" style="background-color:black; color:white">
			<select name="sort" id="sort">
            <option value="" disabled selected></option>
            <option value="age" id="age" >Age Rating</option>
            <option value="alphabetical" id="alphabetical" >Alphabetical</option>
			<option value="platform" id="platform">Subscriptions</option>
        	</select>
    </form>
        </nav>
    </header>
        <!-- </nav> 
         <header>
      <a href="index.php"><img class="logo" src="images/f.png" width="40px" height="40px"  alt=""></a>
      <h3>UBAR</h3>
	  <nav class="nav-area" >
            <li>Hello <?php echo htmlspecialchars($name)?></li>
            <li><a href="index.php">HOME</a></li>
            <li><a href="contac.php">CONTACT</a></li>
            <li><a href="login.php">LOG-IN</a></li>
			<li><a href="forms1.php">SIGN-IN</a></li>
			<li><form action="sports.php" method="post"></li>
            <input type="submit" value="SORT" name="submit" style="background-color:black; color:white">
			<select name="sort" id="sort">
            <option value="" disabled selected></option>
            <option value="age" id="age" >Age Rating</option>
            <option value="alphabetical" id="alphabetical" >Alphabetical</option>
			<option value="platform" id="platform">Subscription</option>
        	</select>
    </form>
        </nav>
    </header> -->
            <div class="fav" ><h1>HERE ARE SOME OF OUR FAVS!</h1>
            CLICK TO GET TO THE STREAMING SERVICE
			</div>
			<form>
				
			</form>

        <div class="list1" >
		<?php 
			
		?>
            

                
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