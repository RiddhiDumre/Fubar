<?php
include('createtable.php');

if (isset($_POST['submit']))
{
    setcookie('name',$_POST['name'],time() + (10 * 365 * 24 * 60 * 60));
    setcookie('age',$_POST['age'],time() + (10 * 365 * 24 * 60 * 60));
    setcookie('sub',$_POST['subscription'],time() + (10 * 365 * 24 * 60 * 60));
    setcookie('email',$_POST['email'],time() + (10 * 365 * 24 * 60 * 60));
    session_start();
    $_SESSION['name'] = $_POST['name'];
}
$name = $email = $subscription = $age = $username = $password = $cpassword = "";
$error = array(
    'email' => '',
    'name' => '',
    'subscription' => '',
    'age' => '',
    'username' => '',
    'password' => '',
    'cpassword' => ''
);
if (isset($_POST['submit'])) {
    if (empty($_POST['email'])) {
        $error['email'] = "AN EMAIL IS REQUIRED <br />";
    } else {
        $email = $_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error['email'] = "INVALID EMAIL <br />";
        } else {
            $error['email'] == "Successfull";
        }
    }
    if (empty($_POST['name'])) {
        $error['name'] = "A NAME IS REQUIRED <br />";
    } else {
        $name = $_POST['name'];
        if (!preg_match('/^[a-zA-Z\s]+$/', $name)) {
            $error['name'] = "A NAME MUST INCLUDE ALPHANUMERIC CHARACTERS, SPACES AND TABS ONLY <br />";
        } else {
            $error['name'] == "Successfull";
        }
    }
    if (empty($_POST['subscription'])) {
        $error['subscription'] = "Please enter a subscription";
    } else {
        $subscription = $_POST['subscription'];
        if (!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $subscription)) {
            $error['subscription'] = "THE SUBSCRIPTIONS NEED TO BE COMMA SEPERATED <br />";
        } else {
            $error['subscription'] == "Successfull";
        }
    }
    if (empty($_POST['username'])) {
        $error['username'] = "Please enter a subscription";
    } else {
        $username = $_POST['username'];
        if (!preg_match('/^[a-zA-Z0-9\s]+$/', $username)) {
            $error['username'] = "A USERNAME MUST INCLUDE ALPHANUMERIC CHARACTERS, SPACES AND TABS ONLY <br />";
        } else {
            $error['username'] == "Successfull";
        }
    }
    if (empty($_POST['password'])) {
        $error['password'] = "Please enter a password";
    } else {
        $password = $_POST['password'];
        if (!preg_match('/^[a-zA-Z0-9\s]+$/', $password)) {
            $error['password'] = "A PASSWORD MUST INCLUDE ALPHANUMERIC CHARACTERS, SPACES AND TABS ONLY <br />";
        } else {
            $error['password'] == "Successfull";
        }
    }
    if (empty($_POST['cpassword'])) {
        $error['cpassword'] = "Please confirm your password";
    } else {
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        if (empty($_POST['cpassword'])) {
            $error['cpassword'] = "Please enter a password";
        } else if (!preg_match('/^[a-zA-Z0-9\s]+$/', $cpassword)) {
            $error['password'] = "A PASSWORD MUST INCLUDE ALPHANUMERIC CHARACTERS, SPACES AND TABS ONLY <br />";
        } else if (!($password === $cpassword)) {
            $error['password'] = "PASSWORDS DON'T MATCH <br />";
            $error['cpassword'] = "PASSWORDS DON'T MATCH <br />";
        }
    }
    if (array_filter($error)) {
    } else {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $password=md5($password);
        $age = mysqli_real_escape_string($conn, $_POST['age']);
        $subscription = mysqli_real_escape_string($conn, $_POST['subscription']);

        $sql = "INSERT INTO users(
                email,
                pname,
                age,
                username,
                password,
                subscription
            )
            values(
                '$email',
                '$name',
                '$age',
                '$username',
                '$password',
                '$subscription'
            )";
        if (!mysqli_query($conn, $sql)) {
            echo "UNSUCCESSFULL INSERT";
            echo mysqli_error($conn);
        } else {
            sleep(5);
            header('Location:thankyou.php');
        }
    }
}
?>
<!DOCTYPE html>
<html>
<!DOCTYPE html>
<html>

<head>
    <?php include('header.php'); ?>

    <script>
        function seepass() {
            var pass = document.getElementById("password");
            if (pass.type == "password") {
                pass.type = "text";
            } else {
                pass.type = "password";
            }
        }

        function csseepass() {
            var pass = document.getElementById("cpassword");
            if (pass.type == "password") {
                pass.type = "text";
            } else {
                pass.type = "password";
            }
        }
    </script>
</head>

<head>
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles.css"> -->
    <!-- <link rel="stylesheet" href="style.css"> -->
    <style>
        body {
            transition-duration: 2s;
            color: white;
            background-image: url(images/django.jpg);
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }
      

        .con {
            margin: auto;
            width: 50%;
            margin-top: 10px;
            height: 100%;
            border-radius: 15px;
            background-color: rgba(0, 0, 0, 0.578);

        }

        form {

            transition-duration: 2s;
            color: white;
            line-height: 6.5px;
            text-align: center;
            Opacity: (100%);
        }

        label {
            color: white;
            font-size: large;

            text-align: center;
        }

        nav {
            color: #fff !important;
            background-color: black !important;
            width: 100%;


        }

        .red-text {
            margin-top: -3px;
            font-weight: lighter;
            font-size: 0.9rem;
        }

        input[type="text"] {
            color: white;
        }

        input[type="password"] {
            font-weight: bold;
            color: white;
        }
        [type="checkbox"]:not(:checked),
        [type="checkbox"]:checked {
            
            position: absolute;
    
            opacity: 100;
            pointer-events: all;
        }
        
    </style>
</head>

<body>
    <!-- <header>
      <a href="index.php"><img class="logo" src="images/f.png" width="40px" height="40px"  alt=""></a>
      <h3>UBAR</h3>
        <nav class="nav-area">
            <li><a href="index.php">HOME</a></li>
            <li><a href="#">SEARCH</a></li>
            <li><a href="#">CONTACT</a></li>
            <li><a href="login.php">LOG-IN</a></li>
        </nav> -->

    <div class="con">
        <form action="forms1.php" method="POST" enctype="multipart/form-data">
            <label for="name">Name:</label><br><br>
            <input style="color: white;" type="text" name="name" id="value" value="<?php echo htmlspecialchars($name) ?>"><br><br>
            <div class="red-text"><?php echo $error['name']; ?></div><br><br>
            <br><br><br><br><label for="email">Email:</label><br><br>
            <input style="color: white;" type="text" name="email" id="email" value="<?php echo htmlspecialchars($email) ?>"><br><br>
            <div class="red-text"><?php echo $error['email']; ?></div><br><br>
            <label for="age">Age:</label><br><br>
            <input style="color: white;" type="text" name="age" id="age" max="100" min="10"><br><br>
            <div class="red-text"><?php echo $error['age']; ?></div><br><br>
            <label for="subscription">Enter subscriptions (comma seperated):</label><br><br><br>
            <input style="color: white;" type="text" name="subscription" id="subscription" value="<?php echo htmlspecialchars($subscription) ?>"><br><br>
            <div class="red-text"><?php echo $error['subscription']; ?></div><br><br>
            <label for="user">Username:</label><br><br>
            <input style="color: white;" type="text" name="username" id="username" value="<?php echo htmlspecialchars($username) ?>" maxlength="20" minlength="5"><br><br>
            <div class="red-text"><?php echo $error['username']; ?></div><br><br>
            <label for="password">Password:</label> <br><br><br>
            
            <label  style=" margin-right: -350px;" for="visibilty">toggle visibility : <input type="checkbox" id="see" name="password" onclick="seepass()"></label><br>
            <input type="password" name="password" id="password" value="<?php echo htmlspecialchars($password) ?>" maxlength="20" minlength="6"><br><br>
            <div class="red-text"><?php echo $error['password']; ?></div><br><br>
            <label for="cpassword">Confirm Password:</label><br><br>
            <input type="password" name="cpassword" value="<?php echo htmlspecialchars($cpassword) ?>" id="cpassword" maxlength="20" minlength="6"><br><br>
            <input type="submit" name="submit" value="submit" class="btn brand z-depth-0"><br><br>
            
        </form>
        <?php
        include('footer.php');
        ?>
    </div>
    <!-- <div class="footer">
    <ul>
        <li><a href="#"><img src="images/icons8-facebook-64.png" width="30px" height="30px" alt=""></a></li>

        <li><a href="#"><img src="images/icons8-instagram-64.png" width="30px" height="30px" alt=""></a></li>

        <li><a href="#"><img src="images/icons8-twitter-circled-64.png" width="30px" height="30px" alt=""></a></li>

        <li><a href="#"><img src="images/icons8-linkedin-64.png     " width="30px" height="30px" alt=""></a></li>
    </ul>
</div> -->


</body>

</html>

</html>