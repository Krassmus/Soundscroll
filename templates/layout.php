<!DOCTYPE html>
<html>
<head>
<title>Soundscroll</title>
<link rel="stylesheet" href="./assets/soundrole.css" media="screen, print">
<script src="https://www.google.com/jsapi?key=ABQIAAAAS4iINWWcI94J0pFJPImPYRR3XZUjzgmYF3RZ-r7IADuu99IAMRReQ0db0-sTiuNKEp1hAbc-y0apIA" type="text/javascript"></script>
<script>
google.load("jquery", "1");
</script>
<script src="./assets/soundrole.js" type="text/javascript"></script>
<link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon"/>
</head>
<body>
<div id="wrapper">
	<div id="header">
	<div style="float:right; margin-right: -20px;">
		<img src="./assets/david_crwth.png">
	</div>
	To amuse thee
	</div>
	<?= $content ?>
</div>
<div id="footer">
	<?= $footer ?>
</div>
</body>
</html>