<?php
namespace Strapieno\NightClubReview\Model\InputFilter;

use Zend\InputFilter\Input;
use Zend\InputFilter\InputFilter;

/**
 * Class DefaultInputFilter
 */
class DefaultInputFilter extends InputFilter
{
    public function init()
    {
        $this->addRatingInputFilter()
            ->addNightClubIdInput()
        ;
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

    /**
     * @return $this
     */
    protected function addNightClubIdInput()
    {
        $input = new Input('nightclub_id');
        $input->setRequired(true);

        $this->add($input);
        return $this;
    }
}