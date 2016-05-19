<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NovelasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NovelasTable Test Case
 */
class NovelasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\NovelasTable
     */
    public $Novelas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.novelas',
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
        $config = TableRegistry::exists('Novelas') ? [] : ['className' => 'App\Model\Table\NovelasTable'];
        $this->Novelas = TableRegistry::get('Novelas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Novelas);

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
