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
<script src="js/igraskrivaca.js" type="text/javascript"></script>
<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


<!-- Skripte za kalendar -->
<link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css"/ >
<script src="js/jquery.js"></script>
<script src="js/jquery.datetimepicker.js"></script>

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
  
  
  <div class="rezervacijared row">
	
	<form name="rezerviraj" action="rezervirajUpit.php" method="POST">
		<div class="muzej column column-4">
			<p><b>Odaberite muzej:</b></p>
				<select id="odabirMuzej" name="odabirMuzej">
				<?php
					/* Stvaranje konekcije prema bazi */
					$link=mysqli_connect("localhost","root","123","seminar2");
					
					/* Provjera spajanja */
					if(mysqli_connect_errno()){
						exit ('Baza ne postoji: '. mysqli_connect_error ()); 
					}
					
					$link2=mysqli_select_db($link, "muzejIme");
					$link3=mysqli_query($link, "SET NAMES utf8");
					
					//Upit
					$upit="SELECT muzejIme FROM muzejLokacija";
					
					$rezultat=mysqli_query($link, $upit);
					
					while($row=mysqli_fetch_array($rezultat)){
						
						echo "<option value=\"{$row['muzejIme']}\">" . $row['muzejIme'] . "</option>";
						
					}
					
					mysqli_close($link);
				?>
			</select>
	
		</div>
	
		<div class="posjeta column column-4">
			<p><b>Odaberite vrijeme:</b></p>
			
			
			<select id="odabirVrijeme" name="odabirVrijeme">
				<?php
					/* Stvaranje konekcije prema bazi */
					$link=mysqli_connect("localhost","root","123","seminar2");
					
					/* Provjera spajanja */
					if(mysqli_connect_errno()){
						exit ('Baza ne postoji: '. mysqli_connect_error ()); 
					}
					
					$link2=mysqli_select_db($link, "radnoVrijeme");
					$link3=mysqli_query($link, "SET NAMES utf8");
					
					//Upit
					$upit="SELECT vrijemePosjete FROM radnoVrijeme LIMIT 5";
					
					$rezultat=mysqli_query($link, $upit);
					
					while($row=mysqli_fetch_array($rezultat)){
						
						echo "<option value=\"{$row['vrijemePosjete']}\">" . $row['vrijemePosjete'] . "</option>";
						
					}
					
					mysqli_close($link);
				?>
			</select>
				
		</div>
	
		<div class="datum column column-4">
			
			<p><b>Današnji datum:</b></p>
			
			<input type="text" id="datum" name="datum" />
				
		</div>
	
		<div class="posalji column column-12">
			<input type="submit"  name="salji" value="Rezerviraj" />
		</div>
	</form>
  
  
  </div>
  
  
  <div class="footerRezerviraj">
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
 
<script>
 jQuery('#datum').datetimepicker({
 timepicker:false,
 formatDate:'Y/m/d',
 minDate:'-1970/01/01',//yesterday is minimum date(for today use 0 or -1970/01/01)
 maxDate:'+1970/01/07'//tommorow is maximum date calendar
});
</script>