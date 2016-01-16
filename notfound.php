<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php include("php/import.php"); ?>
		<title>Lollipop - 404</title>
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
				<h2>Page not found.</h2>
				<p>This is not the page you are looking for...</p>
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
