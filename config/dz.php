<?php

return [
    'public' => [
        'title' => 'DG-Estate',
        'favicon' => '',
        'global' => [
            'css' => [
                '/css/bootstrap.min.css',
                '/css/carousel.css',
                '/css/headers.css',
                '/css/footers.css',
                '/css/fancybox.min.css',
            ],
            'js' => [
                '/js/fontawesome.js',
                '/js/bootstrap.js',
                '/js/jquery.js',
                '/js/fancybox.js'
            ]
        ],
        'pagelevel' => [
            'css' => [],
            'js' => []
        ]
    ],
    'admin' => [
        'title' => 'DG-Estate Admin ',
        'favicon' => '',
        'global' => [
            'css' => [
                '/css/bootstrap.min.css',
                '/css/fancybox.min.css',
                '/css/dashboard.css',
                '/css/datatable.min.css'
            ],
            'js' => [
                '/js/fontawesome.js',
                '/js/bootstrap.js',
                '/js/jquery.js',
                '/js/fancybox.js',
                '/js/datatable.js',
                '/js/datatabkebt5.min.js',
//                '/js/ckeditor.min.js',
                'https://cdn.ckeditor.com/4.17.2/standard/ckeditor.js',
                '/js/adminjs.js'
            ]
        ],
        'pagelevel' => [
            'css' => [],
            'js' => []
        ]
    ]
];
