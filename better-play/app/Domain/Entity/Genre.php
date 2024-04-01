<?php

namespace BetterPlay\Domain\Entity;

use BetterPlay\Domain\Entity\Traits\EntityTraits;
use BetterPlay\Domain\ValueObject\Uuid;
use DateTime;
use Exception;

class Genre
{

    public function __construct(
        protected string $id = '',
        protected string $name = '',
        protected string $description = '',
        protected bool $isActive = true,

    ) {
    }
}
