<?php
namespace App\Test\TestCase\Controller\Component;

use App\Controller\Component\RouterValidatorComponent;
use Cake\Controller\ComponentRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\Component\RouterValidatorComponent Test Case
 */
class RouterValidatorComponentTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Controller\Component\RouterValidatorComponent
     */
    public $RouterValidator;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $registry = new ComponentRegistry();
        $this->RouterValidator = new RouterValidatorComponent($registry);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RouterValidator);

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
