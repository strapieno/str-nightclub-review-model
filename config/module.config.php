<?php
return [
    'service_manager' => [
        'invokables' => [
            'Strapieno\NightClubReview\Model\Criteria\Mongo\ReviewMongoCollectionCriteria'
            => 'Strapieno\NightClubReview\Model\Criteria\Mongo\ReviewMongoCollectionCriteria'
        ],
        'aliases' => [
            'Strapieno\NightClubReview\Model\Criteria\ReviewCollectionCriteria'
            => 'Strapieno\NightClubReview\Model\Criteria\Mongo\ReviewMongoCollectionCriteria'
        ]
    ],
    'mongodb' => [
        'Mongo\Db' => [
            'database' => 'strapieno',
        ],
    ],
    'mongocollection' => [
        'DataGateway\Mongo\Review' => [
            'database' => 'Mongo\Db',
            'collection' => 'nightclub-review',
        ],
    ],
    'matryoshka-objects' => [
        'Review' => [
            'type' => 'Strapieno\NightClubReview\Model\Entity\ReviewEntity',
            'active_record_criteria' => 'Strapieno\Model\Criteria\NotIsolatedActiveRecordCriteria'
        ]
    ],
    'matryoshka-models' => [
        'Strapieno\NightClubReview\Model\ReviewModelService' => [
            'datagateway' => 'DataGateway\Mongo\Review',
            'type' => 'Strapieno\NightClubReview\Model\ReviewModelService',
            'object' => 'Review',
            'resultset' => 'Strapieno\Model\ResultSet\HydratingResultSet',
            'paginator_criteria' => 'Strapieno\NightClubReview\Model\Criteria\ReviewCollectionCriteria',
            'hydrator' => 'Strapieno\NightClubReview\Model\Hydrator\ReviewModelMongoHydrator',
            'listeners' => [
                'Strapieno\Utils\Model\Listener\DateAwareListener',
            ],
        ],
    ],
    'strapieno_input_filter_specs' => [
        'Strapieno\NightClubReview\Model\InputFilter\DefaultReviewInputFilter' => [
            "rating_value" => [
                'name' => 'rating_value',
                'validators' => [
                    "digits" => [
                        'name' => 'digits',
                        'break_chain_on_failure' => true
                    ],
                    "greaterthan" => [
                        'name' => 'greaterthan',
                        'break_chain_on_failure' => true,
                        'options' => [
                            // TODO retrive from object
                            'min' => 0
                        ],
                    ],
                    "lessthan" => [
                        'name' => 'lessthan',
                        'break_chain_on_failure' => true,
                        'options' => [
                            // TODO retrive from object
                            'max' => 10
                        ],
                    ]
                ]
            ],

        ],
        'Strapieno\NightClubReview\Model\InputFilter\DefaultInputFilter' => [
            "nightclub_id" => [
                'name' => 'nightclub_id',
                'validators' => [
                    // TODO nightclub exist
                ]
            ],
            "rating" => [
                'name' => 'rating',
                'type' => 'Strapieno\NightClubReview\Model\InputFilter\DefaultReviewInputFilter',
            ]
        ]
    ]
];
