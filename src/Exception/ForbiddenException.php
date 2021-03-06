<?php declare(strict_types=1);

namespace Qlimix\Action\Exception;

use Throwable;

final class ForbiddenException extends ActionException
{
    public function __construct(Throwable $exception)
    {
        parent::__construct('', 0, $exception);
    }
}
