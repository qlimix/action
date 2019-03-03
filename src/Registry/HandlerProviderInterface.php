<?php declare(strict_types=1);

namespace Qlimix\Action\Registry;

use Qlimix\Action\Registry\Dto\Handler;
use Qlimix\Action\Registry\Exception\HandlerProviderException;

interface HandlersProviderInterface
{
    /**
     * @throws HandlerProviderException
     */
    public function find(string $actionName): Handler;
}
