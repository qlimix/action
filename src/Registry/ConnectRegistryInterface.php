<?php declare(strict_types=1);

namespace Qlimix\Action\Registry;

interface ConnectRegistryInterface
{
    public function register(ConnectInterface $provider): void;
}
