<?php
namespace Strapieno\NightClubReview\Model;

/**
 * Class ReviewModelAwareTrait
 */
trait ReviewModelAwareTrait
{
    /**
     * @var null|ReviewModelInterface
     */
    protected $nightClubReviewModelService;

    /**
     * @return null|ReviewModelInterface
     */
    public function getNightClubReviewModelService()
    {
        return $this->nightClubReviewModelService;
    }

    /**
     * @param ReviewModelInterface $nightClubReviewModelService
     * @return $this
     */
    public function setNightClubReviewModelService(ReviewModelInterface $nightClubReviewModelService)
    {
        $this->nightClubReviewModelService = $nightClubReviewModelService;
        return $this;
    }
}