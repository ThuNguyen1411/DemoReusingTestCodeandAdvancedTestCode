<?php
namespace Page;

/**
 * Class LoginPage
 * @package Page
 */
class LoginPage
{
    //Locators are represented with public static properties
    // you will populate it with the UI locators of a page it represents and then those locators will be used on a page
    /**
     * @var string
     */
    public static $URL = 'administrator'; //localhost/joomla/administrator

    /**
     * @var string
     */
    public static $userNameField = 'Username'; //field Username

    /**
     * @var string
     */
    public static $passWordField = 'Password'; // field Password

    /**
     * @var string
     */
    public static $buttonLogin = 'Log in';

    /**
     * @var string
     */
    public static $URL2 = 'administrator/index.php'; // localhost/joomla/administrator/index.php
}
