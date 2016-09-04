
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

function getCat(){
	
	
$con= mysqli_connect("localhost","root","","reve");

	$get_cats= "select * from categorie";
	
	$run_cats= mysqli_query ($con, $get_cats) ;
	
	while ($row_cats=mysqli_fetch_array($run_cats))
	
	{
		$id=$row_cats['id'];
		$titre=$row_cats['titre'];
		
		echo "<li><a href='index.php?cat=$id'> $titre</a></li>";
	}
}
?>
<?php

function getGenrePro(){
	
	if(isset($_GET['genre']))
	{
		
    $idG=$_GET['genre'];
		
	$con= mysqli_connect("localhost","root","","reve");
		
	$get_cat_pro= "select * from produits where idG='$idG'";
	
	$run_cat_pro= mysqli_query ($con, $get_cat_pro) ;
	
	while ($row_cat_produits=mysqli_fetch_array($run_cat_pro))
	
	{
		$id=$row_cat_produits['id'];
		$idC=$row_cat_produits['idC'];
		$idG=$row_cat_produits['idG'];
		$nom=$row_cat_produits['nom'];
		$prix=$row_cat_produits['prix'];
		$image=$row_cat_produits['image'];
		$description=$row_cat_produits['description'];
		
			echo "<div class='grid_1_of_4 images_1_of_4'>
					 <h4>$nom</h4>
					  
					  <img width ='350px' height='200px' src='files/$image' name='image'/>
					
					  </a>
					  <div class='price-details'>
				       <div class='price-number'>
							<p><span class='rupees'></span></p>
					    </div>
					       		<div class='add-cart'>								
									
 <h4> <a href='preview.php?id=$id'> afficher les details</a></h4>
							     </div>
							 <div class='clear'></div>
					</div>					 
				</div>";
	
}
	
}

}
?>
<?php

function getCatPro(){
	
	if(isset($_GET['cat']))
	{
		
    $idC=$_GET['cat'];
		
	$con= mysqli_connect("localhost","root","","reve");
		
	$get_cat_pro= "select * from produits where idC='$idC'";
	
	$run_cat_pro= mysqli_query ($con, $get_cat_pro) ;
	
	while ($row_cat_produits=mysqli_fetch_array($run_cat_pro))
	
	{
		$id=$row_cat_produits['id'];
		$idC=$row_cat_produits['idC'];
		$idG=$row_cat_produits['idG'];
		$nom=$row_cat_produits['nom'];
		$prix=$row_cat_produits['prix'];
		$image=$row_cat_produits['image'];
		$description=$row_cat_produits['description'];
		
			echo "<div class='grid_1_of_4 images_1_of_4'>
			
					 <h4> $nom </h4>
					  
					  <img width ='350px' height='200px' src='files/$image' name='image'/>
					
					  <div class='price-details'>
				       <div class='price-number'>
							<p><span class='rupees'></span></p>
					    </div>
					       		<div class='add-cart'>								
									<h4> <a href='preview.php?id=$id'> afficher les details</a>	</h4>
							     </div>
							 <div class='clear'></div>
					</div>					 
				</div>";
	
}
	
}

}
?>

<?php 
function getProduits()

{
	if(!isset($_GET['cat']))
	{
		if(!isset($_GET['genre'])){
		
	$con= mysqli_connect("localhost","root","","reve");
	
	$get_cat_pro= "select * from produits ";
	
	$run_cat_pro= mysqli_query ($con, $get_cat_pro) ;
	
	while ($row_cat_produits=mysqli_fetch_array($run_cat_pro))
	
	{
		
		$id=$row_cat_produits['id'];
		$idC=$row_cat_produits['idC'];
		$idG=$row_cat_produits['idG'];
		$nom=$row_cat_produits['nom'];
		$prix=$row_cat_produits['prix'];
		$image=$row_cat_produits['image'];
		$description=$row_cat_produits['description'];
		
		echo "<div class='grid_1_of_4 images_1_of_4'>
					 <h4>$nom</h4>
					  
					  <img width ='350px' height='200px' src='files/$image' name='image'/>
					
					  <div class='price-details'>
				       <div class='price-number'>
							<p><span class='rupees'></span></p>
					    </div>
					       		<div class='add-cart'>		
 <h4> <a href='preview.php?id=$id'> afficher les details</a></h4>							
									
							     </div>
							 <div class='clear'></div>
					</div>					 
				</div>";
	
}
	}

}
}
?>


<head>
<title>Mode De Reve</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<meta name="google-translate-customization" content="f5645751bb4b950-d577623cfff5ee32-g94c23515a623e90f-22"></meta>
<link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script> 
<script src="js/jquery.openCarousel.js" type="text/javascript"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
</head>
<body>
	<div class="header">
  	  		<div class="wrap">
				<div class="header_top">
					<div class="logo">
						<a href="index.php">
						
						<img src="images/logoo.PNG" width="300px" height ="90px" alt="" /></a>
					</div>
						<div class="header_top_right">


							  <div class="search_box">
							  	<span>Recherche</span>
								
					     		<form action="search.php" method="GET">

					     			 <input type="text" name="query" />
                                     <input type="submit" value="Search" />
					     		</form>
								
								<div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, multilanguagePage: true}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
					     		<div class="clear"></div>
					     	</div>
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
  		     
   		</div>
   </div>
            
   <!------------End Header ------------>
  <div class="main">
      <div class="content">
    	        <div class="content_top">
    	        	<div class="wrap">
		          	   <h3></h3>
		          	</div>
		          	<div class="line"> </div>
		          	<div class="wrap">
		          	 <div class="ocarousel_slider">  
	      				<div class="ocarousel example_photos" data-ocarousel-perscroll="3">
			                <div class="ocarousel_window">
			                   <a href="#" title="img1"> <img src="images/4.jpg" width="100" height="100"/></a>
			                   <a href="#" title="img2"> <img src="images/6.jpg"  width="100" height="100" /></a>
							    <a href="#" title="img1"> <img src="images/4.jpg" width="100" height="100"/></a>
			                   <a href="#" title="img2"> <img src="images/6.jpg"  width="100" height="100" /></a>
							    <a href="#" title="img1"> <img src="images/4.jpg" width="100" height="100"/></a>
			                   <a href="#" title="img2"> <img src="images/6.jpg"  width="100" height="100" /></a>
							    <a href="#" title="img1"> <img src="images/4.jpg" width="100" height="100"/></a>
			                   <a href="#" title="img2"> <img src="images/6.jpg"  width="100" height="100" /></a>
			                </div>
			               <span>           
			                <a href="#" data-ocarousel-link="left" style="float: left;" class="prev"> </a>
			                <a href="#" data-ocarousel-link="right" style="float: right;" class="next"> </a>
			               </span>
					   </div>
				     </div>  
				   </div>    		
    	       </div>
    	  <div class="content_bottom">
    	    <div class="wrap">
    	    	<div class="content-bottom-left">
    	    		<div class="categories">
						   <ul>
						  	   <h3>Femmes</h3>
							      <li><a href="#"><?php getCat(); ?></a></li>
							     
						  	 </ul>
						</div>		
						<div class="categories">
						   <ul>
						  	   <h3>Hommes</h3>
							      <li><a href="#"><?php getCat(); ?></a></li>
							     
						  	 </ul>
						</div>
<div class="categories">
						   <ul>
						  	   <h3>Filles </h3>
							      <li><a href="#"><?php getCat(); ?></a></li>
							     
						  	 </ul>
						</div>
<div class="categories">
						   <ul>
						  	   <h3>Garcons</h3>
							      <li><a href="#"><?php getCat(); ?></a></li>
							     
						  	 </ul>
						</div>						
    	    	</div>
    	    	<div class="content-bottom-right">
    	    	<h3>Vetements</h3>
	            <div class="section group">
				
				<?php 
				getProduits(); ?>
			<?php	getCatPro(); ?>
			
			<?php getGenrePro();?>
			   </div>
			  
			    <div class="product-articles">
			      
			     
			    </div>
		      </div>
		      <div class="clear"></div>
		   </div>
         </div>
      </div>
    </div>
   <div class="footer">
   	  <div class="wrap">	
			 <div class="copy_right">
				<p>Copy rights (c). All rights Reseverd | Mode De Reve </p>
		   </div>	
		   <div class="footer-nav">
		   
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

