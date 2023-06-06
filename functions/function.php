<?php
    //DRY : 
    //First, you need to declare the function to make it available. It is stored in memory, not ran => DRY appliqué, on ne répète pas 4 fois le même code
    function say_hello($firstname){
        echo "<p>Hello $firstname!</p>";
        echo '<hr>';
    }
    // Function calls during "Runtime" :
    say_hello("Maurice"); 
    say_hello("Alice");
    say_hello("Jésus");
    say_hello("Judas");

    //Functions : 
    /**
     * function is a keyword that tells PHP you want to declare a function.
    *make_orange_juice is the function name. Choose a name that make it clear what it does.
    *$oranges is called an argument. It can be whatever you want.
    *return stops the function processing and makes available the result outside the factory. (here: the content of $juice).
     */
    function make_orange_juice($oranges){
        // do things to $input, for example : capitalize it
        $juice = squash($oranges);
        //then return it to get it out of the factory
        return $juice;
    }

    //Native functions: 
    $str = 'This is going to be shuffled !';
    $str = str_shuffle($str);//shuffle = mélanger. Cette fonction mélange les lettres du string désigné.

echo $str;


?>