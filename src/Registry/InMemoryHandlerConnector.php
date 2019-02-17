<?php declare(strict_types=1);

namespace Qlimix\Action\Registry;

use Qlimix\Action\Registry\Dto\Handler;
use Qlimix\Action\Registry\Exception\HandlerProviderException;

final class InMemoryHandlerConnector implements HandlerConnectorInterface, HandlersProviderInterface
{
    /** @var Handler[] */
    private $handlers = [];

    /**
     * @inheritDoc
     */
    public function link(string $handler, string $actionName, string $method = 'handle'): void
    {
        $this->handlers[$actionName] = new Handler($handler, $method);
    }

    /**
     * @inheritDoc
     */
    public function find(string $actionName): Handler
    {
        if (!empty($this->handlers[$actionName])) {
            return $this->handlers[$actionName];
        }

        throw new HandlerProviderException('Could not match '.$actionName);
    }
}
