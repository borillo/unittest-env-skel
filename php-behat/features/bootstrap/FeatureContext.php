<?php

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;

// Require 3rd-party libraries here:
//
//   require_once 'PHPUnit/Autoload.php';
//   require_once 'PHPUnit/Framework/Assert/Functions.php';

require_once __DIR__.'/../../lib/Calculator.php';

/**
 * Features context.
 */
class FeatureContext extends BehatContext
{

    private $result;
    private $operands;

    /**
     * Initializes context.
     * Every scenario gets it's own context object.
     *
     * @param   array   $parameters     context parameters (set them up through behat.yml)
     */
    public function __construct(array $parameters)
    {
        // Initialize your context here
        $this->calculator = new Calculator();
        $this->operands = array();
        $this->result = null;
    }

    /**
     * @Given /^I have entered (\d+) into the calculator$/
     */
    public function iHaveEnteredIntoTheCalculator($operand)
    {
        $this->operands[] = $operand;
    }

    /**
     * @When /^I run "([^"]*)"$/
     */
    public function iRun($method)
    {
        $this->result = $this->calculator->$method($this->operands[0],$this->operands[1]);
    }

    /**
     * @Then /^I should get (\d+)$/
     */
    public function iShouldGet($result)
    {
        if ($this->result != $result)
        {
          throw new Exception("Actual result is: \n" . $this->result);
        }
    }

}
