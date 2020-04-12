<?php declare(strict_types=1);

namespace Registry\Dto;

use PHPUnit\Framework\TestCase;
use Qlimix\Action\Registry\Dto\Handler;

final class HandlerTest extends TestCase
{
    public function testShouldHandler(): void
    {
        $handler = 'handle';
        $method = 'foo';

        $obj = new Handler($handler, $method);

        $this->assertSame($handler, $obj->getHandler());
        $this->assertSame($method, $obj->getMethod());
    }
}
