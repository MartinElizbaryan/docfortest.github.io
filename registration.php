<?php

// function sanitizeString($var)
// {
// global $connection;
// $var = strip_tags($var);
// $var = htmlentities($var);
// $var = stripslashes($var);
// return $connection->real_escape_string($var);
// }

// $dbhost='localhost';
// $dbuser='root';
// $dbpass='';
// $dbname='day of car';
// $connection = new mysqli($dbhost, $dbuser, $dbpass,$dbname );
// if ($connection->connect_error) die($connection->connect_error);

// if (isset($_POST['click'])) {
//     $login = sanitizeString($_POST["login"]);
//     $pass = sanitizeString($_POST["pass"]);
//     $money = '200000';
//     $gold_money = '2';
//     $phone_number = sanitizeString($_POST["phone_number"]);

//     $sql =("INSERT INTO users (ID,login, password, money,gold_money, phone_number)
//             VALUES ('','$login', '$pass', '$money','$gold_money','$phone_number')");
//     $result = $connection->query($sql);


//     session_start();
//     $_SESSION["login"]=$login;
//     $_SESSION["money"]=$money;
//     $_SESSION["gold"]=$gold_money;
//     header('Location: user_player.php');
// }


    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <!-- my style -->
    <link rel="stylesheet" href="css/registration.css">
    <!-- Animate.css -->
    <link rel="stylesheet" href="Lib/animate/animate.css" media="all">
    <script src="Lib/wow/dist/wow.min.js"></script>
    <script> new WOW().init(); </script>
    <!-- JQuery -->
    <script src="Lib/jquery/jquery-3.1.0.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.back_div').click(function(){
                $('.name_of_game').hide(3000);
                $('.about_us').hide(3000);
                $('.sign_in').hide(3000,function(){
                    window.location.href = "http://localhost/doc-00/index.php";
                });
            });
        });
    </script>
</head>
<body>

<div class="name_of_game">
    <p class="day">D<span class="small_letter">AY</span></p>
    <p class="of">O<span class="small_letter">F</span></p>
    <p class="car">C<span class="small_letter">AR</span></p>
</div>

<div class="sign_in wow bounceInRight" data-wow-duration="1s">
    <div class="mid">
        <div class="back_div wow bounceInRight" data-wow-duration="2s" data-wow-delay="0.8s"><a href="#" class="back_a">Sign in</a></div>
        <form action="" method="POST">
            <input name="login" class="input wow rotateInDownRight" data-wow-duration="2s" data-wow-delay="1.5s" type="text" placeholder="Login"><br />
            <input name="pass" class="input wow rotateInDownRight" data-wow-duration="2s" data-wow-delay="2.0s" type="password" placeholder="Password"><br />
            <input class="input wow rotateInDownRight" data-wow-duration="2s" data-wow-delay="2.5s" type="text" placeholder="Country"><br />
            <input class="input wow rotateInDownRight" data-wow-duration="2s" data-wow-delay="3.0s" type="text" placeholder="City"><br />
            <input name="phone_number" class="input wow rotateInDownRight" data-wow-duration="2s" data-wow-delay="3.5s" type="number" placeholder="Phone number"><br />
            <!--  -->
            <div class="start_div wow zoomIn" data-wow-duration="3s" data-wow-delay="4.5s"><input type="submit" name="click" value="GO" id="btn"></a></div>
        </form>
    </div>
</div>

<div class="about_us">
    <span class="span_1">Day Of Car (DOC)</span>
    <span class="span_2">is made</span>
    <span class="span_3">for people who likes playing</span>
    <span class="span_4">online games, especially racing games</span>
</div>

</body>
</html>