<?php

if(isset($_POST['prijavi'])){

	//Varijable
	$prijavaKorIme=$_POST['username'];
	$prijavaPassword=$_POST['password'];
	
	$link=mysqli_connect('localhost','root','123','seminar2');
	$link2=mysqli_select_db($link,'regPri');
	$link3=mysqli_query($link, "SET NAMES 'utf8'");
	$link4=mysqli_query($link, "SET CHARACTER_SET 'utf8'");
	if(mysqli_connect_errno()){
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
	
	$provjeraupit="SELECT korIme FROM regPri WHERE korIme='$prijavaKorIme'";
	$zbroj=mysqli_query($link, $provjeraupit);
	$query = "SELECT lozinka FROM regPri WHERE korIme = '$prijavaKorIme';";
	$result=mysqli_query($link, $query);
	
	$broj=mysqli_num_rows($zbroj);
	$passwordFromPost = $prijavaPassword;	
	
	
	while($row=mysqli_fetch_array($zbroj)){
			$prijavaKor=$row['korIme'];
	}
	
	while($row=mysqli_fetch_array($result)){
			$hashKor=$row['lozinka'];
	}
	
	
	
	if($broj != 0){
		if((password_verify($passwordFromPost, $hashKor)) && ($prijavaKor==$prijavaKorIme) && ($prijavaKorIme==='admin')){
			echo '<div class="registracijaporuka row" >';
				echo '<div id="regPoruka">';
					echo "<h1>ADMINISTRATOR!</h1>";
				echo '</div>';
			echo '</div>';
			
			session_start();
			$_SESSION['admin'] = $prijavaKorIme;
			header( "refresh:3;url=index.php" );
		}
	
		else if((password_verify($passwordFromPost, $hashKor)) && ($prijavaKor==$prijavaKorIme)){
			echo '<div class="registracijaporuka row" >';
				echo '<div id="regPoruka">';
					echo "<h1>Čestitamo<br/>Uspješno ste se prijavili!<br/>Pustolovina kreće :)</h1>";
				echo '</div>';
			echo '</div>';
			
			session_start();
			$_SESSION['korisnik'] = $prijavaKorIme;
			header( "refresh:3;url=index.php" );
		}
		
		else{
			echo '<div class="registracijaporuka row" >';
				echo '<div id="regPoruka">';
					echo "<h1>Krivo korisničko ime ili lozinka!<br/>Pokušajte opet!</h1>";
				echo '</div>';
			echo '</div>';
			
			header( "refresh:3;url=regPri.html" );
		}
	}
	else{
		echo '<div class="registracijaporuka row" >';
			echo '<div id="regPoruka">';
				echo "<h1>Korisničko ime ne postoji :(<br/><br/>Registrirajte se!</h1>";
			echo '</div>';
		echo '</div>';
		
		header( "refresh:3;url=regPri.html" );
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