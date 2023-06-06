<html>
    <body>
        <form action="" method="get">
            <label for="name">Name: </label>
            <input type="text" name="name">
            <label for="gender">Gender: </label>
            <label for="gender">Girl</label>
            <input type="radio" name="gender" value="Girl">
            <label for="gender">Boy</label>
            <input type="radio" name="gender" value="Boy">
            <label for="teacher">Tearcher's name</label>
            <input type="text" name="teacher">
            <label for="reason">Reason: </label>
            <label for="reason">maladie</label>
            <input type="radio" name="reason" value="maladie">
            <label for="reason">décès</label>
            <input type="radio" name="reason" value="décès">
            <label for="reason">activité extrascolaire importante</label>
            <input type="radio" name="reason" value="activité extrascolaire importante">
            <label for="reason">rendez-vous médical</label>
            <input type="radio" name="reason" value="rendez-vous médical">
            <input type="submit" value="submit">
        </form>
        <?php

        $excuse = array(
            0 => "Madame ".($_GET['teacher']).", ".($_GET['name'])." sera ".(($_GET['gender']) == "Girl" ? "absente":"absent")." aujourd'hui pour cause de ".($_GET['reason']).".".(($_GET['gender']) == "Girl" ? "elle":"il")." ne pourra pas assister aux cours aujourd'hui et durant les prochains jours. Merci de votre compréhension.",
            1 => "Madame".($_GET['teacher']).", ".($_GET['name'])." sera ".(($_GET['gender']) == "Girl" ? "absente":"absent")." aujourd'hui et demain pour cause de ".($_GET['reason'])." d'un membre de la famille. Merci de votre compréhension",
            2 => "Madame ".($_GET['teacher'])." mon enfant ".($_GET['name'])." sera ".(($_GET['gender']) == "Girl" ? "absente":"absent")." jeudi et vendredi en raison d'une ".($_GET['reason']).", ".(($_GET['gender']) == "Girl" ? "elle":"il")." travaillera ses cours ce weekend afin de ne pas prendre de retard dans le programme scolaire. Merci de votre compréhension.", 
            3 => "Madame ".($_GET['teacher']).", ".($_GET['name'])." doit se rendre à un ".($_GET['reason'])."ce mardi, ".(($_GET['gender']) == "Girl" ? "elle":"il")." sera donc ".(($_GET['gender']) == "Girl" ? "absente":"absent")." toute la journée. Un certificat médical vous sera remis le lendemain. Merci de votre compréhension.", 
        ); 

        if(isset($_GET['name']) AND isset($_GET['gender']) AND isset($_GET['teacher']) AND isset($_GET['reason'])){
            if(($_GET['reason']) =="Maladie"){
                echo $excuse[0]; 
            } else if (($_GET['reason']) =="Décès"){
                echo $excuse[1]; 
            } else if (($_GET['reason']) =="Activité extrascolaire importante"){
                echo $excuse[2];
            } else if (($_GET['reason']) =="Rendez-vous médical"){
                echo $excuse[3]; 
            }
        }
        ?>

    </body>
</html>