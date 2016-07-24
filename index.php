<?php
include 'db.php';
?>
<!doctype html>
<html>
	<head><title>Chat System</title>
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">
	<link href='https://fonts.googleapis.com/css?family=Inconsolata' rel='stylesheet' type='text/css'>
	
	<script>
		function ajax(){
		
		var req = new XMLHttpRequest();
		
		req.onreadystatechange = function(){
		
		if(req.readyState == 4 && req.status == 200){
		
		document.getElementById('chat').innerHTML = req.responseText;
		} 
		}
		req.open('GET','chat.php',true); 
		req.send();
		
		}
		setInterval(function(){ajax()},1000);
		
		//window.history.pushState(“object or string”, “Title”, “/”);
		

	</script>
	
	</head>
	
	
<body onload="ajax();">

<h3>Messages</h3>
<div id="container">
	<div id="chat_box">
	<div id="chat"></div>
	
	</div>
	
		<form method="post" action="index.php"id="form1">
		<input type="text" name="name" placeholder="Enter a name" autocomplete="off" required onkeypress="return isNumberKey(event)" maxlength="30"></input>
		<textarea name="msg" placeholder="Enter a message" autocomplete ="off" required onkeypress="return isNumberKey(event)" maxlength="125"></textarea>
		
		<input type="submit" name="submit" value="SEND" autocomplete="off" ></input>
		</form>
	
	<?php 
		if (isset($_POST['submit'])){
			
			$name = $_POST['name'];
			$msg = $_POST['msg'];
			
			$query = "INSERT INTO chat (name, msg) values ('$name','$msg')";
			
			$run = $con->query($query);
			
			if($run){
				
				echo"<embed loop='false' src='ding.mp3' hidden='true' autoplay='true' />";
			}
		}
	?>	
		
	

</div>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>