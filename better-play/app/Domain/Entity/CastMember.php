<?php

namespace BetterPlay\Domain\Entity;


use BetterPlay\Domain\Enum\CastMemberType;

class CastMember
{

    public function __construct(
        protected string $id = '',
        protected string $name = '',
        protected CastMemberType $type = CastMemberType::ACTOR,

    ) {
    }
}
