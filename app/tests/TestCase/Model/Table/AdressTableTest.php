<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AdressTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AdressTable Test Case
 */
class AdressTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AdressTable
     */
    public $Adress;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.adress',
        'app.users',
        'app.categories',
        'app.products',
        'app.stock',
        'app.stock_in',
        'app.stock_out',
        'app.categories_products'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Adress') ? [] : ['className' => AdressTable::class];
        $this->Adress = TableRegistry::get('Adress', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Adress);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
