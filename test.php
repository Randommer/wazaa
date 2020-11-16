<?php
$str = "MD9rcsCE";
$mdp = password_hash($str, PASSWORD_DEFAULT);

echo "Mot de passe : ".$str."\n<br>\n";
echo "Haché : ".$mdp."\n<br>\n";