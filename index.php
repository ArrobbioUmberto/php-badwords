<?php

$name = $_GET['name'];

?>

<h1>Ciao mi chiamo <?php echo $name ?> </h1>
<form action="censored.php" method="GET">
    <input type="text" name="text" placeholder="Scrivi il tuo testo">
    <input type="text" name="word" placeholder="Che parola vuoi censurare?">
    <button type="submit"> Invia</button>
</form>