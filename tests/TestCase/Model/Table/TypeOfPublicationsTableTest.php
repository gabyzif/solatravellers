<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TypeOfPublicationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TypeOfPublicationsTable Test Case
 */
class TypeOfPublicationsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TypeOfPublicationsTable
     */
    public $TypeOfPublications;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.type_of_publications',
        'app.publications'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('TypeOfPublications') ? [] : ['className' => TypeOfPublicationsTable::class];
        $this->TypeOfPublications = TableRegistry::getTableLocator()->get('TypeOfPublications', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TypeOfPublications);

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
