<?php
namespace Strapieno\NightClubReview\ModelTest\Entity;
use Strapieno\NightClubReview\Model\ReviewModelAwareTrait;

/**
 * Class ReviewModelAwareTraitTest
 */
class ReviewModelAwareTraitTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ReviewModelAwareTrait
     */
    protected $trait;

    public function setUp()
    {
        $this->trait = $this->getMockForTrait('Strapieno\NightClubReview\Model\ReviewModelAwareTrait');
    }

    public function testGetSetNightClubGirlReviewModelService()
    {
        $input = $this->getMockBuilder('Strapieno\NightClubReview\Model\ReviewModelInterface')->getMock();
        $this->trait->setNightClubReviewModelService($input);
        $this->assertSame($input, $this->trait->getNightClubReviewModelService());
    }
}