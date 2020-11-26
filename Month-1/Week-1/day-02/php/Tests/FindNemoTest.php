<?php
namespace Tests;

require_once('App/FindNemo.php');
use PHPUnit\Framework\TestCase;

class FindNemoTest extends TestCase
{
    public function test_find_nemo_without()
    {
        $text = "Mussum Ipsum, cacilds vidis litro abertis. Delegadis gente finis, bibendum egestas augue arcu ut est. Praesent malesuada urna nisi, quis volutpat erat hendrerit non. Nam vulputate dapibus. Atirei o pau no gatis, per gatis num morreus. A ordem dos tratores não altera o pão duris.";
        self::assertEquals( "I can't find Nemo :(", FindNemo($text));
    }
}

   