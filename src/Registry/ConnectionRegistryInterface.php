<?php declare(strict_types=1);

namespace Qlimix\Action\Registry;

interface ConnectionRegistryInterface
{
    public function register(ConnectionInterface $provider): void;
}
