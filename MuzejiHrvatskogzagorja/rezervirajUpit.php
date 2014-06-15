<?php
		session_start();
				if(isset($_POST['salji'])){
				
					$datum = $_POST['datum'];
					$korisnickoIme=isset( $_SESSION['korisnik']);

					$link=mysqli_connect("localhost","root","123","seminar2");

					/* Provjera spajanja */
					if(mysqli_connect_errno()){
					exit ('Baza ne postoji: '. mysqli_connect_error ()); 
					}

					$link2=mysqli_select_db($link,"rezerviraj");
					$link3=mysqli_query($link, "SET NAMES 'utf8'");
					$link4=mysqli_query($link, "SET CHARACTER_SET 'utf8'");
					
					if(isset($_SESSION['korisnik'] )){
						$upit="INSERT INTO seminar2.rezerviraj(korIme,muzej,vrijemePosjete,datumPosjete) VALUES ('$korisnickoIme','{$_POST['odabirMuzej']}', '{$_POST['odabirVrijeme']}', STR_TO_DATE('$datum', '%d/%m/%Y'))";
						$upit2=mysqli_query($link, $upit);
							if(isset($_POST['salji'])){
								echo '<div class="porukared row" >';
									echo '<div id="poruka">';
										echo "<h1>Registracija uspješna! Vraćamo vas natrag na rezervacije !</h1>";
									echo '</div>';
								echo '</div>';

								header( "refresh:3;url=rezerviraj.php" );
							}
							else{
								echo '<div class="porukared row" >';
									echo '<div id="poruka">';
										echo "<h1>Neuspješna registracija. Za nekoliko sekundi pokušajte opet!</h1>";
									echo '</div>';
								echo '</div>';
								header( "refresh:3;url=rezerviraj.php" );
							}
							
					}
					else{
						echo '<div class="porukared row" >';
							echo '<div id="poruka">';
								echo "<h1>Niste prijavljeni. Molimo prijavite se da biste mogli rezervirati!</h1>";
							echo '</div>';
						echo '</div>';
						//header( "refresh:3;url=regPri.html" );
					}
						
					mysqli_close($link);		
				}		
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
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
  
</body>
</html>