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
            'prototype_strategy' => 'Matryoshka\Model\Object\PrototypeStrategy\ServiceLocatorStrategy',
            'hydrator' => 'Strapieno\NightClubReview\Model\Hydrator\ReviewModelMongoHydrator',
            'listeners' => [
                'Strapieno\Utils\Model\Listener\DateAwareListener',
            ],
        ],
    ],
];
