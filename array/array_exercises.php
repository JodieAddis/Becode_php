<?php
    //Création d'un array associatif:
    $me = array(
        'firstname' => 'Jodie',
        'lastname' => 'Addis',
        'age' => '30 years old', 
        'favourite season'=> 'spring', 
        'Do you like soccer' => 'false'
    ); 
    // echo '<pre>';
    // print_r($me);
    // echo '</pre>';

    //Création d'un array multidimensionnel = inclure un array dans un autre array: 
    $me = array(
        'firstname' => 'Jodie',
        'lastname' => 'Addis',
        'age' => '30 years old', 
        'favourite season'=> 'spring', 
        'Do you like soccer' => 'false',
        'Favourite movies' => array('alien', 'Interstallar', 'Avatar', 'Blade Runner')
    );
    // echo '<pre>';
    // print_r($me);
    // echo '</pre>';

    //EXERCICES 

    $me['hobbies'] = array('Drawing','Listening music','Travelling','Photography'); 
    $sister['hobbies'] = array('Gaming','Reading','Travelling'); 
    $me['sister'] = $sister; 
    // echo '<pre>';
    // print_r($me); 
    // echo'</pre>'; 

    //Fonction qui permet de compter le nombre d'élément dans un array:
    var_dump(count($me));//Donne le nombre d'élément de l'arra "me"
    $my_hobbies = $me['hobbies'];//Sélectionne les éléments de 'hobbies'
    // var_dump($my_hobbies);
    $hobbies_sister = $me['sister']; 
    // var_dump($hobbies_sister);
    // echo count($my_hobbies);
    $hobbies_count = $hobbies_sister['hobbies']; 
    // echo count($hobbies_count); 
    $count_one = count($my_hobbies); 
    $count_two = count($hobbies_count); 
    //Addition des deux totaux et afficher le nombre total de hobbies:
    // echo $count_one + $count_two; 

    //Additionner un nouvel élément dans l'array 'hobbies': 
    $me['hobbies'][] ='Taxidermy '; 
    // print_r($me); 

    //Remplacer une valeur dans un array: 
    $me['lastname'] = 'Durand'; 
    // echo $me['lastname']; 

    //Créer un nouvel array à partir de 2 autres array
    $soulmate = array(
        'firstname' => 'Kyle',
        'lastname' => 'Valenti',
        'age' => '35 years old', 
        'favourite season'=> 'summer', 
        'Do you like soccer' => 'yes',
        'Favourite movies' => array('ghostbuster', 'Inception', 'Avatar', 'Blade Runner'),
        'hobbies' => array('Running', 'Listening music', 'Singing', 'Playing guitar','Travelling')
    );
    $soulmate_hobbies = $soulmate['hobbies']; 
    // var_dump($soulmate_hobbies); 
    $intersect_result = array_intersect($my_hobbies, $soulmate_hobbies);
    //array_intersect : Compare les hobbies et ressort un array avec les hobbies communs. Attention, case sensitive !
    // var_dump($intersect_result);
    $merge_result = array_merge($my_hobbies, $soulmate_hobbies); 
    //array_merge: fusionne le contenu des arrays
    var_dump($merge_result); 

    //More array exercises

    $web_development = array(
        'frontend' => '', 
        'backend' => '', 
    ); 
    //Ajout de valeurs aux clés existantes : 
    $web_development['frontend'] = ['xhtml','CSS','JavaScript']; 
    $web_development['backend'] = ['Ruby on Rails','Flash']; 
    // print_r($web_development); 
    $frontend = $web_development['frontend']; 
    $frontend[0] = 'html'; 
    // print_r($frontend);
    $backend = $web_development['backend']; 
    //Fonction unset($array[index]) pour supprimer un élément
    unset($backend[1]); 
    print_r($backend); 
?>