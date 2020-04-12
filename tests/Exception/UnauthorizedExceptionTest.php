<?php declare(strict_types=1);

namespace Exception;

use Exception;
use PHPUnit\Framework\TestCase;
use Qlimix\Action\Exception\UnauthorizedException;

final class UnauthorizedExceptionTest extends TestCase
{
    public function testShouldConstruct(): void
    {
        new UnauthorizedException(new Exception());
        $this->addToAssertionCount(1);
    }
}
