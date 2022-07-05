<?php

$moveis = [
    'name' => 'Móveis',
    'has_children' => 1,
    'children' => [

         [
            'name' => 'Sala',
            'has_children' => 1,
            'children' => [
                    ['name' => 'Sofá'],
                    ['name' => 'Painel para tv'],
            ],
        ],
       [
            'name' => 'Quarto',
            'has_children' => 1,
            'children' => [
                ['name' => 'Cama'],
                ['name' => 'Guarda-roupas'],
            ],
        ],
        [
            'name' => 'Cozinha',
            'has_children' => 1,
            'children' => [
                ['name' => 'Geladeira'],
                ['name' => 'Fogão'],
            ],
        ]

    ]
];