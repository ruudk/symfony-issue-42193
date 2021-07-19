<?php

declare(strict_types=1);

namespace App\Service;

final class UserService
{
    public function __construct(private string $userServiceKey = 'default')
    {
    }
}
