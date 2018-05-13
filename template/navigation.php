<?php
session_start();
include ('../scripts/fonctions.php');
?>

	<header>
		<div class="wrapper">
			<div class="logo">
				<a href=""><img src="img/logo.png" alt="Resto" title=""/></a>
			</div>

			<nav>
				<ul>
<?php
   
  getNavbar();
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
