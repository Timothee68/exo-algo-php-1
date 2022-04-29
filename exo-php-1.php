/* exo 1 */
<br>
<br>
<?php 
$string='Notre formation DL commence aujourd\'hui';
echo $string.' à '.strlen($string).' chaine de caractères.';
?>
<br>
<br>
/* exo 2 */ 
<br>
<br>
<?php 
$string='Notre formation DL commence aujourd\'hui';
echo 'La phrase contient '.str_word_count($string).' mots.'
?>
<br>
<br>
/* exo 3 */
 <br>
 <br>
<?php 
$string='Notre formation DL commence aujourd\'hui.';
echo $string ; 
echo $string=str_replace('aujourd\'hui','demain',$string);

?>
<br>
<br>
/* exo 4 */ 
<br>
<br>
<?php
$string='Engage le jeu que je le gagne';
$stringMin = strtolower($string);
$stringVerif = str_replace(' ','',$stringMin);
$reverse = strrev($stringVerif);
if ($stringVerif === $reverse){
    echo $string.' est palindrome . ';
}else{
    echo $string.' n\' est pas palindrome';
}
?>
<br>
<br>
/* exo 5 */ 
<br>
<br>
<?php
$francs = 100;
$euros =($francs/6.55957);
echo 'Montant en francs: '.$francs.' '.$francs.' francs = '.number_format($euros,2).' €';
echo round($euros,2) 
?>
<br>
<br>
/* exo 6 */ 
<br>
<br>
<?php
$article=9.99;
$quantité=5;
$TVA=0.2;
$montantTotal=(($article*$TVA+$article)*$quantité);
echo  'Le montant de la facture à régler est de : '. number_format($montantTotal,2);
                                                  //  round($)
?>
<br>
<br>
/* exo 7 */
<br>
<br>
<?php
$age = 10;
if($age < 6)
    echo 'tu n\'entre pas dans les catégories';
elseif($age <= 7)
    echo 'tu entre dans la catégories Poussin ';

elseif($age <= 9) 
    echo 'tu entre dans la catégories Pupille';

elseif($age <= 11) 
    echo 'tu entre dans la catégories Minime ';

elseif($age >= 12) 
    echo  'tu entre dans la catégories Cadet';

?>
<br>
<br>
/* exo 8 */
<br>
<br>
<?php
 $nombre = 8 ;
 for ($i=1; $i <11 ; $i++) { 
    $nombreTable= $nombre*$i;
    echo ($i." x ".$nombre.' = '. $nombreTable."<br>");
 }
 ?>
<br>
<br>
/* exo 9 */ 
<br>
<br>
<?php
$age= 35;
$sexe='F';
if (($sexe =='H' && $age>=20) || ($sexe == 'F' && $age >=18 && $age <= 35)){
echo 'La personne est imposable';
}else {echo 'non imposable ';
}

$k1= ($sexe =='H' && $age>=20);
$k2= ($sexe == 'F' && $age >=18 && $age <= 35);
($k1 || $k2) ? $impot="imposable" : $impot="pas imposable";// syntaxe ternaire ligne 117 !!!! // ? ( vaut->alors ) : ( vaut->sinon )  
         // alors             // sinon
echo "la personne est ".$impot;

?>
<br>
<br>
/* exo 10 */ 
<br>
<br>
<?php
$aPayer= 152;
$montantVerse= 200;
$aRendre=$montantVerse-$aPayer;
$billet10=0;
$billet5=0;
$piece2=0;
$piece1=0;


while ($aRendre >= 0) {
    if ($aRendre >=10){  
       $aRendre= $aRendre-10;
       $billet10=$billet10+1;
    }elseif ($aRendre>=5) {
        $aRendre=$aRendre-5;
        $billet5=$billet5+1;
    }elseif ($aRendre>=2){
        $aRendre= $aRendre-2;
        $piece2=$piece2+1;
    }elseif ($aRendre>=1){
        $aRendre= $aRendre-1;
        $piece1=$piece1+1;
    }else{
        break;
    }
}
echo 'Rendue de monnaie : '."<br>".$billet10.'billets de 10 € -'.$billet5.'billet de 5 € - '.$piece2.' pièce de 2 € - '.$piece1.' pièce de 1 € .';
?>
<br>
<br>
/* exo 11 */ 
<br>
<br>
<?php
$voitures=array('peugeot','renault','BMW','mercedes');
echo  'Il y a '.count($voitures).' dans le tableau : '."<br>";
// echo "<br>".'-'.$array[0]."<br>".'-'.$array[1]."<br>".'-'.$array[2]."<br>".'-'.$array[3];
foreach ($voitures as $voiture =>$value){

echo '- '.$value."<br>";
}
?>
<br>
<br>
/* exo 12 */ 
<br>
<br>
<?php

//  $langues=['bonjour','hola','hello']; 


$noms=[
    'Mickael' => 'FRA',
    'Virgile' => 'ESP',
    'Marie-claire' => 'ENG',
];
function direBonjour($prenom,$langue){
    switch ($langue){
        case "FRA": echo "salut ".$prenom."<br>";
        break; 
        case "ESP": echo "hola ".$prenom."<br>";
        break;
        case "ENG": echo "hello ".$prenom."<br>";
        break;
        default : echo  "no langage for you "."<br>";    
    }
}
foreach ($noms as $prenom => $langue) {
    direBonjour($prenom,$langue);
          }
?>
<br>
<br>
 exo 12 bis 
<br>
<br>
<?php
$noms=[
    'Mickael' => 'FRA',
    'Virgile' => 'ESP',
    'Marie-claire' => 'ENG',
];
ksort($noms);
foreach($noms as $prenom => $langue) {
    direBonjour($prenom,$langue);
  }
?>
<br>
<br>
 exo 13  
 <br>
 <br>
<?php
$notes=[10,12,8,19,3,16,11,13,9];
$moyenne=array_sum($notes)/count($notes);
echo 'Les notes obtenues par l\'élève sont : '."<br>";
foreach ($notes as $note){
    echo $note.' ';
}
echo "<br>".'Sa moyenne général est donc de : '.round($moyenne,2);
?>
<br>
<br>
exo 14  
<br>
<br>
<?php
$born= new DateTime() ;
$date= new DateTime ("1985-01-17") ;
$delais = $born->diff($date);

echo 'Age de la personne: '.$delais->y . ' années , '.$delais->m.' mois, '.$delais->d.' jours ';
?>

<br>
<br>exo 15  
<br>
<br>
<?php

$personne=['DUPONT','Michel','1980-02-19'];
$personne2=['DUCHEMIN','Alice','1985-01-17'];

$dateP1=new DateTime('1980-02-19');
$dateP2=new DateTime('1985-01-17');
$dateToDay=new DateTime();



$perosnneAge= $dateP1->diff($dateToDay);
$perosnneAge2=$dateP2->diff($dateToDay);

echo $personne[0].' '.$personne[1].' a '.$perosnneAge->y . ' années, '.$delais->m.' mois, '.$delais->d.' jours'."<br>";
echo $personne2[0].' '.$personne2[1].' a '.$perosnneAge2->y . ' années, '.$delais->m.' mois, '.$delais->d.' jours';  
?>

<br>
<br>  

