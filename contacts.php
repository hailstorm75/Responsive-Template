<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php include("php/import.php"); ?>
		<title>Lollipop - Contacts</title>
	</head>
	<body>
		<div class="container">
			<header >
				<h1 class="unselectable defaultcursor"><div id="titleText"></div></h1>
				<script>
					var y = document.title;
					y = y.replace("Lollipop - ", '');
					document.getElementById("titleText").innerHTML = y;
				</script>
			</header>
			<?php include("php/nav.php"); ?>
			<section>
				<h2>Contact form</h2>
				<form name="htmlform" method="post" action="formsend.php">
					<table width="450px">
						<tr>
							<td>
							<label for="first_name">First Name *</label>
						</td>
						<td>
							<input  type="text" name="first_name" maxlength="50" size="30">
						</td>
						<tr>
							<td>
								<label for="last_name">Last Name *</label>
							</td>
							<td>
								<input  type="text" name="last_name" maxlength="50" size="30">
							</td>
						</tr>
						<tr>
							<td>
								<label for="email">Email Address *</label>
							</td>
							<td>
								<input  type="text" name="email" maxlength="80" size="30">
							</td>
						</tr>
						<tr>
							<td>
								<label for="telephone">Telephone Number</label>
							</td>
							<td>
								<input  type="text" name="telephone" maxlength="30" size="30">
							</td>
						</tr>
						<tr>
							<td>
								<label for="comments">Comments *</label>
							</td>
							<td>
								<textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
							</td>
						</tr>
						<tr>
							<td></td>
							<td colspan="2">
								<input type="submit" value="Submit">
							</td>
						</tr>
					</table>
				</form>
			</section>
		</div>
		<p id="back-top">
			<a href="#top" style="font-size:1em - 10px;">
				<i class="fa fa-angle-up"></i>
			</a>
		</p>
		<?php include("php/footer.php"); ?>
	</body>
</html>
