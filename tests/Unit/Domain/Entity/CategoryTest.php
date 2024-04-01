<?php

namespace Tests\BetterPlay\Unit\Domain\Entity;

use BetterPlay\Domain\Entity\Category;
use Tests\TestCase;

class CategoryTest extends TestCase
{

    public function test_Attributes()
    {
        $uuid = "3c7df297-b1f8-4eef-8ce1-2fb2a6614888";
        $name = "Category";
        $description = "Description category";
        $category = new Category(
            id: $uuid,
            name: $name,
            description: $description,
            isActive: true,
        );


        $this->assertEquals($uuid, $category->getId());
        $this->assertEquals($name, $category->getName());
        $this->assertEquals($description, $category->getDescription());
        $this->assertEquals(true, $category->getIsActive());

        $category->validate();
    }

    public function test_CreateCategoryWithoutId()
    {
        $name = "Category";
        $description = "Description category";
        $category = new Category(
            name: $name,
            description: $description,
            isActive: true
        );

        $this->assertEquals($name, $category->getName());
        $this->assertEquals($description, $category->getDescription());
        $this->assertEquals(true, $category->getIsActive());
    }



    public function test_update_name_and_description()
    {
        $uuid = "3c7df297-b1f8-4eef-8ce1-2fb2a6614888";
        $name = "Category";
        $description = "Description category";
        $createAt = "2023-03-16 12:12:12";
        $category = new Category(
            id: $uuid,
            name: $name,
            description: $description,
            isActive: true,

        );

        $category->update(name: 'New category', description: 'new description');

        $this->assertEquals($uuid, $category->getId());
        $this->assertEquals("New category", $category->getName());
        $this->assertEquals("new description", $category->getDescription());
    }

    public function test_update_only_name()
    {
        $uuid = "3c7df297-b1f8-4eef-8ce1-2fb2a6614888";
        $name = "Category";
        $description = "Description category";
        $createAt = "2023-03-16 12:12:12";
        $category = new Category(
            id: $uuid,
            name: $name,
            description: $description,
            isActive: true,

        );

        $category->update(name: 'New category');

        $this->assertEquals($uuid, $category->getId());
        $this->assertEquals("New category", $category->getName());
    }

    public function test_update_only_description()
    {
        $uuid = "3c7df297-b1f8-4eef-8ce1-2fb2a6614888";
        $name = "Category";
        $description = "Description category";
        $createAt = "2023-03-16 12:12:12";
        $category = new Category(
            id: $uuid,
            name: $name,
            description: $description,
            isActive: true,

        );

        $category->update(description: 'new description');

        $this->assertEquals($uuid, $category->getId());
        $this->assertEquals("new description", $category->getDescription());
    }
}
