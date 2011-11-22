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

require_once __DIR__.'/../../lib/Life.php';

/**
 * Features context.
 */
class FeatureContext extends BehatContext
{

    private $result;

    /**
     * Initializes context.
     * Every scenario gets it's own context object.
     *
     * @param   array   $parameters     context parameters (set them up through behat.yml)
     */
    public function __construct(array $parameters)
    {
        // Initialize your context here
    }

    /**
     * @Given /^I have called rocks method$/
     */
    public function iHaveCalledRocksMethod()
    {
        $this->life = new Life();
    }

    /**
     * @When /^I ask for$/
     */
    public function iAskFor()
    {
        $this->result = $this->life->rocks();
    }

    /**
     * @Then /^I get "([^"]*)"$/
     */
    public function iGet($result)
    {
        if ($this->result != $result)
        {
          throw new Exception("Actual result is: \n" . $this->result);
        }       
    }
}
