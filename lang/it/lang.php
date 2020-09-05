<?php return [
    'plugin' => [
        'name' => 'Press',
        'description' => 'Comunicati stampa e recensioni'
    ],
    'components' => [

        'review' => [
                'title' => 'Recensione',
                'description' => 'Recensione singola'
        ],
        'reviews' => [
            'title' => 'Recensioni',
            'description' => 'Lista di recensioni'
        ],
        'release' => [
            'title' => 'Comunicato stampa',
            'description' => 'Comunicato stampa singolo'
        ],
        'releases' => [
            'title' => 'Comunicati stampa',
            'description' => 'Lista di comunicati stampa'
        ]
    ],
    'setting' => [
        'slug' => 'Url Alias',
        'slug_description' => "Chiave url di ricerca"
    ]
];