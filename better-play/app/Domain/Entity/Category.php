<?php

namespace BetterPlay\Domain\Entity;

use Exception;

class Category
{


    public function __construct(
        protected string $id = '',
        protected string $name = '',
        protected string $description = '',
        protected bool $isActive = true,
    ) {

        $this->validate();
    }



    public function update(
        string $name = '',
        string $description = ''
    ) {
        $this->name = $name;
        $this->description = $description;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function getIsActive()
    {
        return $this->isActive;
    }

    public function validate()
    {
        if (empty($this->name)) throw new Exception('Entity invalid - name is empty');
    }
}
