<?php
$text = $_GET['text'];
$word = $_GET['word'];

$text_censored = str_replace($word, '***', $text)
?>


<p>TESTO : <?php echo $text ?> </p>
<span> PAROLA CENSURATA: <?php echo $word ?> </span>

<p>TESTO CENSURATO: <?php echo $text_censored ?></p>