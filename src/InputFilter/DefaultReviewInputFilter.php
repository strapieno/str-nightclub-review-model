<?php
namespace Strapieno\NightClubReview\Model\InputFilter;

use Zend\InputFilter\Input;
use Zend\InputFilter\InputFilter;

/**
 * Class DefaultReviewInputFilter
 */
class DefaultReviewInputFilter extends InputFilter
{
    public function init()
    {
        $this->addBestRatingInput()
            ->addRatingValueInput()
            ->addRatingValueInput()
        ;
    }

    /**
     * @return $this
     */
    protected function addBestRatingInput()
    {
        $input = new Input('best_rating');
        $input->setRequired(false);
        // Filter
        $filterManager = $this->getFactory()->getDefaultFilterChain()->getPluginManager();
        $input->getFilterChain()->attach($filterManager->get('digits'));
        $input->getFilterChain()->attach($filterManager->get('greaterthan', ['min' => 0]));

        $this->add($input);
        return $this;
    }

    /**
     * @return $this
     */
    protected function addRatingValueInput()
    {
        $input = new Input('rating_value');
        $input->setRequired(false);
        // Filter
        $filterManager = $this->getFactory()->getDefaultFilterChain()->getPluginManager();
        $input->getFilterChain()->attach($filterManager->get('digits'));
        $input->getFilterChain()->attach($filterManager->get('greaterthan', ['min' => 0]));

        $this->add($input);
        return $this;
    }

    /**
     * @return $this
     */
    protected function addWorstRatingInput()
    {
        $input = new Input('worst_rating');
        $input->setRequired(false);
        // Filter
        $filterManager = $this->getFactory()->getDefaultFilterChain()->getPluginManager();
        $input->getFilterChain()->attach($filterManager->get('digits'));
        $input->getFilterChain()->attach($filterManager->get('greaterthan', ['min' => 0]));

        $this->add($input);
        return $this;
    }

}