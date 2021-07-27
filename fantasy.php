<?php
    $fantasy=array(
        array('name'=>'Inglorius Basterds','age rating'=>'18','platform'=>'rent','no'=>'','link'=>'https://www.amazon.com/Inglourious-Basterds-Brad-Pitt/dp/B002UEW31I'),
        array('name'=>'Harry Potter and The Prisoner Of Askaban','age rating'=>'11','platform'=>'amazon','no'=>'','link'=>'https://www.primevideo.com/detail/0HKBCOWZ6L75JX0GXBANJSQLIM/ref=atv_sr_def_c_unkc__6_1_6?sr=1-6&pageTypeIdSource=ASIN&pageTypeId=B0743NHPYP&qid=1602706378'),
        array('name'=>'Pirates Of the Carribean: The Curse of the Black Pearl','age rating'=>'13','platform'=>'hotstar','no'=>'','link'=>'https://www.hotstar.com/in/movies/pirates-of-the-caribbean-the-curse-of-the-black-pearl/1660010115/watch'),
        array('name'=>'Ratatoullie','age rating'=>'5','platform'=>'hotstar','no'=>'','link'=>'https://www.hotstar.com/in/movies/ratatouille/1260016855'),
        array('name'=>'Toy Story','age rating'=>'5','platform'=>'hotstar','no'=>'','link'=>'https://www.hotstar.com/in/movies/toy-story/1660010197'),
        array('name'=>'Jungle Book','age rating'=>'5','platform'=>'hotstar','no'=>'','link'=>'https://www.hotstar.com/in/movies/the-jungle-book/1260018310'),
        array('name'=>'Dr. Strange','age rating'=>'10','platform'=>'hotstar','no'=>'','link'=>'https://www.hotstar.com/in/movies/doctor-strange/1260018179'),
        array('name'=>'Divergent','age rating'=>'13','platform'=>'netflix','no'=>'','link'=>'https://www.netflix.com/in/title/70293461'),
        array('name'=>'The Hunger Games','age rating'=>'13','platform'=>'netfllix','no'=>'','link'=>'https://www.netflix.com/be-en/title/70206672'),
        array('name'=>'The Hunger Games: Catching Fire','age rating'=>'13','platform'=>'amazon prime','no'=>'','link'=>'https://www.amazon.com/Hunger-Games-Catching-Fire/dp/B00I2TV3NO'),
        array('name'=>'Fantastic Beasts and where to find them?','age rating'=>'11','platform'=>'netflix','no'=>'','link'=>'https://www.netflix.com/in/title/80997275'),
        array('name'=>'The curious case of Benjamin Button','age rating'=>'13','link'=>'https://www.primevideo.com/detail/The-Curious-Case-Of-Benjamin-Button/0G557SOIN7G7YQBJK9B6BI37AA','platform'=>'amazon','no'=>''),
        array('name'=>'Hugo','age rating'=>'5','platform'=>'netflix','no'=>'','link'=>'https://www.netflix.com/in/title/70202136'),
        array('name'=>'Big Fish','age rating'=>'13','platform'=>'amazon prime','link'=>'https://www.amazon.com/Big-Fish-Billy-Crudup/dp/B00190KZUU','no'=>''),
        array('name'=> 'Life of Pi','age rating'=>'5','platform'=>'amazon prime','no'=>'','link'=>'https://www.amazon.com/Life-Pi-Suraj-Sharma/dp/B00BGZ8OLA'),
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
	foreach ($fantasy as $key => $value)
	{
		$sort['age rating'][$key]=$value['age rating'];
		// $sort['name'][$key]=$value['name'];//qwqww1
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
			elseif($choice=='platform')
			{
				for($i=0;$i<count($fantasy);$i++){
					foreach ($subs as $value)
					{
						$value = strtolower($value);
						$fantasyval=strtolower($fantasy[$i]['platform']);
						if (strcmp($value,$fantasyval) == 0)
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
								global $fantasy;
								$ind = array_search('Hotstar',$subs);
								$fantasy[$i]['no'] = $ind;
							}
							elseif ($value == 'netflix')
							{
								?>
								<script>
									console.log("netflix");
								</script>
								<?php
								global $fantasy;
								$ind = array_search('Netflix',$subs);
								$fantasy[$i]['no'] = $ind;
							}
							elseif ($value == 'amazon prime')
							{
								?>
								<script>
									console.log("prime");
								</script>
								<?php
								global $fantasy;
								$ind = array_search('Amazon Prime',$subs);
								$fantasy[$i]['no'] = $ind;
							}
							elseif ($value == 'rent')
							{
								global $fantasy;
								$fantasy[$i]['no'] = 4;
							}
							else
							{
							}}
					}
				}
				foreach ($fantasy as $key => $value)
				{
					$sort['no'][$key]=$value['no'];
				}
				array_multisort($GLOBALS["sort"]['no'], SORT_ASC, $GLOBALS["fantasy"]);
			}
		}
}
	$name=$_COOKIE['name'] ?? 'Guest';
	$i=0;
	function printdata()
	{
		global $fantasy;
		global $i;
		echo "<a href='".$fantasy[$i]['link']."'>".$fantasy[$i]['name']."</a><br/>";//23233
		// echo "Details:<br/>Age rating:{$fantasy[$i]['age rating']}+<br/>Available on {$fantasy[$i]['platform']}";
		$i++;
	}
	$name=$_COOKIE['name'] ?? 'Guest';
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
      <h3 style=" margin-left: -55%;">UBAR</h3>
        <nav class="nav-area">
            <li>Hello <?php echo htmlspecialchars($name)?></li>
            <li><a href="index.php">HOME</a></li>
            <li><a href="search.php">SEARCH</a></li>
            <li><a href="contac.php">CONTACT</a></li>
            <li><a href="login.php">LOG-IN</a></li>
            <li><a href="forms1.php">SIGN-IN</a></li>
			<li><form action="fantasy.php" method="post"></li>
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