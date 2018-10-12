<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TgroupsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TgroupsTable Test Case
 */
class TgroupsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TgroupsTable
     */
    public $Tgroups;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tgroups'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Tgroups') ? [] : ['className' => TgroupsTable::class];
        $this->Tgroups = TableRegistry::getTableLocator()->get('Tgroups', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Tgroups);

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
