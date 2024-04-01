<?php

namespace BetterPlay\Domain\Entity;

class Video
{


    public function __construct(
        protected string $id = '',
        protected string $title = '',
        protected string $description = '',
        protected int $yearLaunched = 0,
        protected int $duration = 0,
        protected bool $opened = false,
        protected int  $rating = 0,
        protected bool $published = false,


    ) {
    }
}
