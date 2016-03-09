<?php
namespace Strapieno\NightClubReview\Model\Hydrator\Mongo;

use Matryoshka\Model\Hydrator\Strategy\HasOneStrategy;
use Strapieno\NightClubReview\Model\Entity\Object\RatingObject;
use Strapieno\Utils\Hydrator\Mongo\DateHistoryHydrator;

/**
 * Class ReviewModelMongoHydrator
 */
class ReviewModelMongoHydrator extends DateHistoryHydrator
{
    public function __construct($underscoreSeparatedKeys = true)
    {
        parent::__construct($underscoreSeparatedKeys);

        $this->addStrategy(
            'rating',
            new HasOneStrategy(new RatingObject(), false)
        );

    }
}