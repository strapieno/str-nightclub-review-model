<?php
namespace Strapieno\NightClubReview\Model\Entity\Object;

use Strapieno\Utils\Model\Object\AbstractObject;
use Strapieno\Utils\Model\Object\EntityReference\EntityReferenceInterface;
use Strapieno\Utils\Model\Object\EntityReference\EntityReferenceTrait;
use Strapieno\Utils\Model\Object\ObjectInterface;

/**
 * Class NightClubReferenceObject
 */
class NightClubReferenceObject extends AbstractObject implements  ObjectInterface, EntityReferenceInterface
{
    use EntityReferenceTrait;

    /**
     * @return String
     */
    public function getServiceName()
    {
        return NightClubModelService::class;
    }
}