<?php
namespace Strapieno\NightClubReview\ModelTest\Entity;

use Strapieno\NightClubReview\Model\Entity\ReviewEntity;

/**
 * Class ReviewEntityTest
 */
class ReviewEntityTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ReviewEntity
     */
    protected $entity;

    public function setUp()
    {
        $this->entity = new ReviewEntity();
    }

    public function testGetSetReviewBody()
    {
        $input = 'test';
        $this->entity->setReviewBody($input);
        $this->assertSame($input, $this->entity->getReviewBody());
    }
}