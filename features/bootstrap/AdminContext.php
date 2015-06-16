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
class AdminContext extends MinkContext implements SnippetAcceptingContext
{
    /**
     * @Given I am logged in
     */
    public function iAmLoggedIn()
    {
        $this->visit("/login");
        $this->fillField('username', 'admin');
        $this->fillField('password', 'admin');
        $this->pressButton('Sign in');
        $this->assertSession()->addressEquals($this->locatePath('/cts/home'));
    }

    /**
     * @Then I see the :arg1 link in the :arg2 element
     */
    public function iSeeTheLinkInTheElement($value, $element)
    {
        $this->assertSession()->elementContains('css', $element, $this->fixStepArgument($value));
    }
}
