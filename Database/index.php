<?php
    // //1. Récupération des données dans la db "weather", tableau "météo" + affichage dans un tableau html
    try
    {
        // On se connecte à MySQL
        $pdo = new PDO('mysql:host=localhost;dbname=weatherapp;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
        // En cas d'erreur, on affiche un message et on arrête tout
            die('Erreur : '.$e->getMessage());
    }
?>
<html>
    <body>
        <form action="" method="post">
            <table>
                <th>Ville</th>
                <th>Haut</th>
                <th>Bas</th>
                <th>Delete</th>
                <?php
                    $weather = $pdo->prepare('SELECT * FROM météo;'); 
                    $weather->execute(); 
                    $tab = $weather->fetchAll();?>
                    <?php foreach($tab as $row):?>
                    <tr>
                        <td><?php echo $row['ville'];?></td>
                        <td><?php echo $row['haut'];?></td>
                        <td><?php echo $row['bas'];?></td>
                        <td><input type="checkbox" name="checkbox[]" value=<?php echo $row['ville'];?>></td>
                    </tr>
                    <?php endforeach;
                    //Fermeture de requête avec la fonction closeCursor()
                    $weather->closeCursor(); ?>

            </table>
            <?php
                if(isset($_POST['checkbox'])){
                    foreach($_POST['checkbox'] as $checkbox){
                        $delete_data =$pdo->prepare("DELETE FROM météo WHERE ville = :ville"); 
                        $delete_data->execute([
                            'ville' => $checkbox
                        ]);
                    }
                }
                ?>
            <input type="submit" value="submit">
        </form>
        <form method="post">
            <label for="Town">Town</label>
            <input type="text" name="Town">
            <label for="Haut">Haut</label>
            <input type="text" name="Haut">
            <label for="Bas">Bas</label>
            <input type="text" name="Bas">
            <input type="submit" value="Add" name="submit">
        </form>
    </body>
</html>
<?php
    //Vérification de l'existence des inputs
    $new_town = isset($_POST['Town']) ? $_POST['Town'] : NULL; 
    $new_up = isset($_POST['Haut']) ? $_POST['Haut'] : NULL; 
    $new_down = isset($_POST['Bas']) ? $_POST['Bas'] : NULL; 

    //PDO::prepare -  Prépare une requête à l'exécution et retourne un objet
    $add_data = $pdo->prepare("INSERT INTO météo (ville, haut, bas) VALUES (:ville, :haut, :bas)");
    // PDOStatement::execute — Exécute une requête préparée
    $add_data -> execute([
        'ville' => $new_town, 
        'haut' => $new_up,
        'bas' => $new_down, 
    ]) or die(); //Envoie bien les données à la DB + si le process ne fonctionne pas, on "tue" le processus
    header("Location: index.php");//Permet la re-direction 
    $add_data->closeCursor(); 
?>
