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
class UserContext extends MinkContext implements SnippetAcceptingContext
{
    /**
     * @Given I am logged in
     */
    public function iAmLoggedIn()
    {
        $this->visit("/login");
        $this->fillField('username', 'Parly Team Drafter');
        $this->fillField('password', 'Password1');
        $this->pressButton('Sign in');
        $this->assertSession()->addressEquals($this->locatePath('/cts/home'));
    }

    /**
     * @Then I don't see the :arg1 link in the :arg2 element
     */
    public function iDonTSeeTheLinkInTheElement($value, $element)
    {
        $this->assertSession()->elementNotContains('css', $element, $this->fixStepArgument($value));
    }
}
