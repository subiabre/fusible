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

    public function testPassesValidation()
    {
        $data = new DataMock;
        $fusible = new DataFusible;

        $data
            ->set('name', 'non empty string')
            ->set('password', 'non empty string')
            ;

        $result = $fusible->assert($data);

        $this->assertNull($result);
    }
}
