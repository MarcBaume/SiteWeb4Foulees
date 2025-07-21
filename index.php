<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Import Leaflet CSS Style Sheet -->
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css" />
<!-- Import Leaflet JS Library -->
<script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet.js"></script>
<script src="/js/prototype.js" ></script>
<script src="/js/FonctionDefiChrono2.js?version = 1.0.0"></script>
<?php include("carac.php"); ?> 
   <body>	
<?php include("menu_vertical.php"); ?> 
<Div id="corps">
<fieldset>

<!--
<span class="dot"  id="<?php echo "RowRace6".$IdRace ?>">
	<a style="cursor: pointer;"  href="https://defichrono.ch/Photos.php?Etape=0&NbrEtape=4&DateCourse=2024-08-21&NomCourse=4+Foul%C3%A9es">
						<table>
							<tr   >
								<td style="width:30px">
								
										<i class="fa fa-camera" style= "font-size: 35px;margin:2px;"></i>
								
								
								</td>
								<td style="padding-left: 10px;">
									Photos 2024
								</td>
							</tr>
							<script>
								getURL( "Photos","<?php echo "RowRace6".$IdRace ?>" ) ;
							</script>		
						</table>
</a>
					</span>
<p> Merci pour votre participation et nos généreux sponsors </p>
<center>
<img src="images/sponsors.png" width="700">
</center>-->

<b  style= cursor:pointer;>     

 <!--
 <a style= "padding: 10px;" href="courses/4 Foulées2024/info/Programme.pdf" target="_blank">Programme , Cliquer ici</a>
-->
	</b></br></br>
	<table style="width:100%">
			<tr>
				<td style="text-align: center">
					<a style= "padding: 10px;margin:auto;" href="https://juradefichrono.ch/formulaire2023.php?NbrEtape=4&DateCourse=2025-08-20&Etape=1&NomCourse=4+Foul%C3%A9es&ID=142
			" target="_blank"><img src="images/logo inscription 4f.png" alt="Inscription ici" style="margin:auto;"></img></a>
				</td>
			</tr>
		<tr>
			<td style="text-align: center">
				<img style= "padding: 10px; margin: auto;width: 85%;" src="images/vignette 4f 4 mercredi.png" ></img>
			</td>
		</tr>
		<tr>
		<tr>
			<td style="text-align: center">
				<img style= "padding: 10px; margin: auto;width: 85%;" src="images/vignette 4f enfants.png" ></img>
			</td>
		</tr>
				<tr>
			<td style="text-align: center">
				<img style= "padding: 10px; margin: auto;width: 85%;" src="images/vignette 4f parcours.png" ></img>
			</td>
		</tr>
				<tr>
			<td style="text-align: center" >
				<img style= "padding: 10px; margin: auto;width: 85%;" src="images/vignette 4f ambiance.png" ></img>
			</td>
		</tr>
		<tr>
			<td style="text-align: center" >
				<img style= "padding: 10px; margin: auto;" src="images/Etape1 4F Vignette.png" ></img>
			</td>
		</tr>
		<tr>
			<td style="text-align: center" >
				<img style= "padding: 10px; margin: auto;" src="images/Etape2 4F Vignette.png" ></img>
			</td>
		</tr>
		<tr>
			<td style="text-align: center" >
				<img style= "padding: 10px; margin: auto;" src="images/Etape3 4F Vignette.png" ></img>
			</td>
		</tr>
		<tr>
			<td style="text-align: center" >
				<img style= "padding: 10px; margin: auto;" src="images/Etape4 4F Vignette.png" ></img>
			</td>
		</tr>
			<tr>
			<td style="text-align: center" >
				<img style= "padding: 10px; margin: auto;" src="images/Etape1 4F Tarifs adultes.png" ></img>
			</td>
		</tr>
		<tr>
			<td style="text-align: center" >
				<img style= "padding: 10px; margin: auto;" src="images/Etape1 4F Tarifs enfants.png" ></img>
			</td>
		</tr>
		<tr>
			<td style="text-align: center" >
				<img style= "padding: 10px; margin: auto;" src="images/Etape1 4F inforrmations adultes.png" ></img>
			</td>
		</tr>
		<tr>
			<td style="text-align: center" >
				<img style= "padding: 10px; margin: auto;" src="images/Etape1 4F contactes.png" ></img>
			</td>
		</tr>
	</table>
</fieldset>

<fieldset>
<h3>Type de course</h3>
Course par étape (4 x environ 10 kilomètres de chemins de campagne)</br>
Course par étape pour les enfants (2 x 1 kilomètre ou 2 kilomètres selon la catégorie)
</fieldset>


<script>
var ArrayCoureurs = [];
var ArrayParcours = [];
var ICounterCoureurs = 0;
</script>
<?php 
 setlocale (LC_TIME, 'fr_FR.utf8','fra');
$_GET['NomCourse'] = $Course = '4 Foulées';
$ANNEE_COURSE = '2025';
$Date = '2025-08-20';
$Nbr_etape = 4;


/*************************** CONNECTION AVEC LA BASE DE DONNEES ***********************************/
$con = mysqli_connect('dxvv.myd.infomaniak.com', 'dxvv_christopheJ', 'er3z4aet1234');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  else
  {
	mysqli_select_db($con ,'dxvv_jurachrono' );
	// ***************************************** AFFICHAGE BASE de Donnée ***************************************
	// Create table de donnée du nom de parcours
	//	mysqli_select_db($con,$row['Database']);
	$sql = 'SELECT * FROM Course  WHERE Nom_course=\''.$Course.'\'AND Date=\''.$Date.'\'' ; 
	$result = mysqli_query($con,$sql);

	if ($result && mysqli_num_rows($result) > 0) 
	{
		// output data of each row
		while($val1 = mysqli_fetch_assoc($result)) 
		{
			$Site = $val1['Site'];
			$val = $val1;
		}
	}
}
/* Liste des parcours */

// Afficher la liste des Parcours  Dossier dans la course ;
$pathfolder = 'courses/'.$_GET['NomCourse'].$ANNEE_COURSE;
// CrÃ©ation de la liste de toutes les Dossier = Parcours 
$files1 = scandir($pathfolder);
// Liste des ficbier 
foreach ($files1  as $key => $Parcours) 
{ 
	if(is_dir($pathfolder .'/'.$Parcours))
	{
		// Affichage dans la liste des dÃ©part dans le menu 
		if (strlen($Parcours) >2 && $Parcours != "info") 
		{	

		?>	
		<script>
			var Parcours= new Object();
			
			Parcours.nom=<?php echo json_encode($Parcours); ?>;
			ArrayParcours.push(Parcours);
			var ArrayDepart = [];
			Parcours.ArrayDepart = ArrayDepart; 
		</script>
		<?php
			//<!--- Liste des DÃ©part !---->
			// Afficher la liste des Parcours  Dossier dans la course ;
			$pathfolderParcours = 'courses/'.$_GET['NomCourse'].$ANNEE_COURSE. '/'.$Parcours;
			// CrÃ©ation de la liste de toutes les Dossier = Depart 
			$filesDepart = scandir($pathfolderParcours);
			$CmptDisc = 1;
			foreach ($filesDepart  as $key => $depart) 
			{ 
			?>
			<SCRIPT>
			console.log(<?php echo json_encode($pathfolderParcours .'/'.$depart); ?>);
			</SCRIPT>
			<?
			$pathfolderDepart =  $pathfolderParcours .'/'.$depart;
				if(is_dir($pathfolderDepart ) )
				{
					
					if (strlen($depart) >2)
					{
					?>
						<script>
						var Depart= new Object();
						Depart.Nom = <?php echo json_encode($depart); ?>;				
						<?
							// Lecture du fichier info.json 	
						$pathFileInfo = 'courses/'.$_GET['NomCourse'].$ANNEE_COURSE.'/'.$Parcours.'/'.$depart.'/info.json';?>
					
						Depart.info =  readJSON(<?php echo json_encode($pathFileInfo); ?>);
						var ArrayEtape = [];
						</script>
						<?
						// CrÃ©ation de la liste de toutes les Dossier = Etape 

						$filesEtape = scandir($pathfolderDepart);
						
						/***************** Etape ********************/
						$CmptEtape = 1;
						foreach ($filesEtape  as $key => $Etape) 
						{
							$pathFolderEtape = $pathfolderDepart .'/'. $Etape ;
							
							if (strlen($Etape) >2 && is_dir($pathFolderEtape ) && $Etape != "images" && $Etape != "General")
							{
									
								// Lecture du fichier info.txt de l'étape 	
								$pathFileInfoEtape = $pathFolderEtape.'/info.json';
								if (file_exists($pathFileInfoEtape))
								{
									?> <script>
								
								</script>
								<?
									$pathfileImageEtape = $pathFolderEtape.'/images/Etape.jpg';
									if (file_exists ( $pathfileImageEtape ) == false)
									{
										$pathfileImageEtape = "";
									}
									$pathfileGpxEtape = $pathFolderEtape.'/images/Etape.xml';
									if (file_exists ( $pathfileGpxEtape ) == false)
									{
										$pathfileGpxEtape = "";
									}
									$CmptEtape ++;
									?> <script>
									var Etape = new Object();
									Etape.Image = <?php echo json_encode($pathfileImageEtape); ?>;
									Etape.GPX = <?php echo json_encode($pathfileGpxEtape); ?>;
									Etape.Nom = <?php echo json_encode($Etape); ?>;
									Etape.info = readJSON(<?php echo json_encode($pathFileInfoEtape); ?>);
									console.log(Etape.info.ListDiscipline.ListItem);
									</script>
									<?							
								}
								?>
								<script>
								ArrayEtape.push(Etape);
								</script><?php
							}
						}	
						?>
						<script>
						Depart.ArrayEtape = ArrayEtape;
						ArrayDepart.push(Depart);
						</script><?php					
					}
				}
			}
		}
	}
}
					?>
<!--
<fieldset>
<h3>Inscription</h3>

</br></br>

Fr. 50.- pour les 4 étapes </br>
Inscriptions sur place jusqu'à 18h30 au plus tard, <b>majoration de Fr. 10.-</b></br>
Possibilité de s'inscrire pour 1 étape, Fr. 20.- (sans prix souvenir)</br>
Fr. 10.- pour les 2 étapes enfants</br>
</fieldset>-->

</p>
<fieldset id="parcours">
	<script>
 // crée un nouvel élément div
 //let b = document.body;
// let newDiv =  document.getElementById("corps"); 
 console.log(ArrayParcours);
for (var i = 0; i < ArrayParcours.length; i++) 
{
	var ParcoursObj = new Object();
	ParcoursObj = ArrayParcours[i];
	let ParcoursPara  = null ;
	if (ArrayParcours.length > 1)
	{
	 	ParcoursPara = document.createElement('fieldset');
	}
	else
	{
		 ParcoursPara = document.createElement('div');
	}			
	ParcoursPara.className='TableauResulat'
	if (ParcoursObj.nom.length > 0)
	{
		let NomParcoursPara =	document.createElement('H3');	
		NomParcoursPara.textContent ="Catégories " + ParcoursObj.nom;
		NomParcoursPara.className += "titleCenter";
		ParcoursPara.append(NomParcoursPara);
	}
	console.log(ParcoursObj);
	// Pour chaque départ 
	for (var h = 0; h < ParcoursObj.ArrayDepart.length; h++)
	{
		var DepartObj = new Object();
		DepartObj = ParcoursObj.ArrayDepart[h];
		let  DepartPara = document.createElement('div');
	
			if (ParcoursObj.ArrayDepart.length > 1)
			{
				
				if (DepartObj.Nom.length > 0)
				{
					let NomStartPara =	document.createElement('h3');	
					NomStartPara.textContent = "Catégories " + DepartObj.Nom;
					NomStartPara.className += "title";
					//DepartPara.append(NomStartPara);
				}
			}
	

			for (var j = 0; j < DepartObj.ArrayEtape.length; j++)
			{
				var	EtapeObj =  new Object();
				EtapeObj = DepartObj.ArrayEtape[j];
			
				let Etapepara = document.createElement('fieldset');
				
				if (DepartObj.ArrayEtape.length > 1)
				{
						
					let TableTitleEtape = document.createElement('table');			
					TableTitleEtape.id = "TableauCat";
					TableTitleEtape.style.width = "100%";
					TableTitleEtape.style.borderStyle = "none";
					TableTitleEtape.style.borderSpacing  = "0px";
					TableTitleEtape.style.marginTop  = "15px";
					TableTitleEtape.style.marginBottom  = "15px";
					TableTitleEtape.style.padding  = "10px";
					let RowsTitleEtape =	document.createElement('tr');
					TableTitleEtape.style.background  = "#5ff1a7";
					RowsTitleEtape.style.margin  = "10px";
			
					let ColTableEtape =	document.createElement('td');
					ColTableEtape.innerHTML ="Etape " +(j +1);
					RowsTitleEtape.append(ColTableEtape);
					
					ColTableEtape =	document.createElement('td');
					let date = new Date( EtapeObj.info.Date._Value);
				
					const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
					ColTableEtape.innerHTML ='<i class="fa fa-calendar-o" ></i>' +" "+  date.toLocaleString('fr-FR', options);
			
					RowsTitleEtape.append(ColTableEtape);
							
					ColTableEtape =	document.createElement('td');
					ColTableEtape.innerHTML ='<i class="fa fa-clock-o" ></i>' +" " +EtapeObj.info.HeureDepart._Value ;
					RowsTitleEtape.append(ColTableEtape);
						
					ColTableEtape =	document.createElement('td');
					ColTableEtape.innerHTML ='<i class="fa fa-map-marker" ></i>' +" "+EtapeObj.info.Lieu._Value;
					RowsTitleEtape.append(ColTableEtape);
						
					TableTitleEtape.append(RowsTitleEtape);
		
				}
		
				let TableEtape = document.createElement('table');			
				TableEtape.id = "TableauCat";
				TableEtape.width = "100%";	
				let RowsTableEtape =	document.createElement('tr');
			
				if (EtapeObj.info.Distance.length > 0)
				{
					let ColInfoEtape =	document.createElement('td');
					
					ColInfoEtape.style.width = "20%";
					
					ColInfoEtape.style.verticalAlign ="Top";
					
					let TableDistance = document.createElement('table');
					TableDistance.style.borderSpacing  = "10px";
					TableDistance.style.width = "100%";					
					let RowsDistance =	document.createElement('tr');
					RowsDistance.style.background  = "#91f5b2"
					
					let ColDistance =	document.createElement('td');
					ColDistance.innerHTML = EtapeObj.info.Distance  ;
					ColDistance.style.padding ="10px";
					RowsDistance.append(ColDistance);
					TableDistance.append(RowsDistance);
					
					RowsDistance =	document.createElement('tr');
					RowsDistance.style.background  = "#91f5b2"
					
					ColDistance =	document.createElement('td');
					RowsDistance.style.width = "100%";	
					ColDistance.style.width = "100%";	
					ColDistance.innerHTML =  EtapeObj.info.Denivelle ;
					ColDistance.style.padding ="10px";
				
					RowsDistance.append(ColDistance);
					TableDistance.append(RowsDistance);
					ColInfoEtape.append(TableDistance);
					RowsTableEtape.append(ColInfoEtape);
				
				}
				if ( EtapeObj.Image.length > 0)
				{
					let ColimgEtapePara =	document.createElement('td');
					ColimgEtapePara.width = "80%";
					let ImageEtape = document.createElement('img');
					ImageEtape.src =  EtapeObj.Image;
					ImageEtape.className += "imgCenter";
					ImageEtape.style.width = "80%"
					ImageEtape.style.textAlign  ="center";
					//ColimgEtapePara.append(ImageEtape);
					RowsTableEtape.append(ColimgEtapePara);
				}				
	
				//TableEtape.append(RowsTableEtape);			
				//DepartPara.append(TableEtape);
			
			}
	
		
		
		//*************** Catégorie ***************************/
	
			let TableCat =	document.createElement('table');
			TableCat.style.margin = "10px";
			TableCat.id = "TableauCat";
			TableCat.style.width = "100%";

			let RowsTableCat =	document.createElement('tr');
			let HeaderTableCat =	document.createElement('th');
			
			HeaderTableCat.textContent = "N°";	
			RowsTableCat.append(HeaderTableCat);
			 HeaderTableCat =	document.createElement('th');
			HeaderTableCat.textContent = "Nom Catégorie";	
	
			RowsTableCat.append(HeaderTableCat);
			 HeaderTableCat =	document.createElement('th');
			HeaderTableCat.textContent = "Sexe";	
			RowsTableCat.append(HeaderTableCat);
	
			 HeaderTableCat =	document.createElement('th');
			HeaderTableCat.textContent = "Année de naissance";	
			RowsTableCat.append(HeaderTableCat);
			 HeaderTableCat =	document.createElement('th');
			HeaderTableCat.textContent = "";	
			RowsTableCat.append(HeaderTableCat);
			TableCat.append(RowsTableCat);
		for (var d = 0; d < DepartObj.info.ListCategorie.ListItem.length; d++)
		{
			var CatObj = DepartObj.info.ListCategorie.ListItem[d];
			let RowsTableCat =	document.createElement('tr');
		
			 HeaderTableCat =	document.createElement('td');
			HeaderTableCat.textContent = CatObj.NumCategorie._Value ;	
			RowsTableCat.append(HeaderTableCat);
			 HeaderTableCat =	document.createElement('td');
			HeaderTableCat.textContent = CatObj.NomCategorie._Value ;	
			RowsTableCat.append(HeaderTableCat);
			 HeaderTableCat =	document.createElement('td');
			HeaderTableCat.textContent = CatObj.SexeCategorie._Value  ;		
			RowsTableCat.append(HeaderTableCat);
			 HeaderTableCat =	document.createElement('td');
			HeaderTableCat.textContent = CatObj.debutAnnee._Value ;	
			RowsTableCat.append(HeaderTableCat);
			 HeaderTableCat =	document.createElement('td');
			 if (CatObj.finAnneeInternet._Value.length >1 )
			 {
			HeaderTableCat.textContent =CatObj.finAnneeInternet._Value ;	
			 }
			 else
			 {
			HeaderTableCat.textContent =CatObj.finAnnee._Value ;	
			 }

			RowsTableCat.append(HeaderTableCat);
			TableCat.append(RowsTableCat);
		}
		ParcoursPara.append(DepartPara);
		ParcoursPara.append(TableCat);
		
	
		let newTexte = document.createTextNode('Texte écrit en JavaScript');
		

	}

document.getElementById("parcours").appendChild(ParcoursPara); 



}
</script>
</fieldset>

<fieldset>
<h3>Assurance</h3>
Les organisateurs déclinent toute responsabilité en cas d’accident ou de vol.
 Par son inscription, chaque participant (ou son représentant légal) autorise 
l’utilisation de son image sur des imprimés, sites Internet et médias sociaux par les 			organisateurs et autorise la transmission d’images directement liées à la 
manifestation aux médias
</fieldset>
<!--
<fieldset>
<h3>Contact</h3>
  Organisateur: 	Ski Clubs </br> 
   e-mail: 	4foulees@juradefichrono.ch </br> 
</fieldset>
<fieldset>
<h3>Informations</h3>
Les résultats seront disponibles sur le site dès le jeudi matin après chaque étape.
</br>
Des douches mobiles seront mises à disposition pour les étapes des Bois, de Saignelégier et du Noirmont.
</br>
</fieldset>
<!---  ***************************** Affichage des catégorie  *************************** ------->
<!--
<Fieldset>

<h3>Vidéo Parcours</h3>
<center>
		<Table>
		<Tr>
			<td>
				Adultes
			</td>
			<Td>
				Enfants
			</td>
		</tr>
		<tr>
			<Td>
				<center>
					<iframe width="560" height="315" src="https://www.youtube.com/embed/soBKsAHgg9g" frameborder="0" allowfullscreen></iframe>
				</center>
			</td>
			<td>
				<center>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/1e1xXi4ceg8" frameborder="0" allowfullscreen></iframe>
			 </center>
			</td>
		</tr>
		</table>

Ces vidéos ont été réalisé par ©Fausto Fragnoli <br\>

</center>



 </fieldset>
 -->
<p>
		<a style= "padding: 10px;margin:auto;" href="resultat.php"
			target="_blank"><img src="images/logo resultats 4f.png"  style="margin:auto;"></img></a>
				<a style= "padding: 10px;margin:auto;" href="https://juradefichrono.ch/Photos.php?Etape=0&NbrEtape=4&DateCourse=2024-08-21&NomCourse=4+Foul%C3%A9es"
			target="_blank"><img src="images/logo photos 4f.png"  style="margin:auto;"></img></a>
			</br></br>
 les 4 ski club vous souhaitent une bonne course à tous!

</p>
 </div>
 <?php include("sponsors.php"); ?> 
    </body>
</html>

 





