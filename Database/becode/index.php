<?php
    //Récupération des données de la DB Becode
    try
    {
        // On se connecte à MySQL
        $pdo = new PDO('mysql:host=localhost;dbname=becode;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
        // En cas d'erreur, on affiche un message et on arrête tout
            die('Erreur : '.$e->getMessage());
    }
?>
<?php
    //Récupération des queries dans le fichier statements.sql
    $query = file_get_contents("statements.sql");

    // prepare the SQL statements :
	$data = $pdo->prepare($query);

    // execute the SQL : 
	if ($data->execute()){
		// echo "Success";
	}
	else {
		echo "Fail";
	}; 
?>
<html>
    <body>
        <table>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Age</th>
            <th>Sexe</th>
            <th>Ecole</th>
            <?php
            // $row = $data->fetch(PDO::FETCH_BOTH); 
            $tab = $data->fetchAll();
            // print_r($row); 
            foreach($tab as $row):?>
            <tr>
                <td><?php echo $row['Nom'];?></td>
                <td><?php echo $row['Prénom'];?></td>
                <td><?php echo $row['Anniversaire'];?></td>
                <td><?php echo $row['Sexe'];?></td>
                <td><?php echo $row['School'];?></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <h3>Prénoms des étudiants : </h3>
        <?php foreach($tab as $row): ?>
            <p>Prénom: <?php echo $row['Prénom']; ?></p>
        <?php endforeach; ?>
        <h3>Prénoms, age et sexe : </h3>
        <table>
            <th>Prénom</th>
            <th>Age</th>
            <th>Sexe</th>
            <?php foreach($tab as $row):?>
                <tr>
                <td><?php echo $row['Prénom'];?></td>
                <td><?php echo $row['Anniversaire'];?></td>
                <td><?php echo $row['Sexe'];?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>