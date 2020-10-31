<?php
	$root = dirname(__DIR__);
	require $root . '/vendor/autoload.php';

	use Twig\Environment;
	use Twig\Loader\FilesystemLoader;

	$loader = new FilesystemLoader($root . '/templates');
	$twig = new Environment($loader);

	# decode the *.json file
    $get_json = file_get_contents($root . '/templates/package_data.json');
    $arr_data = json_decode($get_json, true);

	echo $twig->render('index.twig', [
		'metaTitle' => '<span>Landing Page</span>', 
		'metaDesc' => 'This is an landing page.',
		'package_data' => $arr_data
	]);
?>
