<?php declare(strict_types=1);

namespace Qlimix\Action\Registry;

final class ActionConnector
{
    /** @var ConnectionInterface[] */
    private $connections;

    /**
     * @param ConnectionInterface[] $connections
     */
    public function __construct(array $connections)
    {
        $this->connections = $connections;
    }

    public function connect(HandlerConnectorInterface $connector): void
    {
        foreach ($this->connections as $connection) {
            $connection->connect($connector);
        }
    }
}
