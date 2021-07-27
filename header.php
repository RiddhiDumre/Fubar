<?php
    $name=$_COOKIE['name'] ?? 'Guest';

?>

<head>
<title>FUBAR</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style type="text/css">
       
        form{
            max-width:460px;
            margin: 20px auto;
            padding: 20px;
        }
   
       

    nav {
    color: #fff !important;
     
    width: 100%;
    height: 56px;
    line-height: 56px;
    }
    nav a:hover{
        opacity: 50%;
    }
    
    </style>
</head>
<body class="grey lighten-4">
    <nav class="header">
        <div class="container">
            <a href="index.php" class="brand">
                <img class src="images/f.png" style="margin-left: -20%; margin-top:8px" width="40px" height="40px"  alt="">
            </a>
            <ul id="nav-area" style="margin-right: -20%;" class="right ">
                <nav class="nav-area">
                    <li><a href="#">Hello <?php echo htmlspecialchars($name)?></a></li>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="contac.php">CONTACT</a></li>
                    <li><a href="search.php">SEARCH</a></li>
                    <li><a href="login.php">LOG-IN</a></li></a></li>
                    <li><a href="forms1.php">SIGN-UP</a></li></a></li>
                </nav>
            </ul>
        </div>
    </nav>
