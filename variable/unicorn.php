<html>
    <body>
        <form action="" method="post">
            <label for="question">Are you a human, a cat or a unicorn ?</label>
            <input type="radio" name="question" value="human">
            <label for="question">Human</label>
            <input type="radio" name="question" value="cat">
            <label for="question">Cat</label>
            <input type="radio" name="question" value="unicorn">
            <label for="question">unicorn</label>
            <input type="submit" name="submit" value="Check">
        </form>
        <?php
            $question = "So, you're a ".$gif." !"; 

            // $human = '<iframe src="https://giphy.com/embed/BUbMgQBShZOcMPohgn" width="480" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/trippy-abstract-pi-slices-BUbMgQBShZOcMPohgn">via GIPHY</a></p>'  ;

            // $cat = '<iframe src="https://giphy.com/embed/ASvQ3A2Q7blzq" width="480" height="392" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/robert-downey-jr-cats-ASvQ3A2Q7blzq">via GIPHY</a></p>'; 

            $unicorn = "<iframe src='https://giphy.com/embed/ASvQ3A2Q7blzq' width='480' height='392' frameBorder='0' class='giphy-embed' allowFullScreen></iframe><p>" ; 
            
            echo $unicorn; 
            $gif = ($_POST['question']) == "Human" ? $human (($_POST['question']) == "Cat" ? $cat : $unicorn); 
            
            echo $question; 
        ?>
    </body>
</html>