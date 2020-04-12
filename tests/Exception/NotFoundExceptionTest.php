<?php declare(strict_types=1);

namespace Exception;

use Exception;
use PHPUnit\Framework\TestCase;
use Qlimix\Action\Exception\NotFoundException;

final class NotFoundExceptionTest extends TestCase
{
    public function testShouldConstruct(): void
    {
        new NotFoundException(new Exception());
        $this->addToAssertionCount(1);
    }
}
