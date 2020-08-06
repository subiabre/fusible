<?php

namespace Fusible\Tests;

use Fusible\FusibleException;
use PHPUnit\Framework\TestCase;

class FusibleTest extends TestCase
{
    public function testThrowsException()
    {
        $data = new DataMock;
        $fusible = new DataFusible;

        $this->expectException(FusibleException::class);

        $fusible->assert($data);
    }
}
