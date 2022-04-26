<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => false,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'Superadministrateur' => [
            'users' => 'c,r,u,d',
            'payments' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'Administrateur' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'Caissier' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'Enseignant' => [
            
            'profile' => 'r,u'
        ],
        'Elève' => [
            
            'profile' => 'r,u'
        ],
        'Utilisateur' => [
            'profile' => 'r,u',
        ]
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
