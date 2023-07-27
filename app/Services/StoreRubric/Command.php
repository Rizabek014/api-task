<?php

namespace App\Services\StoreRubric;

/**
 * DTO for StoreRubric service
 */
class Command
{
    /**
     * rubric parent id
     *
     * @var int
     */
    protected $parent_id;

    /**
     * rubric name
     *
     * @var string
     */
    protected $name;

    /**
     * @return int
     */
    public function getParentId(): int
    {
        return $this->parent_id;
    }

    /**
     * @param int $parent_id
     */
    public function setParentId(int $parent_id): void
    {
        $this->parent_id = $parent_id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }
}
