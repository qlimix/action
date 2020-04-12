<?php declare(strict_types=1);

namespace Qlimix\Action\Registry;

use Qlimix\Action\Registry\Dto\Handler;
use Qlimix\Action\Registry\Exception\NotFoundException;

interface HandlerProviderInterface
{
    /**
     * @throws NotFoundException
     */
    public function find(string $actionName): Handler;
}
