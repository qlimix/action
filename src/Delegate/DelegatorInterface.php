<?php declare(strict_types=1);

namespace Qlimix\Action\Delegate;

use Qlimix\Action\Delegate\Exception\DelegateException;
use Qlimix\Action\Exception\ActionException;

interface DelegatorInterface
{
    /**
     * @return mixed
     *
     * @throws ActionException
     * @throws DelegateException
     */
    public function handle(object $action);
}
