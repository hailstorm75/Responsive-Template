<link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Source+Code+Pro:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="theme/stylesheet.css">
<link rel="icon" type="image/png" href="favicon.ico">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<script type="text/javascript" src="javascript/nav.js"></script>
<script type="text/javascript" src="javascript/back-top.js"></script>
<script>
	document.getElementById('menu').onchange = function() {
		window.location.href = this.children[this.selectedIndex].getAttribute('href');
	}
</script>
