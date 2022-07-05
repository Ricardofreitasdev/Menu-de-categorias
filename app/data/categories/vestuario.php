<?php

$vestuario = [
    'name' => 'Vestuário',
    'has_children' => 1,
    'children' => [

         [
            'name' => 'Masculino',
            'has_children' => 1,
            'children' => [
                    ['name' => 'blusas'],
                    ['name' => 'camisas'],
                    ['name' => 'calças'],
                    ['name' => 'jaquetas'],
            ],
        ],
       [
            'name' => 'Feminino',
            'has_children' => 1,
            'children' => [
                ['name' => 'vestidos'],
                ['name' => 'blusas'],
                ['name' => 'moletons'],
            ],
        ]

    ]
];