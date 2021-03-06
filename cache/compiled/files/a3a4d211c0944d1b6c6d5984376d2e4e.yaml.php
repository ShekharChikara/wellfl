<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/ShekharChikara/Sites/grav/user/plugins/snappygrav/blueprints.yaml',
    'modified' => 1470635701,
    'data' => [
        'name' => 'SnappyGrav',
        'version' => '1.1.1',
        'description' => 'Save a page or all website in PDF format',
        'icon' => 'file-pdf-o',
        'author' => [
            'name' => 'iusvar',
            'email' => 'severoiuliano@gmail.com',
            'url' => 'http://iusvar.hol.es'
        ],
        'homepage' => 'https://github.com/iusvar/grav-plugin-snappygrav',
        'keywords' => 'grav, pdf, output, SnappyGrav',
        'bugs' => 'https://github.com/iusvar/grav-plugin-snappygrav/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'built_in_css' => [
                    'type' => 'toggle',
                    'label' => 'Use built in CSS',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'wk_path' => [
                    'type' => 'text',
                    'size' => 'large',
                    'label' => 'Wkhtmltopdf Path',
                    'help' => 'Path of Binary Wkhtmltopdf',
                    'validate' => [
                        'type' => 'string'
                    ]
                ],
                'grayscale' => [
                    'type' => 'toggle',
                    'label' => 'Monochrome printout',
                    'help' => 'PDF will be generated in grayscale if true',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'margin_bottom' => [
                    'type' => 'text',
                    'size' => 'small',
                    'label' => 'Bottom Margin',
                    'help' => 'Set the page bottom margin (default 10mm)',
                    'default' => 10,
                    'validate' => [
                        'type' => 'number'
                    ]
                ],
                'margin_left' => [
                    'type' => 'text',
                    'size' => 'small',
                    'label' => 'Left Margin',
                    'help' => 'Set the page left margin (default 10mm)',
                    'default' => 10,
                    'validate' => [
                        'type' => 'number'
                    ]
                ],
                'margin_right' => [
                    'type' => 'text',
                    'size' => 'small',
                    'label' => 'Right Margin',
                    'help' => 'Set the page right margin (default 10mm)',
                    'default' => 10,
                    'validate' => [
                        'type' => 'number'
                    ]
                ],
                'margin_top' => [
                    'type' => 'text',
                    'size' => 'small',
                    'label' => 'Top Margin',
                    'help' => 'Set the page top margin (default 10mm)',
                    'default' => 10,
                    'validate' => [
                        'type' => 'number'
                    ]
                ],
                'orientation' => [
                    'type' => 'select',
                    'label' => 'Page Orientation',
                    'size' => 'small',
                    'default' => 'portrait',
                    'options' => [
                        'landscape' => 'Landscape',
                        'portrait' => 'Portrait'
                    ],
                    'help' => 'Set orientation to Landscape or Portrait'
                ],
                'page_size' => [
                    'type' => 'select',
                    'label' => 'Page Size',
                    'size' => 'small',
                    'default' => 'a4',
                    'options' => [
                        'a0' => 'A0',
                        'a1' => 'A1',
                        'a2' => 'A2',
                        'a3' => 'A3',
                        'a4' => 'A4',
                        'a5' => 'A5',
                        'a6' => 'A6',
                        'a7' => 'A7',
                        'a8' => 'A8',
                        'a9' => 'A9',
                        'b0' => 'B0',
                        'b1' => 'B1',
                        'b10' => 'B10',
                        'b2' => 'B2',
                        'b3' => 'B3',
                        'b4' => 'B4',
                        'b5' => 'B5',
                        'b6' => 'B6',
                        'b7' => 'B7',
                        'b8' => 'B8',
                        'b9' => 'B9',
                        'c5e' => 'C5E',
                        'comm10e' => 'Comm10E',
                        'dle' => 'DLE',
                        'executive' => 'Executive',
                        'folio' => 'Folio',
                        'ledger' => 'Ledger',
                        'legal' => 'Legal',
                        'letter' => 'Letter',
                        'tabloid' => 'Tabloid'
                    ],
                    'help' => 'Set paper size to: A4, Letter, etc.'
                ],
                'title' => [
                    'type' => 'toggle',
                    'label' => 'Document Title',
                    'help' => 'Puts the property Title in the pdf document',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'zoom' => [
                    'type' => 'text',
                    'size' => 'small',
                    'label' => 'Zoom Factor',
                    'help' => 'Use this zoom factor (default 1)',
                    'default' => 1,
                    'validate' => [
                        'type' => 'number'
                    ]
                ]
            ]
        ]
    ]
];
