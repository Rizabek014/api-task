<?php

namespace App\Services\GetNewsByAuthor;

use App\Models\Repository\News;

class GetNewsByAuthorService
{
    public function execute($command)
    {
        $repository = new News();
        $result = $repository->getAllNewsByAuthor($command->getAuthorId());

        return $result;
    }
}
