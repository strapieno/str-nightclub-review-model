<?php
namespace Strapieno\NightClubReview\Model;

use Strapieno\Utils\Inizilizer\AbstractModelServiceInizilizer;

/**
 * Class ReviewModelInitializer
 */
class ReviewModelInitializer extends AbstractModelServiceInizilizer
{
    const SERVICE_NAME = ReviewModelService::class;
    const INSTANCE_CLASS = ReviewModelAwareInterface::class;
    const SETTER_METHOD = 'setNightClubReviewModelService';
}