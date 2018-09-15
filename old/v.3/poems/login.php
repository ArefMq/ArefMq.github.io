<?php
	session_start();
	session_unset(); 
?><!Doctype HTML>
<html>
	<head>
		<title>:: Login Page</title>
		
		<style>
			#text {
				width: 600px;
				margin: 10px;
			}
			form {
				width: 300px;
				margin: 10px;
			}
		</style>
	</head>

	<body>
		<div id="text">
			<h1>Restricted Entery</h1>
			<span>This page has limited entery access, hence it requires authorication 
			checks to validate the identity of the user. <u>If you believe (or maybe guess!!!) 
			you might have the access to this page, please fill the information below and 
			hit the <i>validate</i> button below</u>. If you are not sure about your premission, 
			give yourself a try! ;) The information below is safe and will not be published 
			or be accessible by anyone include me myself. In case you do not have premission 
			and you want to gain it, just let me know by mailing me, I'll handle it!</span>
			<hr />
		</div>

		<?php
			$e = "";
			@$e = $_GET['e'];
			switch($e){
				case 'en':
					echo '<span style="color: red;">You have left the name field empty!!!</span>'; break;
				case 'er':
					echo '<span style="color: red;">You have forgotten relation field!!!</span>'; break;
				case 'n':
					echo '<span style="color: red;">You have entered a wrong name and/or relation...</span>'; break;
				case 'l':
					echo '<span style="color: red;">Your name is quite common, please specify your last name too!</span>'; break;
				case 'r':
					echo '<span style="color: red;">You have entered a wrong relation, please try again...</span>'; break;
				case '0':
					echo '<span style="color: red;">The service is too sad to repond, please try again later...</span>'; die(":("); break;
			}
		?>
		
		<form action="validationCheck.php" method="get">
			Your First Name: <?php if ($e == 'n' || $e == 'en') echo '<span style="color: red;">***</span>'; ?> <br/><input style="margin: 0 0 5px;" type="text" name="firstname"/><br/>
			<?php if ($e == 'l') echo 'Your Last Name: <span style="color: red;">***</span> <br/><input style="margin: 0 0 5px;" type="text" name="lastname"/><br/>'; ?>
			Your relation relative to me: <?php if ($e == 'er' || $e == 'n' || $e == 'r') echo '<span style="color: red;">***</span>'; ?> <br/><input style="margin: 0 0 5px;" type="text" name="relation"/><br/>
			<input style="margin: 5px 0;" type="submit" value="validate"/>
		</form>
	</body>
</html>