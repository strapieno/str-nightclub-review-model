<?php
namespace Strapieno\NightClubReview\Model\Entity;

use Matryoshka\Model\Object\ActiveRecord\AbstractActiveRecord;
use Strapieno\Utils\Model\Entity\DateHistoryAwareInterface;
use Strapieno\Utils\Model\Entity\DateHistoryAwareTrait;
use Strapieno\Utils\Model\Entity\EntityInterface;
use Strapieno\Utils\Model\Object\EntityReference\EntityReferenceInterface;
use Strapieno\Utils\Model\Object\Review\ReviewInterface;
use Strapieno\Utils\Model\Object\Review\ReviewTrait;
use Zend\Stdlib\Hydrator\HydratorAwareInterface;

/**
 * Class ReviewEntity
 */
class ReviewEntity extends AbstractActiveRecord implements ReviewInterface,
    EntityInterface,
    DateHistoryAwareInterface,
    HydratorAwareInterface
{
    use ReviewTrait;
    use DateHistoryAwareTrait;

    /**
     * @var EntityReferenceInterface
     */
    protected $nightClubReference;

    /**
     * @return EntityReferenceInterface
     */
    public function getNightClubReference()
    {
        return $this->nightClubReference;
    }

    /**
     * @param EntityReferenceInterface $nightClubReference
     * @return $this
     */
    public function setNightClubReference(EntityReferenceInterface $nightClubReference)
    {
        $this->nightClubReference = $nightClubReference;
        return $this;
    }
}