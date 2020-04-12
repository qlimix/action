<?php declare(strict_types=1);

namespace Registry;

use PHPUnit\Framework\TestCase;
use Qlimix\Action\Registry\ConnectionInterface;
use Qlimix\Action\Registry\Connector;
use Qlimix\Action\Registry\HandlerConnectorInterface;

final class ConnectorTest extends TestCase
{
    public function testShouldConnect(): void
    {
        $connections = [
            $this->createMock(ConnectionInterface::class),
            $this->createMock(ConnectionInterface::class),
            $this->createMock(ConnectionInterface::class),
        ];

        $handler = $this->createMock(HandlerConnectorInterface::class);

        foreach ($connections as $connection) {
            $connection->expects($this->once())
                ->method('connect');
        }

        $connector = new Connector($connections);

        $connector->connect($handler);
    }
}
