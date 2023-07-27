<?php

namespace App\Services\StoreNews;

/**
 * DTO for StoreNews service
 */
class Command
{
    /**
     * news header
     *
     * @var string
     */
    protected $header;

    /**
     * announcement of news
     *
     * @var string
     */
    protected $announcement;

    /**
     * text of news
     *
     * @var string
     */
    protected $text;

    /**
     * news author id
     *
     * @var int
     */
    protected $author_id;

    /**
     * news rubric id
     *
     * @var int
     */
    protected $rubric_id;

    /**
     * @return string
     */
    public function getHeader(): string
    {
        return $this->header;
    }

    /**
     * @param string $header
     */
    public function setHeader(string $header): void
    {
        $this->header = $header;
    }

    /**
     * @return string
     */
    public function getAnnouncement(): string
    {
        return $this->announcement;
    }

    /**
     * @param string $announcement
     */
    public function setAnnouncement(string $announcement): void
    {
        $this->announcement = $announcement;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setText(string $text): void
    {
        $this->text = $text;
    }

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
