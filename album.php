<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
<?php include("carac.php"); ?> 
   <body>	
        		
<?php include("en_tete.php"); ?> 
<?php include("menu_vertical.php"); ?> 
<Div id="corps">
<script type="text/javascript">
function creerAlbum(txtRepertoire)
{
this.txtRepertoire=txtRepertoire;
this.photos = new Array;
this.add= addPhoto;
this.print = printAlbum;
this.view = viewPhoto;
}
function addPhoto(srcPhoto,hauteurPhoto,srcVignette,hauteurVignette,txtLegende){
var photo  = new Object();
photo.srcPhoto = srcPhoto;
photo.hauteurPhoto = hauteurPhoto;
photo.srcVignette= srcVignette;
photo.hauteurVignette = hauteurVignette;
photo.txtLegende=txtLegende;
this.photos[this.photos.length]= photo;
}
function viewPhoto(indice){
document.images["photoAlbum"].src = this.txtRepertoire + this.photos[indice].srcPhoto;
if (document.getElementById){
document.getElementById("divLegende").innerHTML = this.photos[indice].txtLegende;
}
}
function printAlbum(){
document.write("<div style=\"text-align:center\">");
for (var i = 0 ; i< this.photos.length; i++) {
document.write("<a href=\"javascript:album.view("+i+")\"><img src=\""+this.txtRepertoire + this.photos[i].srcVignette+"\"  height = \""+this.photos[i].hauteurVignette+"\" style =\"border:1px solid #000\" title?\""+this.photos[i].txtLegende+"\"></a>");
}
document.write("<img src=\""+this.txtRepertoire  + this.photos[0].srcPhoto +"\" name=\"photoAlbum\" border=\"2\"hspace=\"3\">");
//document.write("<div if=\"divLegende\">"+this.photos[0].txtlLegende+"</div>");
document.write("</div>");
}
var album = new creerAlbum("images_albm/");
for (var j = 1 ; j<28 ; j++) {
album.add("photom ("+j+").jpg",600,"photop ("+j+").jpg",100);
}
album.print();
</script>
 </div>
 <?php include("sponsors.php"); ?> 
    </body>
</html>