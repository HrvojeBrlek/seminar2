<?php
	session_start();
	$_SESSION['url'] = $_SERVER['REQUEST_URI'];
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
  
  <div class="osnovno row">
	<div class="osnovne_info column column-6">
		<h2>Osnovne informacije</h2>
		<p>Muzeji Hrvatskog zagorja najveći su kompleksni muzej u Hrvatskoj čijih pet muzejskih jedinica obuhvaća veliki broj objekata, njih 65, 
			s površinom od 229.393,3 m2. Raznolikost sadržaja postava i zbirki, a posebno stručnog kadra daje Muzejima specifičan potencijal koji 
			odlično koriste i danas se mogu s pravom smatrati jednim od najuspješnijih muzeja ne samo u Hrvatskoj već i širem okruženju.</p>
	</div>
	
	<div class="projekti column column-6">
		<h2>Najuspješniji projekti</h2>
	
			<h4>Izgradnja i postav Muzeja krapinskih neandertalaca u Krapini (2003. – 2010.)</h4>
			<p>Investicija projekta izgradnje i oblikovanja postava Muzeja krapinskih neandertalaca bila je jedna od kapitalnih investicija Ministarstva kulture RH.
					Autori projekta i realizacije su Željko Kovačić i Jakov Radovčić. Otkako je krajem veljače 2010. godine otvoren, novi Muzej ne prestaje izazivati iznimnu
					pozornost, kako stručne tako i najšire javnosti, pri čemu već i podatak o više od 150.000 posjetitelja u prvoj godini djelovanja upućuje na mogući
					zaključak da je koncepcijski i investicijski projekt ispunio svrhu.</p>
		
			
		
		<div id="toggleText" style="display: none">
			<h4>Craftattract</h4>
			<p>Craftattract je projekt koji je realiziran zajedno s nacionalnim i slovenskim partnerima unutar inicijative INTERREG IIIA, Programa za susjedstvo.
				Projekt je bio implementiran zahvaljujući sufinanciranju iz EU fondova tijekom 2007. – 2008., a no budući da je jedan od ciljeva projekta bila njegova
					održivost, i nakon prestanka sufinanciranja iz pretpristupnih fondova EU, novoosnovani Centar za tradicijske obrte i vještine u Muzejima Hrvatskog
					zagorja nastavio je s aktivnostima. Stručni djelatnici Muzeja pripremali su nastavak projekta u sklopu nekoliko novih inicijativa i s novim partnerima.
					Projekt Craftattract koristio je i Ministarstvo kulture RH prilikom prijave fenomena tradicijskih obrta i vještina na nacionalnu i UNESCO Reprezentativnu
					listu nematerijalne baštine. Realizirana su dva uspješna upisa iz Krapinsko-zagorske županije na UNESCO-v popis i to Izrada tradicijskih drvenih igračaka
					Hrvatskog zagorja, te Medičarstvo SZ Hrvatske. Ta dva upisa ujedno su i veliki uspjeh stručnjaka Muzeja Hrvatskog zagorja, posebno etnologa iz Muzeja 
					„Staro selo“ iz Kumrovca i povjesničara umjetnosti iz Muzeja seljačkih buna u Gornjoj Stubici.</p>
  
  
			<h4>Projekt Regija digitalnih muzeja</h4>
			<p>U projekt su uključene dvije ustrojbene jedinice Muzeja Hrvatskog zagorja, Muzej krapinskih neandertalaca i Dvor Veliki Tabor. Projekt je
				 prihvaćen u sklopu Programa pripreme i provedbe razvojnih projekata prihvatljivih za financiranje iz fondova Europske unije. Projekt Regija
					digitalnih muzeja bavi se očuvanjem kulturne i povijesne baštine korištenjem novih tehnologija u prezentaciji i međunarodnoj promociji sjeverozapadne
					Hrvatske. Krajnji cilj je urediti odabrane lokacije koje su strateški prioriteti regija u atraktivne i suvremene muzejske postave dostupne korisnicima
					i turistima i to na održiv način kako bi se potaknuo ukupan razvoj područja.</p>
	
			<h4>Ecultvalue</h4>
			<p>Izgradnja novog pristupa i sinergija kako bi se povezali svi ključni dionici i objedinili napori europskih istraživačkih programa koji su usmjereni 
					na kulturne sadržaje koji koriste nove tehnologije. Cilj je uspostaviti suradnju između sektora baštine, posebno u muzejima i ICT sektora koji vode ka
					boljem razumijevanju potreba i mogućnosti. Žele se identificirati primjeri dobre prakse, metode i rješenja koji će osigurati nova iskustva namijenjena
					korisnicima. Cilj je povećati dostupnost baštine stvarnim i virtualnim posjetiteljima što donosi višestruke koristi muzejskom sektoru, poduzetnicima iz
					područja novih tehnologija i samim korisnicima.<br/>
					Očekivani rezultati projekta su:<br/><br/>
		
						- Katalog dostupnih tehnologija<br/>
						- Razvijene nove metodologije suradnje<br/>
						- Uspostava održive mreže eCult Ambasadora<br/>
						- Priručnik za korištenje novih rješenja<br/>
						- Izdavanje publikacija s najuspješnijim primjerima<br/>
						- Formiranje eCult Zajednice – s mrežom nacionalnih i regionalnih partnera<br/>
						- Promocija razvoja novih ICT rješenja<br/>
						- Primjena novih tehnologija s ciljem povećanja dostupnosti<br/></p>
	
			<h4>Rad u mreži</h4>
			<p>Muzeji Hrvatskog zagorja-Muzej krapinskih neandertalaca potpisali su zajedno s 15 partnera iz više europskih zemalja sporazum o osnivanju zajedničke
					mreže koja promiče kulturnu i prirodnu baštinu iz razdoblja pleistocena. Ciljevi mreže su podizanje svijesti o potrebi zaštite i konzervacije lokaliteta
					iz ledenog doba, razvoj zajedničkih programa i razmjena dobrih iskustava i praksi te poticanje međusobne suradnje.</p>
	
		</div>
		
		  <div class="skrivanje column column-12">
			<a id="displayText" href="javascript:toggle();">Klikni za više informacija</a>
		  </div>
		
	</div>
	
	<div class="partnerstvo column column-6">
		<h2>Partnerstva</h2>
			<p>Ravnateljica Muzeja Goranka Horjan aktivno radi u svjetskim strukovnim mrežama:<br/><br/>

  		  - Članica Izvršnog odbora Svjetske muzejske organizacije ICOM<br/>
  		  - Predsjednica Radne grupe za izmjenu Statuta ICOM-a<br/>
  		  - Predsjednica Europskog muzejskog foruma<br/>
  		  - Članica Programskog vijeća Foruma slavenskih kultura<br/>
  		  - Članica Programskog vijeća Regionalne alijanse ICOM SEE<br/>
  		  - Članica savjetodavnog odbora</p>
	</div>
	
	
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