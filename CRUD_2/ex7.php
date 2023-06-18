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
    <h3>Clients : création, modification et suppression de données</h3>
        <h4>Form to add client : </h4>
        <form action="" method="post">
            <label for="client_number">Client number</label>
            <input type="text" name="client_number"><br>
            <label for="lastname">Lastname</label>
            <input type="text" name="lastname"><br>
            <label for="firstname">Firstname</label>
            <input type="text" name="firstname"><br>
            <label for="birth_date">Birth date</label>
            <input type="date" name="birth_date"><br>
            <label for="card_fidelity">Fidelity customer card</label>
            <input type="checkbox" name="card_fidelity"><br>
            <label for="number_card">Card number</label>
            <input type="text" name="number_card"><br>
            <input type="submit" name="create" value="Create">
            <!-- Insertion de nouvelles données -->
            <?php 
            if( isset($lastName) || !empty($lastName) || isset($firstname) || !empty($firstname) || isset($birth_date) || !empty($birth_date) || isset($card_fid) || isset($number_card)){
                $lastname = $_POST['lastname'];
                $firstname = $_POST['firstname'];
                $birth_date = $_POST['birth_date']; 
                $card_fid = $_POST['card_fidelity'];
                $number_card = $_POST['number_card']; 
                if(isset($_POST['create']) == "Create"){
                    $add_client = $pdo->prepare('INSERT INTO clients (lastName, firstName, birthDate, card, cardNumber) VALUE (:lastName, :firstName, :birthDate, :card, :cardNumber;');
                    $add_client->execute([
                        'lastName' => $lastname, 
                        'firstName' => $firstname, 
                        'birthDate' => $birth_date, 
                        'card' => $card_fid, 
                        'cardNumber' => $number_card, 
                    ]); 
                    if($_POST['card_fidelity']){
                        echo $card_fid = "1"; 
                        !empty($number_card); 
                    } else {
                        echo $card_fid = "0"; 
                    }
                }
            }
            ?>
        <hr>
        <h4>Data modification : </h4>
        <form action="" method="post">
            <label for="number_modif">Client number</label>
            <input type="text" name="number_modif"><br>
            <label for="lastname_modif">Lastname</label>
            <input type="text" name="lastname_modif"><br>
            <label for="firstname_modif">Firstname</label>
            <input type="text" name="firstname_modif"><br>
            <label for="birth_modif">Birth date</label>
            <input type="date" name="birth_modif"><br>
            <label for="card_modif">Fidelity customer card</label>
            <input type="checkbox" name="card_modif"><br>
            <label for="number_card_modif">Card number</label>
            <input type="text" name="number_card_modif"><br>
            <input type="submit" name="modification" value="Modification">
        </form>
        <?php 
        if(isset($nameModif) || !empty($nameModif) || isset($firstnameModif) || !empty($firstnameModif) || isset($birth_modif) || !empty($birth_modif) || isset($card_modif) || !empty($card_modif) || isset($number_modif) || !empty($number_modif)){
            $nameModif = $_POST['lastname_modif'];
            $firstnameModif = $_POST['firstname_modif'];
            $birth_modif = $_POST['birth_modif'];
            $card_modif = $_POST['card_modif'];
            $number_modif = $_POST['number_card_modif']; 
            if(isset($_POST['modification'])){
                $modification = $pdo->prepare('UPDATE clients SET lastName=(:lastname_modif), firstName=(:firstname_modif), birthDate=(:birth_modif), card=(:card_modif), cardNumber=(:number_card_modif) WHERE id=(:number_modif);');
                $modification->execute([
                    'lastname_modif' => $nameModif,
                    'firstname_modif' => $firstnameModif, 
                    'birth_modif' => $birth_modif, 
                    'card_modif' => $card_modif, 
                    'card_number_modif' => $number_modif, 
                ]);
            }
        }
        ?>
        <h4>Summary table</h4>
        <table>
            <th>Lastname</th>
            <th>Firstname</th>
            <th>Birth date</th>
            <th>Card</th>
            <th>Card number</th>
            <?php 
            $display_tab = $pdo->prepare('SELECT * FROM clients');
            $display_tab->execute();
            $display_tab_data = $display_tab->fetchAll(); 
            ?>
            <?php foreach($display_tab_data as $row_data): ?>
                <tr>
                    <td><?php echo $row_data['lastName']; ?></td>
                    <td><?php echo $row_data['firstName']; ?></td>
                    <td><?php echo $row_data['birthDate']; ?></td>
                    <td><?php echo $row_data['card']; ?></td>
                    <td><?php echo $row_data['cardNumber']; ?></td>
                </tr>
                <?php endforeach; ?>
        </table>
    </body>
</html>