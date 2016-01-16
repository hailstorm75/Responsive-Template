<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php include("php/import.php"); ?>
		<title>Lollipop - Projects</title>
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
				<h2>Projects</h2>
				<p>
					Besides this project I'm administrating and managing these websites:
					<ul>
						<li><a href="http://iscool.cz">iscool.cz</a></li>
						<li><a href="http://semantus.cz">semantus.cz</a></li>
						<li><a href="http://semantus.ru">semantus.ru</a></li>
						<li><a href="http://examplus.ru">examplus.ru</a></li>
						<li><a href="http://skypeclass.ru">skypeclass.ru</a></li>
					</ul>
				</p>
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
