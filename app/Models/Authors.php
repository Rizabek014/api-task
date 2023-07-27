<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int                                               $id                     ID
 * @property string                                            $name                   Name of author
 * @property string                                            $email                  Email of author
 * @property string                                            $img                    Link of image of product
 * @property \Illuminate\Support\Carbon               $created_at             date of create
 * @property \Illuminate\Support\Carbon               $updated_at             date of update
 */

class Authors extends Model
{
    use HasFactory;

    protected $fillable = ['Name', 'email', 'img'];

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
    protected $table = 'authors';

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

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getImg(): string
    {
        return $this->img;
    }

    /**
     * @param string $img
     */
    public function setImg(string $img): void
    {
        $this->img = $img;
    }


}
