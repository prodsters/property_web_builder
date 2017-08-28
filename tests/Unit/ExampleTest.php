<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }

    public function testArray() {

        $array = [1,2,3,4];

        for($i = 0; $i < count($array);) {
            echo "\n";
            for($j = 0; $j < 3; $j++) {
                if($i >= count($array)) { break; }
                echo $array[$i] . " ";
                $i++;
            }
            echo "\n";
        }

//        for($i = 0; $i < count($array); $i++) {
//            echo "\n<div>\n";
//            for($j = 0; $j < 3; $j++) {
//
//              $i++;
//            }
//        }
    }
}
