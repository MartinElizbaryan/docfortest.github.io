<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/__back_end_admin.css">
	<script src="Lib/jquery/jquery-3.1.0.min.js"></script>
</head>
<body>

<div class="main">

	<div class="left_top"></div>

	<div class="login">
		<input type="text" name="" id="login" placeholder="LOGIN">
		<div class="block"></div>
	</div>

	<div class="password">
		<input type="password" name="" id="password" placeholder="PASSWORD">
		<div class="block"></div>
	</div>

	<div class="button">
		<button id="sign_in">Sign in</button>
	</div>

</div>


</body>
<script>
	$(document).ready(function(){
		$("input").keyup(function(){
			var inp1 = $("#login").val().trim()
			var inp2 = $("#password").val().trim()
			if(inp1 != "" && inp2 != ""){
				$("#sign_in").css({
					opacity:1
				})
				$("*").css({
					"border-color":"green"
				})
				$("input").css({
					color:"green"
				})
			}
			else{
				$("#sign_in").css({
					opacity:0
				})
				$("*").css({
					"border-color":"#FF8000"
				})
				$("input").css({
					color:"black"
				})

			}
		})

		$(document).contextmenu(function(){
			alert()
		})

		$("#sign_in").click(function(){
			alert()
		})

		$("#sign_in").mouseover(function(){
			var inp1 = $("#login").val().trim()
			var inp2 = $("#password").val().trim()
			if(inp1 != "" && inp2 != ""){
				$(".block").css({
					width:"530px"
				})
			}
		})

		$("#sign_in").mouseleave(function(){
			$(".block").css({
				width:"0"
			})
		})
	})
</script>
</html>


<!-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
</body>



	<script>
		function կանչ(){
			console.log("ԻՆՏԵՐՆՇԻՓ ՏՆԻՑ");
		}

		կանչ();
	</script>




</html> -->