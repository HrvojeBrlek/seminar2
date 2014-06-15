<?php
	session_start();
	$_SESSION['url'] = $_SERVER['REQUEST_URI'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Muzeji Hrvatskog zagorja - Doživljaji</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" href="css/stil.css" type="text/css" charset="utf-8" />
<link rel="stylesheet" href="css/grid.css" type="text/css" charset="utf-8" />
<link rel="stylesheet" href="css/normalize.css" type="text/css" charset="utf-8" />
<script src="js/lib/jquery-1.9.0.min.js" type="text/javascript"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/slideshow.js" type="text/javascript"></script>
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
						'<form name="login" action="logout.php" method="POST">
						<input type="submit" value="Odjavite se"/>
						</form>';
				}
				
				elseif(isset($_SESSION['korisnik'] )){
					echo '<p> Dobrodošli: ' .'<b>' . $_SESSION['korisnik'] . '</b>' .'</p>' .
						'<form name="login" action="logout.php" method="POST">
						<input type="submit" value="Odjavite se"/>
						</form>';
				}
				
				else{
					echo '<p> Dobrodošli: ' .'<b>' . 'Gost' . '</b>' .'</p>' . 
						'<form name="login" action="regPri.html" method="POST">
						<input type="submit" value="Prijavite se"/>
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
  
  <div class="omotac row">
	<div class="dozivljaji column column-12">
		<div class="naslov_doz column column-7">
			<h2>Ovdje ostavite komentar</h2>
		</div>
		
		<div class="dozivljaj_forma column column-7">
			<form name="dozivljaj" action="dozivljajiUpit.php" method="POST">
			
			  <div class="naslov_div column column-11">
				<label for="naslov">Naslov:</label><br/>
				<input id="naslov" type="text" name="naslov" placeholder="Naslov poruke" required aria-required=”true” pattern="([A-Za-z]| |č|ć|ž|š|đ|Č|Ć|Ž|Š|Đ){3,21}" autofocus /><br/><br/>
			  </div>
			
			  <div class="text_div column column-11">
				<label for="tekst_pis">Tekst</label><br/>
				<textarea id="tekst_pis" name="tekst_pis" rows="5" cols="50" placeholder="Poruka.." required aria-required=”true”></textarea><br/><br/>
			  </div>	
			  
			  <div class="potvrda_div column column-11">
				<input type="submit" name="salji" value="Pošalji" />
			  </div>
				
			</form>
			
		</div>
		
		<div class="uprava column column-5">
			<h3>Uprava Muzeja Hrvatskog zagorja</h3>
		</div>
		
		<div class="podaci column column-5">
			<p>
				MUZEJI HRVATSKOG ZAGORJA:<br/><br/>
				Samci 64<br/>
				49245 Gornja Stubica<br/>
				OIB: 11298572202<br/>
				Muzejska ustanova koja objedinjuje pet muzeja na području Krapinsko-zagorske županije sa sjedištem u Gornjoj Stubici.<br/><br/>

				Radno vrijeme Uprave:<br/>
				ponedjeljak - petak od 8 – 16 sati<br/><br/>

				Uprava<br/>
				Ravnateljica: mr. sc. Vlasta Krklec<br/>
				E-mail: <a href="mailto:ravnateljica@mhz.hr" >
				ravnateljica@mhz.hr</a><br/>
				web: www.mhz.hr<br/><br/>
				
				Službe:<br/>
				Služba za računovodstvene i financijske poslove:<br/>
				Robert Glivar – voditelj službe<br/>
				E-mail: <a href="mailto:robert.glivar@mhz.hr" >
				robert.glivar@mhz.hr</a><br/>
				Računovodstvo: ++385 (0) 49 587 899<br/><br/>

				Martina Ebner Petrinec – voditeljica odjela marketinga<br/>
				E-mail: <a href="mailto:marketing@mhz.hr" >
				marketing@mhz.hr</a><br/>
				Marketing: ++385 (0) 49 587 881<br/><br/>

				Služba za kadrovske, pravne i opće poslove:<br/>
				Bruno Kovačić – tajnik Muzeja<br/>
				E-mail: <a href="mailto:mhz@mhz.hr" >
				mhz@mhz.hr</a><br/>
				Tajništvo: ++385 (0) 49 587 888<br/><br/>

				Vesna Ivanić – tajnica ravnateljice i voditeljica pismohrane<br/>
				E-mail: <a href="mailto:vesna.ivanic@mhz.hr" >
				vesna.ivanic@mhz.hr</a><br/>
				Tajništvo: ++385 (0) 49 587 886<br/>
		</div
		
	</div>
	
	
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