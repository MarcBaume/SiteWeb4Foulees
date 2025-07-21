<center>

<?php
 //<!--- Lecture du fichier Sponsors --->
// Afficher la liste des départ Dossier dans la course ;
$pathsponosr = 'info/sponsors.csv';


if (file_exists($pathsponosr)) {

?>

<table><?php
	if (($handle = fopen($pathsponosr, "r")) !== FALSE) {
		while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
			asort($data); 
			$num = count($data);
			if ($row == 0 )
			{
			?> <tr> <?php 
			}
			if ($row > 4 )
			{
				?> </tr><tr> <?php
				$row = 1;
			}
			else
			{
			$row++; 
}
				 $NomSponsors =  $data[0];
				$Siteweb =  $data[1];  
				$logo_path =  $data[2];
				
				if (strlen($NomSponsors) >1 )
				{
					if (strlen($logo_path) >1)
					{
			
			$PathimgSponsors = 'info/images/sponsors/'.$logo_path;
			
						if (file_exists($PathimgSponsors))
						{
							if (strlen($Siteweb) >1)
							{
						?>

						<td> <?php		echo '<a href="'.$Siteweb.'"target="_blank"><img src="'.$PathimgSponsors.'" alt="" /Width=100%></a>'; ?> </td><?php
							}
							else
							{
							?> <td> <?php	echo '<img src="'.$PathimgSponsors.'" alt="" /Width=100%></a>'; ?> </td><?php
							}
						}
						else
						{
						?> <td> <?php	echo $logo_path ; ?> </td><?php
						
						}
					}
					else
					{
					?> <td> <?php	echo $NomSponsors ;?> </td><?php
					}
				}	
		}
			
	}

  fclose($handle);?>
  </table><?php
}
else
{
echo "test";
}
?>
©2025 | Les 4 Foulées | Marc Baume 
</center>