

<?php 
function getGenre(){
	
	$con= mysqli_connect("localhost","root","","reve");
	$get_genre= "select * from genre";
	
	$run_genr= mysqli_query ($con, $get_genre) ;
	
	while ($row_genres=mysqli_fetch_array($run_genr))
	
	{
		$id=$row_genres['id'];
		$titre=$row_genres['titre'];
		
		echo "<li><a href='index.php?genre=$id'>$titre</a></li>";
		
		
	}
}
?>

<?php

 $cnx = mysql_connect( "localhost", "root", "" ) ;

 $db  = mysql_select_db( "reve" ) ;

if (isset($_POST['submit'])) {

    $nom = htmlspecialchars(trim($_POST['nom']));
    $mail = htmlspecialchars(trim($_POST['mail']));
    $sujet= htmlspecialchars(trim($_POST['sujet']));
    $msg =htmlspecialchars(trim( $_POST['msg']));

    $req = mysql_query("INSERT INTO contact (nom,mail,sujet,msg)VALUES('$nom','$mail','$sujet','$msg')") or die(mysql_error());
    echo "<p votre message est envoyé</p>";
	

}
?>

<head>
<title>Mode De Reve</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script> 
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
</head>
<body>
	<div class="header">
  	  		<div class="wrap">
				<div class="header_top">
					<div class="logo">
						<a href="index.php"><img src="images/logoo.png" width="300px" height ="90px" alt="" /></a>
					</div>
						<div class="header_top_right">
							 
					</div>
			     <div class="clear"></div>
  		    </div>     
  		   <div class="navigation">
  		    	<a class="toggleMenu" href="#">Menu</a>
					<ul class="nav">
						<li>
							<a href="index.php">Accueil</a>
						</li>
						
						<li>
							<a href="propos.php">a propos de nous</a>
						</li>
						<li  class="test">
							<?php getGenre(); ?>
							
						</li>
						
						<li>
							<a href="contact.php">Contact</a>
						</li>
					</ul>
					 <span class="left-ribbon"> </span> 
      				 <span class="right-ribbon"> </span>    
  		    </div>
 <div class="main">
 	<div class="wrap">
     <div class="preview-page">
     				<div class="contact_info">
					    	  <div class="map">
							  
							  <div>
							  
							  <iframe src="https://www.google.com/maps/embed?pb=!1m25!1m8!1m3!1d103775.96457261745!2d10.8651363!3d35.6277538!3m2!1i1024!2i768!4f13.1!4m14!1i0!3e6!4m5!1s0x1302104f2738ec87%3A0x102b8311d4368914!2sTouza%2C+Tunisie!3m2!1d35.629999999999995!2d10.83!4m5!1s0x1302104f2738ec87%3A0x102b8311d4368914!2z2LfZiNiy2KkgVG91emHigK0!3m2!1d35.629999999999995!2d10.83!5e0!3m2!1sfr!2sfr!4v1431255868698" width="1100" height="200" frameborder="0" style="border:0"></iframe>
		 					    	   </div>
      				</div>
				  <div class="contact-form">
				  	<h3>Contactez Nous</h3>
					    <form method="POST" action="contact.php">
					    	<div>
						    	<input name="nom" type="text" class="textbox textbox1" value="Nom..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name...';}" >
						    	<input name="mail" type="text" class="textbox" value="Email..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email...';}">
						    	<input name="sujet" type="text" class="textbox" value="Sujet..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject...';}">
						    	<div class="clear"></div>
						    </div>
						    <div>
						    	<span><textarea name="msg" value="Message:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message </textarea></span>
						    </div>
						   <div>
						   
						   		<input type="submit" value="Envoyer" name="submit" class="mybutton">
						   		<div class="clear"></div>
						  </div>
					    </form>
				  </div>
			  </div>		
         </div> 
    </div>
 </div>
   <div class="footer">
   	  <div class="wrap">	
			 <div class="copy_right">
				<p>Copy rights (c). All rights Reseverd | Mode De Reve  </p>
		   </div>	
		   <div class="footer-nav">
		   	<ul>
		   		<li><a href="#">Gerant Raouf Daldoul +33660287441</a> </li>
			<li><a>	Directeur Commercial Rahma Daldoul +21623946160 </a> </li>
<li> <a> Directeur Technique Mehdi Daldoul +21699862494 </a> </li>
				</li>
		   	</ul>
		   </div>		
        </div>
    </div>
    <script type="text/javascript">
		$(document).ready(function() {			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
    <a href="#" id="toTop"> </a>
         <script type="text/javascript" src="js/navigation.js"></script>
</body>
</html>

