<?php
    $scifi=array(
        array('name'=>'Avatar(2019)','link'=>'//www.hotstar.com/in/movies/avatar/1770000948','age rating'=>'13','platform'=>'hotstar','no'=>''),
        array('name'=>'2001: A Space Odeyssey(1968)','link'=>'https://www.netflix.com/in/title/207856','age rating'=>'13','platform'=>'netflix','no'=>''),
        array('name'=>"Avengers:Endgame",'link'=>'https://www.hotstar.com/in/movies/avengers-endgame/1260013556','age rating'=>'13','platform'=>'hotstar','no'=>''),
        array('name'=>'Metropolis','link'=>'https://www.amazon.com/gp/product/B01CCCYJ14/ref=pv_ag_gcf?cmp=rt_where_to_watch','age rating'=>'14','platform'=>'amazon prime','no'=>''),
        array('name'=>'Star Wars: Episode IV','link'=>'https://www.amazon.com/gp/product/B085WL1MJY/ref=pv_ag_gcf?cmp=rt_where_to_watch','age rating'=>'6','platform'=>'amazon prime','no'=>''),
        array('name'=>'Matrix','link'=>'https://www.amazon.com/gp/product/B00D5DP00Y/ref=pv_ag_gcf?cmp=rt_where_to_watch','age rating'=>'14','platform'=>'amazon prime','no'=>''),
        array('name'=>'Inception','link'=>'https://www.primevideo.com/detail/0JTBVK6L41AABWSV8DK605AI0U/ref=atv_sr_def_c_unkc__1_1_1?sr=1-1&pageTypeIdSource=ASIN&pageTypeId=B07D7PLJWR&qid=1602579394','age rating'=>'12','platform'=>'amazon prime','no'=>''),
        array('name'=>'Ready Player One','link'=>'https://www.primevideo.com/detail/0RE5KDMXORNTWHELNXUT5ELZ1P/ref=atv_sr_def_c_unkc__1_1_1?sr=1-1&pageTypeIdSource=ASIN&pageTypeId=B07MV7HKM2&qid=1602579705','age rating'=>'13','platform'=>'amazon prime','no'=>''),
        array('name'=>'Jurrasic Park','link'=>'https://www.amazon.com/gp/product/B00C1BV9Z6/ref=pv_ag_gcf?cmp=rt_where_to_watch','age rating'=>'11','platform'=>'amazon prime','no'=>''),
        array('name'=>'Alien','link'=>'https://www.amazon.com/gp/product/B00C3L6HEM/ref=pv_ag_gcf?cmp=rt_where_to_watch','age rating'=>'13','platform'=>'amazon prime','no'=>''),
        array('name'=>'Forbidden Planet','link'=>'https://www.amazon.com/Forbidden-Planet-Walter-Pidgeon/dp/B001N3EZW2','age rating'=>'6','platform'=>'rent','no'=>'4'),
        array('name'=>'Interstellar','link'=>'https://www.primevideo.com/detail/0I9WWNH0WX2Q545OV1W8O1SFE1/ref=atv_sr_def_c_unkc__1_1_1?sr=1-1&pageTypeIdSource=ASIN&pageTypeId=B07CMDKLQ1&qid=1602604323','age rating'=>'12','platform'=>'amazon prime','no'=>''),
        array('name'=>'Life','link'=>'https://www.netflix.com/in/title/80158764','age rating'=>'16','platform'=>'netflix','no'=>''),
        array('name'=>'Project Power','link'=>'https://www.netflix.com/in/title/80204465','age rating'=>'15','platform'=>'netflix','no'=>'')
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
			elseif($choice=='platform')
			{
				for($i=0;$i<count($scifi);$i++){
					foreach ($subs as $value)
					{
						$value = strtolower($value);
						$scifival=strtolower($scifi[$i]['platform']);
						if (strcmp($value,$scifival) == 0)
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
								global $scifi;
								$ind = array_search('Hotstar',$subs);
								$scifi[$i]['no'] = $ind;
							}
							elseif ($value == 'netflix')
							{
								?>
								<script>
									console.log("netflix");
								</script>
								<?php
								global $scifi;
								$ind = array_search('Netflix',$subs);
								$scifi[$i]['no'] = $ind;
							}
							elseif ($value == 'amazon prime')
							{
								?>
								<script>
									console.log("prime");
								</script>
								<?php
								global $scifi;
								$ind = array_search('Amazon Prime',$subs);
								$scifi[$i]['no'] = $ind;
							}
							elseif ($value == 'rent')
							{
								global $scifi;
								$scifi[$i]['no'] = 4;
							}
							else
							{
							}}
					}
				}
				foreach ($scifi as $key => $value)
				{
					$sort['no'][$key]=$value['no'];
				}
				array_multisort($GLOBALS["sort"]['no'], SORT_ASC, $GLOBALS["scifi"]);
			}
		}
	}
	$name=$_COOKIE['name'] ?? 'Guest';
	$i=0;
	function printdata()
	{
		global $scifi;
		global $i;
		echo "<a href='".$scifi[$i]['link']."'>".$scifi[$i]['name']."</a><br/>";
		// echo "Details:<br/>Age rating:{$scifi[$i]['age rating']}+<br/>Available on {$scifi[$i]['platform']}";
		$i++;
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
			<li><form action="scifi.php" method="post"></li>
            <input type="submit" value="SORT" name="submit" style="background-color:black; color:white">
			<select name="sort" id="sort">
            <option value="" disabled selected></option>
            <option value="age" id="age" >Age Rating</option>
            <option value="alphabetical" id="alphabetical" >Alphabetical</option>
			<option value="platform" id="platform">Subscription</option>
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
              </ul>     
              </td>
              </tr>
              </table>    
                
           
             
        </div>
        <p>“I’m the king of the world!”</p>
    
</body>
</html>