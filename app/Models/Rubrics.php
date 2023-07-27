<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int                                               $id                     ID
 * @property int                                               $parent_id              ID of parent rubric of this rubric
 * @property string                                            $name                   Name of rubric
 * @property \Illuminate\Support\Carbon                        $created_at             date of create
 * @property \Illuminate\Support\Carbon                        $updated_at             date of update
 */

class Rubrics extends Model
{
    use HasFactory;

    protected $fillable = ['parent_id', 'name'];
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
    protected $table = 'rubrics';

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
