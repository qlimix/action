<?php declare(strict_types=1);

namespace Registry;

use PHPUnit\Framework\TestCase;
use Qlimix\Action\Registry\Exception\NotFoundException;
use Qlimix\Action\Registry\InMemoryHandlerConnector;

final class InMemoryHandlerConnectorTest extends TestCase
{
    private InMemoryHandlerConnector $handler;

    protected function setUp(): void
    {
        $this->handler = new InMemoryHandlerConnector();
    }

    public function testShouldLinkAndFind(): void
    {
        $handler = 'foo';
        $action = 'bar';
        $method = 'handle';

        $this->handler->link($handler, $action, $method);

        $handlerDto = $this->handler->find($action);

        $this->assertSame($handler, $handlerDto->getHandler());
        $this->assertSame($method, $handlerDto->getMethod());
    }

    public function testShouldLink(): void
    {
        $this->expectException(NotFoundException::class);
        $this->handler->find('doesNotExist');
    }
}
