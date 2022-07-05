<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/app/configs/index.php';
require_once __DIR__ . '/app/data/categories.php';

echo $twig->render('layout.html', ['categories' => $categories]);
?>