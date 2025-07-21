<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
 <?php include("carac.php"); ?> 
   <body>	  		
<?php include("en_tete.php"); ?> 
<?php include("menu_vertical.php"); ?> 

<Div id="corps">
</br>
<?PHP
    // On se connecte à MySQL
	
	     $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
	$bdd = new PDO('mysql:host=dxvv.myd.infomaniak.com;dbname=dxvv_4foulees', 'dxvv_christopheJ', 'er3z4aet1234', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

    // On récupère tout le contenu de la table 
	
    $reponse = $bdd->query('SELECT * FROM inscriptions ORDER BY Nom ASC');
    ?>
	<center>
	
	 <table> 
		<th width="5%"> N°</th>
		<th width="15%"> Nom</th>
		<th width="15%"> Prénom</th>
		<th width="5%"> Date</th>
		<th width="15%"> Localité</th>
		<th width="5%"> Sexe</th>
		<th width="15%"> Club</th>
		<th width="25%"> Etapes</th>
	
	 <?php
	 $c=0;
    // On affiche chaque entrée une à une
    while ($donnees = $reponse->fetch())
    {
	$c=$c+1;
	IF  (($donnees['Sexe'] =="H") or ($donnees['Sexe'] =="Homme")) {
	 ?>
	    
		<tr>
			<td  style="background-color: #80FFFF;" width="5%" >  <?php echo $c; ?></td>
			<td  style="background-color: #80FFFF;"width="15%"> <?php echo $donnees['Nom']; ?></td>
			<td style="background-color: #80FFFF;"width="15%"> <?php echo $donnees['Prenom']; ?>  </td>
			<td style="background-color: #80FFFF;"width="5%"> <?php echo $donnees['Annee']; ?></td>
			<td style="background-color: #80FFFF;"width="15%"><?php echo $donnees['Localite']; ?> </td>
			<td style="background-color: #80FFFF;"width="5%">H </td>
			<td style="background-color: #80FFFF;"width="15%"><?php echo $donnees['Club']; ?> </td>
					<td style="background-color: #80FFFF;"width="15%"><?php echo $donnees['Adulte']; ?> </td>
		</tr>
   <?php
   }
else
{
?>
		<tr>
			<td  style="background-color: #FFD0D0;" width="5%" >  <?php echo $c; ?></td>
			<td  style="background-color: #FFD0D0;"width="15%"> <?php echo $donnees['Nom']; ?></td>
			<td style="background-color: #FFD0D0;"width="15%"> <?php echo $donnees['Prenom']; ?>  </td>
			<td style="background-color: #FFD0D0;"width="5%"> <?php echo $donnees['Annee']; ?></td>
			<td style="background-color: #FFD0D0;"width="15%"><?php echo $donnees['Localite']; ?> </td>
			<td style="background-color: #FFD0D0;"width="5%">D </td>
			<td style="background-color: #FFD0D0;"width="15%"><?php echo $donnees['Club']; ?> </td>
				<td style="background-color: #FFD0D0;"width="15%"><?php echo $donnees['Adulte']; ?> </td>
		</tr>

  <?php
}
   
}
    $reponse->closeCursor(); // Termine le traitement de la requête


?>

</table>
 </center>
 </div>



 </body>

</html>


 



