<!DOCTYPE html>
<html>
<body>

  <h1>Exercice 1</h1>
  <p>Créez une variable et lui affecter une chaîne de caractères. Afficher cette variable.</p>
  <?php
    $prenom = 'Celine';
    $age = 41;

    echo $prenom;        // Affiche 'Celine
    echo '<br/>';
    echo $age;        // Affiche 41
    echo '<br/>';

    $prenom = 'Luna';
    $age = 9;

    echo $prenom;        // Affiche 'Luna'
    echo '<br/>';
    echo $age;        // Affiche 9

  ?>

  <h1>Exercice 2</h1>
  <p>Créez trois variables : nom, prénom, âge. Afficher ces variables dans une phrase
    (ex: Je m'appelle "nom prénom" et j'ai "age" ans.)</p>
  <?php
    // Déclaration des variables
    $prenom = 'Celine';
    $nom = 'Audin';
    $age = 41;
    $identite = '';
    // On concatène $nom et $prenom dans $identite
    $identite = 'Je m\'appelle ' . $prenom .' '. $nom . ' et j\'ai ' . $age . ' ans.';
    // Affiche ''
    echo $identite;
  ?>

  <h1>Exercice 3</h1>
  <p>Créez une variable age. Afficher vous êtes majeur ou vous êtes mineur en fonction de
    l'âge.</p>
  <?php
    $age = 50;
    if($age > 0 && $age < 120){
    if($age >= 18){
    echo 'Vous êtes majeur';
    }else{
    echo 'Vous êtes mineur';
    }
    }else {
    echo 'Veuillez entrer un age valide !!!';
    }
  ?>

  <h1>Exercice 4</h1>
  <p>Créez une variable age aléatoire. Afficher vous êtes majeur ou vous êtes mineur en
    fonction de l'âge obtenu.</p>
  <?php
    $age = rand(0, 100);
    echo $age;
    //echo (rand(0, 120) . "<br>");
    if($age >= 18){
    echo 'Vous êtes majeur';
    }else{
    echo 'Vous êtes mineur';
    }
  ?>

  <h1>Exercice 5</h1>
  <p>Créez une variable âge et une variable genre. Afficher aléatoirement vous êtes une femme
    et vous avez xans ou vous êtes un homme et vous avez xans.</p>
  <?php
    $age = rand(0, 100);
    $sexe = array('homme', 'femme');
    $genre = $sexe[rand(0,1)];
    $result = $age .''. $genre;
    echo $result;
    if($age > 0 && ($genre == 'femme' || $genre = 'homme')){
    if($age >= 18 && $genre == 'femme'){
    echo 'Vous êtes une femme et vous êtes majeure';
    }elseif($age < 18 && $genre == 'femme'){
    echo 'Vous êtes une femme et vous êtes mineure';
    }elseif ($age >= 18 && $genre == 'homme'){
    echo 'Vous êtes un homme et vous êtes majeur';
    }elseif ($age < 18 && $genre == 'homme'){
    echo 'Vous êtes un homme et vous êtes mineur';
    }
    }else{
    echo 'Veuillez rentrer des infos valides';
    }
  ?>

  <h1>Exercice 6</h1>
  <p>Créez une variable magnitude allant de 0 à 9. Gérez l'affichage selon la magnitude.</p>
  <?php
  // Magnitude	Phrase
// 1	Micro-séisme impossible à ressentir.
// 2	Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.
// 3	Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.
// 4	Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.
// 5	Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.
// 6	Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.
// 7	Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.
// 8	Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.
// 9	Séisme capable de tout détruire sur une très vaste zone.

  $richter = rand(1,9);
  echo 'Magnitude-enregistrer: ', $richter, '<br>';
  switch ($richter) {
    case 1:
        echo("Micro-séisme impossible à ressentir.");
        foreach($a as $b) {
            echo "ok";
        }
        break;
    case 2:
        echo("Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.");
        break;
    case 3:
        echo("Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.");
        break;
    case 4:
        echo("Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.");
        break;
    case 5:
        echo("Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.");
        break;
    case 6:
        echo("Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.");
        break;
    case 7:
        echo("Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.");
        break;
    case 8:
        echo("Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.");
        break;
    case 9:
        echo("Séisme capable de tout détruire sur une très vaste zone.");
        break;
    default:
        echo("Valeur inconnue");
  }
  ?>

</body>
</html>
