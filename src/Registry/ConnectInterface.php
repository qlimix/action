<?php declare(strict_types=1);

namespace Qlimix\Action\Registry;

interface ConnectInterface
{
    public function connect(HandlerConnectorInterface $connector): void;
}
