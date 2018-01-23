<?php
	require_once '../vendor/autoload.php';
	use Yang2\Hash;
	use Yang2\Replace;



	$yang1 = new Hash();
	$res1 = $yang1->hash('a');

	print_r($res1);

	/**
	 * Author YangChi
	 */

	$filename = __FILE__;
	$origin_str = file_get_contents($filename);

	$old = "YangChi";
	$new = 'YangChi';

	$yang2 = new Replace();
	$res2 = $yang2->str($filename, $origin_str ,$old ,$new);

?>