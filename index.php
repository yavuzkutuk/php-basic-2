<?php

// Boucle for
echo "<ul>";
for ($i=0; $i < 10; $i++) { 
    echo '<li>'.$i.'</li>';
}
echo '</ul>';

echo "<ul>";
for ($i=10; $i >= 0; $i--) { 
    echo '<li>'.$i.'</li>';
}
echo '</ul>';

echo "<ul>";
for ($i=10; $i >= -10; $i-=3) { 
    echo '<li>'.$i.'</li>';
}
echo '</ul>';

$firstPokemon = "Bulbizarre";
if("Bulbizarre" === $firstPokemon) { 
    echo "Bon choix";
}elseif("Salamèche" === $firstPokemon) {
    echo "Tu n'as aucune personnalité";
}else{
    echo "Ah c'est donc ".$firstPokemon." ?" ;
}

// Tableau indexé
$team = ['Bulbizarre', 'Salamèche', 'Carapuce', 'Pikachu'];
var_dump($team);
$team[] = 'Mewto'; 
var_dump($team);

echo "<ol>";
foreach($team as $key => $pokemon){ 
    echo '<li>'.$pokemon.' ('.$key.')</li>';
}
echo '</ol>';

// Tableau associatif
$teamAsso = ['Bulbizarre' => 15, 'Salamèche' => 7, 'Carapuce' => 3, 'Pikachu' => 45, 'Mewto' => 100];
var_dump($teamAsso);
$teamAsso['Bulbizarre']++;
var_dump($teamAsso);
unset($teamAsso['Bulbizarre']);
var_dump($teamAsso);
$teamAsso['Herbizarre'] = 16;
var_dump($teamAsso);
asort($teamAsso);
var_dump($teamAsso);
echo "<ol>";
foreach($teamAsso as $pokemon => $puissance){ 
    echo '<li>'.$pokemon.' ('.$puissance.')</li>';
}
echo '</ol>';
echo "<ol>";
foreach($teamAsso as $pokemon => $puissance){ 
    if($puissance > 10 && $puissance < 45){
        echo '<li>'.$pokemon.' ('.$puissance.')</li>';
    }
}
echo '</ol>';
// Tableaux multidimensionnels
$pokemons = [
    'Plante' => ['Bulbizarre', 'Mystherbe', 'Chetiflor'],
    'Eau' => ['Carapuce', 'Stari', 'Magicarpe'],
    'Feu' => ['Salamèche'],
    'Sol' => ['Sabelette', 'Taupiqueur'],
];

$pokemons['Feu'][] = 'Caninos';
var_dump($pokemons);
$pokemons['Electrik'] = ['Pikachu', 'Magneti', 'Voltorbe'];
var_dump($pokemons);
echo '<ol>';
foreach($pokemons['Plante'] as $pokemon) { 
    echo '<li>'.$pokemon.'</li>';
}
echo '</ol>';

echo 'Il y a '.count($pokemons['Eau']).' pokemons dans le type Eau';