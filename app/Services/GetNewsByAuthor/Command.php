<?php

namespace App\Services\GetNewsByAuthor;

/**
 * DTO for GetNewsByAuthors service
 */
class Command
{
    /**
     * Author id
     *
     * @var int
     */
    protected $author_id;

    /**
     * @return int
     */
    public function getAuthorId(): int
    {
        return $this->author_id;
    }

    /**
     * @param int $author_id
     */
    public function setAuthorId(int $author_id): void
    {
        $this->author_id = $author_id;
    }
}
