<?php 

use Step\Acceptance\AbstractStep as abStep;
class LoginCest
{
    public function _passed(AcceptanceTester $I)
    {
        //Will be executed when test is successful
    }

    public function _failed(){
        //Will be executed on test fails
    }
    // tests
    public function Login(abStep $I)
    {
        $I->doAdministratorLogin();
    }
}
