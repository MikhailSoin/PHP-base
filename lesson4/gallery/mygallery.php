<?php

  $dir1 = "gallery_img/small"; 
  $dir2 = "gallery_img/big";// Путь к директории, в которой лежат изображения
  
  $files = array_slice(scandir($dir1), 2);

?> 


<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<title>Моя галерея</title>
<link rel="stylesheet" type="text/css" href="style.css"/>
     <script type="text/javascript" src="scripts/jquery.js"></script> 
     <script type="text/javascript" src="scripts/fancybox/jquery.mousewheel-3.0.4.pack.js"></script> 
     <script type="text/javascript" src="scripts/fancybox/jquery.fancybox-1.3.4.pack.js"></script> 
 <link rel="stylesheet" type="text/css" href="scripts/fancybox/jquery.fancybox-1.3.4.css" media="screen" /> 
<script type="text/javascript">
	$(document).ready(function(){
		$("a.photo").fancybox({
			transitionIn: 'elastic',
			transitionOut: 'elastic',
			speedIn: 500,
			speedOut: 500			
		});
 	});
</script> 

</head>

<body>
<div id="main">
	<div class="post_title"><h2>Моя галерея</h2></div>
	<div class="gallery">

<?php 
for ($i = 2; $i < count($files); $i++) { ?>
  <a rel="gallery" class="photo" href="<?=$dir2."/".$files[$i]?>" target="_blank"><img src="<?=$dir1."/".$files[$i]?>" alt="" /></a>
<?php } ?>	
	</div>
</div>

</body>
</html>