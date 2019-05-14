<?php
namespace Step\Acceptance;
/**
 *
 */
use Page\AbstractPage;
use Page\LoginPage as liPage;
/**
 * Class AbstractStep
 * @package Step\Acceptance
 */
class AbstractStep extends \AcceptanceTester
{
    // This is class include in functions can be reusing
    /**
     * doAdministratorLogin
     */
    public function doAdministratorLogin(){
        $I = $this;
        $I->wantTo("Login with Administrator");
        $I->amOnPage(liPage::$URL);
        $I->fillField(liPage::$userNameField,'admin');
        $I->fillField(liPage::$passWordField,'admin');
        $I->click(liPage::$buttonLogin);
    }

    /**
     * @param $URL
     * @param $itemTitle
     * @param $itemTitleNew
     * @param $param
     * @throws \Exception
     */



    /*public function editItem($URL,$itemTitle,$param){

    }*/
}