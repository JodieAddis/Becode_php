<?php
    $countries = array( 'Belgium', 'France' , 'Germany', 'Netherlands', 'Ukraine' ); 
    // echo $countries[2]; //Retourne 'Germany'

    $family = array('Pietro', 'Nathalie', 'Jodie', 'Cassandra'); 
    // print_r($family);
    $recipe = ['Risotto aux champignons forestiers'=> 'Risotton, vin blanc, échalotes, crème fraîche, mélange forestier ', 'Polenta' => 'Polenta, eau salée, sauce tomate, fromage', 'Fregola aux paloudres', "Chili Con Carne" ]; 
    // print_r($recipe); 

    $movie = ['Avatart','Blade Runner','Ghostbuster', 'Alien', 'Interstellar'];
    // print_r($movie[3]); 

    //Visualiser plus d'informations sur le contenu de l'array: index, type de valeur associée, longueur de la valeur
    // var_dump($movie); 

    //Rajouter un élément dans un array
    array_push($movie, "La guerre des mondes");//OU
    $movie[]= "Signes"; 
    // var_dump($movie); 

    //Si on veut utiliser une clé associative = "Associative arrays are arrays that use named keys that you assign to them." Donc l'index est une clé à laquelle on associe une valeur. Ceci est intéressant en fonction du cas (voir plus loin).
    $person['function'] = 'Junior Web Developer';

    //Remplacer la valeur de la clé
    $person['function'] = 'Junior Web Developer';
    // echo $person['function'];
    $person['function'] = 'Senior Web Developer';
    // echo $person['function'];

    //Exemple de codage d'un array associatif pour l'adresse d'une personne :  
    $user = array (
    'firstname' => 'Juan',
    'lastname' => 'Pablo',
    'adress' => '3 Paradijsestraat',
    'city' => 'Antwerpen'
    );
    //Pour afficher les informations voulues 
    echo $user['lastname'];
?>
