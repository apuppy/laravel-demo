<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }

    public function test_demo(){
        // $this->assertEquals(1,1,'right or true');
        $this->assertDirectoryExists('/home/archer','directory not exists');
    }
}
