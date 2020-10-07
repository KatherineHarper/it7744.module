<?php 

class FirstCest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->see('Best'); 
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
    }
}
