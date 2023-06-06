<html>
    <body>
        <form action="" method="get">
        <label for="gender">Gender: </label>
        <label for="gender">Gender :</label>
        <input type="radio" value="F" name="gender"><label for="gender">F</label>
        <input type="radio" value="M" name="gender"><label for="gender">M</label>
        <input type="submit" name="submit" value="Let's go">
        </form>
        
        <?php
            $gender = ($_GET['gender']) == "F" ? "Miss" : "Mister"; 
            $hello = "Welcome ".$gender." !"; 
            echo $hello; 
        ?>
    </body>
</html>