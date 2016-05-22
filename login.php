<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" type="text/css" href="stil.css">
<link href='https://fonts.googleapis.com/css?family=Open+Sans%7CStalemate' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans%7CStalemate%7CSatisfy' rel='stylesheet' type='text/css'>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Prodaja nakita</title>
	
</head>
<body>
<?php
			session_start();
			$username = "";
	
			$podaci=fgets(fopen("Admin.txt","r"));
			$_log=explode(" ",$podaci);
		    if (isset($_SESSION['username']))
		        $username = $_SESSION['username'];
				
		    else if (isset($_REQUEST['username'])) 
		    {	
		        if ($_REQUEST['username'] == $_log[0] && md5($_REQUEST['password']) == $_log[1]) 
		        {
		            $username = $_REQUEST['username'];
		            $_SESSION['username'] = $username;
				
							
		            print "Uspjesno ste se ulogovali kao admin!";
						 header("Location: login.php");
		        }
		        else
		            print "Greška!";
				
		    }
		?>
	
  <header>
  

<h1>           Nakit Sarajevo</h1>

 
</header>

	
	
	<?php
	if(isset($_SESSION['username'])){
	print "<nav> 
		<ul>
		<li><a href='index.php'>Početna</a></li>
		<li><a href='KreiranjeNovosti.php'>KreiranjeNovosti</a></li>
	    <li><a href='Logout.php'>Logout</a></li>
	   </ul>
	   </nav>";
	}
	else {
print "<nav> 
		<ul>
		<li><a href='index.php'>Početna</a></li>
		
	    <li><a href='Login.php'>Login</a></li>
	   </ul>
	</nav>";
	}
	?>
  


<div id="login">

  				<form action="login.php" class="login" method="post" id="loginForm">
 					<div class="LoginInput">
 						<div class="legend">Molimo unesite Vaše login podatke:</div>
						<br><label>Username</label>
						<input type="text" id="username" name="username" placeholder="Username" required>
						<label>Password</label>
						<input type="password" id="password" name="password" placeholder="Password" required />
					</div>
 					
					<input type="submit" name="loginSubmit" value="OK" class="LoginSubmit">

				</form> 
</div>


  
  <footer id="loginfooter">
<p>Copyright &copy; Web tehnologije/Irma Solaković 2015/2016.</p>
  </footer>
<script type="text/javascript" src="novosti.js"></script>
<script type="text/javascript" src="novosti1.js"></script>
</body>



</html>