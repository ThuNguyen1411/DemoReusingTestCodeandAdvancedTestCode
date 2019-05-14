<?php
namespace Step\Acceptance;
/**\
 *
 */

use Page\AbstractPage;
use Page\ArticlesPage;
/**
 * Class ArticlesStep
 * @package Step\Acceptance
 */
class ArticlesStep extends AbstractStep
{
    /**
     * @param $param
     * @throws \Exception
     */
    // function createArticles with variable $param . $Param is name that I want to fill on Title Filed
    /*public function createArticles($param)
    {
        $I = $this;
        $I->createNewItem(ArticlesPage::$URL,ArticlesPage::$articlesTitle,ArticlesPage::$articlesNewTitle,$param);
    }*/
    // just use createNewItem($param)
    // try 2
    public function createNewItem($param){
        $I = $this;
        $I->amOnPage(ArticlesPage::$URL);
        $I->waitForText(ArticlesPage::$articlesTitle,30,AbstractPage::$h1);
        $I->click(AbstractPage::$buttonNew);
        $I->waitForText(ArticlesPage::$articlesNewTitle,30,AbstractPage::$h1);
        $I->fillField(AbstractPage::$fieldTitle,$param['name']);
        $I->click(AbstractPage::$buttonSaveClose);
    }
}