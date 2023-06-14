<html>
    <body>
        <form action="form.php" method="post">
            <textarea name="biography">I was born in...</textarea>  
            <input name="fullname" type="text" value="Jeanne Maes">
            <input name="age" type="number" value="18">
        </form>
    </body>
</html>
<?php
    echo "<pre>";
    print_r($_POST);
    
    //Form processing, examples : 

    // 1. Sanitization
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    /*
    filter_var() : filtre une variable avec un filtre spécifique. Ici le filtre est 'FILTER_SANITIZE_EMAIL', il permet de retirer tous les caractères ) l'exception de lettres, chiffres et !#$%&'*+-=?^_`{|}~@.[]. Il existe d'autres filtres 'sanitize' > https://www.php.net/manual/en/filter.filters.sanitize.php
    */

    // 2. Validation : vérifie que les données fournies sont adaptées aux contraintes de votre application.
    if (true === filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "This cleaned email address is considered valid.";
    } else {
        echo "This cleaned email address is not valid. Sorry. xoxo."; 
    }
    /*
    **Lors de la construction d'une validation, au moins une condition est toujours utilisée. ** Si la variable "cleaned" passe la validation, elle est exécutée. En d'autres termes, nous faisons ceci, sinon nous faisons cela.
    */

    // 3. Execute
    // we initiate an array that will contain any potential errors.
    $errors = array();
    // 1. Sanitisation
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    // 2. Validation
    if (false === filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "This address is invalid."; 
    }

    // 3. execution
    if (count($errors)> 0){
        echo "There are mistakes!";
        print_r($errors);
        exit;
    }
    // If we get here, it's because everything's fine, we can record
    $bdd = new PDO('mysql:host=localhost;dbname=test','root', '');
    //...


    // 4. Display the response interface.



?>


