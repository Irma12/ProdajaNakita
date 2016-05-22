<!DOCTYPE HTML>


<html>
<head>
<link rel="stylesheet" type="text/css" href="stil.css">
<link href='https://fonts.googleapis.com/css?family=Open+Sans%7CStalemate' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans%7CStalemate%7CSatisfy' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="sortnovosti.js"></script>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Prodaja nakita</title>
	
</head>
<body onload="Racunaj();">
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
	    <li><a href='Logout.php'>Logout</a></li>
	   </ul>
	   </nav>";
	}
		
		else{
			print "<nav> 
		<ul>
		<li><a href='index.php'>Početna</a></li>
	    <li><a href='login.php'>Login</a></li>
	   </ul>
	   </nav>";
		}
    ?>


	
 

	<main>
		<div class="Novosti">
			<ul class="NovostiLista" method="get">
				<li class="Filter" onclick="OdabirNovosti(0);">Sve novosti</li>
				<li class="Filter" onclick="OdabirNovosti(1);">Današnje novosti</li>
				<li class="Filter" onclick="OdabirNovosti(2);">Novosti ove sedmice</li>
				<li class="Filter" onclick="OdabirNovosti(3);">Novosti ovog mjeseca</li>
				<li class="Filter" name="Nesto" onclick="Redirect1();">Novosti po abecedi</li>
				<li class="Filter" name="Nesto" onclick="Redirect2();">Novosti po vremenu objave</li>
			</ul>
		</div>
			<?php
				$sveNovosti=explode("**",file_get_contents("Novosti.csv"));
				$brojnovosti=count($sveNovosti);
				$brojnovosti=$brojnovosti-2;
				if(isset($_REQUEST['sort']) && $_REQUEST['sort']=="abc"){
					rsort($sveNovosti);
					for($i=$brojnovosti;$i>=0;$i--){
						$novost=explode(",",$sveNovosti[$i]);
							print '<sector id="NovostSector">';
							print '<h3>'.$novost[0].'</h3>';
							print '<p>'.$novost[1].'</p>';
							
							print '<p class="vrijemeObjave">'.$novost[2].'</p>';
							print '</sector>';
					}
				}
				else if(isset($_REQUEST['sort']) && $_REQUEST['sort']=="vrijeme"){
					for($i=$brojnovosti;$i>=0;$i--){
						$novost=explode(",",$sveNovosti[$i]);
							print '<sector id="NovostSector">';
							print '<h3>'.$novost[0].'</h3>';
							print '<p>'.$novost[1].'</p>';
							
							print '<p class="vrijemeObjave">'.$novost[2].'</p>';
							print '</sector>';
					}
				}
				else{
					for($i=$brojnovosti;$i>=0;$i--){
						$novost=explode(",",$sveNovosti[$i]);
							print '<sector id="NovostSector">';
							print '<h3>'.$novost[0].'</h3>';
							print '<p>'.$novost[1].'</p>';
						
							print '<p class="vrijemeObjave">'.$novost[2].'</p>';
							print '</sector>';
					}
				}
			?>
	</main>
	  
  <footer>
<p>Copyright &copy; Web tehnologije/Irma Solaković 2015/2016.</p>
  </footer>
</body>
</html>