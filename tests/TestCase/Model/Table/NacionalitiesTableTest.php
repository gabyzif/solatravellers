<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NacionalitiesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NacionalitiesTable Test Case
 */
class NacionalitiesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\NacionalitiesTable
     */
    public $Nacionalities;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.nacionalities'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Nacionalities') ? [] : ['className' => NacionalitiesTable::class];
        $this->Nacionalities = TableRegistry::getTableLocator()->get('Nacionalities', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Nacionalities);

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
}
