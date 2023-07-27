<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int                                               $id                     ID
 * @property string                                            $header                 Header of news
 * @property string                                            $announcement           Announcement of news
 * @property string                                            $text                   Text or description of news
 * @property int                                               $author_id              ID of author who created this news
 * @property int                                               $rubric_id              ID of rubric to which this news belongs
 * @property \Illuminate\Support\Carbon                        $created_at             date of create
 * @property \Illuminate\Support\Carbon                        $updated_at             date of update
 */
class News extends Model
{
    use HasFactory;

    protected $fillable = ['header', 'announcement', 'text', 'author_id', 'rubric_id'];
    /**
     * Колонки даты
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * {@inheritDoc}
     */
    protected $table = 'news';

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

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
