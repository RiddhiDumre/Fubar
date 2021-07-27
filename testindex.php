<?php 
    // include('Project\mini proj fwd\createtable.php');
    $drama=array(
        array('name'=>'Farewell','age rating'=>'13','platform'=>'Rent','no'=>''),
        array('name'=>'Call me by your name','age rating'=>'18','platform'=>'Rent','no'=>''),
        array('name'=>'Black Swan','age rating'=>'18','platform'=>'Disney+ Hotstar','no'=>''),
        array('name'=>'Hidden Figures','age rating'=>'13','platform'=>'Disney+ Hotstar','no'=>''),
        array('name'=>'The Florida Project','age rating'=>'18','platform'=>'Netflix','no'=>''),
        array('name'=>'Girl, Interrupted','age rating'=>'16','platform'=>'Netflix','no'=>''),
        array('name'=>'Moonlight','age rating'=>'18','platform'=>'Prime','no'=>''),
        array('name'=>'Juno','age rating'=>'12','platform'=>'Netflix','no'=>''),
        array('name'=>'Gone Girl','age rating'=>'18','platform'=>'Netflix','no'=>''),
        array('name'=>'Precious','age rating'=>'18','platform'=>'Rent','no'=>''),
        array('name'=>'Little Miss Sunshine','age rating'=>'15','platform'=>'Disney+ Hotstar','no'=>''),
        array('name'=>'Parasite','age rating'=>'18','platform'=>'Prime','no'=>''),
        array('name'=>'Little women','age rating'=>'5','platform'=>'Prime','no'=>''),
        array('name'=>'Million Dollar Baby','age rating'=>'13','platform'=>'Netflix','no'=>''),
        array('name'=>'Roma','age rating'=>'18','platform'=>'Netflix','no'=>''),
        array('name'=>'Social Network','age rating'=>'15','platform'=>'Netflix','no'=>''),
        array('name'=>'Room','age rating'=>'18','platform'=>'Netflix','no'=>'')
    );
    setcookie("drama",serialize($drama),time() + (10 * 365 * 24 * 60 * 60));
    if (isset($_POST['submit']))
    {
        if(!empty($_POST['sort']))
        {
            $choice=$_POST['sort'];
            echo $choice;
            $sort= array();
            foreach ($drama as $key => $value)
            {
                $sort['age rating'][$key]=$value['age rating'];
                $sort['name'][$key]=$value['name'];
                $sort['platform'][$key]=$value['platform'];
            }
            if($choice=='age')
            {
				$i=0;
                $subs=$_COOKIE['sub'];
				$subs=explode(",",$subs);
				for ($f=0; $f<count($subs) ; $f++){
					foreach ($subs as $value) {
						if($subs=='netflix'){
							if($value==$drama[$i]['platform'])
							{
								global $drama;
								$drama['no']=1;
							}
						}
						else if($subs=='amazon prime')
						{
							if($value==$drama[$i]['platform'])
							{
								global $drama;
								$drama['no']=2;
							}
						}
						else if(($subs=='disney+ hotstar' )||($subs=='hotstar' ))
						{
							if($value==$drama[$i]['platform'])
							{
								global $drama;
								$drama['no']=3;
							}
						}
					}
				}
				foreach ($drama as $key => $value)
            	{
					global $sort;
                    $sort['no'][$key]=$value['no'];
            	}
            }
            foreach ($drama as $value) {
                echo "{$value['name']} , {$value['age rating']}, {$value['no']}";
                echo "<br/>";
            }
        }
    }
?>
<html>
    <form action="testindex.php" method="post">
        <label for="">Sort:</label>
        <select name="sort" id="sort">
            <option value="" disabled selected></option>
            <option value="age" id="age" >Platform</option>
            <input type="submit" value="submit" name="submit">
        </select>
    </form>
	<?php

		//    foreach ($drama as $value) {
		//     echo "{$value['name']} , {$value['age rating']}";
		//     echo "<br/>";
    	// } 
    ?>
</html>

<!-- <?php 

$my_links = [
       'city 1' => 'http://www.google.com',
       'city 2' => 'http://www.github.com',
       'Head Office' => 'http://www.youtube.com'
    ];


$str = "<p>
   You can visit our stores at City 1 
   and City 2, 
   or visit our Head office.
</p>";


foreach ($my_links as $link_title => $link) {
    $str = str_ireplace($link_title,"<a href='$link'>".ucwords($link_title)."</a>",$str);
}

echo $str;
?> -->