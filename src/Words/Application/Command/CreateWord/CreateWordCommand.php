<?php

namespace App\Words\Application\Command\CreateWord;

use App\Shared\Application\Command\CommandInterface;

class CreateWordCommand implements CommandInterface
{
    public function __construct(public readonly string $source, public readonly string $translate)
    {
    }
}