<?php $name=$_COOKIE['name'] ?? 'Guest'; ?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>search</title>
    <script>
        function validateForm() {
            var x = document.forms["myForm"]["q"].value;
            if (x == "") {
                alert("PLS ENTER A MOVIE OR A SERIES NAME");
                return false;
            }
        }
    </script>
    <style>
        body {
            color: white;
            background-image: url(images/theater.jfif);
            background-repeat: no-repeat;
            background-size: 100% 120%;
            font-size: 1.3rem;
            font-family: monospace;
            background-color: black;
        }

        header {
            margin-top: -10px;
            position: relative;
            transition-duration: 2s;
            display: flex;
            justify-content: space-between;

            padding: 5px, 5px;
        }

        .logo {
            padding: 20px;
            cursor: pointer;
        }

        .nav-area li {
            display: inline-block;
            padding: 15px;

        }

        .nav-area li a {

            color: #fff;
        }

        .nav-area li a:hover {

            transition: 0.5s;
            color: #ffffff5d;
        }

        a {
            color: white;
            text-decoration: none;
            padding-right: 10px;


        }

        .nav-bar a:visited {
            text-decoration: none;
            color: rgb(3, 3, 3);
        }

        .content img {
            width: 9rem;
            height: 9rem;
            ;
        }

        .content {
            margin-top: 5%;
            text-align: center;
            color: white;
            /* margin-left: 44%;
    margin-top: 10%; */
        }

        #a {
            color: white;
            width: 30%;
        }

        input[type=text] {
            height: 1.6rem;
            background-color: rgba(0, 0, 0, 0);
            border: 3px solid rgb(255, 255, 255);
            border-radius: 50px;
        }

        #b {

            cursor: pointer;
            color: white;
            background-color: teal;
            border-radius: 50%;
            height: 40px;
            width: 40px;
            transition-duration: 0.5s;
            border: none;
        }
        #b:hover{
            color: black;
            background-color: rgb(102, 247, 220);
        }
        input:focus,
        textarea:focus,
        select:focus {
            outline: none;
        }

        p {
            margin-top: 21%;
            font-size: 0.7rem;
        }

        h3 {
            margin-left: -78%;
            margin-top: 2.5%;
        }
    </style>
</head>

<body>

<header>
      <a href="index.php"><img class="logo" src="images/f.png" width="40px" height="40px"  alt=""></a>
      <h3 >UBAR</h3>
        <nav class="nav-area">
            <li>Hello <?php echo htmlspecialchars($name)?></li>
            <li><a href="index.php">HOME</a></li>
            <li><a href="search.php">SEARCH</a></li>
            <li><a href="contac.php">CONTACT</a></li>
            <li><a href="login.php">LOG-IN</a></li>
            <li><a href="forms1.php">SIGN-IN</a></li>
        </nav>
    
    </header>
    <div class="content">


        <img src="images/search.gif" alt="">

        <form onsubmit="return validateForm()" name="myForm" method="get" action="http://www.imdb.com/find">
            Search any movie/series : <br><br> <input name="q" id="a" type="text" />
            <input id="b" type="submit" value="go!" />
        </form>
        <p>“I’m the king of the world!”</p>
    </div>
    
 


</body>

</html>