<?php
    use WEBDB\Sum;

  //\PHPUnit\Framework\TestCase
    class SumTest extends \PHPUnit\Framework\TestCase
    {
        /** @test **/
	public function ふたつの値を足し算できること()
        {
            $this->assertSame(4, Sum::sum(1, 2));
        }
    }
