<?php
namespace Strapieno\NightClubReview\Model\Criteria\Mongo;

use Matryoshka\Model\Wrapper\Mongo\Criteria\FindAllCriteria;

/**
 * Class ReviewMongoCollectionCriteria
 */
class ReviewMongoCollectionCriteria extends FindAllCriteria
{
    /**
     * @param $placeId
     * @return $this
     */
    public function setPlaceId($placeId)
    {
        $this->selectionCriteria['night_club_reference.id'] = $placeId;

        return $this;
    }
}