<?php declare(strict_types=1);

namespace Qlimix\Action\Registry;

interface ProviderInterface
{
    public function provide(HandlerRegistryInterface $registry): void;
}
