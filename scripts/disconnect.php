<?php

 setcookie("pseudo", "", time()-3600, "/");

     header('Location: http://php-decouverte.bwb/?content=connexion');
