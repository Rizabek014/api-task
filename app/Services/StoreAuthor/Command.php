<?php

namespace App\Services\StoreAuthor;

/**
 * DTO for StoreAuthor service
 */
class Command
{
    /**
     * author name
     *
     * @var string
     */
    protected $name;

    /**
     * author email
     *
     * @var string
     */
    protected $email;

    /**
     * author image
     *
     * @var string
     */
    protected $image;

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
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage(string $image): void
    {
        $this->image = $image;
    }
}
