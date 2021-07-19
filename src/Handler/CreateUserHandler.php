<?php

declare(strict_types=1);

namespace App\Handler;

final class CreateUserHandler
{
    public function __construct(private string $createUserHandlerKey = 'default')
    {
    }
}
