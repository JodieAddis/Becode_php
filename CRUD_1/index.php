<?php
    //Récupération des données de la DB Becode
    try
    {
        // On se connecte à MySQL
        $pdo = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
        // En cas d'erreur, on affiche un message et on arrête tout
            die('Erreur : '.$e->getMessage());
    }
?>
<html>
    <body>
        <h1>CRUD : exercises (part 1)</h1>
        <h3>1. Clients: </h3>
            <table>
                <th>LastName</th>
                <th>FirstName</th>
                <th>BirthDate</th>
                <th>Card</th>
                <th>CardNumber</th>
                <?php
                //1. Afficher tous les clients
                $clients = $pdo->prepare('SELECT * FROM clients ;'); 
                $clients->execute();
                $tab = $clients->fetchAll(); 
                ?>
                <?php foreach($tab as $row): ?>
                    <tr>
                        <td><?php echo $row['lastName']; ?></td>
                        <td><?php echo $row['firstName']; ?></td>
                        <td><?php echo $row['birthDate']; ?></td>
                        <td><?php echo $row['card']; ?></td>
                        <td><?php echo $row['cardNumber']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <hr>
        <h3>2. Show types:</h3>
            <?php
            //2.Afficher tous les types de spectacles possibles
            $show_types = $pdo->prepare('SELECT type FROM showTypes'); 
            $show_types->execute(); 
            $show = $show_types->fetchAll();
            ?>
            <?php foreach($show as $type): ?>
            <p> Type: <?php echo $type['type']; ?></p>
            <?php endforeach;?>
        <hr>
        <h3>3. 20 premiers clients:</h3>
            <?php 
            //3. Afficher les 20 premiers clients.
            $twenty = $pdo->prepare('SELECT id, lastName, firstName FROM clients WHERE id<="20"'); 
            $twenty->execute(); 
            $twenty_clients = $twenty->fetchAll(); 
            ?>
            <table>
                <th></th>
                <?php foreach($twenty_clients as $first_clients): ?>
                    <tr>
                        <td><?php echo $first_clients['id']; ?></td>
                        <td><?php echo $first_clients['lastName']; ?></td>
                        <td><?php echo $first_clients['firstName']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <hr>
        <h3>4. Clients possédant une carte de fidélité</h3>
            <?php
            $card = $pdo->prepare('SELECT lastName, firstName FROM clients 
            LEFT JOIN cards ON cards.cardNumber = clients.cardNumber
            LEFT JOIN cardtypes ON  cardtypes.id = cards.cardTypesId
            WHERE type = "Fidélité" ; 
            '); 
            $card->execute(); 
            $type_card = $card->fetchAll(); 
            ?>
            <?php foreach($type_card as $fidelite): ?>
                <p>Nom client fidèle: <?php echo $fidelite['lastName']; ?></p>
            <?php endforeach; ?>
        <hr>
        <h3>5. Nom et prénom des clients dont le nom commence par la lettre "M"</h3>
            <?php
            $M_word = $pdo->prepare('SELECT lastName FROM clients
            WHERE lastName LIKE "M%"
            ORDER BY lastName ASC;');
            $M_word->execute(); 
            $M_word_client = $M_word->fetchAll(); 
            ?>
            <?php foreach($M_word_client as $M_lastName): ?>
                <p>Nom: <?php echo $M_lastName['lastName']; ?></p>
            <?php endforeach; ?>
        <hr>
        <h3>6. Afficher le titre de tous les spectacles ainsi que l'artiste, la date et l'heure.</h3>
            <?php 
            $show_data = $pdo->prepare('SELECT performer, title, date, startTime FROM shows');
            $show_data->execute(); 
            $show_schedule = $show_data->fetchAll(); 
            ?>
                <table>
                    <th>Artist</th>
                    <th>Show Title</th>
                    <th>Date</th>
                    <th>Start Time</th>
                    <?php foreach($show_schedule as $information): ?>
                    <tr>
                        <td><?php echo $information['performer'];?></td>
                        <td><?php echo $information['title'];?></td>
                        <td><?php echo $information['date'];?></td>
                        <td><?php echo $information['startTime'];?></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            <hr>
            <h3>7. Afficher les informations des clients comme suit : </h3>
                <?php
                $new_tab = $pdo->prepare('SELECT * FROM clients 
                LEFT JOIN cards ON cards.cardNumber = clients.cardNumber
                LEFT JOIN cardtypes ON  cardtypes.id = cards.cardTypesId ; 
                '); 
                $new_tab->execute(); 
                $new_tab_client = $new_tab->fetchAll(); 
                ?>
                <?php foreach($new_tab_client as $data): ?>
                    <p>Nom : <?php echo $data['lastName']; ?></p>
                    <p>Prénom : <?php echo $data['firstName']; ?></p>
                    <p>Date de naissance : <?php echo $data['birthDate']; ?></p>
                    <p>Carte de fidélité :  <?php if($data['type'] == 'Fidélité'){
                        echo "Oui"; 
                    }else {
                        echo "Non"; 
                    }; ?></p>
                    <p>Numéro de carte :  <?php if($data['type'] == 'Fidélité'){
                        echo $data['cardNumber']; 
                    } else{
                        echo "Non"; 
                    }; ?></p>
                    <hr>
                <?php endforeach; ?>
        
    </body>
</html>