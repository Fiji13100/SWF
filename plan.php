<?php 

$cours = [
    // 1)Framework
    'index' => [
        //'defines',
        //'autoload',
        //'router->dispatch($url)'
    ],
    'Loader' => [
        //'spl_autoload_register',
        'multiple loaders',
        //'namespaces'
    ],
    // 2)Router
    'Router' => [
        'routes' => 'controller->action(params...)',
        'dispatch' => [
            'route => controller->action'
        ],
        'redirect' => 'url/route',
    ],
    // 3)Controller
    'Controller' => [
        'request', 'response',
        'render', 'setVars',
        'container', 'services', 'repositories'
    ],'Service' => [],
    // 4)Views
    'View' => [
        'render' => 'ob_start ...',
        'params' => 'merge_array',
        'templating' => [
            '{{echo}}', '{{|pipe}}',
            'iterators' => '{%for array as key => value %} {%endfor%}',
            'conditions' => '{%if $a == $b AND $isGood %} {%endif%}'
        ]
    ],    
    // 5)ORM
    'Model' => [
        'table',
        'save', 'delete',
        'get', 'set'
    ],
    'Repository' => [
        'create',
        'find', 'findAll',
        'save'
    ],


    // 6)Tools    
    'Helpers' => [
        'Html',        
    ],
    // 7)Exceptions
    'Exceptions' => [
        'handler',
        'render',
        '404'
    ]

];