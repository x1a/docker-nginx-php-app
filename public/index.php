<a href="info.php">php info</a>
<hr>
MYSQL:<br>
<?php
//$pdo = new PDO("mysql:host=mysql;dbname=test", 'root', 'secret');
$pdo = new PDO("mysql:host=mysql;dbname=test", 'test', 'abcd');
$rs = $pdo->query("SELECT * FROM test");
foreach ($rs as $row) {
    printf("<br>%s. %s", $row['id'], $row['name']);
}
?>
<hr>
<?php echo 'FOO: ', getenv('FOO'); ?>
<br><?php echo 'BAZZ: ', getenv('BAZZ'); ?>
<br><?php echo 'XYZ: ', getenv('XYZ'); ?>
<hr>_ENV:
<pre><?php print_r($_ENV)?></pre>
<br>_SERVER:
<pre><?php print_r($_SERVER)?></pre>