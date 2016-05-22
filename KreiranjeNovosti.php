<!DOCTYPE HTML>


<html>
<head>
<link rel="stylesheet" type="text/css" href="dodavanjenovosti.css">
<link href='https://fonts.googleapis.com/css?family=Open+Sans%7CStalemate' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans%7CStalemate%7CSatisfy' rel='stylesheet' type='text/css'>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Prodaja nakita</title>
	
</head>
<body>


<header>
  

<h1>           Nakit Sarajevo</h1>

 
</header>

<?php
	session_start();
		if (isset($_SESSION['username'])) {
	       print "<nav> 
		<ul>
		<li><a href='index.php'>Početna</a></li>
		<li><a href='KreiranjeNovosti.php'>KreiranjeNovosti</a></li>
		<li><a href='prikaz.php'>Prikaz Novosti</a></li>
	    <li><a href='Logout.php'>Logout</a></li>
	   </ul>
	   </nav>";
	}
		
		else{
			header("Location: index.php");
		}
    ?>


   
 <main>
<h2> Kreiranje novosti</h2>

 <form id="novostiForm" method="get" onsubmit="return ValidirajFormu(this);" action="KreiranjeNovosti.php" >
			  Naslov novosti:<br>
			  <input id="Naslov" type="text" name="Naslov" placeholder="Naslov" oninput="ValidacijaInputa(this);"><br>	  
			  Tekst novosti:<br>
			  <textarea id="TxtNovosti" class="TextNovosti" name="TextNovosti" placeholder="Tekst novosti" oninput="ValidacijaInputa(this);"></textarea><br>
			  Dvoslovni kod države autora:<br>
			  <input id="dkd" type="text" name="DvoslovniKod" placeholder="npr. ba" oninput="provjeriDvoslovniKod(this);"><br>
			  Telefonski broj autora:<br>
			  <input id="tbroj" type="text" name="TelefonskiBroj" placeholder="npr. +38761222222" oninput="provjeriBroj(this);"><br>
			
			 <input id="Dugme" class="Dugme" type="submit" name="SpasiNovost" value ="Spasi novost"+>
		<br></form> 
	

 </main>
 <?php
 if (isset($_REQUEST['SpasiNovost']) && $_REQUEST['SpasiNovost'] == 'Spasi novost') {
            $novosti = file("Novosti.csv");
		
            $TekstNovosti=str_replace(',','#',$_REQUEST['TextNovosti']);
            $tekst=str_replace('\n', '%%',$TekstNovosti);
            $datum=date("Y-m-d")."T".date("H:i:s");
            $nov = $_REQUEST['Naslov'].",".$tekst.",".$datum.",".$_REQUEST['DvoslovniKod'].",".$_REQUEST['TelefonskiBroj']."**";
            array_push($novosti, $nov);
            file_put_contents("Novosti.csv", $novosti);
			   
        }
        
    ?>
 <footer>
<p>Copyright &copy; Web tehnologije/Irma Solaković 2015/2016.</p>
  </footer>
<script type="text/javascript" src="validacija.js"></script>
<script type="text/javascript" src="provjerakoda.js"></script>

</body>



</html>
