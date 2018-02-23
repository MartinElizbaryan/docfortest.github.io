<?php
// include_once 'piece/doing/function.php';
// include_once 'piece/doing/login.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <!-- my style -->
    <link rel="stylesheet" href="css/index_old.css">
    <!-- Animate.css -->
    <link rel="stylesheet" href="Lib/animate/animate.css" media="all">
    <script src="Lib/wow/dist/wow.min.js"></script>
    <script> new WOW().init(); </script>
    <!-- JQuery -->
    <script src="Lib/jquery/jquery-3.1.0.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
           $('.reg_div').click(function(){
               $('.sign_in').hide(3000,function(){
                   window.location.href = "http://localhost/doc-00/registration.php";
               });
           });
        });
    </script>
</head>
<body>
    <div class="name_of_game">
        <p class="day wow bounceInLeft" data-wow-duration="1.5s">D<span class="small_letter">AY</span></p>
        <p class="of wow bounceInUp" data-wow-duration="1.5s" data-wow-delay="0.65s">O<span class="small_letter">F</span></p>
        <p class="car wow bounceInRight" data-wow-duration="1.5s" data-wow-delay="1.3s">C<span class="small_letter">AR</span></p>
    </div>

    <div class="sign_in wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="1.95s">
        <div class="mid">
            <form action="" method="POST">
                <!-- login -->
                <div  class="icon1 wow zoomIn" data-wow-duration="2.9s" data-wow-delay="2.5s"></div>
                <input name="login" class="input wow zoomIn"  data-wow-duration="2.9s" data-wow-delay="2.5s" type="text" placeholder="Login"><br />
                <!-- password -->
                <div  class="icon2 wow zoomIn" data-wow-duration="2.6s" data-wow-delay="2.8s"></div>
                <input name="pass" class="input wow zoomIn" id="pass"  data-wow-duration="2.6s" data-wow-delay="2.8s" type="password" placeholder="Password"><br/>
                <!-- sign_in button -->
                <div  class="icon3 wow zoomIn" data-wow-duration="2.3s" data-wow-delay="3.1s"></div>
                <input name="click" class="sign_div wow zoomIn" data-wow-duration="2.3s" data-wow-delay="3.1s" type="submit" value="Sign in"><br>
                <!-- sorry -->
                <!-- <div class="sorry" style="text-align: center; color: red;margin-top: 20px;font-weight: bold;"><?=$sorry?></div> -->
            </form>
            <!-- registration button -->
            <div  class="icon4 wow zoomIn" data-wow-duration="2s" data-wow-delay="3.4s"></div>
            <div class="reg_div wow zoomIn" data-wow-duration="2s" data-wow-delay="3.4s">Registration</div>
        </div>
    </div>
    <div>
        <span class="span_1 wow flipInX" data-wow-duration="2s" data-wow-delay="3.6s">Day Of Car (DOC)</span>
        <span class="span_2 wow flipInX" data-wow-duration="2s" data-wow-delay="4.0s">is made</span>
        <span class="span_3 wow flipInX" data-wow-duration="2s" data-wow-delay="4.4s">for people who likes playing</span>
        <span class="span_4 wow flipInX" data-wow-duration="2s" data-wow-delay="4.8s">online games, especially racing games</span>
    </div>
</body>




<script src="js/index.js"></script>

</html>



