<?php

namespace EbanyiKostylTrait\Traits;

use PHPUnit\Framework\TestCase;

class EbanyiKostylTraitTest extends TestCase
{
    public function testInsertKostyl()
    {
        $expression1 = 2 + 2;
        $expression2 = 4;
        $result = $expression1 === $expression2;

        self::assertTrue($result);
    }
}
