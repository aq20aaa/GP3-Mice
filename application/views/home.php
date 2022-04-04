<!DOCTYPE html>
<html>
<head>
<link href='https://fonts.googleapis.com/css?family=Krona One' rel='stylesheet'>
	<meta charset="utf-8" />
	<style>
		body {background-color: #2f2a2d; }
		h1 { text-align: center; 	font-family: Calibri; color:white; font-size:100px; }
		p.p-centre { text-align: center; font-family: Arial; color:white; font-size:20px; }
		p.i-centre { text-align: center; font-family: Arial; color:white; font-size:15px; }
		p.my-paragraph {text-align: center; font-family: Arial; font-size: 45px; color: #ffe812; }
		p.p-date {text-align: right; font-family: arial; font-size: 15px; color: white; }
		p {text-align: center; font-family: Arial; color:white; }
		#cinema { display: block; padding-top: 20px; margin-left: auto; margin-right: auto; }
	</style>
</head>
<body>

	<p class="p-date">Todays date is: <?php echo date("l jS \of F Y P h:i:s A"); ?> </p> 

	<h1>MICE CINEMA</h1>

	<p class="p-centre">Cinema Tickets can be booked through this system.</p>
	<p class="i-centre">Experience the ultimate MICE cinema feeling!.</p>

	<div align="center">
	<img id="cinema" src="assets/images/cinema.jpg" alt="A screen" height="360" width="780">
	<!--Image credits: https://phoenixcinema.co.uk/PhoenixCinema.dll/Page?PageID=5 -->
	</div>
	
	<p class="my-paragraph"><b>What's On?</b></p>
	
	<table align="center"; width="200"; height="200"; border="1">
		<tbody>
			<tr>
				<td><img id="themaltesefalcon" src="assets/images/themaltesefalcon.jpg" alt="The Maltese Falcon" height="360" width="280"/><p>The Maltese Falcon</p></td>
				<td><img id="rebecca" src="assets/images/rebecca.jpg" alt="Rebecca" height="360" width="280"/><p>Rebecca</p></td>
				<td><img id="house_of_dracula" src="assets/images/house_of_dracula.jpg" alt="House Of Dracula" height="360" width="280"><p>House of Dracula</p></td>
				<td><img id="jane_eyre" src="assets/images/jane_eyre.jpg" alt="Jane Eyre" height="360" width="280"><p>Jane Eyre</p></td>
				<td><img id="casablanca" src="assets/images/casablanca.jpg" alt="Casablanca" height="360" width="280"><p>Casablanca</p></td>
			</tr>
		</tbody>
	</table>
	<!-- https://www.imdb.com/title/tt0022111/
	The Maltese Falcon
	https://www.imdb.com/title/tt0032976/
	Rebecca
	https://www.imdb.com/title/tt0037793/ 
	House of Dracula
	https://www.imdb.com/title/tt0036969/
	Jane Eyre
	https://www.imdb.com/title/tt0034583/ 
	Casablanca -->

	<table align="center"; width="200"; height="200"; border="1">
		<tbody>
			<tr>
				<td><img id="the_third_man" src="assets/images/the_third_man.jpg" alt="The Third Man" height="360" width="280"><p>The Third Man</p></td>
				<td><img id="brief_encounter" src="assets/images/brief_encounter.jpg" alt="Brief Encounter" height="360" width="280"><p>Brief Encounter</p></td>
				<td><img id="key_largo" src="assets/images/key_largo.jpg" alt="Key Largo" height="360" width="280"><p>Key Largo</p></td>
				<td><img id="notorious" src="assets/images/notorious.jpg" alt="Notorious" height="360" width="280"><p>Notorious</p></td>
				<td><img id="rope" src="assets/images/rope.jpg" alt="Rope" height="360" width="280"><p>Rope</p></td>
			</tr>
		</tbody>
	</table>

	<!--https://www.imdb.com/title/tt0041959/
	The Third Man
	https://www.imdb.com/title/tt0037558/
	Brief Encounter 
	https://www.imdb.com/title/tt0040506/
	Key Largo
	https://www.imdb.com/title/tt0038787/
	Notorious
	https://www.imdb.com/title/tt0040746/
	Rope -->
	
	<table align="center"; width="200"; height="200"; border="1">
		<tbody>
			<tr>
				<td><img id="african_queen" src="assets/images/african_queen.jpg" alt="African Queen" height="360" width="280"><p>African Queen</p></td>
			</tr>
		</tbody>
	</table>
	
	<!--https://www.imdb.com/title/tt0043265/
	African Queen -->

	<p class="my-paragraph">New Updates Coming Soon!</p>

</body>
</html>
