<?php
/**
 * @see https://github.com/artesaos/seotools
 */

return [
    'meta' => [
        'defaults'       => [
            'title'        => "GFC Europe — German Fixing Consultants",
            'titleBefore'  => false,
            'description'  => 'Consult with concrete anchor design expert for your customized solutions in glass facade/curtain wall, elevator, pre-cast and many more applications',
            'separator'    => ' — ',
            'keywords'     => [],
            'canonical'    => false,
            'robots'       => 'index',
        ],
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
            'norton'    => null,
        ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => 'GFC Europe — German Fixing Consultants',
            'description' => 'Consult with concrete anchor design expert for your customized solutions in glass facade/curtain wall, elevator, pre-cast and many more applications',
            'url'         => false,
            'type'        => false,
            'site_name'   => false,
            'images'      => [
                config('app.url').'/assets/gfc-banner.png'
            ],
        ],
    ],
    'twitter' => [
        'defaults' => [
            'card'        => 'large_summary',
            'site'        => '@gfc-europe',
        ],
    ],
    'json-ld' => [
        'defaults' => [
            'title'       => 'GFC Europe — German Fixing Consultants',
            'description' => 'Consult with concrete anchor design expert for your customized solutions in glass facade/curtain wall, elevator, pre-cast and many more applications',
            'url'         => false,
            'type'        => 'WebPage',
            'images'      => [
                config('app.url').'/assets/gfc-banner.png'
            ],
        ],
    ],
];
