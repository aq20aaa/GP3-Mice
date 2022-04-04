<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<style>
		h1 { text-align: center; 	font-family: Calibri; color:white; font-size:50px; }
		p.p-centre { text-align: center; font-family: Arial; color:white; font-size:20px; }
		body {background-color: #2f2a2d; }
	</style>
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
</head>
<body>

<h1>OUR CINEMAS</h1>
<p class="p-centre">Find your nearest MICE cinema!<p>
    <div>
    <div>
		<?php echo $output; ?>
    </div>
</body>
</html>
