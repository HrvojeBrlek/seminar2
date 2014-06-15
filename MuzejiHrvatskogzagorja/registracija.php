<?php

if(isset($_POST['registriraj'])){
	
	function createSalt(){
		$text = md5(uniqid(rand(), true));
		return substr($text, 0, 3);
	}
	
	$salt = createSalt();
	
	
	function hashpass($string, $salt){
		$string= crypt($string, '$6$' . $salt . '$');
		return $string;
	}

	//Varijable
	$ime=$_POST['firstname'];
	$prezime=$_POST['surname'];
	$korIme=$_POST['username'];
	$password=$_POST['password'];
	$email=$_POST['mail'];
	$kontakt=$_POST['broj'];
	
	
	$link=mysqli_connect('localhost','root','123','seminar2');
	$link2=mysqli_select_db($link,'regPri');
	$link3=mysqli_query($link, "SET NAMES 'utf8'");
	$link4=mysqli_query($link, "SET CHARACTER_SET 'utf8'");
	if(mysqli_connect_errno()){
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
	
	$provjeraupit="SELECT korIme FROM regPri";
	$result=mysqli_query($link, $provjeraupit);
	
	while($row=mysqli_fetch_array($result)){
			$provjeraIme=$row['korIme'];
			}
	
	/* Hash-iranje password-a */
	
	$options = ['cost' => 11,];
	// Get the password from post
	$passwordFromPost = $password;

	$hash = password_hash($passwordFromPost, PASSWORD_BCRYPT, $options);
	
	
	
	
	if($korIme != $provjeraIme){
		$upit="INSERT INTO seminar2.regPri(ime,prezime,korIme,lozinka,email,kontakt)
				VALUES ('$ime', '$prezime', '$korIme', '$hash', '$email', '$kontakt')";
				if($upit2=mysqli_query($link, $upit)){
					echo '<div class="registracijaporuka row" >';
						echo '<div id="regPoruka">';
							echo "<h1>Čestitamo<br/>Uspješno ste se registrirali!<br/>Prijavite se i krećemo u pustolovinu :)</h1>";
						echo '</div>';
					echo '</div>';
					header( "refresh:3;url=regPri.html" );
				}
				else{
					echo '<div class="registracijaporuka row" >';
						echo '<div id="regPoruka">';
							echo "<h1>Prilikom registracije došlo je do pogreške. Molimo pokušajte opet!</h1>";
						echo '</div>';
					echo '</div>';
					header( "refresh:3;url=regPri.html" );
				}
	}
	else{
		echo '<div class="registracijaporuka row" >';
			echo '<div id="regPoruka">';
				echo "<h1>Korisničko ime već postoji! :( Odaberite novo korisničko ime</h1>";
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
<body>
  
</body>
</html>