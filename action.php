<?php
    $action=array(
        array('name'=>'Bad Boys for life','platform'=>'amazon prime','no'=>'','age rating'=>'16','link'=>'https://www.primevideo.com/detail/0G9IDOZXKU2W9DW4G0ST0YXYI5/ref=atv_sr_def_c_unkc__1_1_1?sr=1-1&pageTypeIdSource=ASIN&pageTypeId=B08727GN35&qid=1602674022'),
        array('name'=>'6 Underground','platform'=>'netflix','no'=>'','age rating'=>'17','link'=>'https://www.netflix.com/in/title/81001887'),
        array('name'=>'Extraction','platform'=>'netflix','no'=>'','age rating'=>'16','link'=>'https://www.netflix.com/in/title/80230399'),
        array('name'=>'The Decline','platform'=>'netflix','no'=>'','age rating'=>'10','link'=>'https://www.netflix.com/in/title/81013927'),
        array('name'=>'Close','platform'=>'netflix','no'=>'','age rating'=>'16','link'=>'https://www.netflix.com/in/title/80207371'),
        array('name'=>'Point Blank','platform'=>'netflix','no'=>'','age rating'=>'16','link'=>'https://www.netflix.com/in/title/80221677'),
        array('name'=>'War','platform'=>'amazon prime','no'=>'','age rating'=>'10','link'=>'https://www.primevideo.com/detail/0IE81NLJ76SMXNZFNXSO19XWRK/ref=atv_br_def_r_br_c_unkc_1_11'),
        array('name'=>'Wheelman','platform'=>'netflix','no'=>'','age rating'=>'18','link'=>'https://www.netflix.com/in/title/80113669'),
        array('name'=>'The Crew','platform'=>'netflix','no'=>'','age rating'=>'15','link'=>'https://www.netflix.com/in/title/80196044'),
        array('name'=>'Skyscraper','platform'=>'netflix','no'=>'','age rating'=>'13','link'=>'https://www.netflix.com/in/title/80233783'),
        array('name'=>'White house down','platform'=>'amazon prime','no'=>'','age rating'=>'14','link'=>'https://www.primevideo.com/detail/0S3PZCRD89FOTW8XLQPG8G5JMW/ref=atv_sr_def_c_unkc__1_1_1?sr=1-1&pageTypeIdSource=ASIN&pageTypeId=B07J5T92BR&qid=1602674758'),
        array('name'=>'Mission Impossible','platform'=>'netflix','no'=>'','age rating'=>'13','link'=>'https://www.netflix.com/in/title/80236314'),
        array('name'=>'Now you see me ','platform'=>'netflix','no'=>'','age rating'=>'13','link'=>'https://www.netflix.com/in/title/80093138'),
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
	foreach ($action as $key => $value)
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
				array_multisort($GLOBALS["sort"]['age rating'], SORT_ASC, $GLOBALS["action"]);
			}
			elseif($choice=='alphabetical')
			{
				array_multisort($sort['name'], SORT_ASC, $action);
			}
			elseif($choice=='platform')
			{
				for($i=0;$i<count($action);$i++){
					foreach ($subs as $value)
					{
						$value = strtolower($value);
						$actionval=strtolower($action[$i]['platform']);
						if (strcmp($value,$actionval) == 0)
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
								global $action;
								$ind = array_search('Hotstar',$subs);
								$action[$i]['no'] = $ind;
							}
							elseif ($value == 'netflix')
							{
								?>
								<script>
									console.log("netflix");
								</script>
								<?php
								global $action;
								$ind = array_search('Netflix',$subs);
								$action[$i]['no'] = $ind;
							}
							elseif ($value == 'amazon prime')
							{
								?>
								<script>
									console.log("prime");
								</script>
								<?php
								global $action;
								$ind = array_search('Amazon Prime',$subs);
								$action[$i]['no'] = $ind;
							}
							elseif ($value == 'rent')
							{
								global $action;
								$action[$i]['no'] = 4;
							}
							else
							{
							}}
					}
				}
				foreach ($action as $key => $value)
				{
					$sort['no'][$key]=$value['no'];
				}
				array_multisort($GLOBALS["sort"]['no'], SORT_ASC, $GLOBALS["action"]);
			}
		}
	}
	$name=$_COOKIE['name'] ?? 'Guest';
	$i=0;
	function printdata()
	{
		global $action;
		global $i;
		echo "<a href='".$action[$i]['link']."'>".$action[$i]['name']."</a><br/>";
		$i++;
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
	<title>action</title>
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
			<li><form action="action.php" method="post"></li>
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
              </ul>     
              </td>
              </tr>
              </table>    
                
           
             
        </div>
        <p>“I’m the king of the world!”</p>
    
</body>
</html>