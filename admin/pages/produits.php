
 <?php
include('connexion.php');

if (isset($_POST['submit'])) {
	
    $idC = $_POST['idC'];
	$idG= $_POST['idG'];
	
	$nom= $_POST['nom'];
	$prix = $_POST['prix'];
	$description= $_POST['description'];
	$image = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
   
 move_uploaded_file($tmp_name,"files/".$image);
 
    $req = "INSERT INTO produits(idC,idG,nom,description,prix,image) VALUES
	('$idC','$idG','$nom','$description','$prix','$image')";
	
    $res = mysql_query($req);
    if ($res) {
        echo "insertion valide";
    } else {
        echo "insertion non valide ".  mysql_error();
    }
}
$requete = "SELECT * FROM produits";
$rel = mysql_query($requete) or die("requete d'affichage invalide");
?>
<?php
include ('connexion.php');
$cat = " SELECT * FROM categorie";
$categorie = mysql_query($cat) or die("requete 
d'affichage invalide");
?>
 <?php
include('connexion.php');

$requet = "SELECT * FROM genre";
$genr = mysql_query($requet) or die("requete d'affichage invalide");
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
<script>tinymce.init({selector:'textarea'});</script>
    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
         <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
               
                <a class="navbar-brand" href="index.html">Mode de reve</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-top-links navbar-right">
               
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        
                        
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Accueil</a>
							
                        </li>
                        <li>
                            <a href="categorie.php"><i class="fa fa-table fa-fw"></i> Categories</a>
                        </li>
						 <li>
                            <a href="produits.php"><i class="fa fa-table fa-fw"></i> Vetements</a>
                        </li>
                        <li>
                            <a href="contact.php"><i class="fa fa-table fa-fw"></i> Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Vetements</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
					 <div class="form-group" >
					 
					 <form method="POST" action="produits.php" enctype="multipart/form-data">
                                            <label>Ajouter vetement </label>
											
											<br>
											 <div class="form-group">
                                            <label>Categorie </label>
                                            <select required class="form-control" name="idC">
													 <option>Choisir une categorie </option>												
 <?php
            while ($row = mysql_fetch_array($categorie)) { //parcourir automatique
                $id = $row['id']; 
				$titre= $row['titre']; 
				echo "<option value='$id'>$titre</option>";
				?>         						
			<?php } ?>
			  </option>
							  </select>
							  </div>
                                       <div class="form-group">
                                            <label>Genre </label>
                                            <select  class="form-control" name="idG">
													 <option>	Choisir un genre </option>												
 <?php
            while ($row = mysql_fetch_array($genr)) { //parcourir automatique
                $id = $row['id']; 
				$titre= $row['titre']; 
				echo "<option value='$id'>$titre</option>";
				?>         						
			<?php } ?>
			  </option>
							  </select>
					
                                        </div>
                                          Nom  <input type="text" class="form-control" name="nom" required>
										  Description  <textarea type="text" class="form-control" name="description"> </textarea>
										  Prix  <input type="text" class="form-control" name="prix" required>
										  <div class="form-group">
                                            Image
                                            <input type="file" name="image"/>
                                        </div>
										  
											<button type="submit" name ="submit">OK</button>
                                           </form>
										   
										                           </div>
										
                    <div class="panel panel-default">
                        <div class="panel-heading">
                         
                        </div>
                        <!-- /.panel-heading -->
						
                        <div class="panel-body">
						
                            <div class="dataTable_wrapper">
							
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            
											 <th> Categorie</th>
                                            <th> genre </th>
											<th>Nom </th>
											<th> Prix </th>
											<th> Description </th>
											<th> Image </th>
											<th> Mise a jour</th>
											
                                        </tr>
                                    </thead>
                                    <tbody>
									
 <?php
            while ($row = mysql_fetch_array($rel)) { //parcourir automatique
                $id = $row['id']; 
				$idC= $row['idC'];
                $idG= $row['idG']; 				
				
				$nom= $row['nom']; 
				$prix= $row['prix']; 
				$description= $row['description']; 
				$image= $row['image']; 
				?>        
                                        <tr class="odd gradeX">
										
                                            <td> <?php echo $row['idC']; ?>   </td>
											<td> <?php echo $row['idG']; ?>  </td>
											<td> <?php echo $row['nom']; ?> </td>
											<td><?php echo $row['prix']; ?> </td>
											<td> <?php echo $row['description']; ?>  </td>
											
										<td>	<?php echo '<img src="files/'.$row['image'].'" width="100px" height="100px">'; ?></td>
	<td><a href="<?php echo 'modifier_p.php?id='.$id ?>"> Modifier</a>
	<a href="<?php echo 'supp_p.php?id='.$id ?>">Supprimer</a></td>
                                        </tr>
						
			<?php } ?>
                                    </tbody>
                                </table>
	
       
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>

</body>

</html>
