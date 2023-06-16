<?php
    //Connexion à la DB
    try
    {
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
        <h3>Formulaire </h3>
        <form action="" method="post">
            <label for="nom">Nom: </label>
            <input type="text" name="nom"><br>
            <label for="prenom">Prénom: </label>
            <input type="text" name="prenom"><br>
            <label for="birth">Date de naissance: </label>
            <input type="date" name="birth"><br>
            <label for="fidelite">Cart de fidélité: </label>
            <label for="fidelite">Oui</label>
            <input type="radio" name="card_client" value="Oui">
            <label for="fidelite">Non</label>
            <input type="radio" name="card_client" value="Non"><br>
            <label for="card_number">Numéro de carte : </label>
            <input type="number" name="card_number_client"><br>
            <input type="submit" name="submit" value="submit">
        </form>
        <hr>
        <h3>Tableau récapitulatif</h3>
        <?php
        //Affichage du tableau avec les données des clients
        $tab = $pdo->prepare('SELECT * FROM clients
        LEFT JOIN cards ON cards.cardNumber = clients.cardNumber
        LEFT JOIN cardtypes ON cardtypes.id = cards.cardTypesId;
        ');
        $tab->execute(); 
        $tab_client = $tab->fetchAll(); 
        ?>
        <table>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Date de naissance</th>
            <th>Carte</th>
            <th>Numéro de carte</th>
            <th>Type de carte</th>
            <?php foreach($tab_client as $data_client): ?>
                <tr>
                    <td><?php echo $data_client['lastName']; ?></td>
                    <td><?php echo $data_client['firstName']; ?></td>
                    <td><?php echo $data_client['birthDate']; ?></td>
                    <td><?php echo $data_client['card']; ?></td>
                    <td><?php echo $data_client['cardNumber']; ?></td>
                    <td><?php echo $data_client['type']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
        <?php
        //Vérification de l'existence des variables + que le champ ne doit pas rester vide pour certains paramètres
        if((isset($_POST['nome'])) || !empty($_POST['nom']) || (isset($_POST['prenom'])) || !empty($_POST['prenom']) || (isset($_POST['birth'])) || !empty($_POST['birth']) || (isset($_POST['card_client'])) || !empty($_POST['card_client']) || (isset($_POST['card_number_client']))){
            $lastName = ($_POST['nom']); 
            $firstName = ($_POST['prenom']); 
            $birth = ($_POST['birth']);
            $card = ($_POST['card_client']); 
            $cardNumber = ($_POST['card_number_client']);
            $typeCard = ($_POST['type_card']); 
            if(isset($_POST['submit'])){
                $newData = $pdo->prepare('INSERT INTO clients (lastName, firstName, birthDate, card, cardNumber) VALUE (:lastName, :firstName, :birthDate, :card, :cardNumber);'); 
                $newData->execute([
                    'lastName' => $lastName, 
                    'firstName' => $firstName,
                    'birthDate' => $birth, 
                    'card' => $card, 
                    'cardNumber' => $cardNumber,
                ]) or die(); 
                if($_POST['card_client'] == "Oui"){
                    echo $cardNumber; 
                } else {
                    NULL; 
                }
            }
            $newData->closeCursor(); 
        }
        ?>
        <hr>
        <hr>
        <h3>Spectacles : ajout d'informations</h3>
        <form action="" method="post">
            <label for="title">Title</label>
            <input type="text" name="title"><br>
            <label for="artist">Artist</label>
            <input type="text" name="artist"><br>
            <label for="date">Date</label>
            <input type="date" name="date"><br>
            <label for="type">Type spectacle</label>
            <input type="text" name="type"><br>
            <label for="genre_1">Genre 1</label>
            <input type="text" name="genre_1"><br>
            <label for="genre_2">Genre 2</label>
            <input type="text" name="genre_2"><br>
            <label for="duree">Durée</label>
            <input type="time" name="duree"><br>
            <label for="start">Horaire</label>
            <input type="time" min="21:00" max="00:00" name="start"><br>
            <input type="submit" value="Submit" name="submit">
        </form>
        <hr>
        <?php
        $show = $pdo->prepare('SELECT * FROM shows;');
        $show->execute();
        $show_data = $show->fetchAll(); 
        ?>
        <table>
            <th>Title</th>
            <th>Artist</th>
            <th>Date</th>
            <th>Show type</th>
            <th>First genre</th>
            <th>Second genre</th>
            <th>Duration</th>
            <th>Start Time</th>
            <?php foreach($show_data as $data): ?>
            <!-- Affichage des données -->
                <tr>
                    <td><?php echo $data['title']; ?></td>
                    <td><?php echo $data['performer']; ?></td>
                    <td><?php echo $data['date']; ?></td>
                    <td><?php echo $data['showTypesId']; ?></td>
                    <td><?php echo $data['firstGenresId']; ?></td>
                    <td><?php echo $data['secondGenreId']; ?></td>
                    <td><?php echo $data['duration']; ?></td>
                    <td><?php echo $data['startTime']; ?></td>
                </tr>
                <?php endforeach; ?>
        </table>
        <!-- Insertion de nouvelles données dans le tableau -->
        <?php
        if( isset($_POST['title']) || !empty($_POST['title']) || isset($_POST['artist']) || !empty($_POST['artist']) || isset($_POST['date']) || !empty($_POST['date']) || isset($_POST['type']) || !empty($_POST['type']) || isset($_POST['genre_1']) || !empty($_POST['genre_1']) || isset($_POST['genre_2']) || !empty($_POST['genre_2'])  || isset($_POST['duree']) || !empty($_POST['duree']) || isset($_POST['start']) || !empty($_POST['start'])){
            $title = ($_POST['title']);
            $artist = ($_POST['artist']); 
            $date = ($_POST['date']); 
            $type = ($_POST['type']); 
            $genre_1 = ($_POST['genre_1']);
            $genre_2 = ($_POST['genre_2']);
            $duration = ($_POST['duree']); 
            $startTime = ($_POST['start']); 
            if(isset($_POST['submit'])){
                $new_info = $pdo->prepare('INSERT INTO shows (title, perfomer, date, showTypesId, firstGenresId, secondGenreId, duration, startTime) VALUE (:title, :perfomer, :date, :showTypesId, :firstGenresId, :secondGenreId, :duration, :startTime) ;'); 
                $new_info->execute([
                    'title' =>$title,
                    'performer' => $artist,
                    'date' => $date, 
                    'showTypesId' => $type, 
                    'firstGenresId' => $genre_1, 
                    'secondGenreId' => $genre_2, 
                    'duration' => $duration, 
                    'startTime' => $startTime
                ]) or die(); 
            }
        }
        ?>
        <hr>
        <hr>

        <h3>Spectacles : modification des informations (Update)</h3>
    </body>
</html>