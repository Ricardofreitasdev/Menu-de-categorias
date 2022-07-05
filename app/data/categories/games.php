<?php

$games = [
    'name' => 'Games',
    'has_children' => 1,
    'children' => [

         [
            'name' => 'Esportes',
            'has_children' => 1,
            'children' => [
                    ['name' => 'Fifa'],
                    ['name' => 'Pes'],
            ],
        ],
       [
            'name' => 'Aventura',
            'has_children' => 1,
            'children' => [
                ['name' => 'Spider-man'],
                ['name' => 'God Of War'],
            ],
        ]

    ]
];