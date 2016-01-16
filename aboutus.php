<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php include("php/import.php"); ?>
		<script >$("p").addClass("load");</script>
		<title>Lollipop - About</title>
	</head>
	<body>
		<div class="container">
			<header>
				<h1 class="unselectable defaultcursor"><div id="titleText"></div></h1>
				<script>
					var y = document.title;
					y = y.replace("Lollipop - ", '');
					document.getElementById("titleText").innerHTML = y;
					document.getElementsByTagName("p").children[0].className += " load";
				</script>
			</header>
			<?php include("php/nav.php"); ?>
			<section>
				<h2>The website</h2>
				<p class="load">
					This website is a school project. It runs on CSS3, HTML5 and a bit of Javascript. <a href="http://semantus.cz" target="_blank">Semantus.cz</a> inspired the design of the CSS styling - mainly the colors. The project goal was simple, too simple infact. So a challenge was proposed - make a responsive template!
				</p>
			</section>
			<section>
				<h2>The design</h2>
				<p>
					With CSS3's "media types" you can style your website to suit the window size, which is ideal for mobile devices and smaller PC screens. But size is NOT the only thing that matters with mobile devices. Most smart devices have a high DPI which makes the native website content tiny and unreadable. This is solved with a simple fix in the &lt;head&gt; tag of your HTML page.				
				</p>
				<p>
					<ol class="code">
						<li>&lt;head&gt;</li>
						<li class="l1">&lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;</li>
						<li>&lt;/head&gt;</li>
					</ol>
				</p>
				<p>
					When that problem is solved the "media types" can be set up. Note that CSS is a <b>c</b>ascading <b>s</b>tyle <b>s</b>heet language which means that the browser reads the style sheet top to bottom. With that in mind the any setting which stays the same, independetly of the window size, has to be writte before the specific "media type" cases.				
				</p>
				<p>
					This template operates on three windows sizes: "default", "medium" and "small/mobile". The defualt will be triggered when the window is 1080px+ wide. Medium is below 1080px while small is from 360px to 800px. Notice that the code below has styling set for body and html which is not influenced by the window size.
				</p>
				<p>
					<ol class="code">
						<li>body, html {</li>
						<li class="l1">margin: 0;</li>
						<li class="l1">padding: 0;</li>
						<li>}</li>
						<li></li>
						<li>@media only screen and (min-width: 1080px) {</li>
						<li>}</li>
						<li>@media screen and (max-width: 1080px) {</li>
						<li>}</li>
						<li>@media (min-device-width: 360px) and (min-width: 360px) and (max-width: 800px) {</li>
						<li>}</li>
					</ol>
				</p>	
			</section>
			<section>
				<h2>A bit of Javascript!</h2>
				<p>
					A website can't be cool without a bit of javascript! It give the site style and makes the developers world much easier. Here are two examples which do just that.
				</p>
				<p>
					This script automatically generates the &lt;h1&gt;&lt;/h1&gt; content based on the page title. 
				</p>
				<p>
					<ol class="code">
						<li>&lt;header&gt;</li>
						<li class="l1">&lt;h1&gt;&lt;div id="titleText"&gt;&lt;/div&gt;&lt;/h1&gt;</li>
						<li class="l1">&lt;script&gt;</li>
						<li class="l2">var y = document.title;</li>
						<li class="l2">y = y.replace("Website - ", '');</li>
						<li class="l2">document.getElementById("titleText").innerHTML = y;</li>
						<li class="l1">&lt;/script&gt;</li>
						<li>&lt;/header&gt;</li>
					</ol>
				</p>
				<p>
					And this script makes the navigation bar sticky after scrolling down the page. This only works with the default window size.
				</p>
				<p>
					<ol class="code">
						<li>$(window).scroll(function() {</li>
						<li class="l1">if ($(this).scrollTop() > 230) {</li>
						<li class="l2">$('nav').addClass("sticky");</li>
						<li class="l1">}</li>
						<li class="l1">else {</li>
						<li class="l2">$('nav').removeClass("sticky");</li>
						<li class="l1">}</li>
						<li>});</li>
					</ol>
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
