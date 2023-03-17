<?php
$text = $_GET['text'];
$word = $_GET['word'];

$text_censored = str_replace($word, '***', $text)
?>


<p>TESTO : <?php echo $text ?> </p>
<span>Lunghezza testo: <?php echo strlen($text) ?></span>
<span> PAROLA CENSURATA: <?php echo $word ?> </span>

<p>TESTO CENSURATO: <?php echo $text_censored ?></p>
<span>Lunghezza testo: <?php echo strlen($text_censored) ?></span>