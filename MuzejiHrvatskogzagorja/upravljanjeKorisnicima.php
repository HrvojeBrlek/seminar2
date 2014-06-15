<?php
	session_start();
	$_SESSION['url'] = $_SERVER['REQUEST_URI'];
	if(!isset($_SESSION['admin'])){
		header ('Location: index.php');
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Muzeji Hrvatskog zagorja</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" href="css/stil.css" type="text/css" charset="utf-8" />
<link rel="stylesheet" href="css/grid.css" type="text/css" charset="utf-8" />
<link rel="stylesheet" href="css/normalize.css" type="text/css" charset="utf-8" />
<script src="js/lib/jquery-1.9.0.min.js" type="text/javascript"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/slideshow.js" type="text/javascript"></script>
<script src="js/igraskrivaca.js" type="text/javascript"></script>
<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</head>
<body>

	<header class="sve">
	<div class="row boja">
		<div class="column column-12">
	
			<nav class="main-navigation column column-8">
				<ul>
				<li><a href="index.php">Početna</a></li>
				<li><a href="muzejipopis.php">Muzeji</a></li>
				<li><a href="rezerviraj.php">Rezervacija</a></li>
				<li><a href="dozivljaji.php">Doživljaji</a></li>
				</ul>
			</nav>
	
			<div class="logo2 column column-3">
				<img src="img/logo/logoMHz.jpg" alt="logo"/>
			</div>
	
		</div>
		
		
	</div>
  </header>
  
  <div class="korisnik row">
	<div class="korisnikOdjava column column-12">
			<?php
				if(isset($_SESSION['admin'] )){
					echo '<p><a href="upravljanjeKorisnicima.php">Upravljanje korisnicima</a></p>';
					echo '<p> Dobrodošli: ' .'<b>' . $_SESSION['admin'] . '</b>' .'</p>' .
						'<form name="login" action="logoutAdmin.php" method="POST">
						<input type="submit" value="Odjavite se"/>
						</form>';
				}
				
			?>
		
	</div>
	
  </div>
  
  <div class="slike_slider row">
	<div id="photos">
		<img src="img/muzeji/slider_MuzejiHrvatskogZagorja.jpg" alt="Svi muzeji hrvatskog zagorja" />
		<img src="img/muzeji/slider_desinic.jpg" alt="Dvor Veliki Tabor" /> 
		<img src="img/muzeji/slider_gornjastubica.jpg" alt="Muzej seljačkih buna" />
		<img src="img/muzeji/slider_klanjec.jpg" alt="Galerija Antuna Augustinčića" />  
		<img src="img/muzeji/slider_krapina.jpg" alt="Muzej krapinskih neandertalaca" />  
		<img src="img/muzeji/slider_kumrovec.jpg" alt="Muzej 'Staro Selo'" />
	</div>
  </div>
  
  <div class="osnovno row">
	<div class="uprKorNaslov column column-12">
		<h1>Upravljanje korisnicima</h1>
	</div>
	<div class="navigKor column column-4">			
		
		<nav class="izbornik">
			<ul>
				<li><a id="myHeader1" href="javascript:showonlyone('newboxes1');" >Dodavanje korisnika</a></li>
				<li><a id="myHeader2" href="javascript:showonlyone('newboxes2');" >Brisanje korisnika</a></li>
				<li><a id="myHeader3" href="javascript:showonlyone('newboxes3');" >Dodavanje muzeja</a></li>
				<li><a id="myHeader4" href="javascript:showonlyone('newboxes4');" >Brisanje muzeja</a><li>
				<li><a id="myHeader5" href="javascript:showonlyone('newboxes5');" >Dodavanje novih termina</a></li>
				<li><a id="myHeader6" href="javascript:showonlyone('newboxes6');" >Brisanje termina</a></li>
			</ul>
		</nav>
				
	</div>
	
	
	<div class="obaviZadatak column column-8">

		<div class="newboxes column column-12" id="newboxes1" style="display:none">
			<div class="popunjavanje">
				<form id="registracija" name="registracija" action="adminRegistracija.php" method="POST" >
						
						<label for="username">Korisničko ime:</label><br/>
						<input id="username" type="text" name="username" placeholder="Minimalno 3 znaka" aria-describedby="username-format" required aria-required=”true” pattern="([A-Za-z-0-9]| |č|ć|ž|š|đ|Č|Ć|Ž|Š|Đ){3,21}" /><br/><br/>
						
						<label for="password">Lozinka:</label><br/>
						<input id="password" type="password" name="password" placeholder="Minimalno 8 znakova" aria-describedby="pass-format" required aria-required=”true” pattern="([a-zA-Z-0-9]| |č|ć|ž|š|đ|Č|Ć|Ž|Š|Đ){8,29}" title="Lozinka mora imati minimalno 8 znakova"/><br/><br/>
						
						<label for="firstname">Ime:</label><br/>
						<input id="firstname" type="text" name="firstname" required aria-describedby="firstname-format" aria-required=”true” pattern="([A-Za-z]| |č|ć|ž|š|đ|Č|Ć|Ž|Š|Đ){3,15}"/><br/><br/>
						
						<label for="surname">Prezime:</label><br/>
						<input id="surname" type="text" name="surname" aria-describedby="surname-format" required aria-required=”true” pattern="([A-Za-z]| |č|ć|ž|š|đ|Č|Ć|Ž|Š|Đ){3,21}"/><br/><br/>
						
						<label for="mail">E-mail:</label><br/>
						<input id="mail" type="email" name="mail" aria-describedby="email-format" required aria-required=”true” /><br/><br/>
						
						<label for="broj">Broj telefona:</label><br/>
						<input id="broj" type="text" name="broj" placeholder="pr: 0123456789" aria-describedby="broj-format" required aria-required=”true” pattern="[0-9]+"/><br/><br/>
						
						<input type="submit" name="registriraj" value="Registriraj" />
				</form>
			</div>
			
		</div>

		<div class="newboxes" id="newboxes2" style="display:none">
			<div class="brisanje">
				<form id="registracija" name="registracija" action="brisiKorisnika.php" method="POST" >
						
						<label for="username">Korisničko ime:</label><br/>
						<input id="username" type="text" name="username" placeholder="Minimalno 3 znaka" aria-describedby="username-format" required aria-required=”true” pattern="([A-Za-z-0-9]| |č|ć|ž|š|đ|Č|Ć|Ž|Š|Đ){3,21}" /><br/><br/>
						
						<label for="firstname">Ime:</label><br/>
						<input id="firstname" type="text" name="firstname" required aria-describedby="firstname-format" aria-required=”true” pattern="([A-Za-z]| |č|ć|ž|š|đ|Č|Ć|Ž|Š|Đ){3,15}"/><br/><br/>
						
						<label for="surname">Prezime:</label><br/>
						<input id="surname" type="text" name="surname" aria-describedby="surname-format" required aria-required=”true” pattern="([A-Za-z]| |č|ć|ž|š|đ|Č|Ć|Ž|Š|Đ){3,21}"/><br/><br/>
						
						<input type="submit" name="brisiKorisnika" value="Obriši" />
				</form>
			</div>
		</div>

		<div class="newboxes" id="newboxes3" style="display:none">
			<div class="brisanje">
				<form id="registracija" name="registracija" action="dodajMuzej.php" method="POST" >
						
						<label for="muzejIme">Dodaj novi muzej:</label><br/>
						<input id="muzejIme" type="text" name="muzejIme" aria-describedby="muzejIme-format" required aria-required=”true” pattern="([A-Za-z-0-9]| |č|ć|ž|š|đ|Č|Ć|Ž|Š|Đ){3,30}" /><br/><br/>
						
						<input type="submit" name="dodajMuzej" value="Dodaj muzej" />
				</form>
			</div>
		</div>

		<div class="newboxes" id="newboxes4" style="display:none">
			<form id="registracija" name="registracija" action="brisiMuzej.php" method="POST" >
						
						<label for="muzejImeBrisi">Obriši muzej:</label><br/>
						<input id="muzejImeBrisi" type="text" name="muzejImeBrisi" aria-describedby="muzejImeBrisi-format" required aria-required=”true” pattern="([A-Za-z-0-9]| |č|ć|ž|š|đ|Č|Ć|Ž|Š|Đ){3,30}" /><br/><br/>
						
						<input type="submit" name="brisiMuzej" value="Obriši muzej" />
				</form>
		</div>
		
		<div class="newboxes" id="newboxes5" style="display:none">
			<form id="registracija" name="registracija" action="dodajTermin.php" method="POST" >
						
						<label for="terminNovi">Dodaj novi termin:</label><br/>
						<input id="terminNovi" type="text" name="terminNovi" placeholder="primjer 09.15 - 10.55" aria-describedby="terminNovi-format" required aria-required=”true” pattern="([0-9]| |.|-){13}" /><br/><br/>
						
						<input type="submit" name="dodajTermin" value="Dodaj novi termin" />
				</form>
		</div>
		
		<div class="newboxes" id="newboxes6" style="display:none">
			<form id="registracija" name="registracija" action="brisiTermin.php" method="POST" >
						
						<label for="terminBrisi">Obriši termin:</label><br/>
						<input id="terminBrisi" type="text" name="terminBrisi" placeholder="primjer 09.15 - 10.55" aria-describedby="terminBrisi-format" required aria-required=”true” pattern="([0-9]| |.|-){13}" /><br/><br/>
						
						<input type="submit" name="brisiTermin" value="Obriši termin" />
				</form>
		</div>


	</div>
	
	<script>
		function showonlyone(thechosenone) {
			$('.newboxes').each(function(index) {
				if ($(this).attr("id") == thechosenone) {
					$(this).show(200);
				}
				else {
					$(this).hide(600);
				}
			});
}
	</script>

	
  </div>
  
  
  
  
  <div class="footer">
		Copyright
  </div>
  
  <div id="google_translate_element"></div>
	<script>
		function googleTranslateElementInit() {
			new google.translate.TranslateElement({
				pageLanguage: 'hr',
				layout: google.translate.TranslateElement.InlineLayout.SIMPLE
			}, 'google_translate_element');
		}
	</script>
	
  
 </body>
 </html>