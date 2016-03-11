<?php
namespace Strapieno\NightClubReview\Model\InputFilter;

use Zend\InputFilter\Input;
use Zend\InputFilter\InputFilter;
use Zend\Validator\ValidatorPluginManager;

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
        /** @var $validatorManager ValidatorPluginManager */
        $validatorManager = $this->getFactory()->getDefaultValidatorChain()->getPluginManager();
        $input->getValidatorChain()->attach($validatorManager->get('digits'));
        $input->getValidatorChain()->attach($validatorManager->get('greaterthan', ['min' => 0]));

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
        /** @var $validatorManager ValidatorPluginManager */
        $validatorManager = $this->getFactory()->getDefaultValidatorChain()->getPluginManager();
        $input->getValidatorChain()->attach($validatorManager->get('digits'));
        $input->getValidatorChain()->attach($validatorManager->get('greaterthan', ['min' => 0]));

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
        /** @var $validatorManager ValidatorPluginManager */
        $validatorManager = $this->getFactory()->getDefaultValidatorChain()->getPluginManager();
        $input->getValidatorChain()->attach($validatorManager->get('digits'));
        $input->getValidatorChain()->attach($validatorManager->get('greaterthan', ['min' => 0]));

        $this->add($input);
        return $this;
    }

}