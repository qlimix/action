<?php declare(strict_types=1);

namespace Exception;

use Exception;
use PHPUnit\Framework\TestCase;
use Qlimix\Action\Exception\ServerErrorException;

final class ServerErrorExceptionTest extends TestCase
{
    public function testShouldConstruct(): void
    {
        new ServerErrorException(new Exception());
        $this->addToAssertionCount(1);
    }
}
