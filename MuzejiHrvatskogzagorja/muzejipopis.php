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
  
  <div class="muzejipopisinfo row">
	<div class="muzeji_popis column column-4">
    <h2>Muzeji i informacije</h2>
	
	<div id="nav">
	
	 <nav class="izbornik">
		<ul>
			<li><p>Dvor Veliki Tabor</p>
				<ul>
					<li><p class="složeno">Servisne informacije</p>
						<ul>
							<li><p><b>Otvoreno za posjetitelje</b><br/><br/>
							
								utorak - nedjelja 9 - 19 h (zadnji ulaz u muzej u 17.30 h) <br/>
								ponedjeljkom zatvoreno <br/>

								<b>1. siječnja, na Uskrs, 1. studenog, 25. i 26. prosinca: zatvoreno</b><br/><br/>
							
							<b>Cijena ulaznice:</b><br/>
							odrasli: 20 kn<br/>
							učenici, studenti i umirovljenici: 10 kn<br/><br/>

							<b>Parkiralište:</b><br/>
							da, izvan zidina Muzeja, udaljeno oko 200 m<br/><br/>

							<b>Stručna vodstva:</b><br/>
							Tematska stručna vodstva, posebna događanja, radionice i predstave potrebno je unaprijed naručiti i dodatno se 
							naplaćuju (gotovinom ili predračunom).<br/>
							- stručno vodstvo na hrvatskom: 50 kn po grupi<br/>
							- stručno vodstvo na stranom jeziku (engleski): 100 kn po grupi<br/>
							- kostimirano stručno vodstvo na hrvatskom: 100 kn po grupi<br/>
							- kostimirano stručno vodstvo na stranom jeziku: 150 kn po grupi<br/>
							- tematsko stručno vodstvo na hrvatskom: 200 kn po grupi<br/>
							- tematsko stručno vodstvo na engleskom: 250 kn po grupi<br/>
							- radionice i predstave: 30 kn po osobi (najviše 30 osoba)<br/><br/>
	
							<b>Grupni posjeti:</b><br/>
							grupi s više od 30 osoba odobrava se popust na ulaznice od 20 %<br/><br/>

							<b>Pristup za posjetitelje s invaliditetom:</b><br/>
							ne<br/></p>
							</li>
						</ul>
					</li>
					<li><p class="složeno">Povijest muzeja</p>
						<ul>
							<li><p><strong>O muzeju:</strong><br/><br/>
								Dvor Veliki Tabor jedan je od najznačajnijih kasnosrednjovjekovnih i renesansnih plemićkih gradova u kontinentalnom dijelu 
								Hrvatske. Najstariji dio kompleksa Dvora jest središnji, kasnogotički palas ili peterokutna kula, koja je imala stambenu i 
								obrambenu funkciju. Tijekom 16. st., izgrađene su oko palasa četiri polukružne renesansne kule i sjeverni ulazni dio. 
								Oko te uže jezgre proteže se još jedan obrambeni prsten – vanjski obrambeni zid u sklopu kojeg je u 16. st. sagrađen
								peterokutni bastion (na jugozapadnoj strani zida), četvrtasta kula iznad ulaza i dvije rondele – sjeverna i južna.<br/><br/>

								Gotovo tri stotine godina grad je bio u posjedu obitelji Rattkay (1502. - 1798.), koja je osim Velikog Tabora posjedovala i 
								dvorce Miljanu, Mali Tabor, Veliku Horvatsku, kuriju Kraj. Nakon smrti posljednjega muškog potomka obitelji Rattkay 
								izmjenjivali su se vlasnici Velikog Tabora - ministar Thuguth, braća Grunwald, slikar Oton Iveković (koji je u brojnim 
								djelima kistom proslavio dvorac i slikoviti krajolik okolice), časne sestre Trećeg reda sv. Franje. Nakon Drugoga svjetskog 
								rata, gradom se koristila lokalna Poljoprivredna zadruga.<br/><br/>

								Početkom 1990-ih godina Veliki Tabor je ušao u sastav Muzeja Hrvatskog zagorja i otada počinju sustavni restauratorsko-konzervatorski
								radovi na saniranju grada koji, s manjim prekidima, traju i danas. Do 2007. g. restaurirana je dvorišna galerija i središnji, 
								najstariji dio, kasnogotički Palas, koji je 2007. otvoren za posjetitelje. Od listopada 2008. Dvor je ponovno zatvoren za
								posjetitelje radi nastavka restauratorskih radova.</p>
							</li>
						</ul>
					</li>
					<li><p class="složeno">Stručni suradnici</p>
						<ul>
							<li>
								<p> Nives Ćurković, vodič<br/>
									Nadica Jagarčec, viši kustos<br/>
									Ivana Škiljan, viši kustos<br/>
									Siniša Žnidarec, muzejski tehničar</p>
							</li>
						</ul>
					</li>
				</ul>
			
			
			</li>
			<li><p>Muzej seljačkih buna</p>
				<ul>
					<li><p class="složeno">Servisne informacije</p>
						<ul>
							<li><p><b>Otvoreno za posjetitelje</b><br/><br/>

									svakog dana 9 - 19 h (zadnji ulazak u 17.30 h)<br/><br/>

									<b>1. siječnja, na Uskrs, 1. studenog, 25. i 26. prosinca: zatvoreno</b><br/><br/>
							
							<b>Cijena ulaznice:</b><br/>
						odrasli: 20 kn<br/>
						djeca, studenti i umirovljenici: 10 kn<br/>
						grupe: 16 kn (odrasli), 8 kn (djeca, studenti i umirovljenici)<br/>
						članovi HMD-a, ICOM-a, HGD-a i drugih strukovnih udruga: besplatan ulaz<br/><br/>

						<b>Kako doći do muzeja:</b><br/>
						autobusom ili vlakom od Zagreba do Gornje Stubice (nema gradskog prijevoza)<br/><br/>

						<b>Parkiralište:</b><br/>
						da<br/><br/>

						<b>Stručna vodstva:</b><br/>
						uz najavu na tel. 049/587-888<br/>
						strani jezik: engleski<br/>
						moguće je i kostimirano vodstvo<br/>
						cijena:<br/>
						50 kn (hrvatski jezik)<br/>
						100 kn (kostimirano i na stranom jeziku)<br/><br/>

						<b>Grupni posjeti:</b><br/>
						najave grupa i informacije na tel. 049/587-889<br/>
						grupi s više od 30 osoba odobrava se popust za gotovinsko plaćanje ili plaćanje uz predračun<br/><br/>

						<b>Fotografiranje / snimanje videokamerom:</b><br/>
						da, za osobne potrebe, uz dopuštenje<br/><br/>

						<b>Pristup za posjetitelje s invaliditetom:</b><br/>
						da<br/><br/>

						<b>Muzejska trgovina:</b><br/>
						prodaju se katalozi izložbi i druga izdanja te izvorni suveniri, rad tradicijskih obrtnika<br/><br/>

						<b>Restoran / kafić:</b><br/>
						radno vrijeme: 9 - 16 h (tel. 095-8355-655)</p></li>
						</ul>
					</li>
					<li><p class="složeno">Povijest muzeja</p>
						<ul>
							<li><p><strong>O muzeju:</strong><br/><br/>
								Muzej seljačkih buna smješten je u baroknom dvorcu grofova Oršić, izgrađenome 1756. g., na mjestu srednjovjekovne utvrde. 
								Dao ga je sagraditi Krsto Oršić, pripadnik stare hrvatske plemićke obitelji. Tlocrt je u obliku slova L, a treće krilo nekada
								se nastavljalo na stariji kaštel. U 19. st., nakon velikog potresa, dvorcu je dodan klasicistički trijem s timpanom i dorskim
								stupovima.<br/><br/>
								Stalni postav Muzeja donosi kulturološki i povijesni pregled regije od kasnoga srednjeg vijeka do ukinuća feudalnih odnosa
								1848. godine. Središnji dio postava posvećen je Seljačkoj buni iz 1573. g., krvavoj stubičkoj sagi čiji su protagonisti
								zauvijek ostali u memoriji hrvatskoga puka. Muzej prezentira oružje i bojnu opremu, iz kojih je vidljiv način ratovanja u 
								vrijeme Gupčeve bune. Prikazani su velikaški posjedi i utvrde te razvoj srednjovjekovnih burgova. Predstavljeni su i grofovi
								Oršić koji su ostavili vidljiv trag u povijesti toga kraja.<br/><br/>
								Postav prati promjene na feudalnim posjedima u 17. i 18. st., a galantno barokno razdoblje oživljeno je programima poput
								kostimiranih vodstava te pričama i legendama vezanim za članove istaknutih plemićkih obitelji. Postav završava temom Hrvatskoga
								narodnog preporoda i Jelačićevim proglasom o ukidanju kmetstva.<br/><br/>
								Vizualni sadržaj prate posebno izrađene glazbene ili zvukovne kulise. Prezentacija glavne teme obuhvaća multimedijski program
								u kojemu se, među ostalim, koriste inserti iz filma Vatroslava Mimice Seljačka buna 1573.<br/><br/>
								U dvorskoj kapeli s kasnobaroknim iluzionističkim freskama (alegorijskim prikazom četiriju kontinenata) i oslikanim baroknim
								oltarom s prizorima iz života svetog Franje Ksaverskoga, djelu Antona Lerchingera, nalazi se izložba sakralne umjetnosti 
								Hrvatskog zagorja. Izloženo je crkveno posuđe, tekstil i skulptura, izbor predmeta od stakla, crkvene knjige i slike.<br/><br/>
								Etnološki prikaz podrumarstva i vinarstva na stubičkom vlastelinstvu smješten je u dvorskom podrumu.<br/><br/>
								Dvorac okružuje perivoj s monumentalnim spomenikom Seljačkoj buni i Matiji Gupcu, djelom kipara Antuna Augustinčića.<br/><br/>
								U galeriji Muzeja organiziraju se povremene izložbe kulturno-povijesne, umjetničke, arheološke i etnografske tematike te 
								Trijenale zagorskog suvenira. U ljetnim mjesecima Muzej organizira priredbu Viteški turnir, a u zimskom razdoblju obilježava
								se obljetnica Seljačke bune.</p>
							</li>
						</ul>
					</li>
					<li><p class="složeno">Stručni suradnici</p>
						<ul>
							<li>
								<p>Tomislav Drempetić Hrčić, viši preparator<br/>
								Nikola Drempetić Hrčić, kustos<br/>
								Vlatka Filipčić Maligec, viši kustos<br/> 
								Zlatko Mirt, viši preparator</p>
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li><p>Galerija Antuna Augustinčića</p>
				<ul>
					<li><p class="složeno">Servisne informacije</p>
						<ul>
							<li><p><b>Otvoreno za posjetitelje</b><br/><br/>

							utorak - nedjelja 9 - 19 h (zadnji ulazak u 17.30 h)<br/>
							ponedjeljkom zatvoreno <br/>

							<b>1. siječnja, na Uskrs, 1. studenog, 25. i 26. prosinca: zatvoreno</b><br/><br/>
							
							<b>Cijena ulaznice:</b><br/>
							odrasli: 20 kn<br/>
							djeca, studenti i umirovljenici: 10 kn<br/>
							članovi ICOM-a, HMD-a i sl. udruženja: besplatan ulaz<br/><br/>

							<b>Parkiralište:</b><br/>
							javno parkiralište u neposrednoj blizini Galerije<br/><br/>

							<b>Stručna vodstva:</b><br/>
							uz najavu na telefon<br/>
							strani jezik: engleski<br/>
							cijena (po grupi od maks. 40 osoba):<br/>
							50 kn (hrvatski jezik)<br/>
							100 kn (strani jezik)<br/><br/>

							<b>Grupni posjeti:</b><br/>
							grupi s više od 30 osoba odobrava se popust na ulaznice od 20% za gotovinsko plaćanje ili plaćanje uz predračun<br/><br/>

							<b>Fotografiranje / snimanje videokamerom:</b><br/>
							da, za osobne potrebe (bez prava na objavljivanje)<br/><br/>

							<b>Pristup za posjetitelje s invaliditetom:</b><br/>
							da<br/><br/>

							<b>Muzejska trgovina:</b><br/>
							prodaju se muzejska izdanja i suveniri</p></li>
						</ul>
					</li>
					<li><p class="složeno">Povijest muzeja</p>
						<ul>
							<li><p><strong>O muzeju:</strong><br/><br/>
								Galerija je zasnovana 1970. g., kada je Antun Augustinčić (1900. - 1979.) – zagrebački i pariški đak, jedan od naših 
								najznačajnijih kipara i nezaobilaznih predstavnika hrvatske moderne umjetnosti – darovao svom rodnom Klanjcu vlastiti 
								kiparski opus, nastao tijekom 50 godina njegova stvaranja, od 1920-ih do 1970-ih, koji mu je priskrbio ugled u domovini i 
								inozemstvu.<br/><br/>
								Zgrada Galerije, arhitekta A. Lozice, izgrađena u nekadašnjem voćnjaku obližnjega franjevačkoga samostana, otvorena je za 
								javnost u proljeće 1976. g. izložbom reprezentativnih radova koje je odabrao sam autor i donator.<br/><br/>
								Današnja se ekspozicija temelji na opredjeljenju za tematskokomparativni pristup Augustinčićevu djelu. Obuhvaća dvije međusobno
								ovisne cjeline: unutarnji postav – u skladu s trodijelnom raščlambom prostora tematski podijeljen na intimnu plastiku, portrete
								i javne spomenike – te park skulpture uokolo Galerije.<br/><br/>
								U prvoj dvorani stalnog postava izložena su komorna djela, od ranih radova iz 1920-ih, koja svjedoče o razdoblju Augustinčićeva
								formiranja na zagrebačkoj Akademiji te studija u Parizu u vrijeme dominacije art decoa (Harlekin, 1927.; Djevojka i mladić s 
								gitarama, 1928.), razvoju vlastita kiparskog izraza te trajnoj preokupaciji ljudskim, poglavito ženskim tijelom 
								(niz torza iz 1940-ih i 1950-ih, u pokretu ili u klasičnom stavu kontraposta).<br/><br/>
								Druga dvorana posvećena je portretima, stalno prisutnoj temi u Augustinčićevu opusu. Izborom iz brojnog niza snažnih, 
								psihološki dorečenih i skulptorski izražajnih portreta njegovih prijatelja te poznatih osoba iz kulture i politike, prati se 
								razvoj njegova kiparskog postupka: od početne stilizacije (Portret Nade Mikačić, 1923.; Portret Mladena Ivekovića, 1928.), 
								preko realizma (Portret Luje Novaka, 1933.), impresionističkog tretmana površine (Portret Bojana Stupice, 1955.) do ekspresivne
								kiparske geste (Portret Branka Gavelle, 1976.).<br/><br/>
								U trećoj dvorani izložen je izbor skica i modela za javne spomenike, po kojima je Augustinčić i najpoznatiji širokoj publici: 
								monumentalni Mir, postavljen uz zgradu UN-a u New Yorku 1954. g., Rudar (1939.) ispred Međunarodnog ureda rada u Ženevi,  
								fragment Pietà (1939.), kao dio ansambla za Spomenik šleskom ustanku u Katowicama (Poljska)... Motivom Nošenje ranjenika 
								Augustinčić se bavi tijekom trideset godina svog poslijeratnog stvaranja, kroz brojne skice i spomenike postavljene u mnogim 
								gradovima, a upravo njega je odabrao i za svoj nadgrobni spomenik.<br/><br/>
								Vanjski postav započinje Spomenikom Marinu Držiću (1963.) u paciju Galerije, a nastavlja se parkom skulptura: skulpture i 
								fontane izvedene za gradske prostore i parkove (Kupačica, 1927., Daruvar; Majka i dijete, 1969., Glina; Manekenpis i Dječak s 
								ribom, 1950., Rim; Brijunski akt, 1948., Brijuni), grobne skulpture (Usnula djevojka, 1935., Varaždin; Odmor, oko 1930., Anđeo,
								1933., Mojsije, 1934. i Ikar, 1935., Mirogoj) te javni spomenici (Konj u pokretu – dio Spomenika kralju Aleksandru u Somboru, 
								1940.; Spomenik Titu, 1948., Kumrovec; Spomenik Moši Pijade, 1954., Zagreb). Na izlazu iz parka, lijevo od ulaza u Galeriju, 
								je Nošenje ranjenika podno kojeg su položene urne s pepelom Nade i Antuna Augustinčića.<br/><br/>
								Osim muzejske, Galerija je razvila izdavačku te izložbenu djelatnost: od 1981. g. izlazi časopis Anali Galerije Antuna 
								Augustinčića, a od 1983. g. djeluje Salon Galerije Antuna Augustinčića. Od darova umjetnika koji su u njemu izlagali, nastala je
								Zbirka Salona Galerije Antuna Augustinčića koja predstavlja stanovit presjek hrvatske likovne umjetnosti 20. i 21. st. Trenutno
								sadrži tridesetak djela (skulpture, slike, crteže i umjetničku keramiku) umjetnika vezanih uz lokalnu sredinu, Augustinčićevih
								suradnika i učenika, te autora koji istražuju medij kiparstva bez obzira na provenijenciju. Trajno je izložena od 2004. g. u 
								prostoru upravne zgrade Galerije.</p>
							</li>
						</ul>
					</li>
					<li><p class="složeno">Stručni suradnici</p>
						<ul>
							<li>
								<p> Sanja Broz, vodič<br/>
									Božidar Pejković, viši kustos<br/>
									mr. sc. Davorin Vujčić, viši kustos</p>
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li><p>Muzej krapinskih neandertalaca</p>
				<ul>
					<li><p class="složeno">Servisne informacije</p>
						<ul>
							<li><p><b>Otvoreno za posjetitelje</b><br/><br/>

							utorak - nedjelja 9 - 19 h (zadnji ulazak u 17.30 h) <br/>
							ponedjeljkom zatvoreno <br/><br/>

							Muzej je zatvoren 1. siječnja, na Uskrs, 1. studenog, 25. i 26. prosinca</b><br/><br/>							
							<b>Cijena ulaznice:</b><br/>
								odrasli: 50 kn<br/>
								djeca, studenti i umirovljenici: 25 kn<br/>
								obiteljska ulaznica: 100 kn<br/>
								članovi HMD-a, ICOM-a, HGD-a i drugih strukovnih udruga: besplatan ulaz<br/><br/>

								Kako doći do muzeja:<br/>
								osobnim vozilom, autobusom ili vlakom;<br/>
								uz posjet Muzeju predviđen je obilazak lokaliteta Hušnjakovo, do kojega se stiže planinarskom šetnjom<br/>
								(za nepovoljnih vremenskih uvjeta pristup nalazištu nije moguć)<br/>

								Parkiralište:<br/>
								javno parkiralište u blizini Muzeja (za osobna vozila i autobuse)<br/><br/>

								Stručna vodstva:<br/>
								vodstvo se naručuje pri rezervaciji termina<br/>
								audiovodič na 8 jezika (hrvatski, slovenski, mađarski, češki, talijanski, francuski, engleski, njemački): 10 kn<br/>
								strani jezik: engleski<br/>
								cijena:<br/>
								- vodstvo (oko 60 minuta):<br/>
									100 kn (hrvatski jezik)<br/>
									150 kn (strani jezik)<br/>
								- kombinirano vodstvo po Muzeju i nalazištu:<br/>
									150 kn (hrvatski jezik)<br/>
									200 kn (strani jezik)<br/><br/>

								Grupni posjeti:<br/>
								grupi s više od 30 osoba odobrava se popust na ulaznice od 20% za gotovinsko plaćanje ili plaćanje uz predračun;<br/>
								grupe je potrebno najaviti i rezervirati termin <a href="mailto:rezervacije-mkn@mhz.hr">ovdje</a>  
								ili na faks: 049/374-968, 049/374-969(zbog prostornih ograničenja i interaktivnih sadržaja organiziranu grupu čini maks. 25 osoba)<br/><br/>

								Fotografiranje / snimanje videokamerom:<br/>
								ne<br/><br/>

								Pristup za posjetitelje s invaliditetom:<br/><br/>
								da, uz pratnju; korištenje planinarskom šetnicom do nalazišta nije moguće zbog opasnog terena<br/><br/>

								Muzejska trgovina:<br/>
								da<br/><br/>

								Restoran / kafić:<br/>
								radno vrijeme: 8 - 23 h</p></li>
						</ul>
					</li>
					<li><p class="složeno">Povijest muzeja</p>
						<ul>
							<li><p><strong>O muzeju:</strong><br/><br/>
								Muzej je osnovan 1966. g., a nova muzejska zgrada, koju je projektirao arhitekt Željko Kovačić, otvorena je zajedno sa 
								stalnim postavom 2010. g.<br/><br/>
								Sadržaj muzeja podijeljen je u 18 tematskih cjelina, te se  može pratiti na nekoliko različitih razina vizualnih i 
								virtualnih interpretacija koje posjetiteljima objašnjavaju kompleksnu priču o postanku života na Zemlji i evoluciji 
								čovjeka, stalno se referirajući na značenje otkrića fosilnih ostataka neandertalaca u Krapini i na revolucionarne 
								istraživačke metode koje su primijenjene u obradi nalaza.<br/><br/>
								U predvorju muzeja koje simulira pogled iz špilje, interpretacija počinje filmskom pričom o životu krapinskih neandertalaca.<br/>
								Nakon projekcije ulazi se u povijesni dio, koji započinje s danom 23. kolovoza 1899., kada Dragutin Gorjanović-Kramberger,
								hrvatski znanstvenik koji je prvi istražio i obradio nalazište, dolazi u Krapinu na lokalitet Hušnjakovo.
								Prikazana je ondašnja Krapina, zajedno s gradonačelnikom Vilbaldom Slugom, koji je Krambergera odveo na lokalitet, te 
								ljekarna u kojoj su zaštićeni prvi nalazi i tadašnje poznato Kneippovo lječilište.<br/><br/>
								Nakon lokalne situacije prelazi se na prikaz važnih znanstvenih spoznaja u povijesti, znanja o postanku svijeta, 
								slijeda razvoja života od prvih hominida do krapinskog neandertalca, koji je predstavljen u rekonstrukciji polušpilje, 
								s vjernim modelima što ih je izradila renomirana francuska umjetnica Elisabeth Daynes.<br/><br/>
								Suvremenom tehnologijom u 3D tehnici na videozidu prikazani su ostaci neandertalaca, ali i originalne Krambergerove snimke, 
								kako bi se mogle usporediti razlike. Usporednim modelima vanjskih obilježja prikazane su razlike u građi Homo sapiensa i 
								neandertalaca.<br/><br/>
								Informatičkom tehnologijom izveden je interaktivni bolesnički krevet s tijelom neandertalca kojega posjetitelji mogu
								"istraživati" i doći do informacija o njegovim ozljedama i bolestima, uz ilustrirane fotografije i rendgenske snimke. Svi 
								prikazi utemeljeni su na rezultatima obrade fosilnih koštanih ostataka pronađenih na lokalitetu.<br/><br/>
								Spiralno kretanje kroz postav prikazuje faze u evoluciji života na Zemlji, tijek razvoja kontinenata, biljnoga i životinjskog 
								svijeta (originalima, slikovnim prikazima, replikama reprezentativnih izložaka iz svjetskih muzeja, skulpturama suvremenih 
								umjetnika). Evolucija Zemlje prikazana je u vremenskoj cjelini od jednog dana, odnosno 24 sata, kako bi se pojam vremena lakše
								približio čovjeku dobro poznatim i bliskim mjerilom.<br/><br/>
								U dijelu Muzeja koji govori o okolišu u kojem je neandertalac živio  atraktivan je prikaz otapanja ledenjaka, ostvaren 
								interaktivnom svjetlosnom projekcijom osjetljivom na kretanje (virtualno led puca pod nogama).
								Prikazani su načini izrade oruđa, posmrtni rituali, najvažnija nalazišta neandertalaca u svijetu, pojava Homo sapiensa, 
								te različita tumačenja o podrijetlu čovjeka.<br/><br/>
								Posljednji segment Muzeja govori o ubrzanome kulturnom i tehnološkom razvoju ljudskog roda.<br/><br/>
								Muzej krapinskih neandertalaca svojom arhitekturom i postavom stoji uz bok poznatim svjetskim muzejima te vrste. Njegova je 
								posebnost to što obilazak obuhvaća i izvorni lokalitet Hušnjakovo, koji je najpoznatije svjetsko nalazište neandertalskog 
								čovjeka s najbogatijom i najraznolikijom fosilnom zbirkom. Hušnjakovo je zaštićeno kao prvi paleontološki spomenik prirode u
								Hrvatskoj, a datira se u vrijeme od prije 130 000 godina. U naslagama polušpilje nađeno je oko 900 ljudskih fosilnih kostiju,
								brojna kamena oruđa iz razdoblja paleolitika, te fosilni ostaci špiljskog medvjeda, vuka, losa, golemog jelena, toplodobnog 
								nosoroga, divljega goveda i drugih životinja.</p>
							</li>
						</ul>
					</li>
					<li><p class="složeno">Stručni suradnici</p>
						<ul>
							<li>
								<p>mr. sc. Vlasta Krklec, muzejski savjetnik<br/>
								Siniša Laginja, viši muzejski tehničar<br/>
								Lorka Lončar Uvodić, kustos; muzejski pedagog <br/>
								Goran Smrečki, muzejski tehničar <br/>
								Eduard Vasiljević, kustos</p>
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li><p>Muzej "Staro Selo"</p>
				<ul>
					<li><p class="složeno">Servisne informacije</p>
						<ul>
							<li><p><b>Otvoreno za posjetitelje</b><br/><br/>

								svakog dana 9 - 19 h (zadnji ulazak u 17.30 h)<br/><br/>

								<b>1. siječnja, na Uskrs, 1. studenog, 25. i 26. prosinca: zatvoreno </b><br/><br/>

							<b>Cijena ulaznice:</b><br/>
							odrasli: 20 kn<br/>
							učenici, studenti i umirovljenici: 10 kn<br/>
							grupe: 16 kn (odrasli), 8 kn (djeca, učenici, studenti i umirovljenici)<br/>
							članovi ICOM-a, HMD-a i sl. udruženja: besplatan ulaz<br/><br/>

							<b>Kako doći do muzeja:</b><br/>
							- autobusom s Autobusnog kolodvora Zagreb ili s terminala Zaprešić<br/>
							- vlakom iz Zagreba s Glavnoga ili drugih kolodvora (vlak vozi do Harmice, gdje se presjeda u autobus - "vlak")<br/><br/>

							<b>Parkiralište:</b><br/>
							da<br/><br/>

							<b>Stručna vodstva:</b><br/>
							uz najavu na e-mail ili faks<br/>
							strani jezik: engleski, njemački, ruski, slovenski<br/>
							cijena:<br/>
							50 kn (hrvatski jezik)<br/>
							100 kn (strani jezik)<br/><br/>

							<b>Grupni posjeti:</b><br/>
							grupi s više od 30 osoba odobrava se popust na ulaznice od 20% za gotovinsko plaćanje<br/><br/>

							<b>Fotografiranje / snimanje videokamerom:</b><br/>
							da, za osobne potrebe (bez prava na objavljivanje)<br/><br/>

							<b>Pristup za posjetitelje s invaliditetom:</b><br/>
							da, osim u pojedine zaštićene tradicijske objekte u koje nije moguće ugraditi prilaz za invalide<br/><br/>

							<b>Muzejska trgovina:</b><br/>
							suvenirnica, radno vrijeme:<br/>
							- zimi 9 - 16 h<br/>
							- ljeti 8 - 19 h<br/><br/>

							<b>Restoran / kafić:</b><br/>
							ne, u kumrovečkom Selu nalaze se ugostiteljski objekti u kojima se nude poznati specijaliteti, od kojih su najpoznatiji zagorski 
							štrukli</p>
							</li>
						</ul>
					</li>
					<li><p class="složeno">Povijest muzeja</p>
						<ul>
							<li><p><strong>O muzeju:</strong><br/><br/>
								Etnoselo Kumrovec jedini je tradicijski uređen prostor Hrvatskog zagorja koji posjetiteljima dočarava autentičan izgled 
								zagorskog sela s početka 20. st. Smješteno je u idiličnom krajoliku doline rijeke Sutle, između impozantne Cesargradske i 
								Kunšperk gore, na prostoru koji je svojom ljepotom inspirirao i autora hrvatske himne Antuna Mihanovića.<br/><br/>
								Četrdesetak obnovljenih objekata tradicijskoga graditeljstva uči nas kak su živeli naši stari. Uz sačuvanu arhitekturu hiže 
								mazanke i hiže zidanke Muzej čuva i vrijedne predmete tematski postavljene prema različitim obrtima i običajima tipičnima za 
								Hrvatsko zagorje. Uređeni postavi govore o običajima i svakodnevici seljaka te prikazuju i različite tradicijske obrte kojima
								su stanovnici zagorskih sela osiguravali egzistenciju svojim obiteljima. Tu su i tradicijske okućnice i vrtovi, sjenici i koci
								- sve ono što je činilo bogati mozaik života na selu.<br/><br/>
								Zadružno imanje obitelji Broz i rodna kuća Josipa Broza Tita (1892. - 1980.) nalaze se u središtu sela i imaju etnografski i 
								povijesni postav.<br/><br/>
								U sačuvanim radionicama, opremljenima na starinski način, posjetitelji upoznaju način života i rada majstora kovača, kolara, 
								lončara, medičara i svjećara, kožara, postolara, bačvara, prelje, tkalje…<br/><br/>
								Stalni izložbeni postavi predstavljeni su unutar sljedećih tema: Stara pučka škola; Rodna kuća Josip Broza; Gospodarski objekt
								obitelji Broz; Kovačnica; Način života i stanovanja kovačke obitelji; Kovačko-potkivački obrt; Kolarstvo; Od konoplje i lana do
								platna; Zagorska svadba; Život mladog bračnog para; Majstori u radionici; Od zrna do pogače; Licitarski, medičarski i svjećarski
								obrt; Izrada pučkih svirala i drvenih dječjih igračaka; Život u komorici; Lončarski obrt; Život i gospodarstvo zagorske 
								obitelji; Bačvarsko-pintarski obrt; Košaraštvo; Krovovi zagorskog sela; Vatrogasci - čuvari naslijeđa. Umijeće izrade drvenih
								tradicijskih dječjih igračaka s područja Hrvatskog zagorja te medičarski obrt na području sjeverne Hrvatske, koji su 
								prezentirani u stalnom postavu, zaštićeni su kao nematerijalna kulturna baština.<br/><br/>
								Uz stalne izložbene postave postoje i izložbeno-galerijski prostori u kojima se održavaju prigodne izložbe.<br/><br/>
								Tijekom sezone, od 1. travnja do 30. listopada, organiziraju se prezentacije i demonstracije tradicijskih obrta. Posjetitelji
								mogu upoznati način na koji lončari oblikuju posude na nožnome lončarskom kolu, kako se izrađuju drvene dječje igračke i 
								svirale te licitarska srca, kako kovač kuje u kovačnici, kako se tka platno, kako kožari obrađuju kožu, postolari izrađuju 
								obuću, a češljari rade češljeve od roževine.<br/><br/>
								Prezentacije i demonstracije tradicijskih obrta organiziraju se uz prethodnu najavu.<br/><br/>
								Materijalna i nematerijalna baština Hrvatskog zagorja čuva se i rekonstrukcijama pojedinih tradicijskih običaja kao što su 
								Ophodi Zvezdara, obilježavanje Jurjeva, Zagorska svadba, Subota u etno-selu (termini njihova održavanja objavljuju se u 
								medijima ili se mogu saznati na upit u Muzeju).</p>
							</li>
						</ul>
					</li>
					<li><p class="složeno">Stručni suradnici</p>
						<ul>
							<li>
								<p> Kristijan Bezjak, viši preparator<br/>
									Tatjana Brlek, viši kustos; muzejski pedagog <br/>
									Mladen Kuhar<br/>
									Tihana Kušenić, kustos <br/>
									Anita Paun-Gadža, viši kustos <br/>
									mr. sc. Dunja Šarić, muzejski savjetnik <br/>
									Josip Škvorc, preparator<br/>
									mr. sc. Branka Šprem-Lovrić, muzejski savjetnik<br/>
									Rudolf Žlender, preparator</p>
							</li>
						</ul>
					</li>
				</ul>
			</li>
		</ul>
		</nav>
	</div>
	
	
  </div>
  </div>
  
  <div class="footer_muzej_popis">
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