<?php
if(isset($_SESSION['admin'])){
if(isset($_POST['brisiKorisnika'])){

	//Varijable
	$brisiKorIme=$_POST['username'];
	$brisiIme=$_POST['firstname'];
	$brisiPrezime=$_POST['surname'];
	
	$link=mysqli_connect('localhost','root','123','seminar2');
	$link2=mysqli_select_db($link,'regPri');
	$link3=mysqli_query($link, "SET NAMES utf8");
	if(mysqli_connect_errno()){
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
	
	$query2="SELECT korIme FROM regPri WHERE korIme = '$brisiKorIme' AND ime = '$brisiIme' AND prezime = '$brisiPrezime'";
	$result2=mysqli_query($link, $query2);
	
	$broj=mysqli_num_rows($result2);
	
	if($broj != 0){
		$query="DELETE FROM regPri WHERE ime='$brisiIme' AND prezime='$brisiPrezime' AND korIme='$brisiKorIme'";
		$result=mysqli_query($link, $query);
		echo '<div class="porukared row" >';
			echo '<div id="poruka">';
				echo "<h1>Korisnik uspješno obrisan!</h1>";
			echo '</div>';
		echo '</div>';
		
		header( "refresh:3;url=upravljanjeKorisnicima.php" );
	
	}
	else{
		echo '<div class="porukared row" >';
			echo '<div id="poruka">';
				echo "<h1>Korisnik ne postoji ili je obrisan!</h1>";
			echo '</div>';
		echo '</div>';
		header( "refresh:3;url=upravljanjeKorisnicima.php" );
	}
	
	mysqli_close($link);
	
}
}
else{
	echo '<div class="porukared row" >';
		echo '<div id="poruka">';
			echo "<h1>Neovlašteni korisnik!</h1>";
		echo '</div>';
	echo '</div>';
	header( "refresh:3;url=index.php" );
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


</head>
<body>
   
</body>
</html>