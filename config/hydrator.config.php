<?php
return [
    'invokables' => [
        'Strapieno\NightClubReview\Model\Hydrator\Mongo\ReviewModelMongoHydrator'
            => 'Strapieno\NightClubReview\Model\Hydrator\Mongo\ReviewModelMongoHydrator'
    ],
    'aliases' => [
        'Strapieno\NightClubReview\Model\Hydrator\ReviewModelMongoHydrator'
            => 'Strapieno\NightClubReview\Model\Hydrator\Mongo\ReviewModelMongoHydrator'
    ]
];