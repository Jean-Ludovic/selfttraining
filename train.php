<?php
$membre1=[
    "nom :" =>"Guy",
    "Prenom :"=>"AKPOVY",
    "Age :" => 57
];
$membre2=[
    "nom :" =>"Cheriffat",
    "Prenom :"=>"TAIROU",
    "Age :"=>55
];
$membre3=[
    "nom :" =>"AKPOVY",
    "Prenom :"=>"Steeves",
    "Age :"=>24
];

$famille1=[
    "pere"=>$membre1,
    "Mere"=>$membre2,
   "fils_1"=> $membre3
];
var_dump($famille1);
function afficherFamille($famille) {
    echo '<table border="1">';
    echo '<tr><th>Rôle</th><th>Nom</th><th>Prénom</th><th>Âge</th></tr>';
    
    foreach ($famille as $role => $membre) {
        echo '<tr>';
        echo "<td>function afficherFamille($famille) {
            echo '<table border="1">';
            echo '<tr><th>Rôle</th><th>Nom</th><th>Prénom</th><th>Âge</th></tr>';
            
            foreach ($famille as $role => $membre) {
                echo '<tr>';
                echo "<td>$role</td>";
                echo "<td>{$membre['nom :']}</td>";
                echo "<td>{$membre['Prenom :']}</td>";
                echo "<td>{$membre['Age :']}</td>";
                echo '</tr>';
            }
            
            echo '</table>';
        }
        </td>";
        echo "<td>{$membre['nom :']}</td>";
        echo "<td>{$membre['Prenom :']}</td>";
        echo "<td>{$membre['Age :']}</td>";
        echo '</tr>';
    }
    
    echo '</table>';
}

afficherFamille($famille1);
?>