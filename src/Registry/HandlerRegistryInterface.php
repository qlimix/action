<?php declare(strict_types=1);

namespace Qlimix\Action\Registry;

interface HandlerRegistryInterface
{
    public function register(string $handler, string $messageName, string $method = 'handle'): void;
}
