<?php

namespace App\Services\GetNewsByRubric;

/**
 * DTO for GetNewsByRubric service
 */
class Command
{
    /**
     * Rubric id
     *
     * @var int
     */
    protected $rubric_id;

    /**
     * @return int
     */
    public function getRubricId(): int
    {
        return $this->rubric_id;
    }

    /**
     * @param int $rubric_id
     */
    public function setRubricId(int $rubric_id): void
    {
        $this->rubric_id = $rubric_id;
    }
}
