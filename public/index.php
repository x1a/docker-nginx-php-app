<a href="info.php">php info</a>
<hr>
<?php echo 'FOO: ', getenv('FOO'); ?>
<hr>_ENV:
<pre><?php print_r($_ENV)?></pre>
<br>_SERVER:
<pre><?php print_r($_SERVER)?></pre>