<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends MinkContext implements SnippetAcceptingContext
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @Given I am on the login page
     */
    public function iAmOnTheLoginPage()
    {
        $this->visit("/login");
    }

    /**
     * @When I type :arg1 into :arg2
     */
    public function iTypeInto($arg1, $arg2)
    {
        throw new PendingException();
    }

    /**
     * @When I click :arg1
     */
    public function iClick($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then I am on the Homepage
     */
    public function iAmOnTheHomepage()
    {
        throw new PendingException();
    }

    /**
     * @Then I see :arg1
     */
    public function iSee($arg1)
    {
        throw new PendingException();
    }
}
