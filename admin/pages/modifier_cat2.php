
<html xmlns="http://www.w3.org/1999/xhtml" dir="rtl" lang="ar" xml:lang="ar">
<html lang="ar" dir="rtl">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<?php

$cnx = mysql_connect( "localhost", "root", "" ) ;
 
  //sélection de la base de données:
  $db  = mysql_select_db( "reve" ) ;
  if (isset($_POST['submit'])) {
  $id  = $_POST["id"] ;
  //récupération des valeurs des champs:
  
  $titre= $_POST["titre"] ;

$sql = "UPDATE categorie
            SET titre= '$titre'
           WHERE id = ".$id;
mysql_select_db('reve');
$retval = mysql_query( $sql, $cnx );
if(! $retval )
{
  die('Could not update data: ' . mysql_error());
}
echo "Updated data successfully\n";
mysql_close($conn);
  }
?>
