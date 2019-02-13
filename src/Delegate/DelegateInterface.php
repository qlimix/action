<?php declare(strict_types=1);

namespace Qlimix\Action\Delegate;

use Qlimix\Action\Delegate\Exception\DelegateException;

interface DelegateInterface
{
    /**
     * @return mixed
     *
     * @throws DelegateException
     */
    public function handle(object $action);
}
