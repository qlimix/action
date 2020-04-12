<?php declare(strict_types=1);

namespace Qlimix\Action\Registry;

use Qlimix\Action\Registry\Dto\Handler;
use Qlimix\Action\Registry\Exception\NotFoundException;

final class InMemoryHandlerConnector implements HandlerConnectorInterface, HandlerProviderInterface
{
    /** @var Handler[] */
    private array $handlers = [];

    /**
     * @inheritDoc
     */
    public function link(string $handler, string $actionName, string $method = 'resolve'): void
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

        throw new NotFoundException('Could not match '.$actionName);
    }
}
