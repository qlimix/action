<?php declare(strict_types=1);

namespace Exception;

use Exception;
use PHPUnit\Framework\TestCase;
use Qlimix\Action\Exception\ForbiddenException;

final class ForbiddenExceptionTest extends TestCase
{
    public function testShouldConstruct(): void
    {
        new ForbiddenException(new Exception());
        $this->addToAssertionCount(1);
    }
}
