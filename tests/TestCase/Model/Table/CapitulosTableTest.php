<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CapitulosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CapitulosTable Test Case
 */
class CapitulosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CapitulosTable
     */
    public $Capitulos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.capitulos',
        'app.novelas',
        'app.dias'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Capitulos') ? [] : ['className' => 'App\Model\Table\CapitulosTable'];
        $this->Capitulos = TableRegistry::get('Capitulos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Capitulos);

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
