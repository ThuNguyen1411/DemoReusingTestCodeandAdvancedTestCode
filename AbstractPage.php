<?php
/**
 *
 */
namespace Page;
/**
 * Class AbstractPage
 * @package Page
 */
class AbstractPage
{
    // This is class include in variables can be reusing
    /**
     * @var array
     */
    public static $h1 = ['css' => 'H1'];
    /**
     * @var string
     */
    public static $fieldTitle = '#jform_title'; //id => #
    /**
     * @var string
     */
    public static $buttonSave = 'Save';

    /**
     * @var string
     */
    public static $buttonSaveClose = 'Save & Close';

    /**
     * @var string
     */
    public static $buttonSaveNew = 'Save & New';

    /**
     * @var string
     */
    public static $buttonCancel = 'Cancel';

    /**
     * @var string
     */
    public static $title = '#jform_title-lbl';

    /**
     * @var string
     */
    public static $alias = '#jform_alias-lbl';

    /**
     * @var string
     */
    public static $buttonNew = "//button[@class='btn btn-small button-new btn-success']"; //name of class too long to use .class so use xpath

    /**
     * @var string
     */
    public static $message = '#system-message-container';
}
