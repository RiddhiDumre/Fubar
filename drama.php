<?php
	$drama=array(
		// 'farewell'=>
		array('name'=>'Farewell','age rating'=>'13','platform'=>'Rent','link'=>'//www.amazon.com/Farewell-Awkwafina/dp/B07V4TH3M5','no'=>'4'),
		// 'call me by your name'=>
		array('name'=>'Call me by your name','age rating'=>'18','platform'=>'Rent','link'=>'//www.amazon.com/gp/video/detail/amzn1.dv.gti.3ab07e36-1403-8deb-e4e1-3cb85ebe58ea?ots=1&tag=glamour0d7-20&linkCode=w50&autoplay=1','no'=>'4'),
		// 'black swan'=>
		array('name'=>'Black Swan','age rating'=>'18','platform'=>'Hotstar','link'=>'//www.amazon.com/gp/video/detail/amzn1.dv.gti.a4a9f739-9af7-b00b-8a06-7c64db13ff30?ots=1&tag=glamour0d7-20&linkCode=w50&autoplay=1"','no'=>''),
		// 'hidden figures'=>
		array('name'=>'Hidden Figures','age rating'=>'13','platform'=>'Hotstar','link'=>'//go.skimresources.com/?id=100097X1555749&isjs=1&jv=14.3.0-stackpath&sref=https%3A%2F%2Fwww.glamour.com%2Fgallery%2Fbest-drama-movies&url=https%3A%2F%2Fwww.hulu.com%2Fprofiles%3Fnext%3D%2Fwatch%2F330cb891-2798-45a0-bf46-6debfa6e68d4&xguid=24ee3b494d90cdc4f1a4911c427bbe2e&xs=1&xtz=-330&xuuid=24c5f9c74ff373806402ecf0e8b70cee&abp=1&xjsf=other_click__auxclick%20%5B2%5D','no'=>''),
		// 'the florida project'=>
		array('name'=>'The Florida Project','age rating'=>'18','platform'=>'Netflix','link'=>'//www.netflix.com/watch/80194388?source=35','no'=>''),
		// 'girl, interrupted'=>
		array('name'=>'Girl, Interrupted','age rating'=>'16','platform'=>'Netflix','link'=>'//go.skimresources.com/?id=100097X1555749&isjs=1&jv=14.3.0-stackpath&sref=https%3A%2F%2Fwww.glamour.com%2Fgallery%2Fbest-drama-movies&url=https%3A%2F%2Fitunes.apple.com%2Fus%2Fmovie%2Fgirl-interrupted%2Fid539334344&xguid=24ee3b494d90cdc4f1a4911c427bbe2e&xs=1&xtz=-330&xuuid=24c5f9c74ff373806402ecf0e8b70cee&abp=1&xjsf=other_click__auxclick%20%5B2%5D','no'=>''),
		// 'moonlight'=>
		array('name'=>'Moonlight','age rating'=>'18','platform'=>'Prime','link'=>'//www.netflix.com/title/80121348','no'=>''),
		// 'juno'=>
		array('name'=>'Juno','age rating'=>'12','platform'=>'Netflix','link'=>'//www.amazon.com/Juno-Ellen-Page/dp/B0014GVCI8?ots=1&tag=glamour0d7-20&linkCode=w50','no'=>''),
		// 'gone girl'=>
		array('name'=>'Gone Girl','age rating'=>'18','platform'=>'Netflix','link'=>'//www.amazon.com/Gone-Girl-Ben-Affleck/dp/B00O4UQIT4?ots=1&tag=glamour0d7-20&linkCode=w50','no'=>''),


		// 'precious'=>
		array('name'=>'Precious','age rating'=>'18','platform'=>'Rent','link'=>'//www.amazon.com/Precious-Gabourey-Sidibe/dp/B0037QM8YA?ots=1&tag=glamour0d7-20&linkCode=w50','no'=>'4'),
		// 'little miss sunshine'=>
		array('name'=>'Little Miss Sunshine','age rating'=>'15','platform'=>'Hotstar','link'=>'//www.amazon.com/Little-Miss-Sunshine-Abigail-Breslin/dp/B000M2SM92?ots=1&tag=glamour0d7-20&linkCode=w50','no'=>''),
		// 'parasite'=>
		array('name'=>'Parasite','age rating'=>'18','platform'=>'Prime','link'=>'//www.amazon.com/Parasite-English-Subtitled-Kang-Song/dp/B07YM14FRG?ots=1&tag=glamour0d7-20&linkCode=w50','no'=>''),
		// 'little women'=>
		array('name'=>'Little women','age rating'=>'5','platform'=>'Prime','link'=>'//www.amazon.com/gp/video/detail/amzn1.dv.gti.8cb78d19-fc57-4ec8-3226-c04c8a8f48b9?ots=1&tag=glamour0d7-20&linkCode=w50&autoplay=1','no'=>''),
		// 'million dollar baby'=>
		array('name'=>'Million Dollar Baby','age rating'=>'13','platform'=>'Netflix','link'=>'//www.amazon.com/gp/video/detail/amzn1.dv.gti.26a9f738-929f-2a31-57f9-0f7a9723d11f?ots=1&tag=glamour0d7-20&linkCode=w50&autoplay=1','no'=>''),
		// 'roma'=>
		array('name'=>'Roma','age rating'=>'18','platform'=>'Netflix','link'=>'//www.netflix.com/watch/80240715?source=35','no'=>''),
		// 'social network'=>
		array('name'=>'Social Network','age rating'=>'15','platform'=>'Netflix','link'=>'//www.netflix.com/watch/70132721?source=35','no'=>''),
		// 'room'=>
		array('name'=>'Room','age rating'=>'18','platform'=>'Netflix','link'=>'//www.netflix.com/watch/80073823?source=35','no'=>'')
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
	foreach ($drama as $key => $value)
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
				array_multisort($GLOBALS["sort"]['age rating'], SORT_ASC, $GLOBALS["drama"]);
			}
			elseif($choice=='alphabetical')
			{
				array_multisort($sort['name'], SORT_ASC, $drama);
			}
			elseif($choice=='platform')
			{
				for($i=0;$i<count($drama);$i++){
					foreach ($subs as $value)
					{
						$value = strtolower($value);
						$dramaval=strtolower($drama[$i]['platform']);
						if (strcmp($value,$dramaval) == 0)
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
								global $drama;
								$ind = array_search('Hotstar',$subs);
								$drama[$i]['no'] = $ind;
							}
							elseif ($value == 'netflix')
							{
								?>
								<script>
									console.log("netflix");
								</script>
								<?php
								global $drama;
								$ind = array_search('Netflix',$subs);
								$drama[$i]['no'] = $ind;
							}
							elseif ($value == 'amazon prime')
							{
								?>
								<script>
									console.log("prime");
								</script>
								<?php
								global $drama;
								$ind = array_search('Amazon Prime',$subs);
								$drama[$i]['no'] = $ind;
							}
							elseif ($value == 'rent')
							{
								global $drama;
								$drama[$i]['no'] = 4;
							}
							else
							{
							}}
					}
				}
				foreach ($drama as $key => $value)
				{
					$sort['no'][$key]=$value['no'];
				}
				array_multisort($GLOBALS["sort"]['no'], SORT_ASC, $GLOBALS["drama"]);
			}
		}
	}
	$name=$_COOKIE['name'] ?? 'Guest';
	$i=0;
	function printdata()
	{
		global $drama;
		global $i;
		echo "<a href='".$drama[$i]['link']."'>".$drama[$i]['name']."</a><br/>";
		// echo "Details:<br/>Age rating:{$drama[$i]['age rating']}+<br/>Available on {$drama[$i]['platform']}";
		$i++;
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
	<title>drama</title>
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