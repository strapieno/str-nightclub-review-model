<?php
namespace Strapieno\NightClubReview\Model\InputFilter;

use Zend\InputFilter\InputFilter;

/**
 * Class DefaultInputFilter
 */
class DefaultInputFilter extends InputFilter
{
    public function init()
    {
        $this->addRatingInputFilter();
    }

    /**
     * @return $this
     */
    protected function addRatingInputFilter()
    {
        $inputFilter = $this->getFactory()
            ->getInputFilterManager()
            ->get('Strapieno\NightClubReview\Model\InputFilter\DefaultReviewInputFilter');

        $this->add($inputFilter, 'rating');
        return $this;
    }
}