<?php
    $horror=array(
        array('name'=>'Conjuring','link'=>'//www.primevideo.com/region/eu/detail/0GDPCQ65PO0YNZFG2JOQAKLVAF/ref=atv_sr_def_c_unkc__1_1_1?sr=1-1&pageTypeIdSource=ASIN&pageTypeId=B078YFBVW7&qid=1602513412','platform'=>'amazon prime','no'=>''),
        array('name'=>'Get Out','link'=>'//www.amazon.com/Get-Out-Daniel-Kaluuya/dp/B06Y1H48K7h','platform'=>'rent','no'=>'4'),
        array('name'=>'It','link'=>'https://www.primevideo.com/region/eu/detail/0SXJRMEMFM7C7V4ZEQPLMW1HOB/ref=atv_sr_def_c_unkc__10_1_10?sr=1-10&pageTypeIdSource=ASIN&pageTypeId=B07DH8WFD8&qid=1602513412','platform'=>'amazon prime','no'=>''),
        array('name'=>'Lights Out','link'=>'https://www.primevideo.com/region/eu/detail/0G0W4D68V760KOHO1579TD7PJM/ref=atv_br_def_r_br_c_unkc_1_31','platform'=>'amazon prime','no'=>''),
        array('name'=>'The Blair Witch Project','link'=>'https://www.netflix.com/title/18957965','platform'=>'netflix','no'=>''),
        array('name'=>'Texas Chaisaw Massacre','link'=>'https://www.amazon.com/Texas-Chain-Saw-Massacre-Anniversary/dp/B00NN57F34/?ots=1&slotNum=4&imprToken=6eba8ea1-19ea-37cc-8f3&linkCode=ogi&tag=harpersbazaar_auto-append-20&ascsubtag=[artid|10056.g.10247453[src|[ch|[lt|','platform'=>'netflix','no'=>''),
        array('name'=>'Quiet Place','link'=>'https://www.netflix.com/in/title/80213226','platform'=>'netflix','no'=>''),
        array('name'=>'The Ring','link'=>'https://www.primevideo.com/detail/0O6ZWUW0F524D4CAN01O8H18VA/ref=atv_sr_def_c_unkc__1_1_1?sr=1-1&pageTypeIdSource=ASIN&pageTypeId=B01M4QHYS6&qid=1602514107','platform'=>'amazon prime','no'=>''),
        array('name'=>'Host','link'=>'https://www.amazon.com/Host-Haley-Bishop/dp/B08DX5F3WT','platform'=>'rent','no'=>'4'),
        array('name'=>'The Shining','link'=>'https://www.netflix.com/in/title/959008','platform'=>'netflix','no'=>''),
        array('name'=>'The Stranger','link'=>'https://www.amazon.com/Strangers-Unrated-Alex-Fisher/dp/B001IX1NJA','platform'=>'rent','no'=>'4'),
        array('name'=>'The Exorcist','link'=>'https://www.amazon.com/Exorcist-Ellen-McRae/dp/B00AAI7B7W/ref=sr_1_1?crid=NRJ2U4D4SJOH&dchild=1&keywords=the+exorcist&qid=1602514649&s=instant-video&sprefix=the+exo%2Cinstant-video%2C428&sr=1-1','platform'=>'amazon prime','no'=>''),
        array('name'=>'Doctor Sleep','link'=>'https://www.primevideo.com/detail/0GQK7R5G9KI5YPIRC3JIFQ7UGP/ref=atv_sr_def_c_unkc__1_1_1?sr=1-1&pageTypeIdSource=ASIN&pageTypeId=B087D2BLBD&qid=1602514703','platform'=>'amazon prime','no'=>''),
        array('name'=>"The Devil's Backbone",'link'=>'https://www.amazon.com/Devils-Backbone-Marisa-Paredes/dp/B002L5ATP8','platform'=>'amazon prime','no'=>''),
        array('name'=>'El Orfanato','link'=>'https://www.netflix.com/it-en/title/70077549','platform'=>'netflix','no'=>''),
        array('name'=>'Sinister','link'=>'https://www.netflix.com/in/title/70221486','platform'=>'netflix','no'=>''),
        array('name'=>'Bhool Bhulaiyya','link'=>'https://www.primevideo.com/detail/Bhool-Bhulaiyaa/0N4MPYB5ZMT5FTXJWWKQU4KRDZ','platform'=>'amazon prime','no'=>'')
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
	foreach ($horror as $key => $value)
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
			
			if($choice=='alphabetical')
			{
				array_multisort($sort['name'], SORT_ASC, $horror);
			}
			elseif($choice=='platform')
			{
				for($i=0;$i<count($horror);$i++){
					foreach ($subs as $value)
					{
						$value = strtolower($value);
						$horrorval=strtolower($horror[$i]['platform']);
						if (strcmp($value,$horrorval) == 0)
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
								global $horror;
								$ind = array_search('Hotstar',$subs);
								$horror[$i]['no'] = $ind;
							}
							elseif ($value == 'netflix')
							{
								?>
								<script>
									console.log("netflix");
								</script>
								<?php
								global $horror;
								$ind = array_search('Netflix',$subs);
								$horror[$i]['no'] = $ind;
							}
							elseif ($value == 'amazon prime')
							{
								?>
								<script>
									console.log("prime");
								</script>
								<?php
								global $horror;
								$ind = array_search('Amazon Prime',$subs);
								$horror[$i]['no'] = $ind;
							}
							elseif ($value == 'rent')
							{
								global $horror;
								$horror[$i]['no'] = 4;
							}
							else
							{
							}}
					}
				}
				foreach ($horror as $key => $value)
				{
					$sort['no'][$key]=$value['no'];
				}
				array_multisort($GLOBALS["sort"]['no'], SORT_ASC, $GLOBALS["horror"]);
			}
		}
	}
	$name=$_COOKIE['name'] ?? 'Guest';
	$i=0;
	function printdata()
	{
		global $horror;
		global $i;
		echo "<a href='".$horror[$i]['link']."'>".$horror[$i]['name']."</a><br/>";
		// echo "Details:<br/>Age rating:{$horror[$i]['age rating']}+<br/>Available on {$horror[$i]['platform']}";
		$i++;
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
            <li><a href="index.php">HOME</a></li>
            <li><a href="contac.php">CONTACT</a></li>
            <li><a href="login.php">LOG-IN</a></li>
			<li><a href="forms1.php">SIGN-IN</a></li>
			<li><form action="horror.php" method="post"></li>
            <input type="submit" value="SORT" name="submit" style="background-color:black; color:white">
			<select name="sort" id="sort">
            <option value="" disabled selected></option>
            <option value="alphabetical" id="alphabetical" >Alphabetical</option>
			<option value="platform" id="platform">Subscription</option>
        	</select>
    </form>
        </nav>
    </header>
            <div class="fav" ><h1>HERE ARE SOME OF OUR FAVS!</h1>
            CLICK TO GET TO THE STREAMING SERVICE
            </div>

        <div class="list1" >
         

                
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