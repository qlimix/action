<?php declare(strict_types=1);

namespace Qlimix\Action\Locator;

use Qlimix\Action\Locator\Exception\LocatorException;

interface LocatorInterface
{
    /**
     * @throws LocatorException
     */
    public function locate(string $actionId): object;
}
