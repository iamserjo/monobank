<?php

namespace Tests\Unit;

use App\Http\Controllers\PublicCheckController;
use Tests\TestCase;
use ReflectionClass;
use ReflectionMethod;

class NumberToWordsUkrainianTest extends TestCase
{
    private function callNumberToWordsUkrainian($number)
    {
        $controller = new PublicCheckController();
        $reflection = new ReflectionClass($controller);
        $method = $reflection->getMethod('numberToWordsUkrainian');
        $method->setAccessible(true);
        
        // Convert hryvnias to kopiyky (multiply by 100)
        return $method->invoke($controller, $number * 100);
    }

    public function test_number_9()
    {
        $result = $this->callNumberToWordsUkrainian(9);
        $expected = "дев'ять гривень 00 копійок";
        $this->assertEquals($expected, $result);
        echo "\n9: " . $result;
    }

    public function test_number_2()
    {
        $result = $this->callNumberToWordsUkrainian(2);
        $expected = "два гривні 00 копійок";
        $this->assertEquals($expected, $result);
        echo "\n2: " . $result;
    }

    public function test_number_21()
    {
        $result = $this->callNumberToWordsUkrainian(21);
        $expected = "двадцять один гривня 00 копійок";
        $this->assertEquals($expected, $result);
        echo "\n21: " . $result;
    }

    public function test_number_22()
    {
        $result = $this->callNumberToWordsUkrainian(22);
        $expected = "двадцять два гривні 00 копійок";
        $this->assertEquals($expected, $result);
        echo "\n22: " . $result;
    }

    public function test_number_25()
    {
        $result = $this->callNumberToWordsUkrainian(25);
        $expected = "двадцять п'ять гривень 00 копійок";
        $this->assertEquals($expected, $result);
        echo "\n25: " . $result;
    }

    public function test_number_232()
    {
        $result = $this->callNumberToWordsUkrainian(232);
        $expected = "двісті тридцять два гривні 00 копійок";
        $this->assertEquals($expected, $result);
        echo "\n232: " . $result;
    }

    public function test_number_251()
    {
        $result = $this->callNumberToWordsUkrainian(251);
        $expected = "двісті п'ятдесят один гривня 00 копійок";
        $this->assertEquals($expected, $result);
        echo "\n251: " . $result;
    }

    public function test_number_444()
    {
        $result = $this->callNumberToWordsUkrainian(444);
        $expected = "чотириста сорок чотири гривні 00 копійок";
        $this->assertEquals($expected, $result);
        echo "\n444: " . $result;
    }

    public function test_number_666()
    {
        $result = $this->callNumberToWordsUkrainian(666);
        $expected = "шістсот шістдесят шість гривень 00 копійок";
        $this->assertEquals($expected, $result);
        echo "\n666: " . $result;
    }

    public function test_number_990()
    {
        $result = $this->callNumberToWordsUkrainian(990);
        $expected = "дев'ятсот дев'яносто гривень 00 копійок";
        $this->assertEquals($expected, $result);
        echo "\n990: " . $result;
    }

    public function test_number_1000()
    {
        $result = $this->callNumberToWordsUkrainian(1000);
        $expected = "одна тисяча гривень 00 копійок";
        $this->assertEquals($expected, $result);
        echo "\n1000: " . $result;
    }

    public function test_number_2001()
    {
        $result = $this->callNumberToWordsUkrainian(2001);
        $expected = "дві тисячі один гривня 00 копійок";
        $this->assertEquals($expected, $result);
        echo "\n2001: " . $result;
    }

    public function test_number_2010()
    {
        $result = $this->callNumberToWordsUkrainian(2010);
        $expected = "дві тисячі десять гривень 00 копійок";
        $this->assertEquals($expected, $result);
        echo "\n2010: " . $result;
    }

    public function test_number_4019()
    {
        $result = $this->callNumberToWordsUkrainian(4019);
        $expected = "чотири тисячі дев'ятнадцять гривень 00 копійок";
        $this->assertEquals($expected, $result);
        echo "\n4019: " . $result;
    }

    public function test_number_5013()
    {
        $result = $this->callNumberToWordsUkrainian(5013);
        $expected = "п'ять тисяч тринадцять гривень 00 копійок";
        $this->assertEquals($expected, $result);
        echo "\n5013: " . $result;
    }

    public function test_number_1495()
    {
        $result = $this->callNumberToWordsUkrainian(1495);
        $expected = "одна тисяча чотириста дев'яносто п'ять гривень 00 копійок";
        $this->assertEquals($expected, $result);
        echo "\n1495: " . $result;
    }

    public function test_number_22554()
    {
        $result = $this->callNumberToWordsUkrainian(22554);
        $expected = "двадцять дві тисячі п'ятсот п'ятдесят чотири гривні 00 копійок";
        $this->assertEquals($expected, $result);
        echo "\n22554: " . $result;
    }

    public function test_number_1300()
    {
        // Special test case from the user's example
        $result = $this->callNumberToWordsUkrainian(1300);
        $expected = "одна тисяча триста гривень 00 копійок";
        $this->assertEquals($expected, $result);
        echo "\n1300: " . $result;
    }
}

