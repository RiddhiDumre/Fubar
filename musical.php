<?php
	$musical=array(
			array('name'=>'Mamma Mia','age rating'=>'13','link'=>'//www.amazon.com/ap/signin?_encoding=UTF8&accountStatusPolicy=P1&clientContext=134-2299199-2856136&openid.assoc_handle=usflex&openid.claimed_id=http://specs.openid.net/auth/2.0/identifier_select&openid.identity=http://specs.openid.net/auth/2.0/identifier_select&openid.mode=checkid_setup&openid.ns=http://specs.openid.net/auth/2.0&openid.ns.pape=http://specs.openid.net/extensions/pape/1.0&openid.pape.max_auth_age=0&openid.return_to=https://www.amazon.com/gp/video/detail/amzn1.dv.gti.9ca9f7b5-f3fb-b0dd-4942-dfc0480e2cdc/ref=dv_web_auth_no_re_sig%3Fie=UTF8&ascsubtag=5461878%252C2%252C28%252Cmobile_web%252C1%252C0%252C76304%2C%2C%2Cd%2C%2C%2C0%2C0%3A0%2C76304%2C0&autoplay=1&tag=buzz0f-20','no'=>'','platform'=>'netflix'),
			array('name'=>'Mary Poppins','age rating'=>'5','link'=>'//www.hotstar.com/in/movies/mary-poppins/1260018316','no'=>'','platform'=>'hotstar'),
			array('name'=>'Cats','age rating'=>'5','link'=>'//www.amazon.com/dp/B082YLT68G?tag=buzz0f-20&ascsubtag=5461878%2C4%2C28%2Cd%2C0%2C0%2C0%2C0%3A0%2C0%2C0','no'=>'4','platform'=>'rent'),
			array('name'=>'Hamilton','age rating'=>'10','link'=>'//www.hotstar.com/in/movies/hamilton/1260032145','no'=>'','platform'=>'hotstar'),
			array('name'=>'Newsies','age rating'=>'5','link'=>'//www.amazon.com/Newsies-Christian-Bale/dp/B0058ZWYJC','no'=>'4','platform'=>'rent'),
			array('name'=>'Beauty and the Beast','age rating'=>'5','link'=>'//www.hotstar.com/in/movies/beauty-and-the-beast/1260017283','no'=>'','platform'=>'hotstar'),
			array('name'=>'The sound of music','age rating'=>'8','link'=>'//www.amazon.com/Sound-Music-Julie-Andrews/dp/B0044XRIMW?ots=1&slotNum=1&imprToken=38ba8e0f-a587-05ca-b9c&linkCode=ogi&tag=goodhousekeeping_auto-append-20&ascsubtag=[artid|10055.g.32403231[src|[ch|[lt|','no'=>'4','platform'=>'rent'),
			array('name'=>'La La Land','age rating'=>'13','link'=>'//www.netflix.com/br-en/title/80095365|','no'=>'','platform'=>'netflix'),
			array('name'=>'Grease','age rating'=>'13','link'=>'//www.netflix.com/in/title/60000577','no'=>'','platform'=>'netflix'),
			array('name'=>'Chicago','age rating'=>'13','link'=>'//www.amazon.com/gp/product/B00BQPGSZY/ref=pv_ag_gcf?cmp=rt_where_to_watch','no'=>'','platform'=>'amazon prime'),
			array('name'=>'Once','age rating'=>'18','link'=>'//www.vudu.com/content/movies/details/Once/129019?cmp=rt_where_to_watch','no'=>'','platform'=>'amazon prime'),
			array('name'=>'Whiplash','age rating'=>'18','link'=>'www.amazon.com/Whiplash-Paul-Reiser/dp/B00PRX8UBG','no'=>'','platform'=>'amazon prime'),
			array('name'=>'The Greatest Showman','age rating'=>'10','link'=>'//www.hotstar.com/in/movies/the-greatest-showman/1770019156','no'=>'','platform'=>'hotstar'),
			array('name'=>'Encore!','age rating'=>'10','link'=>'//www.hotstar.com/in/tv/encore/1260021232','no'=>'4','platform'=>'rent'),
			array('name'=>'High School Musical','age rating'=>'8','link'=>'//www.hotstar.com/in/tv/high-school-musical-the-musical-the-series-the-singalong/1260021428/the-auditions-the-singalong/1260021434','no'=>'','platform'=>'hotstar'),
			array('name'=>'Lion King','age rating'=>'5','link'=>'//www.hotstar.com/in/movies/the-lion-king/1260014782','no'=>'','platform'=>'hotstar'),
			array('name'=>'Hello, Dolly!','age rating'=>'9','link'=>'//www.hotstar.com/in/movies/hello-dolly/1260027137','no'=>'4','platform'=>'rent')
		);
	$name=$_COOKIE['name'] ?? 'Guest';
    session_start();
    $subs=$_SESSION['subscription'] ?? 'rent';
	$subs=explode(',',$subs);
	$sort= array();
	$i=0;
	foreach ($musical as $key => $value)
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
				array_multisort($GLOBALS["sort"]['age rating'], SORT_ASC, $GLOBALS["musical"]);
			}
			elseif($choice=='alphabetical')
			{
				array_multisort($sort['name'], SORT_ASC, $musical);
			}
			elseif($choice=='platform')
			{
				for($i=0;$i<count($musical);$i++){
					foreach ($subs as $value)
					{
						$value = strtolower($value);
						$musicalval=strtolower($musical[$i]['platform']);
						if (strcmp($value,$musicalval) == 0)
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
								global $musical;
								$ind = array_search('Hotstar',$subs);
								$musical[$i]['no'] = $ind;
							}
							elseif ($value == 'netflix')
							{
								?>
								<script>
									console.log("netflix");
								</script>
								<?php
								global $musical;
								$ind = array_search('Netflix',$subs);
								$musical[$i]['no'] = $ind;
							}
							elseif ($value == 'amazon prime')
							{
								?>
								<script>
									console.log("prime");
								</script>
								<?php
								global $musical;
								$ind = array_search('Amazon Prime',$subs);
								$musical[$i]['no'] = $ind;
							}
							elseif ($value == 'rent')
							{
								global $musical;
								$musical[$i]['no'] = 4;
							}
							else
							{
							}}
					}
				}
				foreach ($musical as $key => $value)
				{
					$sort['no'][$key]=$value['no'];
				}
				array_multisort($GLOBALS["sort"]['no'], SORT_ASC, $GLOBALS["musical"]);
			}
		}
	}
	$i=0;
	function printdata()
	{
		global $musical;
		global $i;
		echo "<a href='".$musical[$i]['link']."'>".$musical[$i]['name']."</a>";$i++;
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Musical</title>
</head>

<body>
  <video autoplay muted loop id="myVideo">
    <source
      src="images/Bouncing_DVD_logo[Youtubetomp3.sc].mp4"
      type="video/mp4">
  </video>
  <header>
    <a href="index.php"><img class="logo" src="images/f.png" width="40px" height="40px" alt=""></a>
    <h3>UBAR</h3>
    <nav class="nav-area" >
            <li>Hello <?php echo htmlspecialchars($name)?></li>
            <li><a href="index.php">HOME</a></li>
            <li><a href="contac.php">CONTACT</a></li>
            <li><a href="login.php">LOG-IN</a></li>
			<li><a href="forms1.php">SIGN-IN</a></li>
			<li><form action="musical.php" method="post"></li>
            <input type="submit" value="SORT" name="submit" style="background-color:black; color:white">
			<select name="sort" id="sort">
            <option value="" disabled selected></option>
            <option value="age" id="age" >Age Rating</option>
            <option value="alphabetical" id="alphabetical" >Alphabetical</option>
			<option value="platform">Subscription</option>
        	</select>
    </form>
        </nav>
  </header>

  <div class="fav">
    <h1>HERE ARE SOME OF OUR FAVS!</h1>
    CLICK TO GET TO THE STREAMING SERVICE
  </div>

  <div class="list1">
    <ul>


      <table>
        <tr>
          <td>
            <ul style="list-style-type:none;">
      <li><?php echo printdata() ?></li>
	  <li><?php echo printdata() ?></li>
      <li><?php echo printdata() ?></li>
      <li><?php echo printdata() ?></li>
      <li><?php echo printdata() ?></li>
      <li><?php echo printdata() ?></li>
      <li><?php echo printdata() ?></li>
      <li><?php echo printdata() ?></li>

        </ul>
        </td>
              
              
                
        <td>
      
			<ul style="list-style-type:none;">
				<li><?php echo printdata() ?></li>
				<li><?php echo printdata() ?></li>
				<li><?php echo printdata() ?></li>
				<li><?php echo printdata() ?></li>
				<li><?php echo printdata() ?></li>
				<li><?php echo printdata() ?></li>
				<li><?php echo printdata() ?></li>
				<li><?php echo printdata() ?></li>
				<li><?php echo printdata() ?></li>
			</ul>
    	</td>
        </tr>         
  </table>    
    

    </ul>

  </div>
  <p>“I’m the king of the world!”</p>

</body>

</html>