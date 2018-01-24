<?php
require __DIR__ . '/../vendor/autoload.php';
use Yang2\Files;

	$files = new Files();

	$filename1 = '../demo1/index.php';
	$content1 = <<<Eof
<?php
	require __DIR__ . '/../vendor/autoload.php';
	use Yang\FormBuilder;

?>
Eof;
	$files->fwrite($filename1,$content1);
?>