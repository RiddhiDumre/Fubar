<?php
$error = array(
    'email' => '',
    'empty' => ''
)
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <?php include('header.php') ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script>
        function validate() {
            var email = document.getElementById("email");
            if (empty(email, "Hey, would you like to message us personally our mail id is now visible mail us!:")) {
                if (validateemail(email, "Hey,your email address is invalid")) {
                    return true;
                }
            }
            return false;
        }

        function empty(input, msg) {
            if (input.value == "") {
                alert(msg);
                var lbl1 = document.getElementById("emaillabel");
                lbl1.style.visibility = "visible";
                return false;
            } else {
                return true;
            }
        }

        function validateemail(input, msg) {
            var pattern = /^\w+([\.-]?\w+)@\w+([\.-]?\w+)(\.\w{2,3})+$/;
            if (input.value.match(pattern)) {
                console.log("Enter");
                return true;
            } 
             else {
                console.log("Deny");
                alert(msg);
                return false;
            }
         
        }
    </script>
    <style>
        nav {
            color: #fff !important;
            background-color: black !important;
            width: 100%;


        }

        body {

            background-image: url(images/jojo.jpg);
            
            color: blue !important;
            background-size: cover !important;
        }

        form {
            max-width:460px;
            margin: 20px auto;
            padding: 20px;
           transition-delay: 2s;
            background-color: rgba(0, 0, 0, 0.591);
            margin-top: 16rem;
            border-radius: 20px;
            margin-bottom: 10rem;
            text-align: center;
            Opacity: (100%);
        }
    

        input[type="text"] {
            color: white;
        }

        input[type="password"] {
            font-weight: lighter;
            color: white;
        }

        label {
            color: bisque;
            font-size: large;
            font-weight: lighter;
            text-align: center;
        }

        .red-text {
            font-weight: lighter;
            font-size: large;
        }

        a:hover {
            text-decoration: underline;
        }

        .section {
            background-color: rgba(0, 0, 0, 0.782);
          width: 35%;
          border-radius: 10px;
            padding-top: 20px;
            margin-top: 80px;
            margin-left: 33%;
            word-spacing: 20px;
            text-align: center;
        }
       
        .section img {
            

            -webkit-transition: -webkit-transform .8s ease-in-out;
          transition:transform .8s ease-in-out;
            filter: invert(100%);
        }
        .section img:hover{
            
            opacity: 50%;
            -webkit-transform: rotate(360deg);
          transform: rotate(360deg);
        }
        .call {
            text-align: center;
            line-height: 2px;

        }


    </style>
</head>

<body>

    <form action="thankyou.html" onsubmit="return validate();" method="POST ">
        <label style="color: white;" for="email">TELL US YOUR EMAIL SO WE CAN MESSAGE YOU:</label>
        <input type="text" name="email" id="email">
        <input  type="submit"  value="submit" class="btn brand z-depth-0"><br><br></div>




    </form>
    <div class="call">
        <label for="" id="emaillabel" style="visibility:hidden; ">
            <!-- <a href="mailto:nilay0160@gmail.com">our mail!!</a>
            <p> Or call us:</p>
            <a href="tel:+919987207322">Nilay</a> -->
            <div class="section"  >

   
<a  href="https://bit.ly/2HyFl6d"><img src="images/icons8-facebook-64.png" alt="facebook"></a>

<a href="https://bit.ly/34CFDBH"><img src="images/icons8-instagram-64.png" alt="instagram"></a>

<a href="https://bit.ly/2TyNFVU"><img src="images/icons8-twitter-circled-64.png" alt="twitter"></a>

<a href="https://bit.ly/2TyOoWS"><img src="images/icons8-linkedin-64.png" alt="linked in"></a>
<a href="mailto:nilay0160@gmail.com" ><img width="57px" height="57px" src="images/email.png" alt="twitter"></a>

<a href="tel:+919987207322"><img width="52px" height="52px"src="images/phone-call.png" alt="linked in"></a>

</div>
        </label>
    </div>
   
    <!-- <div class="section"  >

   
        <a  href="https://bit.ly/2HyFl6d"><img src="images/icons8-facebook-64.png" alt="facebook"></a>

        <a href="https://bit.ly/34CFDBH"><img src="images/icons8-instagram-64.png" alt="instagram"></a>

        <a href="https://bit.ly/2TyNFVU"><img src="images/icons8-twitter-circled-64.png" alt="twitter"></a>

        <a href="https://bit.ly/2TyOoWS"><img src="images/icons8-linkedin-64.png" alt="linked in"></a>
        <a href="mailto:nilay0160@gmail.com" ><img width="57px" height="57px" src="images/email.png" alt="twitter"></a>

        <a href="tel:+919987207322"><img width="52px" height="52px"src="images/phone-call.png" alt="linked in"></a>
       
    </div> -->
</body>

</html>