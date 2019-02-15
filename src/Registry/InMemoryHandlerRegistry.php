<?php declare(strict_types=1);

namespace Qlimix\Action\Registry;

use Qlimix\Action\Registry\Dto\Handler;
use Qlimix\Action\Registry\Exception\HandlerProviderException;

final class InMemoryHandlerRegistry implements HandlerRegistryInterface, HandlersProviderInterface
{
    /** @var Handler[] */
    private $handlers = [];

    /**
     * @inheritDoc
     */
    public function register(string $handler, string $messageName, string $method = 'handle'): void
    {
        $this->handlers[$messageName] = new Handler($handler, $method);
    }

    /**
     * @inheritDoc
     */
    public function find(string $messageName): Handler
    {
        if (!empty($this->handlers[$messageName])) {
            return $this->handlers[$messageName];
        }

        throw new HandlerProviderException('Could not match '.$messageName);
    }
}
