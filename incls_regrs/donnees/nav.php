<nav>
<ul>

<?php
//Définition des variables
		

	$chaine=include 'libellesMenuCompletPremierNiveau.php';

//chaine de caractère en tableau
	$tableau = explode(":",$chaine);

	$chn="";
	$chainefinal="";
//Foreach parcourt chaque valeur du tableau
	include 'incls_regrs/classes/cls_Hyperlien.php';
	foreach ($tableau as $valeur) {
		$pUrl="http://localhost/kyzaroPHP/Anselin/";
		$pId=$valeur;
		$pTexte=$valeur;
		$pClasse=$valeur;
			$var=new Hyperlien($pUrl, $pId, $pTexte, $pClasse);
			$lien=$var -> ancre();
			$chn=$chn." <li> ".$lien." </li> ";
	}
echo $chn;


?>
</ul>
</nav>