<?php

$loader = new \Twig\Loader\FilesystemLoader(__DIR__ .'/../layout/views');
$config = array('autoescape' => false, 'debug' => true);
$twig = new \Twig\Environment($loader, $config);
$twig->addExtension(new \Twig\Extension\DebugExtension());

