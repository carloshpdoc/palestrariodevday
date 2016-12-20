<?php
return [
    'router' => [
        'routes' => [
            'rio-dev-day.rest.palestra' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/palestra[/:palestra_id]',
                    'defaults' => [
                        'controller' => 'RioDevDay\\V1\\Rest\\Palestra\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'zf-versioning' => [
        'uri' => [
            0 => 'rio-dev-day.rest.palestra',
        ],
    ],
    'zf-rest' => [
        'RioDevDay\\V1\\Rest\\Palestra\\Controller' => [
            'listener' => 'RioDevDay\\V1\\Rest\\Palestra\\PalestraResource',
            'route_name' => 'rio-dev-day.rest.palestra',
            'route_identifier_name' => 'palestra_id',
            'collection_name' => 'palestra',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \RioDevDay\V1\Rest\Palestra\PalestraEntity::class,
            'collection_class' => \RioDevDay\V1\Rest\Palestra\PalestraCollection::class,
            'service_name' => 'Palestra',
        ],
    ],
    'zf-content-negotiation' => [
        'controllers' => [
            'RioDevDay\\V1\\Rest\\Palestra\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'RioDevDay\\V1\\Rest\\Palestra\\Controller' => [
                0 => 'application/vnd.rio-dev-day.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'RioDevDay\\V1\\Rest\\Palestra\\Controller' => [
                0 => 'application/vnd.rio-dev-day.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'zf-hal' => [
        'metadata_map' => [
            \RioDevDay\V1\Rest\Palestra\PalestraEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'rio-dev-day.rest.palestra',
                'route_identifier_name' => 'palestra_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \RioDevDay\V1\Rest\Palestra\PalestraCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'rio-dev-day.rest.palestra',
                'route_identifier_name' => 'palestra_id',
                'is_collection' => true,
            ],
        ],
    ],
    'zf-apigility' => [
        'db-connected' => [
            'RioDevDay\\V1\\Rest\\Palestra\\PalestraResource' => [
                'adapter_name' => 'DbAdapter',
                'table_name' => 'Palestra',
                'hydrator_name' => \Zend\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'RioDevDay\\V1\\Rest\\Palestra\\Controller',
                'entity_identifier_name' => 'id',
            ],
        ],
    ],
    'zf-content-validation' => [
        'RioDevDay\\V1\\Rest\\Palestra\\Controller' => [
            'input_filter' => 'RioDevDay\\V1\\Rest\\Palestra\\Validator',
        ],
    ],
    'input_filter_specs' => [
        'RioDevDay\\V1\\Rest\\Palestra\\Validator' => [
            0 => [
                'name' => 'id',
                'required' => true,
                'filters' => [],
                'validators' => [],
            ],
            1 => [
                'name' => 'palestra',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => null,
                        ],
                    ],
                ],
            ],
            2 => [
                'name' => 'nomePalestrante',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => null,
                        ],
                    ],
                ],
            ],
            3 => [
                'name' => 'email',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => null,
                        ],
                    ],
                ],
            ],
        ],
    ],
];
