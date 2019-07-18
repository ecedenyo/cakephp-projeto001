<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ArticlesCatsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ArticlesCatsTable Test Case
 */
class ArticlesCatsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ArticlesCatsTable
     */
    public $ArticlesCats;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ArticlesCats',
        'app.Articles'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ArticlesCats') ? [] : ['className' => ArticlesCatsTable::class];
        $this->ArticlesCats = TableRegistry::getTableLocator()->get('ArticlesCats', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ArticlesCats);

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
