<?php
	require_once '../vendor/autoload.php';
	use Yang2\Replace;

	// $yang = new Hash();
	// $res = $yang->hash('a');

	// print_r($res);

	/**
	 * Author #Author#
	 */

	$filename = __FILE__;
	$origin_str = file_get_contents($filename);

	$old = "#Author#";
	$new = 'YangChi';

	$yang = new Replace();
	$res = $yang->str($filename, $origin_str ,$old ,$new);

?>