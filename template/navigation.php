<?php $dir = scandir("/var/www/html/serveurweb/php-decouverte.bwb/content"); 
session_start();
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
               $done = ucfirst(implode('.',explode(".",str_replace ( "_", "", substr_replace(substr_replace($files, "'", strrpos($files,"_",-1), 0), " ", strrpos($files,"_",-9), 0)),-1)));
               ?>
               <?php  echo '<li><a href="http://php-decouverte.bwb/?content='.implode('.',explode(".",$files,-1)).'">'.$done.'</a></li>';
           }else{
               echo '<li><a href="http://php-decouverte.bwb/?content=' . implode('.',explode(".",$files,-1)) . '">' . ucfirst(implode('.',explode(".",$files,-1))) . '</a></li>';
           }
       }
   };
if (isset($_SESSION["username"])) {
        echo '<li><a href="./scripts/disconnect.php"><button><small>Deconnexion</small></button></a></li>';

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
