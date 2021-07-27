<?php
	$comedy=array (
		array('name'=>'Toy Story 4','age rating'=>'5','link'=>'//www.hotstar.com/in/movies/toy-story-4/1260015326','no'=>'','platform'=>'hotstar'),
		array('name'=>'Lady Bird','age rating'=>'18','link'=>'//www.netflix.com/title/80205227#:~:text=2017R%201h%2033mDramas,Watch%20all%20you%20want.','no'=>'','platform'=>'netflix'),
		array('name'=>'BLACKKKLANSMAN','age rating'=>'//www.amazon.com/gp/product/B07G7GRTVH/ref=pv_ag_gcf?cmp=rt_where_to_watch','link'=>'//www.amazon.com/gp/product/B07G7GRTVH/ref=pv_ag_gcf?cmp=rt_where_to_watch','no'=>'','platform'=>'netflix'),
		array('name'=>'Modern Times','age rating'=>'5','link'=>'//www.amazon.com/gp/product/B00D5ZGCTA/ref=pv_ag_gcf?cmp=rt_where_to_watch','no'=>'4','platform'=>'rent'),
		array('name'=>'EIGTH GRADE','age rating'=>'13','link'=>'https://www.amazon.com/gp/product/B07FJNMSFN/ref=pv_ag_gcf?cmp=rt_where_to_watch','no'=>'','platform'=>'amazon prime'),
		array('name'=>'Liar Liar','age rating'=>'13','link'=>'https://www.amazon.com/gp/product/B00D5DP00Y/ref=pv_ag_gcf?cmp=rt_where_to_watch','no'=>'','platform'=>'amazon prime'),
		array('name'=>'The Grand Budapest Hotel','age rating'=>'18','link'=>'//www.amazon.com/gp/product/B00L23RZO8/ref=pv_ag_gcf?cmp=rt_where_to_watch','no'=>'4','platform'=>'rent'),
		array('name'=>'La la land','age rating'=>'13','link'=>'https://www.netflix.com/br-en/title/80095365|','no'=>'','platform'=>'amazon prime'),
		array('name'=>'Safety last','age rating'=>'13','link'=>'//www.amazon.com/gp/product/B00DGMS7SQ/ref=pv_ag_gcf?cmp=rt_where_to_watch','no'=>'','platform'=>'amazon prime'),
		array('name'=>'Big','age rating'=>'13','link'=>'//www.amazon.com/gp/product/B00BQPGSZY/ref=pv_ag_gcf?cmp=rt_where_to_watch','no'=>'','platform'=>'amazon prime'),
		array('name'=>'City lights','age rating'=>'10','link'=>'//www.amazon.com/gp/product/B00BWJB18I/ref=pv_ag_gcf?cmp=rt_where_to_watch','no'=>'','platform'=>'amazon prime'),
		array('name'=>'Some like it hot','age rating'=>'18','link'=>'www.amazon.com/gp/product/B004778YJG/ref=pv_ag_gcf?cmp=rt_where_to_watch','no'=>'4','platform'=>'rent'),
		array('name'=>'It happened one night','age rating'=>'10','link'=>'//www.amazon.com/gp/product/B00T38L0KO/ref=pv_ag_gcf?cmp=rt_where_to_watch6','no'=>'','platform'=>'amazon prime'),
		array('name'=>'Dr. Strangelove OR: How I learned to stop worrying and love the bomb','age rating'=>'14','link'=>'//www.amazon.com/Dr-Strangelove-Learned-Stop-Worrying/dp/B000P407K4','no'=>'','platform'=>'netflix'),
		array('name'=>'Chichhore','age rating'=>'12','link'=>'//www.hotstar.com/in/movies/chhichhore/1260012713','no'=>'','platform'=>'hotstar'),
		array('name'=>'Andhadhun','age rating'=>'12','link'=>'//www.netflix.com/in/title/81039381','no'=>'','platform'=>'netflix'),
		array('name'=>'Badhai Ho','age rating'=>'12','link'=>'//www.hotstar.com/in/movies/badhaai-ho/1000120365','no'=>'','platform'=>'hotstar'),
	);
    session_start();
    $subs=$_SESSION['subscription'] ?? 'rent';
	$subs=explode(',',$subs);
	$name=$_COOKIE['name'];
	$sort= array();
	$i=0;
	foreach ($comedy as $key => $value)
	{
		$sort['age rating'][$key]=$value['age rating'];
		$sort['name'][$key]=$value['name'];
		// $sort['platform'][$key]=$value['platform'];
		$sort['link'][$key]=$value['link'];
	}
	if (isset($_POST['submit']))
	{
		if(!empty($_POST['sort']))
		{
			$choice=$_POST['sort'];
			
			if($choice=='age')
			{
				array_multisort($GLOBALS["sort"]['age rating'], SORT_ASC, $GLOBALS["comedy"]);
			}
			elseif($choice=='alphabetical')
			{
				array_multisort($sort['name'], SORT_ASC,$GLOBALS["comedy"]);
			}
			elseif($choice=='platform')
			{
				for($i=0;$i<count($comedy);$i++){
					foreach ($subs as $value)
					{
						$value = strtolower($value);
						$comedyval=strtolower($comedy[$i]['platform']);
						if (strcmp($value,$comedyval) == 0)
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
								global $comedy;
								$ind = array_search('Hotstar',$subs);
								$comedy[$i]['no'] = $ind;
							}
							elseif ($value == 'netflix')
							{
								?>
								<script>
									console.log("netflix");
								</script>
								<?php
								global $comedy;
								$ind = array_search('Netflix',$subs);
								$comedy[$i]['no'] = $ind;
							}
							elseif ($value == 'amazon prime')
							{
								?>
								<script>
									console.log("prime");
								</script>
								<?php
								global $comedy;
								$ind = array_search('Amazon Prime',$subs);
								$comedy[$i]['no'] = $ind;
							}
							elseif ($value == 'rent')
							{
								global $comedy;
								$comedy[$i]['no'] = 4;
							}
							else
							{
							}}
					}
				}
				foreach ($comedy as $key => $value)
				{
					$sort['no'][$key]=$value['no'];
				}
				array_multisort($GLOBALS["sort"]['no'], SORT_ASC, $GLOBALS["comedy"]);
			}
		}
	}
	$name=$_COOKIE['name'] ?? 'Guest';
	$i=0;
	function printdata()
	{
		global $comedy;
		global $i;
		echo "<a href='".$comedy[$i]['link']."'>".$comedy[$i]['name']."</a>";$i++;
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles.css">
	<title>comedy</title>
</head>

<body>
	<video autoplay muted loop id="myVideo">
		<source
			src="images/Bouncing_DVD_logo[Youtubetomp3.sc].mp4"
			type="video/mp4">
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
			<li><form action="comedy.php" method="post"></li>
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

	<div class="fav">
		<h1>HERE ARE SOME OF OUR FAVS!</h1>
		CLICK TO GET TO THE STREAMING SERVICE
	</div>

	<div class="list1">
		


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