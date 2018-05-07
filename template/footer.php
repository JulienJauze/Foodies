<?php
?>
<footer>
		<div class="wrapper">
			<!-- adresse1  -->
			<section class="adress">
				<p>New York Restaurant</p> 
				<p class="location">3926 Anmoore Road<br/>
				New York, NY 10014</p>
				<p class="phone">718-749-1714</p>
			</section>

			<!--  adress2  -->
			<section class="adress">
				<p>France Restaurant</p>
				<p class="location">68, rue  de la Couronne<br/>
				75002 PARIS </p>
				<p class="phone">02.94.23.69.56</p>
			</section>

			<!--  footer navigation  -->
			<section class="footer_nav">
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
