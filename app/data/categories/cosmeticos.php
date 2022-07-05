<?php

$cosmeticos = [
    'name' => 'Cosméticos',
    'has_children' => 1,
    'children' => [

         [
            'name' => 'Beleza',
            'has_children' => 1,
            'children' => [
                    ['name' => 'Maquiagem'],
                    ['name' => 'Cabelo'],
            ],
        ]
    ]
];