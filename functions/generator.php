<?php
/*
Create a random string generator, outputing 2 strings: one which length is between 1 to 5 letters, the other between 7 and 15 letters. The screen will display a title "Generate a new word", and then the two generated words, and underneath, a bouton with the text "Generate").
*/
    
    function randomPassword($length){
        //Caractère qui serviront à la création du mot de passe: 
        $character = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        // strlen() : fonction qui calcule la taille d'une chaine de caractère: 
        $string_length = strlen($character);
        //Initialisation d'une variable qui sortira les mots de passe aléatoires
        $password = ''; 
        for ($i=0 ; $i < $length ; $i ++){
            $password .= $character[random_int(0, $string_length - 1)]; 
            //random_int(): génère un nombre entier uniformément sélectionné et sécurisé sur le plan cryptographique.
        }
        return $password ;
    }
    // echo randomPassword(rand(0,8)); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jodie Addis">
    <title>Password Generator</title>
</head>
<body>
    <h1>Password Generator</h1>
    <form action="" method="post">
        <label for="length">6 letters</label>
        <input type="radio" name="length" value="6">
        <label for="length">10 letters</label>
        <input type="radio" name="length" value="10">
        <input type="submit" value="Generate">
    </form>
    <p>Your new password is " <?php echo randomPassword($_POST['length']); ?> "</p>
</body>
</html>