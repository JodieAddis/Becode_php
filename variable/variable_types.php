<html>
<head><title>Hi!</title></head>
<body>
    <?php $name = "Jodie"; ?>
    <?php $age= 30; ?>
    <?php $eyes = "green"; ?>
    <?php $family = array(
        0 => "Pietro",
        1 => "Nathalie", 
        2 => "Jodie", 
        3 => "Cassandra");?>
    <?php $hungry = true; ?>
        <p>Hi! My name is <?php echo $name;?>.</p>
        <p>I am <?php echo $age;?> years old.</p>
        <p>My eyes are <?php echo $eyes; ?></p>
        <p>The first person in my family is <?php echo $family[0]; ?></p>
        <p>I am hungry <?php echo $hungry?></p>
</body>
</html>
