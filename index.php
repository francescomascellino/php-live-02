<!-- LIVE COding
1. Inserire delle parole all’interno di un array
2. controllare se la parola passata dall’utente tramite un form è presente nell'array. -->

<?php

$words = explode(" ", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias repellat obcaecati reprehenderit ut deleniti animi corrupti suscipit, voluptatum voluptas officia quae facilis ad voluptatibus. Quae sequi odit aliquid molestiae autem.");

var_dump($words);

var_dump(in_array($_GET["word"], $words));

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP LIVE CODING 2</title>
</head>

<body>

    <form action="" method="GET">

        <input type="text" name="word" id="word">

        <button type="submit">SEARCH</button>

    </form>

    <?php if (
        isset($_GET["word"])

        &&

        in_array($_GET["word"], $words)
    ) :
    ?>

        <p>WORD FOUND</p>


    <?php else : ?>

        <p>WORD NOT FOUND</p>

    <?php endif ?>


</body>

</html>