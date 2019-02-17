<?php declare(strict_types=1);

namespace Qlimix\Action\Registry;

interface ProviderRegistryInterface
{
    public function register(ProviderInterface $provider): void;
}
