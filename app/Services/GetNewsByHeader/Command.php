<?php

namespace App\Services\GetNewsByHeader;

/**
 * DTO for GetNewsByHeader service
 */
class Command
{
    /**
     * News header
     *
     * @var string
     */
    protected $header;

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
}
