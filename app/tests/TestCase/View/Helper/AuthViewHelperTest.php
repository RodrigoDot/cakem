<?php
namespace App\Test\TestCase\View\Helper;

use App\View\Helper\AuthViewHelper;
use Cake\TestSuite\TestCase;
use Cake\View\View;

/**
 * App\View\Helper\AuthViewHelper Test Case
 */
class AuthViewHelperTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\View\Helper\AuthViewHelper
     */
    public $AuthView;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $view = new View();
        $this->AuthView = new AuthViewHelper($view);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AuthView);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
