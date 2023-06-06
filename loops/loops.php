<?php
    //Boucle Foreach:
    // $plates= array(1, 2, 3, 4, 5, 57 );
    // foreach( $plates as $plate){
	// wash_plate();
    // //For each element of the array $plates, call it $plate then apply the instruction : wash_plate().
    // }

    $names= array('John ', 'jeanne ', 'Joan ', 'emile');
    foreach ($names as $name){
	// echo ucfirst($name);
    //Fonction ucfirst($string): permet de mettre une majuscule à la première lettre de chaque string > à l'affichage
    }

    $names= array('John', 'jeanne', 'Joan', 'émile');
    // var_dump($names);
    foreach ($names as $key => $value){
        $names[$key] = ucfirst($value);
        //Ici on applique la majuscule à la première lettre à l'affichage mais aussi dans le code, donc dans l'array.
    }
    // var_dump($names);

    //Exercices : foreach
    $pronouns = array ('I ', 'You ', 'He/She ','We ', 'You ', 'They ');
    //Appliquer foreach pour affiché chaque élément de l'array: 
    foreach ($pronouns as $key){
        // echo $key; 
    }
    // var_dump($pronouns);

    foreach($pronouns as $key => $value){//Demander une vérification
        $key = $value; 
        $value = 'code <br>';
        // echo $key;  
        // echo $value; 
    }
    //Exercices : while loop
    //Exemple:
    $amount_of_lines = 1;
    while ($amount_of_lines <= 100){
        // echo $amount_of_lines . ". : I shall not watch flies fly when I'm learning PHP.<br />";
        // shorthand writing for 
        // $amount_of_lines = $amount_of_lines +1;
        $amount_of_lines ++; 
    }
    //Faire apparaître les nombres de 1 à 120 avec While: 
    $number =1; 
    while($number<=120){
        // echo $number."<br>"; 
        $number ++; 
    }


        //Exercices : for loop
        //Exemple: 
        for ($amount_of_lines = 1; $amount_of_lines <= 100; $amount_of_lines ++){
    // echo $amount_of_lines . ". : I shall not watch flies fly when I'm learning PHP.<br />";
    }
        //Faire apparaître les nombres de 1 à 120 avec For: 
        for ($number=1; $number<=120; $number++){
            // echo $number."<br>"; 
        }

    //Afficher le nom de tous les apprenants
    $learner = ['Jodie','Nikko','Louka','Marine','Alexandra','Steve','Abel','Noa','Benjamin','Julien','Delphine','Willy','Thomas','Ismael','Sylvain','Ethan','Bruno','Emilien','Luciano','Loïc','Anthony'];
    foreach($learner as $names){
        // echo 'Learner name: '.$names.'<br>'; 
    }

    //Formulaire : sélection d'un pays
    $countries = ['Belgium','Italy','Spain','Switzerland', 'Portugal', 'Croatia', 'France',' Netherlands','Germany', 'Poland'];
    // print_r($countries); 
?>
<html>
    <body>
        <form action="" method="get">
            <select name="" id="">
                <?php
                    foreach($countries as $name){
                        echo '<option>' . $name . '</option><br>'; 
                    }
                ?>
            </select>
        </form>
    </body>
</html>

<?php
    //Edit de l'array $countries pour ajourer l'ISO comme key
    $ISO = ['BE'=>'Belgique','ITA'=>'Italie','ES'=>'Espagne','SWE'=>'Suisse','PT'=>'Portugal','HR'=>'Croatie','FRA'=>'France','NL'=>'Pays-Bas','DEU'=>'Allemagne','PL'=>'Pologne']; 
    var_dump($ISO); 
?>
<html>
    <body>
        <form action="" method="get">
            <select name="" id="">
                <?php
                    foreach($ISO as $code => $value){
                        echo '<option value =' . $code . '>' . $value . '</option><br>'; 
                    }
                ?>
            </select>
        </form>
    </body>
</html>