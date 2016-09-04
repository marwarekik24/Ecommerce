

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


<head>

<title>Mode De Reve</title>
 <script language="javascript" type="text/javascript">
       function printDiv() 
{

  var divToPrint=document.getElementById('DivIdToPrint');

  var newWin=window.open('','Print-Window','width=100,height=100');

  newWin.document.open();

  newWin.document.write('<html><body onload="window.print()">'+divToPrint.innerHTML+'</body></html>');

  newWin.document.close();

  setTimeout(function(){newWin.close();},10);

}
          
        
    </script><script type="text/javascript">
/*--This JavaScript method for Print command--*/
    function PrintDoc() {
        var toPrint = document.getElementById('printarea');
        var popupWin = window.open('', '_blank', 'width=350,height=150,location=no,left=200px');
        popupWin.document.open();
        popupWin.document.write('<html><title>::Preview::</title><link rel="stylesheet" type="text/css" href="print.css" /></head><body onload="window.print()">')
        popupWin.document.write(toPrint.innerHTML);
        popupWin.document.write('</html>');
        popupWin.document.close();
    }
/*--This JavaScript method for Print Preview command--*/
    function PrintPreview() {
        var toPrint = document.getElementById('printarea');
        var popupWin = window.open('', '_blank', 'width=350,height=150,location=no,left=200px');
        popupWin.document.open();
        popupWin.document.write('<html><title>::Print Preview::</title><link rel="stylesheet" type="text/css" href="Print.css" media="screen"/></head><body">')
        popupWin.document.write(toPrint.innerHTML);
        popupWin.document.write('</html>');
        popupWin.document.close();
    }
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script> 
<script src="js/jquery.openCarousel.js" type="text/javascript"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
<link href="css/easy-responsive-tabs.css" rel="stylesheet" type="text/css" media="all"/>



</script>

<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.3&appId=1606009972966689";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
 <script type="text/javascript">
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion           
            width: 'auto', //auto or any width like 600px
            fit: true   // 100% fit in a container
        });
    });
   </script>		
<link rel="stylesheet" href="css/etalage.css">
<script src="js/jquery.etalage.min.js"></script>
<script>
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 300,
					thumb_image_height: 400,
					source_image_width: 900,
					source_image_height: 1200,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});

			});
		</script>
	  <script src="js/star-rating.js" type="text/javascript"></script>
</head>
<body>

	<div class="header">
  	  		<div class="wrap">
				<div class="header_top">
					<div class="logo">
						<a href="index.php"><img src="images/logoo.png" width="300px" height ="90px" /></a>
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
   		    </div>
          </div>
       <!------------End Header ------------>
   <div class="main">
   	 <div class="wrap">
   	 	<div class="preview-page">
   	 	       <div class="section group">
				<div class="cont-desc span_1_of_2">
					<ul class="back-links">
						<li><a href="index.php">Accueil</a> ::</li>
						
						<div class="clear"> </div>
					</ul>
				  <div class="product-details" id="printarea">	
				  
				  <?php 
				  
				  $cnx = mysql_connect( "localhost", "root", "" ) ;

$db  = mysql_select_db( "reve" ) ;
 
$sql = "SELECT * FROM produits where id={$_GET["id"]}"; 
$rs_result = mysql_query ($sql, $cnx);
while ($ligne = mysql_fetch_assoc($rs_result)) { 

$id=$ligne['id'];
$image=$ligne['image'];
$prix=$ligne['prix'];
$description=$ligne['description'];
?>
					<div  class="grid images_3_of_2">
							<ul id="etalage">
							<li>
								<a>
								  <?php echo '<img  class="etalage_source_image" src="files/'.$ligne['image'].'" width="150px" height="150px">'; ?>
									
								</a>
							</li>
							
						</ul>
				     </div>
				   <div  class="desc span_3_of_2">
					<h2>Description </h2>
					<p> 
			<strong> <?php
			 echo $ligne['description'] ;?> </strong></p>					
					<div  class="price">
						<p> Prix: <span>
			<?php
			
			 echo $ligne['prix'];?></span></p>
					</div>
<?php }?>
				 <div class="colors-share">
				 	<div class="color-types">
				 		<h4>Imprimer la photo</h4>
						
				 		 <input type="button" value="Print" class="btn" onclick="PrintDoc()"/>
						  <input type="button" value="Print Preview" class="btn" onclick="PrintPreview()"/>
				 	</div>
				 	<div class="social-share">
				 		<h4>Partager </h4>
				 			  <ul>
							  
							<?php  function getUrl() {
    $url  = isset( $_SERVER['HTTPS'] ) && 'on' === $_SERVER['HTTPS'] ? 'https' : 'http';
    $url .= '://' . $_SERVER['SERVER_NAME'];
    $url .= in_array( $_SERVER['SERVER_PORT'], array('80', '443') ) ? '' : ':' . $_SERVER['SERVER_PORT'];
    $url .= $_SERVER['REQUEST_URI'];
    return $url;
}
 
// Print Share link on Page
$encoded_url = urlencode( getUrl() );
if ( !empty($encoded_url) ){ ?>
<li> <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $encoded_url; ?>" class="share-face" target="_blank"> 
 
</a> </li>

<li> <a href="https://www.twitter.com/sharer/sharer.php?u=<?php echo $encoded_url; ?>" class="share-twitter" target="_blank"> 
 
</a> </li>

<?php } ?>

									<div class="clear"> </div>
						    </ul>
				 	</div>
				 	<div class="clear"></div>
				 </div>
			</div>
			<div class="clear"></div>
		  </div>
      </div>
				   <div class="rightsidebar span_3_of_1 sidebar">
					<h3>Page Facebook</h3>
					<ul class="popular-products">
						<li>
							  
							<div class="fb-like" data-href="https://www.facebook.com/pages/Mode-De-R%C3%AAve/1007204172654284?fref=ts" data-width="50" data-layout="box_count" data-action="like" data-show-faces="true" data-share="true"></div>					 
						</li>
						
						
				     </ul>
				    
 		 		   </div>
 		 		</div>
   	 		</div>
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

