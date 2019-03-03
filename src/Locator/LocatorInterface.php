<?php declare(strict_types=1);

namespace Qlimix\Action\Locator;

use Qlimix\Action\Locator\Dto\ExecutableHandler;
use Qlimix\Action\Locator\Exception\LocatorException;

interface HandlerLocatorInterface
{
    /**
     * @throws LocatorException
     */
    public function locate(string $messageId): ExecutableHandler;
}
