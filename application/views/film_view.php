<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<style>
		h1 { text-align: center; 	font-family: Calibri; color:white; font-size:50px;  }
		p.p-centre { text-align: center; font-family: Arial; color:white; font-size:25px; }
		p.min-centre { text-align: center; font-family: Arial; color:white; font-size:15px; }
		body {background-color: #2f2a2d; }
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

<h1>FILMS</h1>
<p class="p-centre">View our range of the exclusive films from the 1940s!</p>
<p class="min-centre">Only available between 20th - 26th June 2022</p>
    <div>
		<?php echo $output; ?>
    </div>
</body>
</html>
