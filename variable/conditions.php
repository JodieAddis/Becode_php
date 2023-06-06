<html>
<head><title>Hi!</title></head>
<body>
    <?php
    /**
     * Series of exercises on PHP conditional structures.
    */  
    // 1.1 Clean your room Exercise
    // $room_is_filthy = true;
    // if( $room_is_filthy = true){
    //     echo "Yuk, Room is dirty : let's clean it up !";
    //     // cleanup_room();
    //     echo "<br>Room is now clean!";
    //     $room_is_filthy = false;//Une fois nettoyé, on met la variable sur false. 
    // } else {
    //     echo "<br>Nothing to do, room is neat.";
    // }
    // ?>

    <!-- <?php
    $possible_states=array (
        0 => "health hazard", 
        1 => "filthy", 
        2 => "dirty", 
        3 => "clean", 
        4 => "immaculate"); 

        $room_filthiness = $possible_states[2];

        if($room_filthiness = false){
            echo "Leave this room and burn it for your life";
        } else if ($room_filthiness = false){
            echo "Nobody taught you how to clean ?"; 
        }else if ($room_filthiness = false){
            echo "Please, you need to clean your room"; 
        } else if ($room_filthiness = true){
            echo "Your room is so clean";
        }else {
            "It looks like a sterile room"; 
        }
?> -->

<!-- <?php
    // 2. "Different greetings according to time" Exercise

    $now = date("H:i"); // How to get the current time in PHP ? Google is your friend ;-)
    // echo "The time is ".$now; 
    // Test the value of $now and display the right message according to the specifications.
        if ($now >= "05:00" AND $now <= "09:00"){
            echo "Good morning !"; 
        } else if ($now >= "09:01" AND $now <= "12:00"){
            echo "Good day!"; 
        } else if ($now >= "12:01" AND $now <= "16:00"){
            echo "Good afternoon !"; 
        } else if ($now >= "16:01" AND $now <= "21:00"){
            echo "Good evening!"; 
        } else if ($now >= "21:01" AND $now <= "04:59"){
            echo "Good night!"; 
        }
?> -->

<!-- <?php
    // 3. "Different greetings according to age" Exercise

if (isset($_GET['age']) AND isset($_GET['gender']) AND isset($_GET['language'])){
    if (isset(($_GET['age'])) < 12 AND ($_GET['gender']) == "Woman" AND ($_GET['language']) == "Yes"){
        echo "Hello Girl!"; 
        } else if ($_GET['age'] < 12 AND ($_GET['gender']) == "Woman" AND ($_GET['language']) == "No"){
            echo "Aloha Girl !"; 
        } else if (($_GET['age']) < 12 AND ($_GET['gender']) == "Man" AND ($_GET['language'] == "Yes")){
            echo "Hello Boy !"; 
        }else if (($_GET['age']) < 12 AND ($_GET['gender']) == "Man" AND ($_GET['language'] == "No")){
            echo "Aloha Boy !"; 
        } else if (($_GET['age']) >= 12 AND ($_GET['age'])<= 18 AND ($_GET['gender']) == "Woman" AND ($_GET['language']) == "Yes"){
            echo "Hello Miss Teen !";
        }else if (($_GET['age']) >= 12 AND ($_GET['age'])<= 18 AND ($_GET['gender']) == "Woman" AND ($_GET['language']) == "No"){
            echo "Aloha Miss Teen !";
        } else if (($_GET['age']) >= 12 AND ($_GET['age'])<= 18 AND ($_GET['gender']) == "Man" AND ($_GET['language']) == "Yes"){
            echo "Hello Mister Teen !";
        }else if (($_GET['age']) >= 12 AND ($_GET['age'])<= 18 AND ($_GET['gender']) == "Man" AND ($_GET['language']) == "No"){
            echo "Aloha Mister Teen !";
        } else if (($_GET['age']) >= 18 AND ($_GET['age'])<= 115 AND ($_GET['gender']) == "Woman" AND ($_GET['language']) == "Yes"){
            echo "Hello Mrs !"; 
        }else if (($_GET['age']) >= 18 AND ($_GET['age'])<= 115 AND ($_GET['gender']) == "Woman" AND ($_GET['language']) == "No"){
            echo "Aloha Mrs !"; 
        } else if (($_GET['age']) >= 18 AND ($_GET['age'])<= 115 AND ($_GET['gender']) == "Man" AND ($_GET['language']) == "Yes"){
            echo "Hello Sir !"; 
        }else if (($_GET['age']) >= 18 AND ($_GET['age'])<= 115 AND ($_GET['gender']) == "Man" AND ($_GET['language']) == "No"){
            echo " Sir !"; 
        } else if (($_GET['age']) > 115){
            echo "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?"; 
        }
}

?>
<form method="get" action="">
	<label for="age">Age</label>
	<input type="number" name="age">
    <label for="gender">Gender :</label>
    <input type="radio" value="Woman" name="gender"><label for="gender">Woman.</label>
    <input type="radio" value="Man" name="gender"><label for="gender">Man.</label>
    <label for="gender">Do you speak English?</label>
    <input type="radio" value="Yes" name="language"><label for="language">Yes</label>
    <input type="radio"  value="No" name="language"><label for="language">No</label>
    <input type="submit" name="submit" value="Greet me now">
</form> -->


<!-- <form method="get" action="">
    <label for="name">Name: </label>
	<input type="text" name="name">
    <label for="age">Age: </label>
	<input type="number" name="age">
    <label for="gender">Gender :</label>
    <input type="radio" value="Woman" name="gender"><label for="gender">Woman.</label>
    <input type="radio" value="Man" name="gender"><label for="gender">Man.</label>
    <input type="submit" name="submit" value="Let's go">
</form>
<?php
    $result = "Sorry ".$_GET['name'].", your profil doesn't fit the criteria."; 
    echo $result; 
    if(isset($_GET['age']) AND isset($_GET['gender']) AND isset($_GET['name'])){
        if($_GET['age'] >= 21 AND $_GET['age'] <= 40 AND $_GET['gender'] == "Woman"){
            echo $result = "Welcome to the team ".$_GET['name']." !";
        }
    }
?> -->


<form action="" method="get">
    <label for="note">Note: </label>
    <input type="number" name="note">
    <input type="submit" name="submit" value="Save">
</form>
<?php
if(isset($_GET['note'])){
    if (($_GET['note']) < 4){
        echo "This work is really bad. What a dumb kid!";
    } else if (($_GET['note']) >= 5 AND $_GET['note'] <=9){
        echo "This is not sufficient. More studying is required."; 
    } else if (($_GET['note']) == 10){
        echo "Barely enough!"; 
    } else if (($_GET['note'])== 11 OR ($_GET['note'])== 12 OR ($_GET['note'])== 13 OR ($_GET['note'])== 14){
        echo "Not bad !"; 
    } else if (($_GET['note'])== 15 OR ($_GET['note']) == 16 OR ($_GET['note'])== 17 OR ($_GET['note'])== 18){
        echo "Bravo, bravissimo!"; 
    } else if (($_GET['note']) == 19 OR ($_GET['note']) == 20){
        echo "Too good to be true : confront the cheater!"; 
    }
}
?>



</body>
</html>