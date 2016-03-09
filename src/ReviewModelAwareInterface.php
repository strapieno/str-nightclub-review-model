<?php
namespace Strapieno\NightClubReview\Model;

/**
 * Interface ReviewModelAwareInterface
 */
interface ReviewModelAwareInterface
{
    /**
     * @return null|ReviewModelInterface
     */
    public function getNightClubReviewModelService();

    /**
     * @param ReviewModelInterface $nightClubReviewModelService
     * @return $this
     */
    public function setNightClubReviewModelService(ReviewModelInterface $nightClubReviewModelService);
}