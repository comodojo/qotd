<?php namespace Comodojo\Qotd\Tests;

class QuotesTest extends \PHPUnit_Framework_TestCase {

    protected $qotd = null;

    protected function setUp() {
        
        $this->qotd = new \Comodojo\Qotd\Qotd();
    
    }

    public function testGetSingleQuote() {
        
        $result = $this->qotd->getQuote();
        
        $this->assertInternalType('string', $result);

    }

    public function testGetAllQuotes() {
        
        $result = $this->qotd->getQuotes();
        
        $this->assertInternalType('array', $result);

    }

    public function testGetAllQuotesAsStore() {
        
        $results = $this->qotd->getQuotesAsStore();
        
        $this->assertInternalType('array', $results);

        foreach ($results as $result) {
        	
        	$this->assertInternalType('array', $result);

        	$this->assertArrayHasKey("id", $result);

        	$this->assertArrayHasKey("quote", $result);

        }

    }

}
