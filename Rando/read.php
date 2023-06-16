<?php
    try
    {
        $pdo = new PDO('mysql:host=localhost;dbname=activity;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ajouter une randonnée</title>
	<link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
</head>
<body>
	<a href="/php-pdo/read.php">Liste des données</a>
	<h1>Ajouter</h1>
	<form action="" method="post">
		<div>
			<label for="name">Name</label>
			<input type="text" name="name" value="">
		</div>

		<div>
			<label for="difficulty">Difficulté</label>
			<select name="difficulty">
				<option value="très facile">Très facile</option>
				<option value="facile">Facile</option>
				<option value="moyen">Moyen</option>
				<option value="difficile">Difficile</option>
				<option value="très difficile">Très difficile</option>
			</select>
		</div>

		<div>
			<label for="distance">Distance</label>
			<input type="text" name="distance" value="">
		</div>
		<div>
			<label for="duration">Durée</label>
			<input type="time" name="duration" value="">
		</div>
		<div>
			<label for="height_difference">Dénivelé</label>
			<input type="number" name="height_difference" value="">
		</div>
		<button type="submit" name="button">Envoyer</button>
	</form>
    <table>
                <th>Name</th>
                <th>Difficulty</th>
                <th>Distance</th>
                <th>Duration</th>
                <th>Height difference</th>
                <?php
                //Affichage des données
                $hiking = $pdo->prepare('SELECT * FROM hiking; '); 
                $hiking->execute(); 
                $tab = $hiking->fetchAll(); 
                ?>
                    <?php foreach($tab as $row):?>
                    <tr>
                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['difficulty'];?></td>
                        <td><?php echo $row['distance'];?></td>
                        <td><?php echo $row['duration'];?></td>
                        <td><?php echo $row['height_difference'];?></td>
                    </tr>
                    <?php endforeach;
                    //Fermeture de requête avec la fonction closeCursor()
                    $hiking->closeCursor();?>
            </table>
</body>
</html>
<?php
    //Ajout d'une randonnée
    //1. Récupération des informations du formulaire : 
        $name = isset($_POST['name']) ? $_POST['name'] : NULL; 
        $difficulty = isset($_POST['difficulty']) ? $_POST['difficulty'] : NULL ;
        $distance = isset($_POST['distance']) ? $_POST['distance'] : NULL ; 
        $duration = isset($_POST['duration']) ? $_POST['duration'] : NULL ; 
        $height_difference = isset($_POST['height_difference']) ? $_POST['height_difference'] : NULL ; 

    //2.Préparation et exécution de la requête + envoye dans le DB: 
    $new_hiking = $pdo->prepare('INSERT INTO ("name, difficulty, distance, duration, height_difference") VALUES (":name, :difficulty, :distance, :duration, :height_difference")');
    $new_hiking->execute([
        'name' => $name, 
        'difficulty' => $difficulty, 
        'distance' => $distance, 
        'duration' => $duration,
        'height_difference' => $height_difference, 
    ]) or die(); 
    header("Location: read.php"); 
    $new_hiking->closeCursor(); 
?>

