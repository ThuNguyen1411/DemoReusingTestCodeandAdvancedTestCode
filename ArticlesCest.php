<?php
/**
 *
 */
use Faker\Factory;
use Faker\Generator;
use Step\Acceptance\ArticlesStep;
use Page\ArticlesPage;

/**
 * Class ArticlesCest
 */
class ArticlesCest
{
    /**
     * @var Generator
     */
    protected $faker; // declare variable faker

    /**
     * @var string
     */
    protected $articleName; // declare variable article name

    /**
     * ArticlesCest constructor.
     * @env firefox
     */
    public function __construct()
    {
        // create and initialize a faker generator
        // Faker is a PHP library that generates fake data for you
        $this->faker = Factory::create();
        // ##: number, ??:char
        $this->articleName = $this->faker->bothify("Articles ##??");
    }

    // depends can specify a test that should be passed before current one
    /**
     * @param ArticlesStep $I
     *
     */

    // In login methods I can use common setups and tear downs for the tests in the class.
    // will be executed firstly
    public function login(ArticlesStep $I)
    {
        $I->doAdministratorLogin();
    }

    // use @depends you can specify a test that should be passed before the current one => if login() fails, createNewArticles test will be skipped
    /**
     * @param ArticlesStep $I
     * @depends login
     * @throws Exception
     */
    // Create a new articles with function createArticles created in ArticleStep
    public function createNewArticles(ArticlesStep $I)
    {
        //login again
        $I->doAdministratorLogin();
        $I->wantToTest('Create a new Articles in Joomla');
        $I->createNewItem(
            array('name' => $this ->articleName)
        );
        $I->waitForText(ArticlesPage::$messageSuccess,30,ArticlesPage::$message);
    }
}
