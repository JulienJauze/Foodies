<?php $dir = scandir("/var/www/html/serveurweb/php-decouverte.bwb/content"); 

?>

	<header>
		<div class="wrapper">
			<div class="logo">
				<a href=""><img src="img/logo.png" alt="Resto" title=""/></a>
			</div>

			<nav>
				<ul>
<?php
   
   foreach ($dir as $files){
       if ($files!== "." && $files!==".."){
           if(strpos($files,"_") !== FALSE){
               $modif = ucfirst(str_replace('_', ' ', implode('.',explode(".",substr_replace($files, "'", strrpos($files,"_",-1), 0),-1))));
               $done = substr_replace($modif, "", strrpos($modif," ", -1),0);
               ?>
               <?php echo '<li><a href="./index.html">'.$done. '</a></li>';
           }else{
               echo '<li><a href="./test.html">'.ucfirst(implode('.',explode(".",$files,-1))) .' </a></li>';
           }
       }
   }
?>


				</ul>
			</nav>
		</div>
        </header>
            <section class="hero">
		<div class="caption">
			<h3>Restologue</h3>
			<h4>
				<span class="rsep"></span>
				Art of Cooking
				<span class="lsep"></span>
			</h4>
			
		</div>
	</section>
