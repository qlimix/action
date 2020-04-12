<?php declare(strict_types=1);

namespace Qlimix\Action\Registry;

interface HandlerConnectorInterface
{
    public function link(string $handler, string $actionName, string $method = 'resolve'): void;
}
