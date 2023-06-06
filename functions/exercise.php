<?php
    //Exercise 1: Mélanger les lettres dans chaque mot se trouvant dans l'array Txt
    $Txt = ["Ceci", "est" ,"un", "extrait" ,"de", "texte",",","qui","applique" ,"une", "fonction", "shuffle","," ,"qui" ,"permet", "de", "mélanger", "les", "lettres", "dans", "un","élément", "donné"]; 
    // var_dump($Txt);
    foreach($Txt as $word => $value){
        $stuffle = str_shuffle($value);
        // echo $stuffle." "; 
    }
    //Autre solution possible:
    $str= "According to a researcher (sic) at Cambridge University , it doesn't matter in what order the letters in a word are, the only important thing is that the first and last letter be at the right place. The rest can be a total mess and you can still read it without problem. This is because the human mind does not read every letter by itself but the word as a whole .";
    $str= explode(" ", $str);//explode() casse le texte en array
    foreach ($str as $word){
        // echo str_shuffle($word)." ";
    }

    //Exercices : suite ...
    //Use a function that capitalizes the first letter of the provided argument: 
    function capitalize($word){
        echo ucfirst($word).'<br>'; 
    }
    capitalize('jodie'); 

    //Use the native function allowing you to display the current year: 
    echo date('Y').'<br>'; 
    //Argument Y: pour 'year'.

    //Now display the date, time, minutes and seconds, using the same function, by playing with the arguments: 
    echo date('l jS \of F Y h:i:s A').'<br>'; 
    /* Les arguments: 
    l: A full textual representation of a day
    j: The day of the month without leading zeros (1 to 31)
    S: The English ordinal suffix for the day of the month (2 characters st, nd, rd or th. Works well with j)
    F:  A full textual representation of a month (January through December)
    h: 12-hour format of an hour (01 to 12)
    i: Minutes with leading zeros (00 to 59)
    s: Seconds, with leading zeros (00 to 59)
    A:  Uppercase AM or PM
    */

    //Create a "Sum" function that takes 2 numbers and returns their sum:
    function Sum ($number1, $number2){
        return $number1+$number2; 
    }
    // echo Sum(20,36); 

    //Improve that function (below) so that it checks whether the argument is indeed a Number. If not, it should display : "Error: argument is the not a number.": 
    function Num ($number1, $number2){
        if(is_numeric($number1) && is_numeric($number2)){
            echo $number1 + $number2; 
        } else{
            echo 'Error: argument is the not a number.<br>'; 
        }
    }
    Num(30,'test'); //Ok

    //Create a function that takes as argument a string of characters and returns an acronym made of the initials of each word. Example: "In code we trust!" should return: ICWT).
    function acronym_creation($string){
        $acronym = ""; 
        $string = ucwords($string);//majuscule sur la 1ère lettre
        $words = explode(" ","$string");//Casse la phrase en mots 
        // print_r($words); 
        foreach($words as $word){
            // echo $word; 
            $acronym .= $word[0];//Pour chaque mot, on sélectionne la première lettre. ".=" : Concatenation assignment
        }
        return $acronym."<br>"; //on retourne la valeur de la variable $acronym
    }
    echo acronym_creation("hello world"); 


    //Create a function that replaces the letters "a" and "e" with "æ".
    $mot = ["caecotrophie", "chaenichthys","microsphaera", "sphaerotheca"]; 
    // print_r($mot); 
    function replace($mot){
        foreach($mot as $caractere){
            echo $letter = strtr($caractere, 'ae','æ')."<br>";
            //strtr($string, $from, $to) : Remplace des caractères dans une chaîne
        }
        return $mot; 
    }
    replace($mot); 
    //Create the opposite function, which replaces "æ" by "ae": 
    function back_to($mot){//on reprend le même array qui avait été modifié avec replace()
        foreach($mot as $caractere){
            echo $letter = strtr($caractere,'æ', 'ae')."<br>";
        }
        return $mot; 
    }
    back_to($mot); 

    //Create a function to return "notice", "warning" and "error" messages to a user,which takes 2 arguments : the "message", and the "css class" (values: "info", "error", "warning")
    $class = 'info'; 
    function alert($message, $class){
        return '<div class='  . $class . '>' . $class . ': '. $message . '</div><br>'; 
    }
    echo alert('Incorrect email address',$class); 


    //Create a random words generator, outputing 2 words: one which length is between 1 to 5 letters, the other between 7 and 15 letters. The screen will display a title "Generate a new word", and then the two generated words, and underneath, a bouton with the text "Generate").
    //chr() : retourne une chaine de caractère avec la valeur ASCII attribuée
    //rand() : génère un nombre aléatoire dans un interval donné
    $length1 = rand(1,5);
    $length2= rand(7,15);
    //range() : 
    foreach (range('a', 'z') as $alphabet) {
        echo $alphabet." ";
    }

?>
<html>
    <body>
        <h1>Generate a new word</h1><br>
        <input type="button" value="Generate">
        <p></p>

    </body>
</html>
<?php
    //De-capitalize the string: 
    $capitalize = "STOP YELLING I CAN'T HEAR MYSELF THINKING!!"; 
    echo strtolower($capitalize).'<br>'; 


    //In your new job, you have to maintain the code of a former developer. Make it DRY by creating a custom function calculate_cone_volume :
        function coneVolume ($ray, $height){
            $volume = (pow($ray, 2)*pi()*$height)/3; 
            return 'The volume of a cone which ray is ' . $ray . ' and height is '. $height . ' = ' . $volume . ' cm<sup>3</sup><br />';  
        }
        echo coneVolume(5,2); 
        echo coneVolume(3,4); 
?>