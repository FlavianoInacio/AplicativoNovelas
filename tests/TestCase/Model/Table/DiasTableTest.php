<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DiasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DiasTable Test Case
 */
class DiasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DiasTable
     */
    public $Dias;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dias',
        'app.capitulos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Dias') ? [] : ['className' => 'App\Model\Table\DiasTable'];
        $this->Dias = TableRegistry::get('Dias', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Dias);

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
