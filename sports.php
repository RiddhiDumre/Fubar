<?php
    $sports=array(
        array('name'=>"Hitler's Game",'age rating'=>'13','platform'=>'rent','no'=>'4','link'=>'https://www.amazon.com/Hitlers-Games-J%C3%A9r%C3%B4me-Prieur/dp/B06XX8Y17R'),
        array('name'=>'Hoop Dreams','age rating'=>'13','platform'=>'rent','no'=>'4','link'=>'https://www.amazon.com/Hoop-Dreams-William-Gates/dp/B006DKSQDY'),
        array('name'=>'Rocky','age rating'=>'','platform'=>'rent','no'=>'4','link'=>'https://www.amazon.com/Rocky-Sylvester-Stallone/dp/B0017VT5E8'),
        array('name'=>'Gold','age rating'=>'12','platform'=>'amazon prime','no'=>'','link'=>'https://www.primevideo.com/detail/Gold/0Q7IRLLJZ7W1CL9WUKQ2G9JAZQ'),
        array('name'=>'Chak De! India','age rating'=>'5','platform'=>'amazon prime','no'=>'','link'=>'https://www.primevideo.com/detail/0ST8IWCMUO5NMQM3413WKVMWQS/ref=atv_sr_def_c_unkc__1_1_4?sr=1-1&pageTypeIdSource=ASIN&pageTypeId=B01M3RAI16&qid=1602608484'),
        array('name'=>'Soorma','age rating'=>'10','platform'=>'netflix','no'=>'','link'=>'https://www.netflix.com/in/title/81019031'),
        array('name'=>'Azhar','age rating'=>'15','platform'=>'netflix','no'=>'','link'=>'https://www.netflix.com/in/title/80108518'),
        array('name'=>'Foxcather','age rating'=>'16','platform'=>'netflix','no'=>'','link'=>'https://www.netflix.com/kr-en/title/70291433'),
        array('name'=>'Ali','age rating'=>'16','platform'=>'rent','no'=>'4','link'=>'https://www.amazon.com/Ali-Will-Smith/dp/B000OLRM2O'),
        array('name'=>'Coach Carter','age rating'=>'14','platform'=>'netflix','no'=>'','link'=>'https://www.netflix.com/in/title/70019004'),
        array('name'=>'Southpaw','age rating'=>'16','platform'=>'netflix','no'=>'','link'=>'https://www.netflix.com/in/title/80038447'),
        array('name'=>'Invictus','age rating'=>'12','platform'=>'netflix','no'=>'','link'=>'https://www.netflix.com/in/title/70118779'),
        array('name'=>'M.S. Dhoni: The Untold Story','age rating'=>'10','platform'=>'hotstar','no'=>'','link'=>'https://www.hotstar.com/in/movies/ms-dhoni-the-untold-story/1770003314/watch'),
        array('name'=>'Bhaag Milkha Bhaag','age rating'=>'12','platform'=>'hotstar','no'=>'','link'=>'https://www.hotstar.com/in/movies/bhaag-milkha-bhaag/1000001354/watch'),
        array('name'=>'I am Bolt','age rating'=>'10','platform'=>'rent','no'=>'4','link'=>'https://www.amazon.com/I-Am-Bolt-Usain/dp/B01M749J9I')
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
	foreach ($sports as $key => $value)
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
				array_multisort($GLOBALS["sort"]['age rating'], SORT_ASC, $GLOBALS["sports"]);
			}
			elseif($choice=='alphabetical')
			{
				array_multisort($sort['name'], SORT_ASC, $sports);
			}
			elseif($choice=='platform')
			{
				for($i=0;$i<count($sports);$i++){
					foreach ($subs as $value)
					{
						$value = strtolower($value);
						$sportsval=strtolower($sports[$i]['platform']);
						if (strcmp($value,$sportsval) == 0)
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
								global $sports;
								$ind = array_search('Hotstar',$subs);
								$sports[$i]['no'] = $ind;
							}
							elseif ($value == 'netflix')
							{
								?>
								<script>
									console.log("netflix");
								</script>
								<?php
								global $sports;
								$ind = array_search('Netflix',$subs);
								$sports[$i]['no'] = $ind;
							}
							elseif ($value == 'amazon prime')
							{
								?>
								<script>
									console.log("prime");
								</script>
								<?php
								global $sports;
								$ind = array_search('Amazon Prime',$subs);
								$sports[$i]['no'] = $ind;
							}
							elseif ($value == 'rent')
							{
								global $sports;
								$sports[$i]['no'] = 4;
							}
							else
							{
							}}
					}
				}
				foreach ($sports as $key => $value)
				{
					$sort['no'][$key]=$value['no'];
				}
				array_multisort($GLOBALS["sort"]['no'], SORT_ASC, $GLOBALS["sports"]);
			}
		}
	}
	$name=$_COOKIE['name'] ?? 'Guest';
	$i=0;
	function printdata()
	{
		global $sports;
		global $i;
		echo "<a href='".$sports[$i]['link']."'>".$sports[$i]['name']."</a><br/>";
		// echo "Details:<br/>Age rating:{$sports[$i]['age rating']}+<br/>Available on {$sports[$i]['platform']}";
		$i++;
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
	<title>sports</title>
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
                <li><?php echo printdata(); ?></li>
              </ul>     
              </td>
              </tr>
              </table>    
                
           
             
        </div>
        <p>“I’m the king of the world!”</p>
    
</body>
</html>