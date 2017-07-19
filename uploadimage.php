
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootkar/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<?php


 
 $imagepic = ;
 $tempimgloc = 
 $dirfile=;
 $imageFileType = pathinfo($dirfile,PATHINFO_EXTENSION);
 if (move_uploaded_file($_FILES["uplo"]["tmp_name"], "../../../Pic\ Leia/".$_FILES["uplo"]["name"]) ) {
 	echo "se guardo una pic";
 }else{
 	echo "no pasa nada wey";
 }
 ?>

 <?php  if ($imageFileType == 'png' || $imageFileType == 'jpg' || $imageFileType == 'jpeg' ):?>
     
     echo "es una pic wey";
 <?php else: ?>


       <div class="alert alert-danger">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <h5>Eleija una Imagen Ejm. jpg,jpeg,png</h5>
      </div>
<?php endif; ?>








