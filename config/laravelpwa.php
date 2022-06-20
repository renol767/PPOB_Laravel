<?php
return [
    'name' => 'PPOB - NUpey',
    'manifest' => [
        'name' => env('APP_NAME', 'PPOB - NUpey'),
        'short_name' => 'PWA',
        'start_url' => '/login',
        'background_color'=> '#092C9F',
        'theme_color'=> '#092C9F',
        'orientation'=> 'portrait-primary',
        'display' => 'fullscreen',
        "icons"=> [
            '72x72' => 'img/favicon72.png',
            '96x96' => 'img/favicon96.png',
            '144x144' => 'img/favicon144.png',
            '152x152' => 'img/favicon152.png',
            '180x180' => 'img/favicon180.png',
            '192x192' => 'img/favicon192.png',
            '512x512' => 'img/favicon512.png'
        ],
        // 'shortcuts' => [
        //     [
        //         'name' => 'PPOB',
        //         'description' => 'PPOB - NUpey',
        //         'url' => '/shortcutlink1',
        //         'icons' => [
        //             "src" => "img/favicon72.png",
        //             "purpose" => "any"
        //         ]
        //     ],
        // ],
        'custom' => []
    ]
];
