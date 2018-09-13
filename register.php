<?php
	require 'form.php';
	?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Quiz Registration</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div class ="divider"></div>
	<div id="container">
		<form method="POST" enctype="multipart/form-data" action='<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]) ?>' >
			<p id="Register">Registration</p>
			<input type="text" name="name" placeholder="Name" required>
			<input type="number" name="regno" placeholder="Registration Number" min="160000000" max="190000000" required title="Required">
			<input type="text" name="branch" placeholder="Branch" required>
			Semester:
				<select name="semester">
					<option value=1>1</option>
					<option value=2>2</option>
					<option value=3>3</option>
					<option value=4>4</option>
					<option value=5>5</option>
					<option value=6>6</option>
					<option value=7>7</option>
					<option value=8>8</option>
				</select>
			<input type="email" name="email" placeholder="email" required>
			<input type="number" name="phone" placeholder="Mobile-No" min="1000000000" max="9999999999" required>
			<span id='succ'><?php echo $success?></span>
			<span id='err'><?php echo $error?></span>
			<input type="submit" name="submit" id="submit">
		</form>
	</div>
</body>
</html>

